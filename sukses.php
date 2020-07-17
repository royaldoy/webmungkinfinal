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
						<div class="main col-md-8 col-md-offset-2">

							<!-- page-title start -->
							<!-- ================ -->
							<h1 class="page-title text-center">Terimakasih <i class="fa fa-smile-o pl-10"></i></h1>
							<div class="separator"></div>
							<!-- page-title end -->
							<p class="lead text-center">Silakan lakukan pembayaran dan tunggu kurir datang ke rumah anda dengan tenang.</p>
							<p class="text-center">
								<a href="home.php" class="btn btn-default btn-lg">Lanjutkan Belanja!</a>	
								<a href="invoice.php" class="btn btn-danger btn-lg">Lihat Invoice</a>	
							</p>

						</div>
						<!-- main end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->
			
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
