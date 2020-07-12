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
							<h1 class="page-title">Checkout</h1>
							<div class="separator-2"></div>
							<!-- page-title end -->

							<table class="table cart">
								<thead>
									<tr>
										<th>Produk </th>
										<th>Harga </th>
										<th>Jumlah</th>
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
										         <tr>
										<td class="product"><a href="#">'.$arrayProduk['nama'].'</a> <small>'.$arrayProduk['keterangan'].'</small></td>
										<td class="price">Rp '.$arrayProduk['harga'].' </td>
										<td class="quantity">
											<div class="form-group">
												<input type="text" class="form-control" value="'.$arrayTrolly['jumlah'].'" disabled>
											</div>											
										</td>
										<td class="amount">'.$arrayTrolly['harga'].' </td>
									</tr>
									      
											';
											
											}
									}
									
									$queryTotalBayar = mysqli_query($conn, "SELECT SUM(harga) as harga, sum(jumlah) as jml FROM tabel_trolly WHERE idUser='$_SESSION[idUser]'");
										$arrayTotal = mysqli_fetch_array($queryTotalBayar);
									echo '
									
									<tr>
										<td class="total-quantity" colspan="3">Total '.$arrayTotal[1].'Items</td>
										<td class="total-amount">'.$arrayTotal[0].'</td>
									</tr>
									';
									?>
											
									
									
								</tbody>								
							</table>
							<div class="space-bottom"></div>
								<?php             									
										$sql_alamat	= "SELECT * FROM tabel_alamat WHERE idUser='$_SESSION[idUser]'";
										$querypelanggan = mysqli_query($conn, $sql_alamat);
										$jumlah = mysqli_num_rows($querypelanggan);
											if($jumlah > 0){																								
											$array_alamat = mysqli_fetch_array($querypelanggan);															
											
											
											echo '<form role="form" class="form-horizontal" id="billing-information" method="post" action="proses/edit_alamat.php">';
											?>
											
							<fieldset>
								<legend>Informasi Pengiriman dan Penagihan</legend>								
									<div class="row">
										<div class="col-lg-3">
											<h3 class="title">Pelanggan</h3>
										</div>									
										<div class="col-lg-8 col-lg-offset-1">											
											<div class="form-group">
												<label for="billingFirstName" class="col-md-2 control-label">Nama<small class="text-default">*</small></label>
												<div class="col-md-10">
													<input type="text" class="form-control" name="nama" id="billingFirstName" value="<?php echo $array_alamat['nama'];?>" placeholder="Nama">
												</div>
											</div>
											
											<div class="form-group">
												<label for="billingTel" class="col-md-2 control-label">Nomor Telp<small class="text-default">*</small></label>
												<div class="col-md-10">
													<input type="text" class="form-control" name="no_telp" id="billingTel" value="<?php echo $array_alamat['no_telp'];?>" placeholder="Nomor Telp">
												</div>
											</div>											
											<div class="form-group">
												<label for="billingemail" class="col-md-2 control-label">Email<small class="text-default">*</small></label>
												<div class="col-md-10">
													<input type="email" class="form-control" name="email" id="billingemail" value="<?php echo $array_alamat['email'];?>" placeholder="abcd@gmail.com">
												</div>
											</div>
										</div>
									</div>
									<div class="space"></div>
									<div class="row">
										<div class="col-lg-3">
											<h3 class="title">Alamatmu</h3>
										</div>
										<div class="col-lg-8 col-lg-offset-1">
											<div class="form-group">
												<label for="billingAddress1" class="col-md-2 control-label">Alamat<small class="text-default">*</small></label>
												<div class="col-md-10">
													<input type="text" class="form-control" id="billingAddress1" name="alamat" value="<?php echo $array_alamat['alamat'];?>" placeholder="Jl. Ambasador no 11">
												</div>
											</div>
											<div class="form-group">
												<label for="billingAddress2" class="col-md-2 control-label">Kecamatan</label>
												<div class="col-md-10">
													<input type="text" class="form-control" id="billingAddress2" name="kecamatan" value="<?php echo $array_alamat['kecamatan'];?>" placeholder="Bayangkara">
												</div>
											</div>											
											<div class="form-group">
												<label for="billingCity" class="col-md-2 control-label">Kota<small class="text-default">*</small></label>
												<div class="col-md-10">
													<input type="text" class="form-control" id="billingCity" name="kota" value="<?php echo $array_alamat['kota'];?>" placeholder="Surakarta">
												</div>
											</div>
											<div class="form-group">
												<label for="billingPostalCode" class="col-md-2 control-label">Kode Pos<small class="text-default">*</small></label>
												<div class="col-md-10">
													<input type="text" class="form-control" id="billingPostalCode" name="kode_pos" value="<?php echo $array_alamat['kode_pos'];?>" placeholder="61677">
												</div>
											</div>
										</div>
									</div>
									<div class="space"></div>
									<div class="row">
										<div class="col-lg-3">
											<h3 class="title">Informasi Tambahan </h3>
										</div>
										<div class="col-lg-8 col-lg-offset-1">
											<div class="form-group">
												<div class="col-md-12">
													<textarea class="form-control" rows="4" name="tambahan"><?php echo $array_alamat['tambahan'];?></textarea>
												</div>
											</div>
										</div>
									</div>
																			
							</fieldset>		
							<?php } else { echo '<form role="form" class="form-horizontal" id="billing-information" method="post" action="proses/tambah_alamat.php">'; ?>
							<fieldset>
								<legend>Informasi Pengiriman dan Penagihan</legend>
								
									<div class="row">
										<div class="col-lg-3">
											<h3 class="title">Pelanggan</h3>
										</div>									
										<div class="col-lg-8 col-lg-offset-1">											
											<div class="form-group">
												<label for="billingFirstName" class="col-md-2 control-label">Nama<small class="text-default">*</small></label>
												<div class="col-md-10">
													<input type="text" class="form-control" name="nama" id="billingFirstName" value="" placeholder="Nama">
												</div>
											</div>
											
											<div class="form-group">
												<label for="billingTel" class="col-md-2 control-label">Nomor Telp<small class="text-default">*</small></label>
												<div class="col-md-10">
													<input type="text" class="form-control" name ="no_telp" id="billingTel" value="" placeholder="Nomor Telp">
												</div>
											</div>											
											<div class="form-group">
												<label for="billingemail" class="col-md-2 control-label">Email<small class="text-default">*</small></label>
												<div class="col-md-10">
													<input type="email" class="form-control" name="email" id="billingemail" value="" placeholder="abcd@gmail.com">
												</div>
											</div>
										</div>
									</div>
									<div class="space"></div>
									<div class="row">
										<div class="col-lg-3">
											<h3 class="title">Alamatmu</h3>
										</div>
										<div class="col-lg-8 col-lg-offset-1">
											<div class="form-group">
												<label for="billingAddress1" class="col-md-2 control-label">Alamat<small class="text-default">*</small></label>
												<div class="col-md-10">
													<input type="text" class="form-control" name="alamat" id="billingAddress1" value="" placeholder="Jl. Ambasador no 11">
												</div>
											</div>
											<div class="form-group">
												<label for="billingAddress2" class="col-md-2 control-label">Kecamatan</label>
												<div class="col-md-10">
													<input type="text" class="form-control" name="kecamatan" id="billingAddress2" value="" placeholder="Bayangkara">
												</div>
											</div>											
											<div class="form-group">
												<label for="billingCity" class="col-md-2 control-label">Kota<small class="text-default">*</small></label>
												<div class="col-md-10">
													<input type="text" class="form-control" name="kota" id="billingCity" value="" placeholder="Surakarta">
												</div>
											</div>
											<div class="form-group">
												<label for="billingPostalCode" class="col-md-2 control-label">Kode Pos<small class="text-default">*</small></label>
												<div class="col-md-10">
													<input type="text" class="form-control" name="kode_pos" id="billingPostalCode" value="" placeholder="61677">
												</div>
											</div>
										</div>
									</div>
									<div class="space"></div>
									<div class="row">
										<div class="col-lg-3">
											<h3 class="title">Informasi Tambahan </h3>
										</div>
										<div class="col-lg-8 col-lg-offset-1">
											<div class="form-group">
												<div class="col-md-12">
													<textarea class="form-control" rows="4" name="tambahan"></textarea>
												</div>
											</div>
										</div>
									</div>
											
								
							</fieldset>		
							<?php }?>			
							<div class="text-right">	
								<a href="keranjang.php" class="btn btn-group btn-default"><i class="icon-left-open-big"></i> Kembali Ke Keranjang</a>
								<button type="submit" name="submit" class="btn btn-group btn-default" value="submit">Step Selanjutnya <i class="icon-right-open-big"></i></button>
							</div>
							<?php echo '</form>';?>

						</div>
						<!-- main end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->

			
			<!-- footer top end -->
			<?php require_once "footer.php"; ?>
			<!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
			<!-- ================ -->
			
			<!-- footer end -->
			
		</div>
		<!-- page-wrapper end -->
		
		<!-- JavaScript files placed at the end of the document so the pages load faster -->
		<!-- ================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<?php require_once "script.php"; ?>
	</body>
</html>
