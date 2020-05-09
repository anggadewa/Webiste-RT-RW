<?php 
require_once "../../init.php";

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=namawarga.xls")

?>
<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover" id="datatables">
		<thead>
			<tr>
				<th>No</th>
				<th>NIK/No.KTP</th>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>Nomor Telfon</th>
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

					</tr>

					<?php 
					$no++; }
				} 
				?>

			</tbody>
		</table>
		<br><br><br><br>
	</div>