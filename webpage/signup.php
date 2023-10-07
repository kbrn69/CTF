<?php

class UserProfile {
    public $username;
    public $passwd;
    public $isAdmin;

    function __wakeup() {
        if ($this->isAdmin) {
            header("Location: admin.php");
            die();
        }
    }
}

function saveProfile($profile) {
    $profiles = [];
    if (file_exists('profiles.txt')) {
        $data = file_get_contents('profiles.txt');
        $profiles = unserialize($data);
    }
    $profiles[] = $profile;
    file_put_contents('profiles.txt', serialize($profiles));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username']) && isset($_POST['passwd'])) {
    $newProfile = new UserProfile();
    $newProfile->username = $_POST['username'];
    $newProfile->passwd = $_POST['passwd'];
    $newProfile->isAdmin = false;
    saveProfile($newProfile);
    header("Location:login.php");
    exit();
}

?>

<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>SignUp</title>
		<meta name="description" content="Hurst – Furniture Store eCommerce HTML Template is a clean and elegant design – suitable for selling flower, cookery, accessories, fashion, high fashion, accessories, digital, kids, watches, jewelries, shoes, kids, furniture, sports….">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
		<link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" href="css/bootstrap.min.css">
		
		<link rel="stylesheet" href="css/animate.min.css">
		<!-- jquery-ui.min css -->
		<link rel="stylesheet" href="css/jquery-ui.min.css">
		<!-- meanmenu css -->
		<link rel="stylesheet" href="css/meanmenu.min.css">
		<!-- nivo-slider css -->
		<link rel="stylesheet" href="lib/css/nivo-slider.css">
		<link rel="stylesheet" href="lib/css/preview.css">
		<!-- slick css -->
		<link rel="stylesheet" href="css/slick.min.css">
		<!-- lightbox css -->
		<link rel="stylesheet" href="css/lightbox.min.css">
		<!-- material-design-iconic-font css -->
		<link rel="stylesheet" href="css/material-design-iconic-font.css">
		<!-- All common css of theme -->
		<link rel="stylesheet" href="css/default.css">
		<!-- style css -->
		<link rel="stylesheet" href="style.min.css">
        <!-- shortcode css -->
        <link rel="stylesheet" href="css/shortcode.css">
		<!-- responsive css -->
		<link rel="stylesheet" href="css/responsive.css">
		<!-- modernizr css -->
		<script src="js/vendor/modernizr-3.11.2.min.js"></script>
	</head>
	<body>	
		
		<div class="wrapper bg-dark-white">

			<header id="sticky-menu" class="header header-2">
				<div class="header-area">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-4 offset-md-4 col-7">
								<div class="logo text-md-center">
									<a href="index.php"><img src="img/logo/logo.png" alt="" /></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="menu-toggle menu-toggle-2 hamburger hamburger--emphatic d-none d-md-block">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div>
				<div class="main-menu  d-none d-md-block">
					<nav>
						<ul>
							<li><a href="index.php">home</a>
								<div class="sub-menu menu-scroll">
									<ul>
										<li class="menu-title">Page's</li>
										<li><a href="index.php">Home</a></li>
										<li><a href="#">Product Page</a></li>
									</ul>
								</div>
							</li>
							<li><a href="#">products</a>
								<div class="mega-menu menu-scroll">
									<div class="table">
										<div class="table-cell">
											<div class="half-width">
												<ul>
													<li class="menu-title">best brands</li>
													<li><a href="#">henning koppel</a></li>
													<li><a href="#">jehs + Laub</a></li>
													<li><a href="#">vicke lindstrand</a></li>
													<li><a href="#">don chadwick</a></li>
													<li><a href="#">akiko kuwahata</a></li>
													<li><a href="#">barbro berlin</a></li>
													<li><a href="#">cecilia hall</a></li>
													<li><a href="#">don chadwick</a></li>
												</ul>
											</div>
											<div class="half-width">
												<ul>
													<li class="menu-title">popular brands</li>
													<li><a href="#">akiko kuwahata</a></li>
													<li><a href="#">barbro berlin</a></li>
													<li><a href="#">cecilia hall</a></li>
													<li><a href="#">don chadwick</a></li>
													<li><a href="#">henning koppel</a></li>
													<li><a href="#">jehs + Laub</a></li>
													<li><a href="#">vicke lindstrand</a></li>
													<li><a href="#">don chadwick</a></li>
												</ul>
											</div>
											<div class="full-width">
												<div class="mega-menu-img">
													<a href="single-product.php"><img src="img/megamenu/1.jpg" alt="" /></a>
												</div>
											</div>
											<div class="pb-80"></div>
										</div>
									</div>
								</div>
							</li>
							<li><a href="about.php">about us</a></li>
							<li><a href="contact.php">contact</a></li>
							<li><a href="signup.php">SignUp</a></li>
						</ul>
						</ul>
					</nav>
				</div>
			</header>
			<div class="mobile-menu-area">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 d-block d-md-none">
							<div class="mobile-menu">
								<nav id="dropdown">
									<ul>
										<li><a href="index.php">home</a>
											<ul>
												<li><a href="index.php">Home</a></li>
												<li><a href="#">Product Page</a></li>
											</ul>
										</li>
										<li><a href="#">products</a></li>										
										<li><a href="about.php">about us</a></li>
										<li><a href="contact.php">contact</a></li>
										<li><a href="#">Account</a>
											<div class="sub-menu menu-scroll">
												<ul>
													<li class="menu-title"> Login / SignUp</li>
													<li><a href="login.php">Login</a></li>
													<li><a href="signup.php">SignUp</a></li>
												</ul>
											</div>
										</li>			
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="heading-banner-area overlay-bg">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="heading-banner">
								<div class="heading-banner-title">
									<h2>Welcome to Hurst Furniture</h2>
								</div>
								<div class="breadcumbs pb-15">
									<ul>
										<li><a href="index.php">Home</a></li>
										<li>SignUp</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
<div class="login-area  pt-80 pb-80">
<div class="container">
    <div class="row">
	
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header" style="background-color:Tan">
					<h6><b>Welcome, Signup to Register</b></h6>
                </div>
                <div class="card-body">
                    <form action="signup.php" method="post">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" name="username"  placeholder="Enter your Username"  required>
                        </div>
						<div class="form-group">
                            <label>Email:</label>
                            <input type="email" placeholder="Enter your Email" required>
                        </div>
                        <div class="form-group">
                            <label for="passwd">Password:</label>
                            <input type="password" name="passwd" placeholder="Enter your Password correctly" required>
							<a class="text-gray" href="login.php">Already have an account, Login</a>
                        </div><br>
                        <input type="submit" class="btn btn-primary" value="Sign Up" style="background-color:#D2691E">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
	<div class="footer-area">
</footer>




		<script src="js/vendor/jquery-3.6.0.min.js"></script>
		<script src="js/vendor/jquery-migrate-3.3.2.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/jquery.meanmenu.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/jquery.treeview.js"></script>
		<script src="js/lightbox.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script src="lib/js/jquery.nivo.slider.js"></script>
		<script src="lib/home.js"></script>
		<script src="js/jquery.nicescroll.min.js"></script>
		<script src="js/countdon.min.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/main.min.js"></script>
	</body>
</html>
