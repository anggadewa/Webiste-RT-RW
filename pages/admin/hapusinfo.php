<?php 
require_once "../../init.php";


	$id_status = $_GET['id_status'];

	$query = "DELETE FROM infowarga WHERE id_status=$id_status";
	$result = mysqli_query($link, $query);

	if($result){
		header('Location: informasi.php');
	} else {
		echo "Gagal Menghapus";
	} 
 ?>