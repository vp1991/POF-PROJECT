<?php
session_start();
include_once "dbh.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VpInfoTech</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
	


    
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
	<div class="container-fluid">
		<a class="navbar-brand" href=""><h2>Très.Chic</h2></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active"><a class="nav-link" href="#">Sale</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Categories</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Collection</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Connect</a></li>
                <?php

              if(isset($_SESSION["useruid"]))
                    {
                       echo "<li class='nav-item'><a class='nav-link' href='includes/logout.inc.php'>Log Out</a></li>";
                    }
                    else
                    {
                   echo "<li class='nav-item'><a class='nav-link' href='signup.php'>Sign UP</a></li>";
                   echo "<li class='nav-item'><a class='nav-link' href='login.php'>Login</a></li>";
                    }
                ?>
			</ul>
		</div>
	</div>
</nav>

<div id="slides" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<li data-target="#slides" data-slide-to="0" class="active"></li>
		<li data-target="#slides" data-slide-to="1"></li>
		<li data-target="#slides" data-slide-to="2"></li>
	</ul>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="img/banner1.jpg" alt="">
			<div class="carousel-caption">
				<h1 class="display-2">The Brand</h1>
				<h3>Style That Talks</h3>
				<button type="button" class="btn btn-outline-light btn-lg">READ MORE</button>
				<button type="button" class="btn btn-primary btn-lg">BUY NOW</button>
			</div>
		</div> 
		<div class="carousel-item">
			<img src="img/banner2.jpg" alt="">
		</div>
		<div class="carousel-item">
			<img src="img/banner3.jpg" alt="">
		</div>
	</div>
</div>

<!--- Jumbotron -->
<div class="container-fluid">
	
		<div class="row divider">
			<h2><span>NEW ARRIVALS</span></h2>
		</div>
	
</div>

<!--- CArd-1 -->

<div class="container-fluid padding">
	<div class="row padding">
	<?php
			$sql = "SELECT title,des,photo FROM img";
			$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
			$check_result=mysqli_num_rows($resultset) > 0;
			if($check_result)
			{
				while($row = mysqli_fetch_assoc($resultset))
				{
					?>
				<div class="col-md-3">
				<div class="card h-100">
				<img src="upload/<?php echo $row['photo'] ?>" alt="" class="card-img-top">
				<div class="card-body">
					<h4 class="card-title"><?php echo $row['title']; ?></h4>
					<p class="card-text"><?php echo $row['des']; ?></p>
					<a href="" class="btn btn-outline-secondary">See Profile</a>
				</div>
			</div>
			
		</div>
					<?php
				}
			}

			else
			{
				echo "No Records";
			}
	?>
	</div>
</div>


<!--- Three Column Section -->
<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-md-3">
			<div class="card h-100">
				<img class="card-img-top" src="img/c5.jpg" alt="">
				<div class="card-body">
					<h4 class="card-title">MAry Jo</h4>
					<p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero, quidem!</p>
					<a href="#" class="btn btn-outline-secondary">See Profile</a>
				</div>
			</div>
		</div>

		<div class="col-md-3">
			<div class="card h-100">
				<img class="card-img-top" src="img/c6.jpg" alt="">
				<div class="card-body">
					<h4 class="card-title">Phil Ho</h4>
					<p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero, quidem!</p>
					<a href="#" class="btn btn-outline-secondary">See Profile</a>
				</div>
			</div>
		</div>

		<div class="col-md-3">
			<div class="card h-100">
				<img class="card-img-top" src="img/c7.jpg" alt="">
				<div class="card-body">
					<h4 class="card-title">Mary Jo</h4>
					<p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero, quidem!</p>
					<a href="#" class="btn btn-outline-secondary">See Profile</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card h-100">
				<img class="card-img-top" src="img/c8.jpg" alt="">
				<div class="card-body">
					<h4 class="card-title">Mary Jo</h4>
					<p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero, quidem!</p>
					<a href="#" class="btn btn-outline-secondary">See Profile</a>
				</div>
			</div>
		</div>

	</div>
</div>

<hr class="my-4"> 
<!--- Fixed background -->
<figure>
	<div class="fixed-wrap">
		<div id="fixed">

		</div>
	</div>
</figure>

<!--- Emoji Section -->
<button class="fun" data-toggle="collapse" data-target="#emoji"> Click for fun
</button>
<div id="emoji" class="collapse">
	<div class="container-fluid padding">
		<div class="row text-center">
			<div class="col-sm-6 col-md-3">
				<img class="gif" src="img/gif/panda.gif" alt="">
			</div>
			<div class="col-sm-6 col-md-3">
				<img class="gif" src="img/gif/poo.gif" alt="">
			</div>
			<div class="col-sm-6 col-md-3">
				<img class="gif" src="img/gif/unicorn.gif" alt="">
			</div>
			<div class="col-sm-6 col-md-3">
				<img class="gif" src="img/gif/chicken.gif" alt="">
			</div>
		</div>
	</div>
</div>

<!--- Cards -->

