<?php
include('includes/security.php');
include('includes/dbconfig.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Package Manager
        <br></br>
        <button type="button" class="btn btn-danger btn-icon-split float-left" data-toggle="modal" data-target="#exampleModal">
          <i class="fas fa-trash"></i> Delete All 
        </button>
        <form action="code.php" method="POST">
          <!-- <button type="submit" name = "multiple_delete" class="btn btn-danger float-left" data-toggle="modal" data-target="#addadminprofile">
          Delete All
        </button> -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header text-danger">
                  <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body text-danger">
                  Do you really want to delete these records? This process cannot be undone.
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" name="multiple_delete" class="btn btn-danger float-left" data-toggle="modal"
                    data-target="#addadminprofile">
                    Delete
                  </button>
                </div>
              </div>
            </div>
          </div>
        </form>
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
    $query = "SELECT * FROM tourpackage";
    $query_run = mysqli_query($connection,$query);

    ?>

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>ID</th>
              <th>Package Name</th>
              <th>Type</th>
              <th>Price</th>
              <th>Location</th>
              <th>EDIT</th>
              <th>DELETE </th>
            </tr>
          </thead>
          <tbody>
            <?php
        if (mysqli_num_rows ($query_run) > 0) {
          while ($row = mysqli_fetch_assoc($query_run)) {
            ?>
            <tr>
              <td>
                <input type="checkbox" onclick="toggleCheckbox(this)" value="<?php echo $row ['packageid'];?>"
                  <?php echo $row['visible'] == 1 ? "checked" : "" ?>>
              </td>
              <td><?php echo $row ['packageid'];?></td>
              <td><?php echo $row ['packagename'];?></td>
              <td><?php echo $row ['packagetype'];?></td>
              <td><?php echo $row ['packageprice'];?></td>
              <td><?php echo $row ['packagelocaton'];?></td>
              <td>
                <form action="tourmanage_edit.php" method="post">
                  <input type="hidden" name="edit_packageid" value="<?php echo $row ['packageid'];?>">
                  <button type="submit" name="editpackage_btn" class="btn btn-success"> EDIT</button>
                </form>
              </td>
              <td>
                <form action="code.php" method="post">
                  <input type="hidden" name="delete_packageid" value="<?php echo $row ['packageid'];?>">
                  <button type="submit" name="deletepackage_btn" class="btn btn-danger"
                    onClick="return confirm('Are You Sure You Want To Delete This Package');"> DELETE</button>
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

<script>
  //////////////////////for delete Multiple record///////////////
  function toggleCheckbox(box) {
    var id = $(box).attr("value");
    if ($(box).prop("checked") == true) {
      var visible = 1;
    } else {
      var visible = 0;
    }
    var data = {
      "Search_data": 1,
      "packageid": id,
      "visible": visible
    };
    $.ajax({
      type: "post",
      url: "code.php",
      data: data,
      success: function (response) {
        // alert("Your Data Checked");
      }
    });
  }
</script>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>