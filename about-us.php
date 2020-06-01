<?php
include('includes/Header.php');
include('includes/navbar.php');
include('includes/security.php');
include('includes/dbconfig.php');
?>
	<!--================Home Banner Area =================-->
	<section class="banner_area ">
		<div class="banner_inner overlay d-flex align-items-center">
			<div class="container">
				<div class="banner_content">
					<div class="page_link">
						<a href="index.php">Home</a>
						<a href="about-us.php">About Us</a>
					</div>
					<h2>About Us</h2>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
	<!--================ Start About Area =================-->
	<section class="section_gap about-area">
		<div class="container">
			<div class="single-about row">
				<div class="col-lg-4 col-md-6 no-padding about-left">
					<div class="about-content">
					<?php
					$query = "SELECT * FROM pagemange where pagetype = 'About-Us' ";
					$query_run = mysqli_query($connection,$query);
					if (mysqli_num_rows($query_run) > 0) {
						foreach ($query_run  as $row ) {
							?>
						
						<h1>
							We Believe <br>
							that Interior beauty <br>
							Lasts Long
						</h1>
						<p><?php echo $row['pagedescription']; ?></p>
						
						<?php
						}
					}
					else {
						echo "No Record Found!";
					}
					
					?>
					</div>
				</div>
				<div class="col-lg-8 col-md-6 text-center no-padding about-right">
					<div class="about-thumb">
						<img src="img/about-img.jpg" class="img-fluid info-img" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End About Area =================-->
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<?php
		include('includes/Team.php');
		include('includes/script.php'); 
		include('includes/Footer.php'); 
?>
