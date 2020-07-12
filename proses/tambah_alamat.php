<?php 
	session_start();
  $conn = mysqli_connect('localhost', 'root', '', 'batiku');	
  $idUser = $_SESSION['idUser']; 	
  if(isset($_POST['submit'])){
	$nama = $_POST['nama'];
	$no_telp = $_POST['no_telp'];
	$email = $_POST['email'];
	$alamat = $_POST['alamat'];
	$kecamatan = $_POST['kecamatan'];
	$kota = $_POST['kota'];
	$kode_pos = $_POST['kode_pos'];
	$tambahan = $_POST['tambahan'];
  $query = mysqli_query($conn, " INSERT INTO tabel_alamat VALUES ('$idUser','$nama','$no_telp','$email','$alamat','$kecamatan','$kota','$kode_pos','$tambahan' )");  	 
  if($query){
    echo '
      <script>        
        window.location = "../pembayaran.php"
      </script>
    ';
  }else{
    echo '
      <script>
        alert("Terjadi Kesalahan, silahkan ulangi.");
        window.location = "../checkout.php"
      </script>
    ';
  }
 
  } else {
	 echo "tidak ada data";
  }
  
  
  ?>