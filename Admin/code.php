<?php
include('includes/security.php');
include('includes/dbconfig.php');

//////////////////////////// Add ADMIN ////////////////////////////
if (isset($_POST['registerbtn'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $usertype = $_POST['usertype'];
    if (empty($username)||empty($email)||empty($password)||empty($confirmpassword)||empty($usertype)){
        $_SESSION['status'] = "Fill in All The Fields !!! ";
        header('Location: register.php');
        
    }
    else {
        if($password === $confirmpassword){

    $query = "INSERT INTO userinfo (username,email,password,usertype) Values('$username','$email','$password','$usertype')";
    $query_run = mysqli_query($connection , $query);
    if($query_run){
        $_SESSION['success'] = "Admin Profile Added";
        header('Location: register.php');

    }
    else{
        $_SESSION['status'] = "Admin Profile Not Added";
        header('Location: register.php');

    }

    }
    else{
        $_SESSION['status'] = "Password And Confirm Password Doesn't Match";
        header('Location: register.php');

    }

    }
    
}
////////////////////////////////////////////////////////////////////////////

///////////////////////////////// Update ADMIN///////////////////////////////////
if (isset($_POST['updatebtn'])) {
    
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];
    $usertype = $_POST['edit_usertype'];

    $sql ="UPDATE userinfo SET username='$username', email='$email', password='$password',usertype='$usertype' WHERE id='$id' ";
    if(mysqli_query($connection, $sql)){
        $_SESSION['success'] = "Your Data Is Updated";
        header('Location: register.php');

    }
    else{
        $_SESSION['status'] = "Your Data Isn't Updated";
        header('Location: register.php');

    }
}
/////////////////////////////////////////////////////////////

////////////////////////////////////////////DELETE ADMIN//////////////////////////////////////////////
if (isset($_POST['delete_btn'])) {
    $id = $_POST['delete_id'];
    $query = "DELETE FROM userinfo WHERE id='$id'";
    $query_run = mysqli_query($connection,$query);
    if ($query_run) {
        $_SESSION['success'] = "Your Data Is DELETED";
        header('Location: register.php');
    }
    else {
        $_SESSION['status'] = "Your Data Isn't DELETED";
        header('Location: register.php');
    }
}
///////////////////////////////////////////////////////////



/////////////////////////PAGE MANAGEr//////////////////
if(isset($_POST['page_save'])){
    $pagetype = $_POST['pagetype'];

    $pagedescription = $_POST['pagedescription'];

    $query = "INSERT INTO pagemange (pagetype,title_quote,pagedescription) VALUES('$pagetype','$pagedescription')";
    $query_run=mysqli_query($connection,$query);
    if ($query_run) {
        $_SESSION['success'] = "Page Info is Added";
        header('Location: pagemanage.php');
    }
    else {
        $_SESSION['status'] = "Page Info isn't Added";
        header('Location: pagemanage.php');    }
}

////////////////////////////////////////////////////////////////////
////////////////////////////PAGE UPDATION/////////////////////////////////

if (isset($_POST['pageupdatebtn'])) {
    
    $id = $_POST['edit_id'];
    $pagetype = $_POST['pagetype'];
    $pagedescription = $_POST['pagedescription'];

    $sql ="UPDATE pagemange SET  pagetype ='$pagetype',pagedescription='$pagedescription' WHERE pageid='$id' ";
    if(mysqli_query($connection, $sql)){
        $_SESSION['success'] = "Your Page Is Updated";
        header('Location: pagemanage.php');

    }
    else{
        $_SESSION['status'] = "Your Page Isn't Updated";
        header('Location: pagemanage.php');

    }
}


//////////////////////////////////////////////////////////////////////
///////////////////////////PACKAGE CREATE////////////////////////////// 
if (isset($_POST['tourcreate'])){
    $PackageName = $_POST['PackageName'];
    $PackageType = $_POST['PackageType'];
    $PackageLocation = $_POST['PackageLocation'];
    $PackagePrice = $_POST['PackagePrice'];
    $PackageFeatures = $_POST['PackageFeatures'];
    $PackageDetails = $_POST['PackageDetails'];
    $packageimage = $_FILES["packageimage"]['name'];

    if(file_exists("Upload/".$_FILES["packageimage"]["name"])){
        $store = $_FILES["packageimage"]["name"] ;
        $_SESSION['status'] = "Image Already Exists...'.$store.' ";
        header("Location: tourcreate.php");
    }

    else{
        
    $query = "INSERT INTO tourpackage (packagename,packagetype,packagelocaton,
                                        packageprice,packagefeature,packagedetails,packageimage) 
    Values('$PackageName','$PackageType','$PackageLocation','$PackagePrice',
                '$PackageFeatures','$PackageDetails','$packageimage')";

    $query_run = mysqli_query($connection , $query);
    if($query_run){
        move_uploaded_file($_FILES["packageimage"]["tmp_name"],"Upload/".$_FILES["packageimage"]["name"]);
        $_SESSION['success'] = "Package Added";
        header('Location: tourcreate.php');
    }
    else{
        $_SESSION['status'] = "Package Not Added";
        header('Location: tourcreate.php');
    }

    }
    }
  
    ////////////////////////////////////////////////////////////////////
