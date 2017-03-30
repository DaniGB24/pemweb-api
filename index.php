<?php

$json = file_get_contents('http://api.kalau.web.id/api/absen?nip=14650015&tgs=2016-01-01&tge=2016-10-31');
$obj = json_decode($json);

?>

<html>
<center>
<table border="1">


	<thead>
		<h3> Menampilkan API</h3>

		<tr>
			<td colspan="8"><center>Data Absensi Mobile</center></td>
		</tr>
		<th>ID</th>
		<th>NIP</th>
		<th>Latitude</th>
		<th>Longitude</th>
		<th>Presensi ke</th>
		<th>Photo</th>
		<th>Mac Address</th>
		<th>Created at</th>
	</thead>

	
	<tbody>
		<?php
			for ($i=0 ; $i<2; $i++){
				$link = $obj->presensi->data_absensi_mobile[$i]->photo;
				echo "<tr>
					<td> ".$obj->presensi->data_absensi_mobile[$i]->id."</td>
					<td> ".$obj->presensi->data_absensi_mobile[$i]->nip." </td>
					<td> ".$obj->presensi->data_absensi_mobile[$i]->latitude." </td>
					<td> ".$obj->presensi->data_absensi_mobile[$i]->longitude." </td>
					<td> ".$obj->presensi->data_absensi_mobile[$i]->presensi_ke." </td>
					<td> <a href='$link' target='_blank'>Foto</a></td>
					<td> ".$obj->presensi->data_absensi_mobile[$i]->macaddress." </td>
					<td> ".$obj->presensi->data_absensi_mobile[$i]->created_at." </td>
				</tr>";
			} 
		?>
	</tbody>
</table>
<br>
</center>
<center>
	<table border="1">
	<thead>
		<tr>
			<td colspan="8"><center>data absensi finger</center></td>
		</tr>
		<th>Finger ID</th>
		<th>NIP</th>
		<th>Tag Date</th>
		<th>Finger IP</th>
	</thead>
	<tbody>
	<?php
		echo "<tr>
			<td> ".$obj->presensi->data_absensi_finger[0]->finger_id."</td>
			<td> ".$obj->presensi->data_absensi_finger[0]->nip."</td>
			<td> ".$obj->presensi->data_absensi_finger[0]->tag_date."</td>
			<td> ".$obj->presensi->data_absensi_finger[0]->finger_ip."</td>
			</tr>";
	?>
	</tbody>

</table>
<br>
</center>
<center>
	<table border="1">
	<thead>
		<th>Latest Update</th>
	</thead>
	<tbody>
		<tr>
			<td><?php echo $obj->presensi->latest_update; ?></td>
	</tbody>
</table>
</center>

</html>