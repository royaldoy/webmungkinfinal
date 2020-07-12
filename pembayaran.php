<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<?php 
session_start();
require("config/db.php");
?>
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->

	<?php require_once "header.php"; ?>

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
			<?php require_once "navbar.php"; ?>
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
							<h1 class="page-title">Pilih Pembayaran</h1>
							<div class="separator-2"></div>
							<!-- page-title end -->
							
							<fieldset>
								<legend>Pembayaran</legend>
								<form role="form" class="form-horizontal" id="payment-information">									
									<div class="space"></div>
									<div class="row">
										<div class="col-lg-3">
											<div class="radio">
												<label>
													<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
													OVO <b>|</b> DANA <i class="fa fa-cc-paypal pl-10"></i>
												</label>
											</div>
											<div class="space-bottom"></div>
										</div>
										<div class="col-lg-9">
											<p>Transfer ke OVO atau DANA ke nomor ini <b>085156616517</b></p>
										</div>
									</div>
									<div class="space"></div>
									<div class="row">
										<div class="col-lg-3">
											<div class="radio">
												<label>
													<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
													Cash On Delivery
												</label>
											</div>
											<div class="space-bottom"></div>
										</div>
										<div class="col-lg-9">
											<p>Pembayaran dilakukan ketika kurir sampai ke rumah dan memberikan pesanan yang telah dipesan.</p>
										</div>
									</div>
								</form>
							</fieldset>
							
							<fieldset>
								<legend>Catatan</legend>
								<form role="form" class="form-horizontal" id="payment-information">									
									<div class="space"></div>
									<div class="row">
										<div class="col-lg-3">
											<p><b>Catatan</b></p>
											
										</div>
										<div class="col-lg-9">
											<p>Biaya pengiriman ke alamat pelanggan sudah ditanggung oleh penjual</p>
										</div>
									</div>									
								</form>
							</fieldset>
							<div class="text-right">	
								<a href="checkout.php" class="btn btn-group btn-default"><i class="icon-left-open-big"></i>Kembali</a>
								<a href="proses/bayar.php?idUser=<?php echo $_SESSION['idUser'];?>" class="btn btn-group btn-default">Selesaikan Orderan Ini <i class="icon-right-open-big"></i></a>
							</div>

						</div>
						<!-- main end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->

			
			<!-- section end -->
			
			<!-- footer top start -->
			<!-- ================ -->		
			<!-- footer top end -->
			
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
