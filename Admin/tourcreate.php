<?php
include('includes/security.php');
include('includes/dbconfig.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> Create Packages </h6>
        </div>
    </div>
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

    <div class="container-fluid">
        <form action="code.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Package Name</label>
                <input type="text" name="PackageName" class="form-control" placeholder="Package Name">
            </div>
            <div class="form-group">
                <label> Package Type </label>
                <select class="form-control custom-select" name="PackageType">
                    <option selected>Choose...</option>
                    <option>Inclusive Tour</option>
                    <option>Adventure Tour</option>
                    <option>Hiking Tour</option>
                    <option>Only Boys Tour</option>
                    <option>Only Girls Tour</option>
                </select>
            </div>
            <div class="form-group">
                <label> Package Location </label>
                <input type="text" name="PackageLocation" class="form-control" placeholder="Package Location">
            </div>
            <div class="form-group">
                <label> Package Price in PK </label>
                <input type="text" name="PackagePrice" class="form-control" placeholder="Package Price in PK">
            </div>
            <div class="form-group">
                <label> Package Features </label>
                <input type="text" name="PackageFeatures" class="form-control" placeholder="Package Features">
            </div>
            <div class="form-group">
                <label> Package Details </label>
                <textarea class="form-control" name="PackageDetails" rows="5" placeholder="Package Details"></textarea>
            </div>
            <div class="form-group text-center ">
                <div class="row">
                    <div class="col-4 offset-nd-4 form-div">
                        <img src="image/image-placeholder.png" width="200px;" height = "200px;" onclick="TriggerClick()" alt="Select Image"
                            class="img-fluid" id="imageplaceholder">
                        <label>Package Image Preview</label>
                        <!-- <input type="file" name="packageimage" accept="image/*" onchange="displayImage(this)"
                            id="packageimage" class="form-control-file"> --> 
                            
                    </div>
                </div>
            </div>
            <!--Upload Button-->
            <div class="input-group mb-3">
                <div class="custom-file ">
                    <input type="file" name="packageimage" onchange="displayImage(this)" accept="image/*"
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
            <button type="submit" name="tourcreate" class="btn btn-primary">Create</button>
            <button type="reset"  class="btn btn-dark">Reset</button>

        </form>
    </div>


    <?php
include('includes/scripts.php');
include('includes/footer.php');
?>