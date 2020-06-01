  <?php
$srver_name  = "localhost";     $db_username = "root";
$db_password = "";              $db_name     = "test";

$connection = mysqli_connect($srver_name,$db_username,$db_password);
$dbconfig = mysqli_select_db($connection,$db_name);
if ($dbconfig) {
    //echo "Database Connected";
}
else {
    echo '
    <div class="container">
        <div class="row">
            <div class="col-md-8 mr-auto ml-auto text-center py-5 mt-5">
                <div class="card">
                    <div class="card-body">
                <h1 class="card-tital ">Database Connection Failed!</h1>
                <h2 class="card-tital">Database Failure</h2>
                <p class="card-test">Please Check Your Database Connection</p>
                <a href="#" class=" btn btn-primary"><i class="fas fa-dizzy"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    ';
}
?>