<?php 
session_start();
require("config/db.php");
?>
<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->

	<?php require_once "header.php"; ?>

	<!-- body classes:  -->
	<!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
	<!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
	<!-- "transparent-header": makes the header transparent and pulls the banner to top -->
	<!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->
	<body class="no-trans transparent-header page-loader-1">
		<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>
		
		<!-- page wrapper start -->
		<!-- ================ -->
		<div class="page-wrapper">
		
			<!-- header-container start -->
			<?php require_once "navbar.php"; ?>
			<!-- header-container end -->
			
			

			<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container"  style="padding: 5px 0px;>
			<!-- banner start -->
			<!-- ================ -->
			

			<!-- section start -->
			<!-- ================ -->
			<section class="section light-gray-bg clearfix"">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<!-- pills start -->
							<!-- ================ -->
							<!-- Nav tabs -->
							<ul class="nav nav-pills" role="tablist">
								<li class="active"><a href="#pill-1" role="tab" data-toggle="tab" title="Pria"><i class="icon-star"></i>Pria</a></li>
								<li><a href="#pill-2" role="tab" data-toggle="tab" title="Wanita"><i class="icon-heart"></i> Wanita</a></li>
								<li><a href="#pill-3" role="tab" data-toggle="tab" title="Anak - Anak"><i class=" icon-up-1"></i> Anak - Anak </a></li>
							</ul>
							<!-- Tab panes -->
							<div class="tab-content clear-style">
								<div class="tab-pane active" id="pill-1">
									<div class="row masonry-grid-fitrows grid-space-10">
									<?php 									       
									$queryWanita = "SELECT * FROM tabel_produk where kategori='pria' LIMIT  0,8";
									$query_wanita = mysqli_query($conn,$queryWanita);
								while($arrayWanita = mysqli_fetch_array($query_wanita)){
									echo '
									<div class="col-md-3 col-sm-6 masonry-grid-item">
											<div class="listing-item white-bg bordered mb-20">
												<div class="overlay-container" style="width:280px;height:400px;">
													<img src="admin/proses/'.$arrayWanita['path'].'" alt="'.$arrayWanita['path'].'">
													<a class="overlay-link popup-img-single" href="admin/proses/'.$arrayWanita['path'].'"><i class="fa fa-search-plus"></i></a>
													
													<div class="overlay-to-top links">
														<span class="small">
															<a href="#" class="btn-sm-link"><i  class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
															<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
														</span>
													</div>
												</div>
												<div class="body">
													<h3><a href="shop-product.html">'.$arrayWanita['nama'].'</a></h3>
													<p class="small">'.$arrayWanita['keterangan'].'</p>
													<div class="elements-list clearfix">
														<span class="price"> Rp.'.$arrayWanita['harga'].'</span>
													';
				if(isset($_SESSION['idUser'])){
											if($arrayWanita['stock'] > 0){
										echo '													
													<a href="proses/beli.php?idProduk='.$arrayWanita['idProduk'].'&idUser='.$iduser.'" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Tambah Ke Keranjang<i class="fa fa-shopping-cart"></i></a>
													';
											}else{
													echo '
															<a href="" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated disabled">Tambah Ke Keranjang<i class="fa fa-shopping-cart"></i></a>
														';
													}
											}else{
											echo '
												<a href="" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated disabled">Tambah Ke Keranjang<i class="fa fa-shopping-cart"></i></a>
													';
											}
								echo '							
														
													</div>
												</div>
											</div>
									</div>
									';
								}
										?>										
									</div>
								</div>
								<div class="tab-pane" id="pill-2">
									<div class="row masonry-grid-fitrows grid-space-10">
										<?php 									       
									$queryWanita = "SELECT * FROM tabel_produk where kategori='wanita' LIMIT  0,8";
									$query_wanita = mysqli_query($conn,$queryWanita);
								while($arrayWanita = mysqli_fetch_array($query_wanita)){
									echo '
									<div class="col-md-3 col-sm-6 masonry-grid-item">
											<div class="listing-item white-bg bordered mb-20">
												<div class="overlay-container" style="width:280px;height:400px;">
													<img src="admin/proses/'.$arrayWanita['path'].'" alt="'.$arrayWanita['path'].'">
													<a class="overlay-link popup-img-single" href="admin/proses/'.$arrayWanita['path'].'"><i class="fa fa-search-plus"></i></a>
													
													<div class="overlay-to-top links">
														<span class="small">
															<a href="#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
															<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
														</span>
													</div>
												</div>
												<div class="body">
													<h3><a href="shop-product.html">'.$arrayWanita['nama'].'</a></h3>
													<p class="small">'.$arrayWanita['keterangan'].'</p>
													<div class="elements-list clearfix">
														<span class="price"> Rp.'.$arrayWanita['harga'].'</span>
													';
				if(isset($_SESSION['idUser'])){
											if($arrayWanita['stock'] > 0){
										echo '													
													<a href="proses/beli.php?idProduk='.$arrayWanita['idProduk'].'&idUser='.$iduser.'" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Tambah Ke Keranjang<i class="fa fa-shopping-cart"></i></a>
													';
											}else{
													echo '
															<a href="" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated disabled">Tambah Ke Keranjang<i class="fa fa-shopping-cart"></i></a>
														';
													}
											}else{
											echo '
												<a href="" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated disabled">Tambah Ke Keranjang<i class="fa fa-shopping-cart"></i></a>
													';
											}
								echo '							
														
													</div>
												</div>
											</div>
									</div>
									';
								}
										?>	
									</div>
								</div>
								<div class="tab-pane" id="pill-3">
									<div class="row masonry-grid-fitrows grid-space-10">
										<?php 									       
									$queryWanita = "SELECT * FROM tabel_produk where kategori='anak' LIMIT  0,8";
									$query_wanita = mysqli_query($conn,$queryWanita);
								while($arrayWanita = mysqli_fetch_array($query_wanita)){
									echo '
									<div class="col-md-3 col-sm-6 masonry-grid-item">
											<div class="listing-item white-bg bordered mb-20">
												<div class="overlay-container" style="width:280px;height:400px;">
													<img src="admin/proses/'.$arrayWanita['path'].'"  alt="'.$arrayWanita['path'].'">
													<a class="overlay-link popup-img-single" href="admin/proses/'.$arrayWanita['path'].'"><i class="fa fa-search-plus"></i></a>
													
													<div class="overlay-to-top links">
														<span class="small">
															<a href="#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
															<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
														</span>
													</div>
												</div>
												<div class="body">
													<h3><a href="shop-product.html">'.$arrayWanita['nama'].'</a></h3>
													<p class="small">'.$arrayWanita['keterangan'].'</p>
													<div class="elements-list clearfix">
														<span class="price"> Rp.'.$arrayWanita['harga'].'</span>
													';
				if(isset($_SESSION['idUser'])){
											if($arrayWanita['stock'] > 0){
										echo '													
													<a href="proses/beli.php?idProduk='.$arrayWanita['idProduk'].'&idUser='.$iduser.'" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Tambah Ke Keranjang<i class="fa fa-shopping-cart"></i></a>
													';
											}else{
													echo '
															<a href="" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated disabled">Tambah Ke Keranjang<i class="fa fa-shopping-cart"></i></a>
														';
													}
											}else{
											echo '
												<a href="" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated disabled">Tambah Ke Keranjang<i class="fa fa-shopping-cart"></i></a>
													';
											}
								echo '							
														
													</div>
												</div>
											</div>
									</div>
									';
								}
										?>	
									</div>
								</div>
								
								</div>
							</div>
							<!-- pills end -->
						</div>
					</div>
				</div>
			</section>
			<!-- section end -->
				
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
		<?php require_once "script.php"; ?>
	</body>
</html>
