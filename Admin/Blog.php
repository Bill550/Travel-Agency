<?php
include('includes/security.php');
include('includes/dbconfig.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> Create Blog </h6>
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
                <label>Blog Title</label>
                <input type="text" name="blogtitle" class="form-control" placeholder="Blog Title...">
            </div>
            <div class="form-group">
                <label>Short Description</label>
                <input type="text" name="short_description" class="form-control" size="250" placeholder="Short Description(Less than 250 Words)...">
            </div>
            <div class="form-group">
                <label> Blog Details </label>
                <textarea class="form-control" name="blogdescription" rows="6" placeholder="Blog Details"></textarea>
            </div>
            <div class="form-group text-center ">
                <div class="row">
                    <div class="col-4 offset-nd-4 form-div">
                        <img src="image/image-placeholder.png" width="200px;" height = "200px;" onclick="TriggerClick()" alt="Select Image"
                            class="img-fluid" id="imageplaceholder">
                        <label>Package Image Preview</label>    
                    </div>
                </div>
            </div>
            <!--Upload Button-->
            <div class="input-group mb-3">
                <div class="custom-file ">
                    <input type="file" name="blogimage" onchange="displayImage(this)" accept="image/*"
                        class="custom-file-input" id="inputGroupFile02" />
                    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                </div>
            </div>
            <p hidden id = "ShowDate"></p>
            <script>
                $('#inputGroupFile02').on('change', function () {
                    //get the file name
                    var fileName = $(this).val();
                    //replace the "Choose a file" label
                    $(this).next('.custom-file-label').html(fileName);
                })
            </script>

            <script>
                function displayDate(){
                    document.getElementById("ShowDate").innerHTML = Date();
                }
            </script>
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////-->
            <button type="submit" name="blogcreate" class="btn btn-primary" onclick ="displayDate()">Create</button>
            <button type="reset"  class="btn btn-dark">Reset</button>

        </form>
    </div>


    <?php
include('includes/scripts.php');
include('includes/footer.php');
?>