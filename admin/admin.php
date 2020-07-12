<?php
session_start();
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

   <style>
    #weatherWidget .currentDesc {
        color: #ffffff!important;
    }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {
            height: 150px;
        }
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }

    </style>
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
					<li class="menu-title">UI elements</li><!-- /.menu-title -->
                    <li class="active">
                        <a data-toggle="tab" href="#dashboard"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>                                    
                    <li><a data-toggle="tab" href="#user"><i class="menu-icon ti-user"></i>User </a></li>
					<li><a data-toggle="tab" href="#barang"><i class="menu-icon ti-pulse"></i>Barang </a></li>
					<li><a data-toggle="tab" href="#transaksi"><i class="menu-icon ti-money"></i>Transaksi </a></li>
					<li><a data-toggle="tab" href="#komentar"><i class="menu-icon ti-comment"></i>Komentar </a></li>
					<li><a data-toggle="tab" href="#admin"><i class="menu-icon ti-desktop"></i>Admin </a></li>
					
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
		
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
<!--
                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">3</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-check"></i>
                                    <p>Server #1 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-info"></i>
                                    <p>Server #2 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-warning"></i>
                                    <p>Server #3 overloaded.</p>
                                </a>
                            </div>
                        </div>
-->
                        
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">                          

                            <a class="nav-link" href="proses/logout.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
		
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
		<div class="tab-content">
		
            <!-- Animated -->
            
                <!-- Widgets  -->
			<div id="dashboard" class="tab-pane active">	
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="pe-7s-cash"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text">$<span class="count">23569</span></div>
                                            <div class="stat-heading">Revenue</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-cart"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">3435</span></div>
                                            <div class="stat-heading">Sales</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-3">
                                        <i class="pe-7s-browser"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">349</span></div>
                                            <div class="stat-heading">Templates</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">2986</span></div>
                                            <div class="stat-heading">Clients</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Widgets -->
				</div>
			<!-- Data User -->	
			<div id="user" class="tab-pane">
                <div class="clearfix"></div><!-- Orders -->                
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
								<div class="row">
								<div class="col-md-10">
								<h3	>Data User </h3>
								</div>
								<div class="col-md-2">								
								
								</div>
								</div>
										
                                    
                                </div>
                                <div class="card-body--">
                                    <div class="table-stats order-table ov-h">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th class="serial">#</th>
                                                    <th class="avatar">Nama</th>
                                                    <th>No Telp</th>
                                                    <th>Email</th>                                                    
													<th></th>
                                               <!-- <th>Quantity</th>
                                                    <th>Status</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
													$i = 1;
													$conn = mysqli_connect('localhost', 'root', '', 'batiku');
													$queryUser = mysqli_query($conn, "SELECT * FROM tabel_user ORDER BY idUser ASC");
													while($arrayUser = mysqli_fetch_array($queryUser)){
													echo '
													<tr>
													<td class="">'.$i++.'</td>
													<td class="">'.$arrayUser['namaUser'].'</td>
													<td class="">'.$arrayUser['telpon'].'</td>
													<td class="">'.$arrayUser['email'].'</td>													
													<td class=""><a href="proses/hapusUser.php?idUser='.$arrayUser['idUser'].'">
													<button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
													</a></td>
													</tr>
														';
													}
	
														?>  
                                                
                                            </tbody>
                                        </table>
                                    </div> <!-- /.table-stats -->
                                </div>
                            </div> <!-- /.card -->
                        </div>  <!-- /.col-lg-8 -->
                    </div><!-- /.col-md-4 -->
            </div>
			<!-- Data User End -->
			<!-- Data Barang-->	
			<div id="barang" class="tab-pane">
                <div class="clearfix"></div><!-- Orders -->   
				<div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
								<div class="row">
								<div class="col-md-10">
                                <h4>Data Barang</h4>
								</div>
								<div class="col-md-2">
                                <button class="btn btn-success btn-sm" id="tambah-data-barang" data-toggle="modal" data-target="#form-barang">Tambah Barang</button>								
								</div>
								</div>
                            </div>
                            <div class="card-body">                                

                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Pria</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Wanita</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Anak-anak</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">                                        
                                        <div class="table-stats order-table ov-h">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th class="serial">#</th>
                                                    <th class="avatar">Nama Barang</th>
                                                    <th>keterangan	</th>
                                                    <th>Harga</th>
                                                    <th>Ukuran</th>
													<th>Stock</th>													
													<th></th>
                                               <!--     <th>Status</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
												    <?php 
                        $conn = mysqli_connect('localhost', 'root', '', 'batiku');
                        $kategori = 'pria';
						$i = 1;
                        $query = mysqli_query($conn, "SELECT idProduk, nama, keterangan, harga, ukuran, stock, path FROM tabel_produk WHERE kategori='$kategori' ");
                        while($array = mysqli_fetch_array($query)){
                          echo '
                            <tr>
                              <td class="">'.$i++.'</td>
                              <td class="">'.$array['nama'].'</td>
                              <td class="">'.$array['keterangan'].'</td>
                              <td class="">'.$array['harga'].'</td>
                              <td class="">'.$array['ukuran'].'</td>
                              <td class="">'.$array['stock'].'</td>                              
                              <td class=""><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal'.$array['idProduk'].'"><i class="ti ti-slice"></i></button></td>
                            </tr>
                          ';
                          echo '
                             <!-- edit barang -->
			<div class="modal fade" id="modal'.$array['idProduk'].'" tabindex="-1" role="dialog" aria-labelledby="modal'.$array['idProduk'].'" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content" style="width:30vw;margin-top:10vh;">
                        <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 style="margin-left:150px"><strong>Edit Barang</strong></h4>
                            </div>
                            <div class="modal-body">
                                <form action="proses/updateProduk.php" method="post" role="form">
                                <input type="hidden" name="idProduk" value="'.$array['idProduk'].'">
                                <div class="form-group">
                                  <label for="harga">Harga (Jangan diisi apabila Harga tetap)</label>
                                  <input type="number" class="form-control" name="harga" id="harga">
                                </div>
                                <div class="form-group">
                                  <label for="stock">Stock Barang (Jangan diisi apabila Stock tetap)</label>
                                  <input type="number" class="form-control" id="stock" name="stock">
                                </div>
                                <button type="reset" data-dismiss="modal" class="btn btn-info">Batal</button>
                                <button type="submit" class="btn btn-primary">Edit</button>
                              </form>
                            </div>
                    </div>
                </div>
            </div>                        
                        <!-- end of modal edit barang -->
                          ';
                        }
                       ?>                                        
                                                
                                            </tbody>
                                        </table>
                                    </div> <!-- /.table-stats -->
                                     </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                         <div class="table-stats order-table ov-h">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th class="serial">#</th>
                                                    <th class="avatar">Nama Barang</th>
                                                    <th>keterangan	</th>
                                                    <th>Harga</th>
                                                    <th>Ukuran</th>
													<th>Stock</th>													
													<th></th>
                                               <!--     <th>Status</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
												    <?php 
                        $conn = mysqli_connect('localhost', 'root', '', 'batiku');
                        $kategori = 'wanita';
						$i = 1;
                        $query = mysqli_query($conn, "SELECT idProduk, nama, keterangan, harga, ukuran, stock, path FROM tabel_produk WHERE kategori='$kategori' ");
                        while($array = mysqli_fetch_array($query)){
                          echo '
                            <tr>
                              <td class="">'.$i++.'</td>
                              <td class="">'.$array['nama'].'</td>
                              <td class="">'.$array['keterangan'].'</td>
                              <td class="">'.$array['harga'].'</td>
                              <td class="">'.$array['ukuran'].'</td>
                              <td class="">'.$array['stock'].'</td>                              
                              <td class=""><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal'.$array['idProduk'].'"><i class="ti ti-slice"></i></button></td>
                            </tr>
                          ';
                          echo '
                             <!-- edit barang -->
			<div class="modal fade" id="modal'.$array['idProduk'].'" tabindex="-1" role="dialog" aria-labelledby="modal'.$array['idProduk'].'" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content" style="width:30vw;margin-top:10vh;">
                        <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 style="margin-left:150px"><strong>Edit Barang</strong></h4>
                            </div>
                            <div class="modal-body">
                                <form action="proses/updateProduk.php" method="post" role="form">
                                <input type="hidden" name="idProduk" value="'.$array['idProduk'].'">
                                <div class="form-group">
                                  <label for="harga">Harga (Jangan diisi apabila Harga tetap)</label>
                                  <input type="number" class="form-control" name="harga" id="harga">
                                </div>
                                <div class="form-group">
                                  <label for="stock">Stock Barang (Jangan diisi apabila Stock tetap)</label>
                                  <input type="number" class="form-control" id="stock" name="stock">
                                </div>
                                <button type="reset" data-dismiss="modal" class="btn btn-info">Batal</button>
                                <button type="submit" class="btn btn-primary">Edit</button>
                              </form>
                            </div>
                    </div>
                </div>
            </div>                        
                        <!-- end of modal edit barang -->
                          ';
                        }
                       ?>                                        
                                                
                                            </tbody>
                                        </table>
                                    </div> <!-- /.table-stats -->
                                    </div>
                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                         <div class="table-stats order-table ov-h">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th class="serial">#</th>
                                                    <th class="avatar">Nama Barang</th>
                                                    <th>keterangan	</th>
                                                    <th>Harga</th>
                                                    <th>Ukuran</th>
													<th>Stock</th>													
													<th></th>
                                               <!--     <th>Status</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
												    <?php 
                        $conn = mysqli_connect('localhost', 'root', '', 'batiku');
                        $kategori = 'anak';
						$i = 1;
                        $query = mysqli_query($conn, "SELECT idProduk, nama, keterangan, harga, ukuran, stock, path FROM tabel_produk WHERE kategori='$kategori' ");
                        while($array = mysqli_fetch_array($query)){
                          echo '
                            <tr>
                              <td class="">'.$i++.'</td>
                              <td class="">'.$array['nama'].'</td>
                              <td class="">'.$array['keterangan'].'</td>
                              <td class="">'.$array['harga'].'</td>
                              <td class="">'.$array['ukuran'].'</td>
                              <td class="">'.$array['stock'].'</td>                              
                              <td class=""><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal'.$array['idProduk'].'"><i class="ti ti-slice"></i></button></td>
                            </tr>
                          ';
                          echo '
                             <!-- edit barang -->
			<div class="modal fade" id="modal'.$array['idProduk'].'" tabindex="-1" role="dialog" aria-labelledby="modal'.$array['idProduk'].'" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content" style="width:30vw;margin-top:10vh;">
                        <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 style="margin-left:150px"><strong>Edit Barang</strong></h4>
                            </div>
                            <div class="modal-body">
                                <form action="proses/updateProduk.php" method="post" role="form">
                                <input type="hidden" name="idProduk" value="'.$array['idProduk'].'">
                                <div class="form-group">
                                  <label for="harga">Harga (Jangan diisi apabila Harga tetap)</label>
                                  <input type="number" class="form-control" name="harga" id="harga">
                                </div>
                                <div class="form-group">
                                  <label for="stock">Stock Barang (Jangan diisi apabila Stock tetap)</label>
                                  <input type="number" class="form-control" id="stock" name="stock">
                                </div>
                                <button type="reset" data-dismiss="modal" class="btn btn-info">Batal</button>
                                <button type="submit" class="btn btn-primary">Edit</button>
                              </form>
                            </div>
                    </div>
                </div>
            </div>                        
                        <!-- end of modal edit barang -->
                          ';
                        }
                       ?>                                        
                                                
                                            </tbody>
                                        </table>
                                    </div> <!-- /.table-stats -->
                                    </div>
                                </div>






                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    
                    </div>
			  <!-- modal form-admin -->
              <div class="modal fade" id="form-barang" tabindex="-1" role="dialog" aria-labelledby="form-barang" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                  <div class="modal-content" style="width:40vw;margin-top:10vh;">
                     <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 style="margin-left:150px"><strong>Tambahkan Barang</strong></h4>
                  </div>
                  <div class="modal-body">
                      <form action="proses/tambahProduk.php" method="post" role="form" enctype="multipart/form-data">
                      
                      <div class="form-group">
                        <label for="nama">Nama Barang</label>
                        <input type="text" class="form-control" name="nama" id="nama">
                      </div>
                      <div class="form-group">
                        <label for="foto">Foto Barang</label>
                        <input type="file" class="form-control" id="foto" name="foto">
                      </div>
                      <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" name="harga" id="harga">
                      </div>
                      <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select class="form-control" id="kategori" name="kategori">
                          <option value="pria">Pria</option>
                          <option value="wanita">Wanita</option>
                          <option value="anak">Anak-anak</option>
                          
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="ukuran">Ukuran</label>
                        <select class="form-control" id="ukuran" name="ukuran">
                          <option value="S">S</option>
                          <option value="M">M</option>
                          <option value="L">L</option>
                          <option value="XL">XL</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="stock">Stock Barang</label>
                        <input type="number" class="form-control" id="stock" name="stock">
                      </div>
                      <div class="form-group">
                        <label for="pesan">Keterangan : </label>
                        <textarea class="form-control" name="keterangan" style="resize:vertical" ></textarea>
                      </div>
                      <button type="reset" data-dismiss="modal" class="btn btn-primary">Batal</button>
                      <button type="submit" name="upload" class="btn btn-primary">Tambahkan</button>
                    </form>
                  </div>
                  </div>
                </div>
            </div>	
              <!-- end of modal -->
                   
            </div>
			<!-- Data Barang End 2-->	            			
			<!-- Data Transaksi -->	
			<div id="transaksi" class="tab-pane">
			
                <div class="clearfix"></div><!-- Orders --> 
						
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">								
								<h3	>Data Transaksi </h3>															
                                </div>
                                <div class="card-body--">
                                    <div class="table-stats order-table ov-h">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th class="">ID Transaksi</th>
													<th class="">Nama Pembeli</th>
													<th class="" >Nama Barang</th>
													<th class="">Total</th>													
													<th class="">Tanggal</th>
													<th class=""></th>
                                                </tr>
                                            </thead>
                                            <tbody>
											<?php 
                    
					$i = 1;
                    $conn = mysqli_connect('localhost', 'root', '', 'batiku');
                    $queryBarang = mysqli_query($conn, "SELECT tt.*,tu.namaUser FROM tabel_transaksi as tt, tabel_user as tu where tt.idUser = tu.idUser");
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
                            <td class="">'.$i++.'</td>
                            <td class="">'.$arrayBarang['namaUser'].'</td>
                            <td class="" style="width:30vw">'.$arrayBarang['daftarBarang'].'</td>
                            <td class="">Rp. '.$arrayBarang['total'].'</td>                            
                            <td class="">'.$arrayBarang['tanggal'].'</td>
                            <td class=""><a href="proses/hapusTransaksi.php?idTransaksi='.$arrayBarang['idTransaksi'].'"><button type="button" class="btn btn-danger btn-sm"><i class="ti ti-trash"></i></button></a></td>
                          </tr>

                          ';
                      }
                    }?>                                            
                                            </tbody>
                                        </table>
                                    </div> <!-- /.table-stats -->
                                </div>
                            </div> <!-- /.card -->
                        </div>  <!-- /.col-lg-8 -->
                    </div><!-- /.col-md-4 -->
            </div>
			<!-- Data transaksi End 3-->	            
			<!-- Data komentar -->	
			<div id="komentar" class="tab-pane">
                <div class="clearfix"></div><!-- Orders -->                
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
								
								<h3	>Data Komentar </h3>
								
								</div>
										
                                    
                                </div>
                                <div class="card-body--">
                                    <div class="table-stats order-table ov-h">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th class="serial">#</th>
                                                    <th class="avatar">Nama</th>
                                                    <th>Email</th>
                                                    <th>Pesan</th>
                                                    <th></th>
                                               <!-- <th>Quantity</th>
                                                    <th>Status</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                  <?php 
                      $conn = mysqli_connect('localhost', 'root', '', 'batiku');
                      $queryKomen = mysqli_query($conn, "SELECT * FROM tabel_komentar ORDER BY idKomen ASC");
                      $jumlahKomen = mysqli_num_rows($queryKomen); 
                      if($jumlahKomen == 0){
                          echo '
                            <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td style="width: 50vw">Belum Ada Komentar</td>
                            <td></td>
                          </tr>
                        ';
                      }else{
                        while($arrayKomen = mysqli_fetch_array($queryKomen)){
                          echo '
                            <tr>
                              <td class="id-user ">'.$arrayKomen['idKomen'].'</td>
                              <td class="nama-user ">'.$arrayKomen['nama'].'</td>
                              <td class="email-user ">'.$arrayKomen['email'].'</td>
                              <td class="alamat-user >'.$arrayKomen['pesan'].'</td>
                              <td class="hapus"><a href="proses/hapusKomen.php?idKomen='.$arrayKomen['idKomen'].'">
                                <button type="button" class="btn btn-danger"><i class="ti ti-trash"></i></button>
                              </a></td>
                            </tr>
                          ';
                        }
                      }?>   
                                            </tbody>
                                        </table>
                                    </div> <!-- /.table-stats -->
                                </div>
                            </div> <!-- /.card -->
                        </div>  <!-- /.col-lg-8 -->
                    </div><!-- /.col-md-4 -->
            
			<!-- Data komentar End 4-->	            
			<!-- Data admin -->	
			<div id="admin" class="tab-pane">
                <div class="clearfix"></div><!-- Orders -->    
			<div class="modal fade" id="form-admin" tabindex="-1" role="dialog" aria-labelledby="form-admin" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content" style="width:30vw;margin-top:10vh;">
                        <div class="modal-header">                    
                    <h4 style=""><strong>Tambahkan Admin</strong></h4>
                  </div>
                  <div class="modal-body">
                    <form action="proses/tambahAdmin.php" method="post" role="form">
                      <div class="form-group">
                        <label for="id-admin">ID Admin</label>
                        <input type="text" class="form-control" id="id-admin" name="idadmin">
                      </div>
                      <div class="form-group">
                        <label for="nama-admin">Nama</label>
                        <input type="text" class="form-control" id="nama-admin" name="namaadmin">
                      </div>
                      <div class="form-group">
                        <label for="email-admin">Email</label>
                        <input type="email" class="form-control" id="email-admin" name="emailadmin">
                      </div>
                      <div class="form-group">
                        <label for="password-admin">Password</label>
                        <input type="password" class="form-control" id="password-admin" name="password">
                      </div>	
				   </div>					  
					<div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Tambah</button>
					  <button type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
					</div>
					</form>
                    </div>
                </div>
            </div>				
                    <div class="row">
                        <div class="col-xl-12">						
                            <div class="card">
                                <div class="card-body">
								<div class="row">
								<div class="col-md-10">
								<h3	>Data Admin </h3>
								</div>
								<div class="col-md-2">								
								<button class="btn btn-success btn-sm" id="form-admin" data-toggle="modal" data-target="#form-admin">Tambah Admin</button>								
								</div>
								</div>
                                </div>				
			
                                <div class="card-body--">
                                    <div class="table-stats order-table ov-h">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th class="serial">#</th>                                                    
                                                    <th>Nama</th>
                                                    <th>Email</th>
                                                    <th>Aksi</th>
                                               <!-- <th>Quantity</th>
                                                    <th>Status</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php 
													$conn = mysqli_connect('localhost', 'root', '', 'batiku');
													$queryAdmin = mysqli_query($conn, "SELECT * FROM tabel_admin");
														while($arrayAdmin = mysqli_fetch_array($queryAdmin)){
														echo '
														<tr>
															<td class="">'.$arrayAdmin['idAdmin'].'</td>
															<td class="">'.$arrayAdmin['namaAdmin'].'</td>
															<td class="">'.$arrayAdmin['email'].'</td>
															<td class="">
															<a href="proses/hapusAdmin.php?idAdmin='.$arrayAdmin['idAdmin'].'">
																<button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
															</a>
														</td>
														</tr> 
														';
														}?>
                                                
                                            </tbody>
                                        </table>
                                    </div> <!-- /.table-stats -->
                                </div>
                            </div> <!-- /.card -->
                        </div>  <!-- /.col-lg-8 -->
                    </div><!-- /.col-md-4 -->
            </div>
			<!-- Data User End 5-->	            
			</div>
			</div>
		</div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2018 Ela Admin
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->		
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="assets/js/init/weather-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="assets/js/init/fullcalendar-init.js"></script>

    <!--Local Stuff-->
    <script>		
        jQuery(document).ready(function($) {
            
        });
    </script>
</body>
</html>
