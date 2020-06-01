<?php
include('security.php');
include('dbconfig.php');


////////////////////////////////////////////LOGIN/////////////////////////////////////////////////

if(isset($_POST['login_btn'])){
    $Admin_email = $_POST['adminemail'];
    $Admin_password = $_POST['adminpassword'];

    $query = "SELECT * FROM userinfo WHERE email='$Admin_email' AND password='$Admin_password' ";
    $query_run  = mysqli_query($connection,$query);
    $usertype = mysqli_fetch_array($query_run);

    if ($usertype['usertype'] == "Admin") {
        $_SESSION['username'] = $Admin_email ;
        header('Location: ../index.php');
    }
    elseif ($usertype['usertype'] == "User") {
        $_SESSION['username'] = $Admin_email ;
        header('Location: ../../index.html');
    }
    else {
        $_SESSION['status'] = 'Email ID / Passowrd Is Invalid' ;
        header('Location: ../login.php');   
    }
    
}
?>