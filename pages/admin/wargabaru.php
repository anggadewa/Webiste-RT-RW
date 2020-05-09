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
					<h1 class="page-header">Pendaftaran Warga Baru</h1>

					<div class="all">
						<?php 
						if ( isset($_POST['submit'])){
							$no_kk = $_POST['no_kk'];
							$nama = $_POST['nama'];
							$nik_noktp = $_POST['nik_noktp'];
							$jeniskelamin = $_POST['jeniskelamin'];
							$agama = $_POST['agama'];
							$telfon = $_POST['telfon'];

							if ( !empty(trim($no_kk)) && !empty(trim($nama)) && !empty(trim($nik_noktp)) && !empty(trim($agama)) ) {
								if( uji($nik_noktp) ){
									if ( daftar($no_kk, $nama, $nik_noktp, $jeniskelamin, $agama, $telfon) ){
										?>
										<h2 class="alert alert-success" role="alert">Berhasil Terdaftar</h2>
										<?php
									}
								} else{
									?>
									<h2 class="alert alert-danger" role="alert">Gagal Mendaftar NIK/No. KTP Sudah Terdaftar</h2>
									<?php 
								}
							}else{
								?>
								<h2 class="alert alert-warning" role="alert">Data Tidak Boleh Kosong</h2>
								<?php					
							}
						}							
						?>
						<br><br><br>
					</div>

					<form action="wargabaru.php" method="post">
						<label>No. Kartu Keluarga</label> <br>
						<input type="text" name="no_kk" placeholder="&ensp;No. Kartu Keluarga"> <br><br>


						<label>Nama</label> <br>
						<input type="text" name="nama" placeholder="&ensp;Nama"> <br><br>

						<label>NIK/No. KTP</label> <br>
						<input type="text" name="nik_noktp" placeholder="&ensp;NIK/No. KTP"> <br><br>

						<label>Jenis Kelamin</label> <br>
						<input type="radio" name="jeniskelamin" value="Laki-laki"> Laki-laki <br>
						<input type="radio" name="jeniskelamin" value="Perempuan"> Perempuan <br><br><br>

						<label>Agama</label> <br>
						<input type="text" name="agama" placeholder="&ensp;Agama"> <br><br>

						<label>Nomor Telfon</label> <br>
						<input type="text" name="telfon" placeholder="&ensp;Nomor Telfon"> <br><br>

						<input type="submit" name="submit" value="DAFTAR">
					</form>
					<br><br>
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

</body>

</html>
