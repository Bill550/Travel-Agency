<?php
include('includes/security.php');
include('includes/dbconfig.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST" name="registration">

        <div class="modal-body">

          <div class="form-group">
            <label> Username </label>
            <input type="text" name="username" id="username" class="form-control"  placeholder="Enter Username">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
          </div>
          <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="confirmpassword" id="confirmpassword" class="form-control" placeholder="Confirm Password">
          </div>
          <input type="hidden" name="usertype" value="Admin">
        </div>
        <div class="modal-footer">
          <button type="reset"  class="btn btn-dark" >Reset</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
          <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Admin Profile 
      
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
          Add Admin Profile
        </button>
      </h6>
    </div>

    <div class="card-body">
      <?php
  if (isset($_SESSION['success'])&& $_SESSION['success'] !='') {
    echo '<h2 >'.$_SESSION['success'].'</h2>';
    unset ($_SESSION['success']);
  }
    if (isset($_SESSION['status'])&& $_SESSION['status'] !='') {
    echo '<h2 >'.$_SESSION['status'].'</h2>';
    unset ($_SESSION['status']);
  }
  ?>

      <div class="table-responsive">

        <?php
    $query = "SELECT * FROM userinfo where usertype = 'Admin' ";
    $query_run = mysqli_query($connection,$query);

    ?>

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID </th>
              <th>Username </th>
              <th>Email </th>
              <th>Password</th>
              <th>User Type</th>
              <th>EDIT </th>
              <th>DELETE </th>
            </tr>
          </thead>
          <tbody>
            <?php
        if (mysqli_num_rows ($query_run) > 0) {
          while ($row = mysqli_fetch_assoc($query_run)) {
            ?>
            <tr>
              <td><?php echo $row ['id'];?></td>
              <td><?php echo $row ['username'];?></td>
              <td><?php echo $row ['email'];?></td>
              <td><?php echo $row ['password'];?></td>
              <td><?php echo $row ['usertype'];?></td>
              <td>
                <form action="register_edit.php" method="post">
                  <input type="hidden" name="edit_id" value="<?php echo $row ['id'];?>">
                  <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                </form>
              </td>
              <td>
                <form action="code.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row ['id'];?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger"
                    onClick="return confirm('Are You Sure You Want To Delete This Registration');"> DELETE</button>
                </form>
              </td>
            </tr>

            <?php
          }
          
        }
        else {
          echo "No Record Found!"; 
        }
        ?>


          </tbody>
        </table>

      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
<script>
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='registration']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      username: "required",
      password: "required",
      confirmpassword: "required",
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      password: {
        required: true,
        minlength: 5
      },
      confirmpassword: {
        required: true,
        equalTo:"#password"
      }
    },
    // Specify validation error messages
    messages: {
      username: "Please enter your Full Name",
      email: "Please enter a valid email address",
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      confirmpassword: {
        required: "Please provide a Confirm password",
        equalTo: "Enter Confirm Password Same as Password"
      }
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});
// $('#addadminprofile').on('hidden.bs.modal', function (e) {
//   $(this)
//     .find("input,textarea,select")
//        .val('')
//        .end()
//     .find("input[type=checkbox], input[type=radio]")
//        .prop("checked", "")
//        .end();
// });
$('#modal').on('hide.bs.modal', function () {
    $(this).find('form').trigger('reset');
});
</script>
<style>
.error {
    color: red;
    font-size: 1rem;
    line-height: 1;
}
</style>