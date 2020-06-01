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
        if (isset($_POST['editpackage_btn'])) {
            $id = $_POST['edit_packageid'];
            $query = "SELECT * From tourpackage where packageid = '$id' ";
            $query_run = mysqli_query($connection,$query);
            foreach ($query_run as $row ) {
                ?>
    <form action="code.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="edit_packageid" value="<?php echo $row['packageid']?>">
            <div class="form-group">
            <label >Package Name</label>
            <input type="text" class="form-control" name="UPPackageName" value="<?php echo $row['packagename']?>">
        </div>
        <div class="form-group">
            <label > Package Type </label>
            <select class="form-control" name="UPPackageType" >
                <option selected="selected" ><?php echo $row['packagetype']?></option>
                <option>Inclusive Tour</option>
                <option>Adventure Tour</option>
                <option>Hiking Tour</option>
                <option>Only Boys Tour</option>
                <option>Only Girls Tour</option>
            </select>
        </div>
        <div class="form-group">
            <label > Package Location </label>
            <input type="text" class="form-control"  name="UPPackageLocation" value="<?php echo $row['packagelocaton']?>">
        </div>
        <div class="form-group">
            <label > Package Price in PK </label>
            <input type="text" class="form-control"  name="UPPackagePrice" value="<?php echo $row['packageprice']?>">
        </div>
        <div class="form-group">
            <label > Package Features </label>
            <input type="text" class="form-control"  name="UPPackageFeatures" value="<?php echo $row['packagefeature']?>">
        </div>
        <div class="form-group">
            <label > Package Details </label>
            <textarea class="form-control" rows="5" name="UPPackageDetails" ><?php echo $row['packagedetails']?></textarea>
        </div>
        <div class="form-group text-center ">
            <div class="row">
                <div class="col-4 offset-nd-4 form-div">   
                    <?php echo'<img  name="UPpackageimage" src="Upload/'.$row['packageimage'].'" width="200px;" height = "200px;" onclick="TriggerClick()" alt="Select Image" class="img-fluid" id="imageplaceholder" >'?>
                    <label >Package Image Preview</label>
                    <!-- <input type="file" name="UPpackageimage" accept="image/*" onchange="displayImage(this)" id="packageimage" value="<?php echo $row['packageimage']?>"  class="form-control-file" > -->
                </div>
            </div>
        </div>
                    <!--Upload Button-->
            <div class="input-group mb-3">
                <div class="custom-file ">
                    <input type="file" name="UPpackageimage" onchange="displayImage(this)" accept="image/*"
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
    
        <a href="tourmanage.php" class="btn btn-danger">Cancel</a>
        <button type="submit" name="updatepackagebtn" class="btn btn-primary">Update</button>
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