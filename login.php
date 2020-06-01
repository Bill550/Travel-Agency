<?php
include('includes/security.php');
include('includes/dbconfig.php');
include('includes/Header.php');
include('includes/navbar.php');
?>
	<!-- <script>
	$(document).ready(function(){
		$("signup").submit(function(event) {
			event.preventDefault();
			var name =$("#signup-name").val();
			var mobile =$("#signup-mobile").val();
			var email =$("#signup-email").val();
			var password =$("#signup-password").val();
			var submit =$("#signup-submit").val();
			$(".form-message").load("includes/code.php", {
				name: name,
				mobile: mobile,
				email: email,
				password: password,
				submit: submit
			});
		});
	});
	</script>   -->
<!-- ================Home Banner Area =================-->
<section class="banner_area ">
    <div class="banner_inner overlay d-flex align-items-center">
        <div class="container">
            <div class="banner_content">
                <div class="page_link">
                    <a href="index.php">Home</a>
                    <a href="login.php">Login / Signup</a>
                </div>
                <h2>Login/Signup</h2>
            </div>
  <?php
  if (isset($_SESSION['success'])&& $_SESSION['success'] !='') {
    echo '<h2 style="color:white" >'.$_SESSION['success'].'</h2>';
    unset ($_SESSION['success']);
  }
    if (isset($_SESSION['status'])&& $_SESSION['status'] !='') {
    echo '<h2 style="color:white" >'.$_SESSION['status'].'</h2>';
    unset ($_SESSION['status']);
  }
  ?>        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->
<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<section>
    <div class="row ">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto ">
            <div class="card card-signin my-5 rounded-circle ">
                <div class="form-box">
                    <div class="button-box">
                        <div id="new-log-btn"></div>
                        <button type="button" class="toggle-btn" onclick="login()"> Login </button>
                        <button type="button" class="toggle-btn" onclick="signup()"> Signup </button>
                    </div>
                    <div class="social-icon-1">
                        <lable>LogIn With</lable>
                        <img src="img/login-img/facebook.png">
                        <img src="img/login-img/google.png">
                    </div>
                    <div class="text-center">
                    </div>
                    <form action="includes/code.php" method="POST" class="input-groups" id="login">
                        <input type="email" name="useremail" id="" class="input-field1" placeholder="Email"required>
                        <input type="password" name="userpassword" id="" class="input-field1" placeholder="Password"required>
                        <input type="checkbox" name="rememberme" id="" class="check-box1"><span>Remember Me</span>
                        <button type="submit" name="login_btn" class="submit-btn1">Login</button>
                    </form>

                    <form action="includes/code.php" method="POST" class="input-groups" id="signup" >
                        <input type="text" name="username" id="signup-name" class="input-field1" placeholder="Full Name">
                        <input type="text" name="usermobile" id="signup-mobile" class="input-field1" placeholder="Mobile No.(03484792005)">
                        <input type="text" name="useremail" id="signup-email" class="input-field1" placeholder="Email">
                        <input type="password" name="userpassword" id="signup-password" class="input-field1" placeholder="Password">
                        <p class="form-message"></P>
                        <input type="hidden" name="usertype" value="User">
                        <input type="checkbox" name="" id="" class="check-box1"><span>I agree to terms and
                            conditions</span>
                        <button type="submit" id="signup-submit" name="signup_btn" class="submit-btn1">Signup</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .card {
        border-color: #9035f9;
    }

    .form-box {
        width: 380px;
        height: 550px;
        position: relative;
        margin: 6% auto;
        background: #fff;
        padding: 5px;
        border-radius: 5rem;
        overflow: hidden;
    }

    .button-box {
        width: 220px;
        margin: 35px auto;
        position: relative;
        box-shadow: 0 0 20px 9px #c251da;
        border-radius: 30px;
        text-align: center;
        color: #00D2D6;
    }

    .toggle-btn {
        padding: 10px 30px;
        cursor: pointer;
        background: transparent;
        border: 0;
        outline: none;
        position: relative;
        text-align: center;
        color: #9035f9;
    }

    #new-log-btn {
        top: 0;
        left: 0;
        position: absolute;
        width: 110px;
        height: 100%;
        background: linear-gradient(to right, #fff, #fff);
        border-radius: 30px;
        transition: .5s;
        text-align: center;
    }

    .social-icon-1 {
        margin: 30px auto;
        text-align: center;
    }

    .social-icon-1 img {
        width: 30px;
        margin: 0 12px;
        box-shadow: 0 0 20px 0 #7f7f7f3d;
        cursor: pointer;
        border-radius: 50%;
    }

    .input-groups {
        top: 180px;
        position: absolute;
        width: 280px;
        transition: .5s;
    }

    .input-field1 {
        width: 100%;
        padding: 10px 0;
        margin: 5px 0;
        border-left: 0;
        border-right: 0;
        border-top: 0;
        border-bottom: 1px solid #999;
        outline: none;
        background: transparent;
    }

    .submit-btn1 {
        width: 85%;
        padding: 10px 30px;
        cursor: pointer;
        display: block;
        margin: auto;
        background: linear-gradient(to right, #ff2f8b, #9035f9);
        border: 0;
        outline: none;
        border-radius: 30px;
        color: #fff;
    }

    .check-box1 {
        margin: 30px 10px 30px 0px;
    }

    span {
        color: #777;
        font-size: 12px;
        bottom: 68px;
        position: absolute;
    }

    #login {
        left: 50px;
    }

    #signup {
        left: 450px
    }
</style>

<script>
    var x = document.getElementById("login");
    var y = document.getElementById("signup");
    var z = document.getElementById("new-log-btn");

    function signup() {
        x.style.left = "-450px";
        y.style.left = "50px";
        z.style.left = "110px";
    }

    function login() {
        x.style.left = "50px";
        y.style.left = "450px";
        z.style.left = "0";
    }
</script>

<?php
		include('includes/script.php'); 
		include('includes/Footer.php'); 
?>
