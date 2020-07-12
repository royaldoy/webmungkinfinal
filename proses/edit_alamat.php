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
  $query = mysqli_query($conn,"UPDATE tabel_alamat SET nama='$nama',no_telp='$no_telp',email='$email',alamat='$alamat',kecamatan='$kecamatan',kota='$kota',kode_pos='$kode_pos',tambahan='$tambahan' WHERE idUser='$idUser'");
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