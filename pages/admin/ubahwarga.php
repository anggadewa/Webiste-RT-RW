<?php 
require_once "../../init.php";
error_reporting(0);
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

		<div id="page-wrapper">

			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Pendaftaran Warga Baru</h1>

					<div class="all">
						<?php 
						$id_warga = $_GET['id_warga'];
						$query = "SELECT * FROM warga";
						$result = mysqli_query($link, $query);
						if ($warga = mysqli_fetch_assoc($result)) {							
						?>
					</div>

					<form action="update.php" method="post">
						<input type="hidden" name="id" value="<?php echo $warga['id_warga']; ?>">
						<label>No. Kartu Keluarga</label> <br>
						<input type="text" name="no_kk" value=" <?php echo $warga['no_kk'] ?> "> <br><br>

						<label>Nama</label> <br>
						<input type="text" name="nama" value=" <?php echo $warga['nama'] ?> "> <br><br>

						<label>NIK/No. KTP</label> <br>
						<input type="text" name="nik_noktp" value=" <?php echo $warga['nik_noktp'] ?> "> <br><br>

						<label>Jenis Kelamin</label> <br>
						<input type="radio" name="jeniskelamin" value=" <?php echo $warga['jeniskelamin'] ?> "> Laki-laki <br>
						<input type="radio" name="jeniskelamin" value=" <?php echo $warga['jeniskelamin'] ?> "> Perempuan <br><br><br>

						<label>Agama</label> <br>
						<input type="text" name="agama" value=" <?php echo $warga['agama'] ?> "> <br><br>

						<label>Nomor Telfon</label> <br>
						<input type="text" name="telfon" value=" <?php echo $warga['telfon'] ?> "> <br><br>

						<input type="submit" name="submit" value="UPDATE">
					</form>
						<?php 
					}
					?>
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
