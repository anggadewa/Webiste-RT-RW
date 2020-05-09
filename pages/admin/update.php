<?php 
require_once "../../init.php";
// if ( isset($_POST['submit']) ){
	$id_warga = $_GET['id_warga'];
	
	$id_warga = $_POST['id_warga'];
	$no_kk = $_POST['no_kk'];
	$nama = $_POST['nama'];
	$nik_noktp = $_POST['nik_noktp'];
	$jeniskelamin = $_POST['jeniskelamin'];
	$agama = $_POST['agama'];
	$telfon = $_POST['telfon'];

	$query = "UPDATE warga SET no_kk='$no_kk', nama='$nama', nik_noktp='$nik_noktp', jeniskelamin='$jeniskelamin', agama='$agama', telfon='$telfon' WHERE id_warga='$id_warga' ";
	$result = mysqli_query($link, $query);
	if ($result) {
	// header('Location: informasi.php');
		echo "Berhasil Update";
	} else{
		echo "Gagal Mengubah";
	}
// }
?>