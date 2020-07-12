<?php 
  require('config/db.php');
  session_start();
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
							<h1 class="page-title">Shopping Cart</h1>
							<div class="separator-2"></div>
							<!-- page-title end -->

							<table class="table cart table-hover table-colored">
								<thead>
									<tr>
										<th>Product </th>
										<th>Price </th>
										<th>Quantity</th>
										<th>Remove </th>
										<th class="amount">Total </th>
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
										echo '
										<tr class="remove-data">
										
										<td class="product"><a href="shop-product.html">'.$arrayProduk['nama'].'</a> <small>'.$arrayProduk['keterangan'].'</small></td>
										<td class="price">Rp '.$arrayProduk['harga'].'</td>
										<td class="quantity">										
										<form action="proses/updateTrolly.php" method="post">
											<div class="form-group">
												<input type="hidden" name="harga" value="'.$arrayProduk['harga'].'">
												<input type="hidden" name="idTrolly" value="'.$arrayTrolly['idTrolly'].'">
												<input type="text" name="jumlah" class="form-control" value="'.$arrayTrolly['jumlah'].'">
											</div>											
										</form>	
										</td>
										<td class="remove"><a href="proses/batalBeli.php?idTrolly='.$arrayTrolly['idTrolly'].'" class="btn btn-remove btn-sm btn-default">Remove</a></td>
										<td class="amount">'.$arrayTrolly['harga'].' </td>
										
									</tr>                
											';
											}
									}
									
										$queryTotalBayar = mysqli_query($conn, "SELECT SUM(harga) as harga, sum(jumlah) as jml FROM tabel_trolly WHERE idUser='$_SESSION[idUser]'");
										$arrayTotal = mysqli_fetch_array($queryTotalBayar);
									echo '
									<tr>
										<td class="total-quantity" colspan="4">Total '.$arrayTotal[1].' Items</td>
										<td class="total-amount">Rp. '.$arrayTotal[0].'</td>	
										</tr>
									';
               ?>
										
									
								</tbody>
							</table>
							<div class="text-right">	
								<a href="home.php" class="btn btn-group btn-dark">Belanja Lagi</a>
								<a href="checkout.php" class="btn btn-group btn-default">Checkout</a>
							</div>

						</div>
						<!-- main end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->

			<!-- section start -->
			<!-- ================ -->
			
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
