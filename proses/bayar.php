<?php 

  require('../config/db.php');
  $idUser = $_GET['idUser'];
	$queryTotal = mysqli_query($conn, "SELECT sum(harga) as total FROM tabel_trolly WHERE idUser='$idUser'");
	$arraytotal = mysqli_fetch_array($queryTotal);
	$total = $arraytotal['total'];
  $tanggal = date("Y-m-d H:i:s");

  $barang = "";
  $queryTrolly = mysqli_query($conn, "SELECT * FROM tabel_trolly WHERE idUser='$idUser'");
  while($data = mysqli_fetch_array($queryTrolly)){	  
    $queryBarang = mysqli_query($conn, "SELECT * FROM tabel_produk WHERE idProduk='$data[idProduk]'");
    $arrayBarang = mysqli_fetch_array($queryBarang);
    $kategori = $arrayBarang['kategori'];
    $nama = $arrayBarang['nama'];
    $jumlah = $data['jumlah'];
    $jumlahBarang = $arrayBarang['stock'] - $data['jumlah'];
    $updateJumlah = mysqli_query($conn, "UPDATE tabel_produk SET stock='$jumlahBarang' WHERE idProduk='$data[idProduk]'");
    $barang = $barang . $nama.", Kategori : " .$kategori.", Jumlah : " . $jumlah. "<br>";
  }

  $queryInsert = mysqli_query($conn, "INSERT INTO tabel_transaksi (idUser, daftarBarang, tanggal, total) VALUES ('$idUser', '$barang', '$tanggal', '$total')");

  $query = mysqli_query($conn, "DELETE FROM tabel_trolly WHERE idUser='$idUser'");
  
  if($query){
    echo '
      <script>      
      window.location = "../sukses.php";
      </script>
    ';
  }
 ?>