////////////////////////////PACKAGE UPDATION/////////////////////////////////

if (isset($_POST['updatepackagebtn'])) {
    
    $id = $_POST['edit_packageid'];
    $UPPackageName = $_POST['UPPackageName'];
    $UPPackageType = $_POST['UPPackageType'];
    $UPPackageLocation = $_POST['UPPackageLocation'];
    $UPPackagePrice = $_POST['UPPackagePrice'];
    $UPPackageFeatures = $_POST['UPPackageFeatures'];
    $UPPackageDetails = $_POST['UPPackageDetails'];
    $UPpackageimage = $_FILES["UPpackageimage"]['name'];

    $sql ="UPDATE tourpackage SET  packagename ='$UPPackageName',packagetype='$UPPackageType',
            packageprice='$UPPackagePrice',packagelocaton='$UPPackageLocation',
            packagefeature='$UPPackageFeatures',packagedetails='$UPPackageDetails',
            packageimage='$UPpackageimage' WHERE packageid='$id' ";

    if(mysqli_query($connection, $sql)){
        move_uploaded_file($_FILES["UPpackageimage"]["tmp_name"],"Upload/".$_FILES["UPpackageimage"]["name"]);
        $_SESSION['success'] = "Your Package Is Updated";
        header('Location: tourmanage.php');

    }
    else{
        $_SESSION['status'] = "Your Package Isn't Updated";
        header('Location: tourmanage.php');

    }
}
/////////////////////////Team MANAGER//////////////////
if(isset($_POST['teamupdate'])){
    
    $edit_teamid = $_POST['edit_teamid'];
    $teamname = $_POST['teamname'];
    $teamposition = $_POST['teamposition'];
    $teamimage = $_FILES["teamimage"]['name'];
    $instalink = $_POST['instalink'];

    

        $query = "UPDATE  team SET teamname='$teamname',teamposition ='$teamposition',teamimage='$teamimage', instalink ='$instalink' WHERE teamid = '$edit_teamid'";
        $query_run=mysqli_query($connection,$query);
        if ($query_run) {
        move_uploaded_file($_FILES["teamimage"]["tmp_name"],"../img/team/".$_FILES["teamimage"]["name"]);
        $_SESSION['success'] = "Team Info is Updated";
        header('Location: team.php');
    }
    else {
        $_SESSION['status'] = "Team Info isn't Updated";
        header('Location: team.php');    }
    
    
}


///////////////////////////////////////////////////////////////////////////////////////////

///////////////////// Delete Package //////////////////////////////////////////////////////
if (isset($_POST['deletepackage_btn'])) {
    $id = $_POST['delete_packageid'];
    $query = "DELETE FROM tourpackage WHERE packageid='$id'";
    $query_run = mysqli_query($connection,$query);
    if ($query_run) {
        $_SESSION['success'] = "Your Package is Deleted Is DELETED";
        header('Location: tourmanage.php');
    }
    else {
        $_SESSION['status'] = "Your Package Isn't DELETED";
        header('Location: tourmanage.php');
    }
}

//////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////Multiple Selected Package //////////////////////////////////////
if (isset($_POST['Search_data'])) {
    $id = $_POST['packageid'];
    $visible = $_POST['visible'];
    $query = "UPDATE tourpackage set visible = '$visible' where packageid = '$id' ";
    $query_run = mysqli_query($connection,$query);
}

////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////Multiple Delete Package //////////////////////////////////////

if (isset($_POST['multiple_delete'])) {
    $id = '1';
    $query = "DELETE FROM tourpackage where visible = '$id' ";
    $query_run = mysqli_query($connection,$query);
    if ($query_run) {
        $_SESSION['success'] = "Your Packages Are Deleted Is DELETED";
        header('Location: tourmanage.php');
    }
    else {
        $_SESSION['status'] = "Your Packages Aren't DELETED";
        header('Location: tourmanage.php');
    }
}

///////////////////////////Blog CREATE////////////////////////////// 
if (isset($_POST['blogcreate'])){
    $blogtitle = $_POST['blogtitle'];
    $short_description = $_POST['short_description'];
    $blogdescription = $_POST['blogdescription'];
    $blogimage = $_FILES["blogimage"]['name'];

    if(file_exists("Upload/blog/".$_FILES["blogimage"]["name"])){
        $store = $_FILES["blogimage"]["name"] ;
        $_SESSION['status'] = "Image Already Exists...'.$store.' ";
        header("Location: blog.php");
    }

    else{
        
    $query = "INSERT INTO blog (blogcreate,short_description,blogdescription,blogimage) 
    Values('$blogcreate','$short_description','$blogdescription','$blogimage')";

    $query_run = mysqli_query($connection , $query);
    if($query_run){
        move_uploaded_file($_FILES["blogimage"]["tmp_name"],"Upload/blog/".$_FILES["blogimage"]["name"]);
        $_SESSION['success'] = "Blog Added";
        header('Location: blogmanage.php');
    }
    else{
        $_SESSION['status'] = "blog Not Added";
        header('Location: blogmanage.php');
    }

    }
    }
  
    ////////////////////////////////////////////////////////////////////




?>