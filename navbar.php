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
										<li><i class="fa fa-envelope-o pr-5 pl-10"></i> batiksurakarta@mail.com</li>
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
											<a href="daftar.html" class="btn btn-default btn-sm"><i class="fa fa-user pr-10"></i> Sign Up</a>
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
									<div id="logo" class="logo">
										<a href="index.html"><img id="logo_img" src="images/logo_light_blue.png" alt="The Project"></a>
									</div>

									<!-- name-and-slogan -->
									<div class="site-slogan">
										Multipurpose HTML5 Template
									</div>
									
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
														$sql_dot = mysqli_query($conn, "SELECT sum(jumlah) as jml FROM tabel_trolly WHERE idUser='$_SESSION[idUser]'");
														$arraydot = mysqli_fetch_array($sql_dot);
														echo '																												
														<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="icon-basket-1"></i><span class="cart-count default-bg">'.$arraydot['jml'].'</span></button>
														';
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