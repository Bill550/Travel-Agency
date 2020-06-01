<!--================Team Area =================-->
<section class="team_area section_gap_top">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-lg-12">
				<div class="main_title">
					<h1>Intelligent Team Members</h1>
					<span class="title-widget-bg"></span>
				</div>
			</div>
		</div>
		<div class="row team_inner">
			<div class="col-lg-3 col-md-6">
				<?php
					$query = "SELECT * FROM team WHERE teamid= '1' ";
					$query_run = mysqli_query($connection,$query);
					if (mysqli_num_rows($query_run) > 0) {
						foreach ($query_run  as $row ) {
							?>
				<div class="team_item">
					<div class="team_img">
	                    <?php echo'<img  name="teamimage" src="img/team/'.$row['teamimage'].'" width="50px;" height = "50px;" class="img-fluid w-100" " >'?>
						<div class="hover">
							<h4><a href="<?php echo $row['instalink']; ?>" target="_blank"><?php echo $row['teamname']; ?></h4>
							<p><?php echo $row['teamposition']; ?></p>
						</div>
					</div>
				</div>
				<?php
						}
					}
					else {
						echo "No Record Found!";
					}
					
					?>
			</div>
			<div class="col-lg-3 col-md-6">
								<?php
					$query = "SELECT * FROM team WHERE teamid= '2' ";
					$query_run = mysqli_query($connection,$query);
					if (mysqli_num_rows($query_run) > 0) {
						foreach ($query_run  as $row ) {
							?>
				<div class="team_item">
					<div class="team_img">
	                    <?php echo'<img  name="teamimage" src="img/team/'.$row['teamimage'].'" width="50px;" height = "50px;" class="img-fluid w-100" " >'?>
						<div class="hover">
							<h4><a href="<?php echo $row['instalink']; ?>" target="_blank"><?php echo $row['teamname']; ?></h4>
							<p><?php echo $row['teamposition']; ?></p>
						</div>
					</div>
				</div>
				<?php
						}
					}
					else {
						echo "No Record Found!";
					}
					
					?>
			</div>
			<div class="col-lg-3 col-md-6">
					<?php
					$query = "SELECT * FROM team WHERE teamid= '3' ";
					$query_run = mysqli_query($connection,$query);
					if (mysqli_num_rows($query_run) > 0) {
						foreach ($query_run  as $row ) {
							?>
				<div class="team_item">
					<div class="team_img">
	                    <?php echo'<img  name="teamimage" src="img/team/'.$row['teamimage'].'" width="50px;" height = "50px;" class="img-fluid w-100" " >'?>
						<div class="hover">
							<h4><a href="<?php echo $row['instalink']; ?>" target="_blank"><?php echo $row['teamname']; ?></h4>
							<p><?php echo $row['teamposition']; ?></p>
						</div>
					</div>
				</div>
				<?php
						}
					}
					else {
						echo "No Record Found!";
					}
					
					?>
			</div>
			<div class="col-lg-3 col-md-6">
					<?php
					$query = "SELECT * FROM team WHERE teamid= '4' ";
					$query_run = mysqli_query($connection,$query);
					if (mysqli_num_rows($query_run) > 0) {
						foreach ($query_run  as $row ) {
							?>
				<div class="team_item">
					<div class="team_img">
	                    <?php echo'<img  name="teamimage" src="img/team/'.$row['teamimage'].'" width="50px;" height = "50px;" class="img-fluid w-100" " >'?>
						<div class="hover">
							<h4><a href="<?php echo $row['instalink']; ?>" target="_blank"><?php echo $row['teamname']; ?></a></h4>
							<p><?php echo $row['teamposition']; ?></p>
						</div>
					</div>
				</div>
				<?php
						}
					}
					else {
						echo "No Record Found!";
					}
					
					?>
			</div>
			
		</div>
	</div>
</section>
<!--================End Team Area =================-->