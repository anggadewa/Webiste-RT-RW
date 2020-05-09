<?php 
require_once "../../init.php";


	$id_warga = $_GET['id_warga'];

	$query = "DELETE FROM warga WHERE id_warga=$id_warga";
	$result = mysqli_query($link, $query);

	if($result){
		header('Location: namawarga.php');
	} else {
		echo "Gagal Menghapus";
	} 
 ?>