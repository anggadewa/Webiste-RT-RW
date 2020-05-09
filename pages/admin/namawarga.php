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
					<h1 class="page-header">Daftar Nama Warga</h1>

					<nav>
						<a href="wargabaru.php">[+] Pendaftaran Warga Baru</a>
					</nav>

					<br>

					<div class="table-responsive">
						<table class="table table-bordered table-striped table-hover" id="datatables">
							<thead>
								<tr>
									<th>No</th>
									<th>NIK/No.KTP</th>
									<th>Nama</th>
									<th>Jenis Kelamin</th>
									<th>Nomor Telfon</th>
									<th>Keterangan</th>
								</tr>
							</thead>
							<tbody>
								
								<?php 
								$query = "SELECT id_warga, nama, nik_noktp, jeniskelamin, telfon FROM warga";
								$result = mysqli_query($link, $query);

								if (mysqli_num_rows($result)>0){
									$no = 1;
									while($warga = mysqli_fetch_array($result)){
										?>
										<tr>
											<td><?php echo $no ?></td>
											<td><?php echo $warga['nik_noktp']; ?></td>
											<td><?php echo $warga['nama']; ?></td>
											<td><?php echo $warga['jeniskelamin']; ?></td>
											<td><?php echo $warga['telfon']; ?></td>
											<td>
												<a href="hapuswarga.php?id_warga=
												<?php echo $warga['id_warga']; ?>
												">HAPUS</a>
											</td>

											</tr>

											<?php 
											$no++; }
										} 
										?>

									</tbody>
								</table>
								<br>
								<a href="report.php" target="_blank" class="link"> <button class="link"> <span class="fa fa-print"></span> Exprot Excel</button> </a>
								<br><br><br>
							</div>
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
