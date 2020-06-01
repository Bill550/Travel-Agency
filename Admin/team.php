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
            <h6 class="m-0 font-weight-bold text-primary">TEAM Manager</h6>
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
    $query = "SELECT * FROM team";
    $query_run = mysqli_query($connection,$query);

    ?>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Image</th>
                            <th>EDIT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
        if (mysqli_num_rows ($query_run) > 0) {
          while ($row = mysqli_fetch_assoc($query_run)) {
            ?>
                        <tr>
                            <td><?php echo $row ['teamname'];?></td>
                            <td><?php echo $row ['teamposition'];?></td>
                            <!-- <td><?php echo $row ['teamimage'];?></td> -->

                            <td><?php echo'<img  name="teamimage" src="../img/team/'.$row['teamimage'].'" width="50px;" height = "50px;
                            " onclick="TriggerClick()" alt="Select Image" class="img-fluid" id="imageplaceholder" >'?>
                            </td>
                            <td>
                                <form action="teamedit.php" method="post">
                                    <input type="hidden" name="edit_teamid" value="<?php echo $row ['teamid'];?>">
                                    <button type="submit" name="editteam_btn" class="btn btn-success"> EDIT</button>
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

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>