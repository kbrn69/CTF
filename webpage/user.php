<?php

class UserProfile {
    public $username;
    public $passwd;
    public $isAdmin;

    function __wakeup() {
        if ($this->isAdmin) {
            // If it's an admin, redirect to admin page.
            header("Location: admin.php");
            die();
        }
    }
}

// Check if the profile cookie is set
if (!isset($_COOKIE['profile'])) {
    header("Location: login.php");
    die();
}

$profile = unserialize($_COOKIE['profile']);

?>


<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Profile</title>
		<meta name="description" content="Hurst – Furniture Store eCommerce HTML Template is a clean and elegant design – suitable for selling flower, cookery, accessories, fashion, high fashion, accessories, digital, kids, watches, jewelries, shoes, kids, furniture, sports….">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
		<link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel="stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel="stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/jquery-ui.min.css">
		<link rel="stylesheet" href="css/meanmenu.min.css">
		<link rel="stylesheet" href="lib/css/nivo-slider.css">
		<link rel="stylesheet" href="lib/css/preview.css">
		<link rel="stylesheet" href="css/slick.min.css">
		<link rel="stylesheet" href="css/lightbox.min.css">
		<link rel="stylesheet" href="css/material-design-iconic-font.css">
		<link rel="stylesheet" href="css/default.css">
		<link rel="stylesheet" href="style.min.css">
        <link rel="stylesheet" href="css/shortcode.css">
		<link rel="stylesheet" href="css/responsive.css">
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
							<div class="col-md-4 col-5">
								<div class="mini-cart text-end">
									<ul>
										<li>
											<a class="cart-icon" href="#">
												<i class="zmdi zmdi-shopping-cart"></i>
												<span>2</span>
											</a>
											<div class="mini-cart-brief text-left">
												<div class="cart-items">
													<p class="mb-0">You have <span>2 items</span> in your wishlist</p>
												</div>
												<div class="all-cart-product clearfix">
													<div class="single-cart clearfix">
														<div class="cart-photo">
															<a href="#"><img src="img/cart/1.jpg" alt="" /></a>
														</div>
														<div class="cart-info">
															<h5><a href="#">Lamp</a></h5>
															<p class="mb-0">Price : $ 10.00</p>
															<p class="mb-0">Qty : 02 </p>
															<span class="cart-delete"><a href="#"><i class="zmdi zmdi-close"></i></a></span>
														</div>
													</div>
													<div class="single-cart clearfix">
														<div class="cart-photo">
															<a href="#"><img src="img/cart/2.jpg" alt="" /></a>
														</div>
														<div class="cart-info">
															<h5><a href="#">Bunk Bed</a></h5>
															<p class="mb-0">Price : $ 30.00</p>
															<p class="mb-0">Qty : 01 </p>
															<span class="cart-delete"><a href="#"><i class="zmdi zmdi-close"></i></a></span>
														</div>
													</div>
												</div>
												<div class="cart-totals">
													<h5 class="mb-0">Total <span class="floatright">$40.00</span></h5>
												</div>
												<div class="cart-bottom  clearfix">
													<a href="cart.php" class="button-one floatleft text-uppercase" data-text="View cart">View cart</a>
												</div>
											</div>
										</li>
									</ul>
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
							<li><a href="#">Brands</a>
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
													<a href="#"><img src="img/megamenu/1.jpg" alt="" /></a>
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
												<li><a href="#">Product</a></li>
											</ul>
										</li>
										<li><a href="#">products</a></li>
										<li><a href="about.php">about us</a></li>
										<li><a href="contact.php">contact</a></li>
										<li><a href="signup.php">SignUp</a></li>
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
									<h2><p>Welcome, <?= htmlspecialchars($profile->username, ENT_QUOTES, 'UTF-8') ?>!</p></h2>
								</div>
								<div class="breadcumbs pb-15">
									<ul>
										<li><a href="index.php">Home</a></li>
										<li><?= htmlspecialchars($profile->username, ENT_QUOTES, 'UTF-8') ?>'s Account</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="product-area single-pro-area pt-80 pb-80 product-style-2">
				<div class="container">
					<div class="row">
						<div class="col-lg-9">		
							<div class="row shop-list single-pro-info">
								
								<div class="col-lg-12">
									<div class="single-product clearfix">
										
										<div class="single-pro-slider single-big-photo view-lightbox slider-for">
											<div>
												<img src="img/single-product/medium/1.jpg" alt="" />
												<a class="view-full-screen" href="img/single-product/large/1.jpg"  data-lightbox="roadtrip" data-title="My caption">
													<i class="zmdi zmdi-zoom-in"></i>
												</a>
											</div>
											<div>
												<img src="img/single-product/medium/2.jpg" alt="" />
												<a class="view-full-screen" href="img/single-product/large/2.jpg"  data-lightbox="roadtrip" data-title="My caption">
													<i class="zmdi zmdi-zoom-in"></i>
												</a>
											</div>
											<div>
												<img src="img/single-product/medium/3.jpg" alt="" />
												<a class="view-full-screen" href="img/single-product/large/3.jpg"  data-lightbox="roadtrip" data-title="My caption">
													<i class="zmdi zmdi-zoom-in"></i>
												</a>
											</div>
											<div>
												<img src="img/single-product/medium/4.jpg" alt="" />
												<a class="view-full-screen" href="img/single-product/large/4.jpg"  data-lightbox="roadtrip" data-title="My caption">
													<i class="zmdi zmdi-zoom-in"></i>
												</a>
											</div>
											<div>
												<img src="img/single-product/medium/5.jpg" alt="" />
												<a class="view-full-screen" href="img/single-product/large/5.jpg"  data-lightbox="roadtrip" data-title="My caption">
													<i class="zmdi zmdi-zoom-in"></i>
												</a>
											</div>
										</div>	
										
										<div class="product-info">
											<div class="fix">
												<h4 class="post-title floatleft">Comfy Bed</h4>
												<span class="pro-rating floatright">
													<a href="#"><i class="zmdi zmdi-star"></i></a>
													<a href="#"><i class="zmdi zmdi-star"></i></a>
													<a href="#"><i class="zmdi zmdi-star"></i></a>
													<a href="#"><i class="zmdi zmdi-star"></i></a>
													<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													<span>( 59 Rating )</span>
												</span>
											</div>
											<div class="fix mb-20">
												<span class="pro-price">$ 100.20</span>
											</div>
											<div class="product-description">
												<p>If your heart is set on creating a bedroom that is your private sanctuary, we have just what you need. From beds of all sizes and across design styles to mattresses designed to help you sleep peacefully, we enable you to pick and choose to create a bedroom that is yours to the tee. Whether you like to dress efficiently or in a leisurely manner, we have closets and wardrobes that cater to your diverse needs. </p>
											</div>
																			
											<div class="color-filter single-pro-color mb-20 clearfix">
												<ul>
													<li><span class="color-title text-capitalize">color</span></li>
													<li><a class="active" href="#"><span class="color color-1"></span></a></li>
													<li><a href="#"><span class="color color-2"></span></a></li>
													<li><a href="#"><span class="color color-7"></span></a></li>
													<li><a href="#"><span class="color color-3"></span></a></li>
													<li><a href="#"><span class="color color-4"></span></a></li>
												</ul>
											</div>
											
											<div class="size-filter single-pro-size mb-35 clearfix">
												<ul>
													<li><span class="color-title text-capitalize">size</span></li>
													<li><a href="#">M</a></li>
													<li><a class="active" href="#">S</a></li>
													<li><a href="#">L</a></li>
													<li><a href="#">SL</a></li>
													<li><a href="#">XL</a></li>
												</ul>
											</div>
											<!-- Size end -->
											<div class="clearfix">
												<div class="cart-plus-minus">
													<input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
												</div>
												<div class="product-action clearfix">
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.php" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
											<!-- Single-pro-slider Small-photo start -->
											<div class="single-pro-slider single-sml-photo slider-nav">
												<div>
													<img src="img/single-product/small/1.jpg" alt="" />
												</div>
												<div>
													<img src="img/single-product/small/2.jpg" alt="" />
												</div>
												<div>
													<img src="img/single-product/small/3.jpg" alt="" />
												</div>
												<div>
													<img src="img/single-product/small/4.jpg" alt="" />
												</div>
												<div>
													<img src="img/single-product/small/5.jpg" alt="" />
												</div>
											</div>
											<!-- Single-pro-slider Small-photo end -->
										</div>
									</div>
								</div>
								
							</div>
							
							<div class="single-pro-tab">
								<div class="row">
									<div class="col-lg-3 col-md-4">
										<div class="single-pro-tab-menu">
											<!-- Nav tabs -->
											<ul class="nav d-block">
												<li><a href="#description" data-bs-toggle="tab">Description</a></li>
												<li><a class="active" href="#reviews"  data-bs-toggle="tab">Reviews</a></li>
												<li><a href="#information" data-bs-toggle="tab">Information</a></li>
												<li><a href="#tags" data-bs-toggle="tab">Tags</a></li>
											</ul>
										</div>
									</div>
									<div class="col-lg-9 col-md-8">
										<!-- Tab panes -->
										<div class="tab-content">
											<div class="tab-pane" id="description">
												<div class="pro-tab-info pro-description">
													<h3 class="tab-title title-border mb-30">Comfy Bed</h3>
													<p>Indulge in unparalleled comfort with our Deluxe Comfort Bed. Crafted with precision from premium materials, this bed ensures both durability and a luxurious feel. The plush mattress cradles you, providing optimal support for a restful night.</p>
													<p>An elegant design complements the bed's functionality, making it a perfect centerpiece for any bedroom. Integrated storage drawers offer practical space-saving solutions, while the soft, neutral fabric fits seamlessly with any decor. Experience rejuvenating sleep and elevate your bedroom aesthetics with this masterpiece.</p>
												</div>
											</div>
											<div class="tab-pane active" id="reviews">
												<div class="pro-tab-info pro-reviews">
													<div class="customer-review mb-60">
														<h3 class="tab-title title-border mb-30">Customer review</h3>
														<ul class="product-comments clearfix">
															<li class="mb-30">
																<div class="pro-reviewer">
																	<img src="img/reviewer/1.jpg" alt="" />
																</div>
																<div class="pro-reviewer-comment">
																	<div class="fix">
																		<div class="floatleft mbl-center">
																			<h5 class="text-uppercase mb-0"><strong>Alwin Wilfried</strong></h5>
																			<p class="reply-date">27 Jun, 2021</p>
																		</div>
																		<div class="comment-reply floatright">
																			<a href="#"><i class="zmdi zmdi-mail-reply"></i></a>
																			<a href="#"><i class="zmdi zmdi-close"></i></a>
																		</div>
																	</div>
																	<p class="mb-0">Execelent Product, Highly recommend for someone who has back problem.</p>
																</div>
															</li>
															<li class="threaded-comments">
																<div class="pro-reviewer">
																	<img src="img/reviewer/1.jpg" alt="" />
																</div>
																<div class="pro-reviewer-comment">
																	<div class="fix">
																		<div class="floatleft mbl-center">
																			<h5 class="text-uppercase mb-0"><strong>Lana Stonks</strong></h5>
																			<p class="reply-date">27 Jun, 2023</p>
																		</div>
																		<div class="comment-reply floatright">
																			<a href="#"><i class="zmdi zmdi-mail-reply"></i></a>
																			<a href="#"><i class="zmdi zmdi-close"></i></a>
																		</div>
																	</div>
																	<p class="mb-0">The Salesmen were very nice, and their job and craftmanship was great!.</p>
																</div>
															</li>
														</ul>
													</div>
													<div class="leave-review">
														<h3 class="tab-title title-border mb-30">Leave your review</h3>
														<div class="your-rating mb-30">
															<p class="mb-10"><strong>Your Rating</strong></p>
															<span>
																<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
															</span>
															<span class="separator">|</span>
															<span>
																<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
																<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
															</span>
															<span class="separator">|</span>
															<span>
																<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
																<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
																<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
															</span>
															<span class="separator">|</span>
															<span>
																<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
																<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
																<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
																<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
															</span>
															<span class="separator">|</span>
															<span>
																<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
																<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
																<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
																<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
																<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
															</span>
														</div>
														<div class="reply-box">
															<form action="#">
																<div class="row">
																	<div class="col-md-6">
																		<input type="text" placeholder="Your name here..." name="name" />
																	</div>
																	<div class="col-md-6">
																		<input type="text" placeholder="Subject..." name="name" />
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-12">
																		<textarea class="custom-textarea" name="message" placeholder="Your review here..." ></textarea>
																		<button type="submit" data-text="submit review" class="button-one submit-button mt-20">submit review</button>
																	</div>
																</div>
															</form>
														</div>
													</div>
												</div>		
											</div>
											<div class="tab-pane" id="information">
												<div class="pro-tab-info pro-information">
													<h3 class="tab-title title-border mb-30">Product information</h3>
													<p>The bed is crafted from high-grade solid wood, ensuring a robust and long-lasting frame. The wood undergoes treatment to make it resistant to termites and other potential pests. </p>
													<p>The bed boasts a contemporary design with clean lines and a minimalist approach. The headboard features a tufted design, providing both an aesthetic appeal and added comfort for users who might want to sit up and read. </p>
													<p>The bed comes with a detailed instruction manual, ensuring easy assembly. All joints and connections are reinforced for added stability. Maintenance is straightforward; periodic dusting and wiping with a damp cloth are all that's required to keep the bed looking pristine.</p>
												</div>											
											</div>
											<div class="tab-pane" id="tags">
												<div class="pro-tab-info pro-information">
													<h3 class="tab-title title-border mb-30">tags</h3>
													<p>Deluxe Bed</p>
													<p>Supportive Coils</p>
													<p>Aesthetics</p>
													<p>Memory Foam</p>
												</div>											
											</div>
										</div>									
									</div>
								</div>
							</div>
							<!-- single-product-tab end -->
						</div>
						<div class="col-lg-3 mt-tab-30">
										
							</aside>
							<!-- Widget-categories end -->
							<!-- Widget-product start -->
							<aside class="widget widget-product mb-30">
								<div class="widget-title">
									<h4>Recently viewed</h4>
								</div>
								<div class="widget-info sidebar-product clearfix">
									
									<div class="single-product">
										<div class="product-img">
											<a href="#"><img src="img/product/12.jpg" alt="" /></a>
										</div>
										<div class="product-info">
											<h4 class="post-title"><a href="#">Kitchen Table set </a></h4>
											<span class="pro-price">$ 50.20</span>
										</div>
									</div>
									<div class="single-product">
										<div class="product-img">
											<a href="#"><img src="img/product/1.jpg" alt="" /></a>
										</div>
										<div class="product-info">
											<h4 class="post-title"><a href="#">Table</a></h4>
											<span class="pro-price">$ 26.20</span>
										</div>
									</div>
									<div class="single-product">
										<div class="product-img">
											<a href="#"><img src="img/product/6.jpg" alt="" /></a>
										</div>
										<div class="product-info">
											<h4 class="post-title"><a href="#">Green Fur Sofa</a></h4>
											<span class="pro-price">$ 79.20</span>
										</div>
									</div>
									<div class="single-product">
										<div class="product-img">
											<a href="#"><img src="img/product/3.jpg" alt="" /></a>
										</div>
										<div class="product-info">
											<h4 class="post-title"><a href="#">Table Lamp</a></h4>
											<span class="pro-price">$ 10.20</span>
										</div>
									</div>
								</div>
							</aside>
						</div>
					</div>
				</div>
			</div>
			
			<footer>
				
				<div class="footer-area footer-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="single-footer">
                                    <h3 class="footer-title  title-border">Contact Us</h3>
                                    <ul class="footer-contact">
                                        <li><span>Address :</span>28 Green Tower, Street Name,<br>New York City, USA</li>
                                        <li><span>Cell-Phone :</span>012345 - 123456789</li>
                                        <li><span>Email :</span>hurst@gmail.com</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-6">
                                <div class="single-footer">
                                    <h3 class="footer-title  title-border">accounts</h3>
                                    <ul class="footer-menu">
                                        <li><a href="#"><i class="zmdi zmdi-dot-circle"></i>My Account</a></li>
                                        <li><a href="cart.php"><i class="zmdi zmdi-dot-circle"></i>My Cart</a></li>
										<li><a href="index.php"><i class="zmdi zmdi-dot-circle"></i>Home</a></li>  
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-footer newsletter-item">
                                    <h3 class="footer-title  title-border">Email Newsletters</h3>
                                    <div class="footer-subscribe">
                                        <form action="#">
                                            <input type="text" name="email" placeholder="Email Address..." />
                                            <button class="button-one submit-btn-4" type="submit" data-text="Subscribe">Subscribe</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>		
			</div>
		</div>
		
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
