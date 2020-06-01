<?php
include('includes/security.php');
include('includes/dbconfig.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Package </h6>
        </div>
    </div>
</div>
<div class="card-body">
    <?php
    //////////////////For Editing Data ////////////////////////////
        if (isset($_POST['editteam_btn'])) {
            $id = $_POST['edit_teamid'];
            $query = "SELECT * From team where teamid = '$id' ";
            $query_run = mysqli_query($connection,$query);
            foreach ($query_run as $row ) {
                ?>
    <form action="code.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="edit_teamid" value="<?php echo $row['teamid']?>">
            <div class="form-group">
            <label >Full Name</label>
            <input type="text" class="form-control" placeholder="Enter Your Full Name" name="teamname" value="<?php echo $row['teamname']?>">
        </div>
        <div class="form-group">
            <label >Enter Your Instagram/Facebook URL</label>
            <input type="url" class="form-control" name="instalink" value="<?php echo $row['instalink']?>"placeholder="Like: https://www.instagram.com/username/">
        </div>
        <div class="form-group">
            <label > Team Rank </label>
            <select class="form-control" name="teamposition" >
                <option selected="selected" ><?php echo $row['teamposition']?></option>
                <option>Photographer</option>
                <option>Executive</option>
            </select>
        </div>
        <div class="form-group text-center ">
            <div class="row">
                <div class="col-4 offset-nd-4 form-div">   
                    <?php echo'<img  name="teamimage" src="../img/team/'.$row['teamimage'].'" width="200px;" height = "200px;" onclick="TriggerClick()" alt="Select Image" class="img-fluid" id="imageplaceholder" >'?>
                    <label >Package Image Preview</label>
                    <!-- <input type="file" name="teamimage" accept="image/*" onchange="displayImage(this)" id="packageimage" value="<?php echo $row['packageimage']?>"  class="form-control-file" > -->
                </div>
            </div>
        </div>
                    <!--Upload Button-->
            <div class="input-group mb-3">
                <div class="custom-file ">
                    <input type="file" name="teamimage" onchange="displayImage(this)" accept="image/*"
                        class="custom-file-input" id="inputGroupFile02" />
                    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                </div>
            </div>
            <script>
                $('#inputGroupFile02').on('change', function () {
                    //get the file name
                    var fileName = $(this).val();
                    //replace the "Choose a file" label
                    $(this).next('.custom-file-label').html(fileName);
                })
            </script>
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    
        <a href="team.php" class="btn btn-danger">Cancel</a>
        <button type="submit" name="teamupdate" class="btn btn-primary">Update</button>
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