<div class="container-fluid padding">
	<div class="row">
		<div class="col-6">
			<h3 class="mb-3">NEVER OUT OF STOCK</h3>
		</div>
		<div class="col-6 text-right">
			<a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
				<i class="fa fa-arrow-left"></i>
			</a>
			<a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
				<i class="fa fa-arrow-right"></i>
			</a>
		</div>
		<div class="col-12">
			<div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="row">

							<div class="col-md-4 mb-3">
								<div class="card h-100">
									<img class="img-fluid" alt="100%x280" src="img/w1.jpg">
									<div class="card-body">
										<h4 class="card-title">Special title treatment</h4>
										<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

									</div>

								</div>
							</div>
							<div class="col-md-4 mb-3">
								<div class="card h-100">
									<img class="img-fluid" alt="100%x280" src="img/w2.jpg">
									<div class="card-body">
										<h4 class="card-title">Special title treatment</h4>
										<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

									</div>
								</div>
							</div>
							<div class="col-md-4 mb-3">
								<div class="card h-100">
									<img class="img-fluid" alt="100%x280" src="img/w3.jpg">
									<div class="card-body">
										<h4 class="card-title">Special title treatment</h4>
										<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="carousel-item">
						<div class="row">

							<div class="col-md-4 mb-3">
								<div class="card h-100">
									<img class="img-fluid" alt="100%x280" src="img/w4.jpg">
									<div class="card-body">
										<h4 class="card-title">Special title treatment</h4>
										<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

									</div>

								</div>
							</div>
							<div class="col-md-4 mb-3">
								<div class="card h-100">
									<img class="img-fluid" alt="100%x280" src="img/w5.jpg">
									<div class="card-body">
										<h4 class="card-title">Special title treatment</h4>
										<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

									</div>
								</div>
							</div>
							<div class="col-md-4 mb-3">
								<div class="card h-100">
									<img class="img-fluid" alt="100%x280" src="img/w6.jpg">
									<div class="card-body">
										<h4 class="card-title">Special title treatment</h4>
										<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="carousel-item">
						<div class="row">

							<div class="col-md-4 mb-3">
								<div class="card h-100">
									<img class="img-fluid" alt="100%x280" src="img/w7.jpg">
									<div class="card-body">
										<h4 class="card-title">Special title treatment</h4>
										<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

									</div>

								</div>
							</div>
							<div class="col-md-4 mb-3">
								<div class="card h-100">
									<img class="img-fluid" alt="100%x280" src="img/w8.jpg">
									<div class="card-body">
										<h4 class="card-title">Special title treatment</h4>
										<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

									</div>
								</div>
							</div>
							<div class="col-md-4 mb-3">
								<div class="card h-100">
									<img class="img-fluid" alt="100%x280" src="img/w6.jpg">
									<div class="card-body">
										<h4 class="card-title">Special title treatment</h4>
										<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--- Two Column Section -->

<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-md-12 col-lg-6">
			<h2>About Us</h2>
			<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium sapiente placeat voluptate autem, et a.</p>
			<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam odio animi delectus voluptatum adipisci ducimus sit voluptates rem nobis aut!lorem</p>
			<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis aliquid, accusamus et optio fuga quasi. Illo asperiores porro facilis atque, neque laudantium voluptates eaque facere explicabo iste dolore corporis ex.</p>
			<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A minus consequuntur repellendus exercitationem unde maxime sequi voluptates, quas consectetur! Dolor, laborum! Ea amet rem mollitia quo, optio quaerat cum beatae iusto itaque similique. Illum impedit commodi sunt odit dignissimos reprehenderit optio laborum at iste possimus accusantium, ab ipsa eius reiciendis?</p>
		</div>	
		<div class="col-lg-6">
			<img src="img/aboutus.jpg" class="img-fluid" alt="">
		</div>
	</div>
	<hr class="my-4">
</div>
<!--- Connect -->
<div class="container-fluid padding">
	<div class="row text-center padding">
		<div class="col-12">
			<h2>Connect</h2>
		</div>	
	<div class="col-12 padding social">
		<a href="#"><i class="fab fa-facebook"></i></a>
		<a href="#"><i class="fab fa-twitter"></i></a>
		<a href="#"><i class="fab fa-google-plus-g"></i></a>
		<a href="#"><i class="fab fa-instagram"></i></a>
		<a href="#"><i class="fab fa-youtube"></i></a>
	</div>
</div>
</div>

<!--- Footer -->

<footer>
	<div class="container-fluid padding">
		<div class="row text-center">
				<div class="col-md-4">
					<h1>TRèS.CHIC</h1>
					<hr class="light"> 
					<p>555-555-5555</p>
					<p>Rmail@myemail.com</p>
					<p>100 street name</p>
					<p>City, State, 00000</p>
				</div>

				<div class="col-md-4">
					<hr class="light">
					<h5>Our Hours</h5>
					<hr class="light">
					<p>Monday: 9am - 5pm</p>
					<p>Saterday: 10am - 4pm</p>
					<p>Sunday: Closed</p>
				</div>

				<div class="col-md-4">
					<hr class="light">
					<h5>Service Area</h5>
					<hr class="light">
					<p>City, State, 00000</p>
					<p>City, State, 00000</p>
					<p>City, State, 00000</p>
					<p>City, State, 00000</p>
				</div>

				<div class="col-12">
					<hr class="light-100">
					<h5>&copy; VPinfotech.com</h5>
				</div>
		</div>
	</div>
</footer>
</body>
</html>







