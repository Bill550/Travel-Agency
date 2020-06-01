<?php
include('security.php');
include('dbconfig.php');

////////////////////////////////////////////USER LOGIN/////////////////////////////////////////////////

if(isset($_POST['login_btn'])){
    $user_email = $_POST['useremail'];
    $user_password = $_POST['userpassword'];

    $query = "SELECT * FROM userinfo WHERE email='$user_email' AND password='$user_password' ";
    $query_run  = mysqli_query($connection,$query);
    $usertype = mysqli_fetch_array($query_run);

    if ($usertype['usertype'] == "User") {
        $_SESSION['username'] = $user_email ;
        header('Location: ../index.php');
    }
    else {
        $_SESSION['status'] = 'Email ID / Passowrd Is Invalid' ;
        header('Location: ../login.php');   
    }
    
}

////////////////////////////////////////////SIGNUP/////////////////////////////////////////////////

if(isset($_POST['signup_btn'])){
    
    $user_name = $_POST['username'];
    $user_mobile = $_POST['usermobile'];
    $user_email = $_POST['useremail'];
    $user_password = $_POST['userpassword'];
    $usertype = $_POST['usertype'];

    $errorEmpty = false;
    $errorEmail = false;
    $errormobile = false;
    
    if (empty($user_name)||empty($user_mobile)||empty($user_email)||empty($user_password)||empty($usertype)){
        echo "<span class = 'form-error'>Fill in All The Fields!</span>";
        $errorEmpty = true;
        $_SESSION['status'] = "Fill in All The Fields !!! ";
        header('Location: ../login.php');
        
    }
    elseif (!filter_var($user_email, FILTER_VALIDATE_EMAIL)){
        echo "<span class = 'form-error'>Enter A Valid Email!</span>";
        $errorEmail = true;
        $_SESSION['status'] = " Enter A Valid Email !!! ";
        header('Location: ../login.php');
    }
    else {
        echo "<span class = 'form-success'>Fill in All The Fields!</span>";
            $query = "INSERT INTO userinfo (username,email,password,usertype,usermobile) Values('$user_name','$user_email','$user_password','$usertype','$user_mobile')";
            $query_run = mysqli_query($connection , $query);
            if($query_run){
                $_SESSION['success'] = "You Have Successfully Created your Account";
                header('Location: ../login.php'); 
            }
            else{
                $_SESSION['status'] = "Your Account Haven't Created !!! ";
                header('Location: ../login.php');
            }
    }
}


    // if (empty($user_name) ||empty($user_mobile) ||empty($user_email) ||empty($user_password) ||empty($usertype)) {
    // header("Location: ../login.php?error=emptyfields&username=".$user_name."&usermobile=".$user_mobile."&useremail=".$user_email);    
    // exit();
    // }
    // elseif (!filter_var($user_mobile, FILTER_VALIDATE_INT) && !filter_var($user_email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-z]*$/",$user_name)) {
    //     header("Location: ../login.php?error=invalidfields");    
    //     exit();
    // }
    // elseif (!filter_var($user_mobile, FILTER_VALIDATE_INT)) {
    //     header("Location: ../login.php?error=invalidfields&username=".$user_name."&useremail=".$user_email);    
    //     exit();
    // }
    // elseif (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
    //     header("Location: ../login.php?error=invalidfields&username=".$user_name."&usermobile=".$user_mobile);    
    //     exit();
    // }
    // elseif (!preg_match("/^[a-zA-z]*$/",$user_name)) {
    //     header("Location: ../login.php?error=invalidfields&usermobile=".$user_mobile."&useremail=".$user_email);    
    //     exit();
    // }
    // else{
    //     $sql = "SELECT email FROM userinfo where email = ? AND usermobile = ?";
    //     $stmt = mysqli_stmt_init($connection);
    //     if(!mysqli_stmt_prepare($stmt,$sql)){
    //         header("Location: ../login.php?error=sqlerror");    
    //         exit();
    //     }
    //     else{
    //         mysqli_stmt_bind_param($stmt, "si",$user_email,$user_mobile);
    //         mysqli_stmt_execute($stmt);
    //         mysqli_stmt_store_result($stmt);
    //         $result_check = mysqli_stmt_num_rows($stmt);
    //         if($result_check > 0){
    //             header("Location: ../login.php?error=emailORmobilenumberTacken");    
    //             exit();
    //         }
    //         else {
    //             $query = "INSERT INTO userinfo (username,email,password,usertype,usermobile) Values(?,?,?,?,?)";
    //             $stmt = mysqli_stmt_init($connection);
    //             if(!mysqli_stmt_prepare($stmt,$sql)){
    //                 header("Location: ../login.php?error=sqlerror");    
    //                 exit();
    //             }
    //             else{
    //                 $hashedPWD = password_hash($user_password, PASSWORD_DEFAULT);
    //                 mysqli_stmt_bind_param($stmt, "sssss",$user_name,$user_email,$hashedPWD,$usertype,$user_mobile);
    //                 mysqli_stmt_execute($stmt);
    //                 $_SESSION['success'] = "You Have Successfully Created your Account";
    //                 header("Location: ../login.php?signup=success");    
    //                 exit();
    //             }
    //         }
    //     }
    //     mysqli_stmt_close($stmt);
    //     mysqli_close($connection);
    // }
    
    // }
    // else {
    //     header('Location: ../login.php');
    //     exit();
    // }
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

?>

<!-- <script>
    $("#signup-name, #signup-mobile, #signup-email, #signup-password, #signup-usertype").removeClass("input-error");
    var errorEmpty = "<?php echo $errorEmpty; ?>" ;
    var errorEmail = "<?php echo $errorEmail; ?>" ;
    if(errorEmpty == true){
        $("#signup-name, #signup-mobile, #signup-email, #signup-password, #signup-usertype").addClass("input-error");
    }
    if (errorEmail == true) {
        $("#signup-email").addClass("input-error");
    }
    if (errorEmpty == false && errorEmail == false) {
        $("#signup-name, #signup-mobile, #signup-email, #signup-password, #signup-usertype").val("");
    }
</script> -->
