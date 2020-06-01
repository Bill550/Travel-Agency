<?php
include('includes/security.php');
include('includes/dbconfig.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Update Pages </h6>
        </div>
    </div>
</div>
<div class="card-body">
    <?php
    //////////////////For Editing Data ////////////////////////////
        if (isset($_POST['pageedit_btn'])) {
            $id = $_POST['edit_id'];
            $query = "SELECT * From pagemange where pageid = '$id' ";
            $query_run = mysqli_query($connection,$query);
            foreach ($query_run as $row ) {
                ?>
    <form action="code.php" method="POST">
        <input type="hidden" name="edit_id" value="<?php echo $row['pageid']?>">
                <div class="form-group">
                        <label>Selected Page</label>
                        <input type="text" name="pagetype" readonly="readonly" class="form-control" value="<?php echo $row['pagetype']?>">
                </div>
                <div class="container mt-6 mb-5">
                        <label>Description</label>
                        <textarea name="pagedescription" class="form-control"
                            rows="4"><?php echo $row['pagedescription'] ?></textarea>
                    </div>
        <a href="pagemanage.php" class="btn btn-danger">Cancel</a>
        <button type="submit" name="pageupdatebtn" class="btn btn-primary">Update</button>
    </form>
    <?php
        }
    }

    ?>

</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>