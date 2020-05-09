<?php 
require_once "../../init.php";
error_reporting(0);
if( !isset($_SESSION['admin'])){
header('Location: ../../login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>ADMIN RT05/RW08</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<!-- Bootstrap Core CSS -->
	<link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- MetisMenu CSS -->
	<link href="../../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="../../dist/css/sb-admin-2.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<link rel="stylesheet" type="text/css" href="../../DataTables/datatables.css">
	

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

	<div id="wrapper">

		<?php require_once "menuadmin.php"; ?>

		<div id="page-wrapper">

			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Informasi Untuk Warga</h1>

					<h4>Silahkan Tulis Informasi Disini:</h4>
					<form action="informasi.php" method="post">
						<label>Nama</label><br>
						<input type="text" name="nama" placeholder="Nama Anda"> <br><br>
						<label>Judul</label><br>
						<input type="text" name="judul" placeholder="Judul Informasi"> <br><br>
						<label>Informasi</label><br>
						<textarea name="status" rows="4" cols="70" placeholder="Isikan Informasi"></textarea> <br><br>
						<input type="submit" name="submit" value="Tambah Informasi"> <br><br>
					</form>
					<?php 
					if( isset($_POST['submit']) ){
						$id_status = $_POST['id_status'];
						$nama = $_POST['nama'];
						$judul = $_POST['judul'];
						$status = $_POST['status'];


						$query = "INSERT INTO infowarga (nama, judul, status) VALUES ('$nama', '$judul', '$status' )";
						$result = mysqli_query($link, $query);
					}
					?>

					<div class="table-responsive">
						<table class="table-hover" id="datatables">
							<thead>
								<tr>
									<th class="page-header">No</th>
									<th class="page-header">Informasi Warga</th>
								</tr>
							</thead>
							<tbody>
								
								<?php 
								$tampil = "SELECT * FROM infowarga";
								$tampil2 = mysqli_query($link, $tampil);
								
								
								if (mysqli_num_rows($tampil2)>0){
									$no = 1;
									while($info = mysqli_fetch_array($tampil2)){
										?>
										<tr>
											<td><?php echo $no ?></td>

											<td>Nama Warga:&ensp;<?php echo "<b>".$info['nama']."</b> <br>";?>
											Judul Informasi:&ensp;<?php echo $info['judul']. "<br>"; ?>
											Informasi:&ensp;<?php echo $info['status']."<br>"; ?>
											Waktu:&ensp;<?php echo $info['waktu']."<br>"; ?>

											<!-- <a href="ubah.php?id_status=
											<?php //echo $info['id_status']; ?>
											">UBAH</a> |  -->
											<a href="hapusinfo.php?id_status=
											<?php echo $info['id_status']; ?>
											">HAPUS</a>

											
											<br><br><br>
										</td>

									</tr>

									<?php 
									$no++; }
								} 
								?>

							</tbody>
						</table>

						<br><br><br>
					</div>
					<!-- /.col-lg-12 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /#page-wrapper -->
		</div>
		<!-- /#wrapper -->

		<!-- jQuery -->
		<script src="../../vendor/jquery/jquery.min.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>

		<!-- Metis Menu Plugin JavaScript -->
		<script src="../../vendor/metisMenu/metisMenu.min.js"></script>
		
		<!-- Custom Theme JavaScript -->
		<script src="../../dist/js/sb-admin-2.js"></script>

		<script src="../../DataTables/datatables.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#datatables').DataTable();
			});

		</script>

	</body>

	</html>