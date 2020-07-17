<?php 
  require('config/db.php');
  session_start();
 ?>

<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<title>Toko Batik Surakarta</title>
		<meta name="description" content="The Project a Bootstrap-based, Responsive HTML5 Template">
		<meta name="author" content="htmlcoder.me">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Fontello CSS -->
		<link href="fonts/fontello/css/fontello.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
		<link href="css/animations.css" rel="stylesheet">
		<link href="plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
		<link href="plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
		<link href="plugins/hover/hover-min.css" rel="stylesheet">		

		<!-- the project core CSS file -->
		<link href="css/style.css" rel="stylesheet" media="screen">

		<!-- Print Invoice CSS -->
		<link href="css/print-invoice.css" rel="stylesheet" media="print">

		<!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
		<link href="css/skins/light_blue.css" rel="stylesheet">

		<!-- Custom css --> 
		<link href="css/custom.css" rel="stylesheet">
	</head>

	<!-- body classes:  -->
	<!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
	<!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
	<!-- "transparent-header": makes the header transparent and pulls the banner to top -->
	<!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->
	<body class="no-trans   ">

		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>
		
		<!-- page wrapper start -->
		<!-- ================ -->
		<div class="page-wrapper">
		
			<!-- header-container start -->
						<!-- header-container start -->
			<div class="header-container">
				
				<!-- header-top start -->
				<!-- classes:  -->
				<!-- "dark": dark version of header top e.g. class="header-top dark" -->
				<!-- "colored": colored version of header top e.g. class="header-top colored" -->
				<!-- ================ -->
				<div class="header-top colored ">
					<div class="container">
						<div class="row">
							<div class="col-xs-3 col-sm-6 col-md-9">
								<!-- header-top-first start -->
								<!-- ================ -->
								<div class="header-top-first clearfix">
									<ul class="social-links circle small clearfix hidden-xs">
										<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>													
										<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
										<li class="instagram"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-instagram"></i></a></li>
									</ul>
									<div class="social-links hidden-lg hidden-md hidden-sm circle small">
										<div class="btn-group dropdown">
											<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt"></i></button>
											<ul class="dropdown-menu dropdown-animation">
										<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>													
										<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
										<li class="instagram"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-instagram"></i></a></li>
											</ul>
										</div>
									</div>
									<ul class="list-inline hidden-sm hidden-xs">
										<li><i class="fa fa-map-marker pr-5 pl-10"></i>Surakarta</li>
										<li><i class="fa fa-phone pr-5 pl-10"></i>+62 851 341651</li>
										<li><i class="fa fa-envelope-o pr-5 pl-10"></i> adhiwastrajakarta@gmail.com</li>
									</ul>
								</div>
								<!-- header-top-first end -->
							</div>
							<div class="col-xs-9 col-sm-6 col-md-3">

								<!-- header-top-second start -->
								<!-- ================ -->
								<div id="header-top-second"  class="clearfix">

									<!-- header top dropdowns start -->
									<!-- ================ -->
									 
									<div class="header-top-dropdown text-right">
									<?php 
									
											$conn = mysqli_connect('localhost', 'root', '', 'batiku');
											if(isset($_SESSION['idUser'])){
											$iduser = $_SESSION['idUser'];
											$queryUser = mysqli_query($conn, "SELECT * FROM tabel_user WHERE idUser='$_SESSION[idUser]'");
											$arrayUser = mysqli_fetch_array($queryUser);
												echo '
											<ul class="list-inline hidden-sm hidden-xs">										
													<li><i class="fa fa-user pr-5 pl-10"></i>'.$arrayUser['email'].'</li>
												</ul> 
												
											<div class="btn-group">
											<a href="proses/logout.php" class="btn btn-default btn-sm"> Logout</a>
										</div>	
										';
											}else{
											echo '
											<div class="btn-group">
											<a href="daftar.php" class="btn btn-default btn-sm"><i class="fa fa-user pr-10"></i> Sign Up</a>
										</div>
										<div class="btn-group dropdown">
											<button type="button" class="btn dropdown-toggle btn-default btn-sm" data-toggle="dropdown"><i class="fa fa-lock pr-10"></i> Login</button>
											<ul class="dropdown-menu dropdown-menu-right dropdown-animation">
												<li>
													<form class="login-form margin-clear" action="proses/login.php" method="post">
														<div class="form-group has-feedback">
															<label class="control-label">Email</label>
															<input type="email" name="email" class="form-control" placeholder="email@email.com">
															<i class="fa fa-user form-control-feedback"></i>
														</div>
														<div class="form-group has-feedback">
															<label class="control-label">Password</label>
															<input type="password" name="password" class="form-control" placeholder="">
															<i class="fa fa-lock form-control-feedback"></i>
														</div>
														<button type="submit" class="btn btn-gray btn-sm">Log In</button>
																												
													</form>
												</li>
											</ul>
										</div>
											';
										}
															?>
										
									</div>
									<!--  header top dropdowns end -->
								</div>
								<!-- header-top-second end -->
							</div>
						</div>
					</div>
				</div>
				<!-- header-top end -->
				
				<!-- header start -->
				<!-- classes:  -->
				<!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
				<!-- "dark": dark version of header e.g. class="header dark clearfix" -->
				<!-- "full-width": mandatory class for the full-width menu layout -->
				<!-- "centered": mandatory class for the centered logo layout -->
				<!-- ================ --> 
				<header class="header  fixed clearfix">
					
					<div class="container">
						<div class="row">
							<div class="col-md-3">
								<!-- header-left start -->
								<!-- ================ -->
								<div class="header-left clearfix">

									<!-- logo -->
									
										<a href="home.php"><img id="logo_img" src="images/logo_web3.png" style="height:60px" alt="Batik Ardhiwastra"></a>										
										
									
								</div>
								<!-- header-left end -->

							</div>
							<div class="col-md-9">
					
								<!-- header-right start -->
								<!-- ================ -->
								<div class="header-right clearfix">
									
								<!-- main-navigation start -->
								<!-- classes: -->
								<!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
								<!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
								<!-- "with-dropdown-buttons": Mandatory class that adds extra space, to the main navigation, for the search and cart dropdowns -->
								<!-- ================ -->
								<div class="main-navigation  animated with-dropdown-buttons">

									<!-- navbar start -->
									<!-- ================ -->
									<nav class="navbar navbar-default" role="navigation">
										<div class="container-fluid">

											<!-- Toggle get grouped for better mobile display -->
											<div class="navbar-header">
												<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
													<span class="sr-only">Toggle navigation</span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
												</button>
												
											</div>

											<!-- Collect the nav links, forms, and other content for toggling -->
											<div class="collapse navbar-collapse" id="navbar-collapse-1">
											
												<!-- main-menu -->
												<ul class="nav">
												
																<form role="search" class="search-box">
																	<div class="form-group has-feedback">
																		<input type="text" class="form-control" placeholder="Search">
																		<i class="icon-search form-control-feedback"></i>
																	</div>
																</form>		
												
												</ul>
												<!-- main-menu end -->
												
												<!-- header dropdown buttons -->
												<div class="header-dropdown-buttons hidden-xs ">													
													<div class="btn-group dropdown">													
													<?php
														if(isset($_SESSION['idUser'])){
														$sql_dot = mysqli_query($conn, "SELECT sum(jumlah) as jml FROM tabel_trolly WHERE idUser='$_SESSION[idUser]'");
														$arraydot = mysqli_fetch_array($sql_dot);
														echo '																												
														<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="icon-basket-1"></i><span class="cart-count default-bg">'.$arraydot['jml'].'</span></button>
														';} else {
															echo '																												
														<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="icon-basket-1"></i></button>
														';
														}
														?>
														<ul class="dropdown-menu dropdown-menu-right dropdown-animation cart">
															<li>
																<table class="table table-hover">
																	<thead>
																		<tr>
																			<th class="quantity">JML</th>
																			<th class="product">Produk</th>
																			<th class="amount">Subtotal</th>
																		</tr>
																	</thead>
																	<tbody>
																	<?php 
																	if(isset($_SESSION['idUser'])){
																	$queryKeranjang = mysqli_query($conn, "SELECT * FROM tabel_trolly WHERE idUser='$_SESSION[idUser]' ");
																	$jumlah = mysqli_num_rows($queryKeranjang);
																	if($jumlah > 0){
																		
																	$queryTrolly = "SELECT * FROM tabel_trolly WHERE idUser='$_SESSION[idUser]'";
																	$query_trolly = mysqli_query($conn, $queryTrolly);
																	
																	while($arrayTrolly = mysqli_fetch_array($query_trolly)){
																	$queryProduk = mysqli_query($conn, "SELECT * FROM tabel_produk WHERE idProduk='$arrayTrolly[idProduk]'");
																	$arrayProduk = mysqli_fetch_array($queryProduk);		
																		echo'
																		<tr>
																			<td class="quantity">'.$arrayTrolly['jumlah'].'</td>
																			<td class="product">'.$arrayProduk['nama'].'<span class="small">'.$arrayProduk['keterangan'].'</span></td>
																			<td class="amount">Rp '.$arrayProduk['harga'].'</td>
																		</tr>	
																	';
															}
																	
																		$queryTotalBayar = mysqli_query($conn, "SELECT SUM(harga) as harga, sum(jumlah) as jml FROM tabel_trolly WHERE idUser='$_SESSION[idUser]'");
																		$arrayTotal = mysqli_fetch_array($queryTotalBayar);
																		echo '																	
																		<tr>
																			<td class="total-quantity" colspan="2">Total '.$arrayTotal['jml'].' Items</td>
																			<td class="total-amount">'.$arrayTotal['harga'].'</td>
																		</tr>';
																	}
																		}
																		else{
																			
																			
																		}
																		
																		?>
																	</tbody>
																</table>
																<div class="panel-body text-right">	
																	<a href="keranjang.php" class="btn btn-group btn-gray btn-sm">View Cart</a>
																	<a href="checkout.php" class="btn btn-group btn-gray btn-sm">Checkout</a>
																</div>
															</li>
														</ul>
													</div>

												</div>
												<!-- header dropdown buttons end-->
												
											</div>

										</div>
									</nav>
									<!-- navbar end -->

								</div>
								<!-- main-navigation end -->	
								</div>
								<!-- header-right end -->
					
							</div>
						</div>
					</div>
					
				</header>
				<!-- header end -->
			</div>
			<!-- header-container end -->
			<!-- header-container end -->
		
			<!-- breadcrumb start -->
			<!-- ================ -->
			<!-- breadcrumb end -->

			<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container">

				<div class="container">
					<div class="row">

						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-12">

							<!-- page-title start -->
							<!-- ================ -->
							<h1 class="page-title">Invoice Pembayaran</h1>
							<div class="separator-2"></div>
							<!-- page-title end -->

							<div id="invoice-container" class="invoice-container">
								<div class="row">
									<div class="col-sm-6">
										<img src="images/logo_web3.png" alt="logo">
										<p class="invoice-slogan"></p>
										<address class="small">
											<strong>Adhiwastra Group.</strong><br>
											Wisma Gading Marina Suite 308, <br>
											Kelapa Gading, RT.15/RW.3<br>
											<abbr title="Phone">P:</abbr> (085) 6515 1123<br>
											E-mail: adhiwastrajakarta@gmail.com
										</address>
									</div>
									<div class="col-sm-offset-3 col-sm-3">
										<p class="text-right small"><strong>Invoice #001</strong> <br><?php echo date('l, d M Y'); ?></p>
										<h5 class="text-right">Pelanggan</h5>
										<p class="text-right small">
										<?php             									
										$sql_alamat	= "SELECT * FROM tabel_alamat WHERE idUser='$_SESSION[idUser]'";
										$querypelanggan = mysqli_query($conn, $sql_alamat);
										$jumlah = mysqli_num_rows($querypelanggan);
											if($jumlah > 0){																								
											$array_alamat = mysqli_fetch_array($querypelanggan);															
																																	
											?>											
											<strong>Nama:</strong> <span><?php echo $array_alamat['nama'];?></span> <br>
											<strong>Email:</strong> <?php echo $array_alamat['email'];?> <br>
											<strong>No.Telp:</strong> <?php echo $array_alamat['no_telp'];?> <br>
											<strong>Kecamatan:</strong><?php echo $array_alamat['kecamatan'];?> <br>										
											<strong>Kota:</strong><?php echo $array_alamat['kota'];?> <br>										
											<strong>Alamat:</strong><?php echo $array_alamat['alamat'];?> <br>										
											
											<?php }?>
										</p>
									</div>
								</div>
								<p class="small"><strong>Tambahan :</strong></p>
								<table class="table cart table-bordered">
									<thead>
										<tr>
											<th>Produk</th>
											<th> </th>
											<th></th>
											<th class="amount">Total </th>
										</tr>
									</thead>
									<tbody>
										
										<?php $conn = mysqli_connect('localhost', 'root', '', 'batiku');
										     $queryBarang = mysqli_query($conn, "SELECT * FROM tabel_transaksi where idUser = '$_SESSION[idUser]' order by idtransaksi desc limit 1");
										    $jumlah = mysqli_num_rows($queryBarang);
											if($jumlah == 0){
												echo '
												<tr>
												<td></td>
												<td></td>
												<td></td>
												<td style="width: 50vw">Belum Ada Transaksi</td>
												<td></td>
												<td></td>                            
													</tr>
													';
												}else{
												while($arrayBarang = mysqli_fetch_array($queryBarang)){                          
												echo '
													<tr>																								
													<td class="" colspan="3" ">'.$arrayBarang['daftarBarang'].'</td>
													<td class="amount">Rp. '.$arrayBarang['total'].'</td>                            													
													</tr>						
													
													<tr>
											<td class="total-quantity" colspan="3">Total</td>
											<td class="total-amount">Rp. '.$arrayBarang['total'].'</td>
										</tr>	';
												}	}	?>
													
																			
										 										
									</tbody>
								</table>
								<p class="small">Jika anda punya pertanyaan dengan orderan ini, silakan hubungi <strong>Batik Adhiwastra Jakarta.</strong> <br> Terimkasih sudah mengorder!</p>
								<hr>
							</div>
							<div class="text-right">	
								<button onclick="print_window();" class="btn btn-print btn-default-transparent btn-hvr hvr-shutter-out-horizontal">Print <i class="fa fa-print pl-10"></i></button>
							</div>
						</div>
						<!-- main end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->

		
			<!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
			<!-- ================ -->
			<?php require_once "footer.php"; ?>
			<!-- footer end -->
			
		</div>
		<!-- page-wrapper end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster -->
		<!-- ================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="plugins/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="plugins/modernizr.js"></script>

		<!-- Magnific Popup javascript -->
		<script type="text/javascript" src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
		
		<!-- Appear javascript -->
		<script type="text/javascript" src="plugins/waypoints/jquery.waypoints.min.js"></script>

		<!-- Count To javascript -->
		<script type="text/javascript" src="plugins/jquery.countTo.js"></script>
		
		<!-- Parallax javascript -->
		<script src="plugins/jquery.parallax-1.1.3.js"></script>

		<!-- Contact form -->
		<script src="plugins/jquery.validate.js"></script>

		<!-- Owl carousel javascript -->
		<script type="text/javascript" src="plugins/owl-carousel/owl.carousel.js"></script>
		
		<!-- SmoothScroll javascript -->
		<script type="text/javascript" src="plugins/jquery.browser.js"></script>
		<script type="text/javascript" src="plugins/SmoothScroll.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="js/template.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="js/custom.js"></script>
	</body>
</html>
