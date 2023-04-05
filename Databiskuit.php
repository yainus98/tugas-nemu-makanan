<!DOCTYPE html>
<html>
<head>
	<title>Daftar Makanan Biskuit</title>
</head>
<body>
	<h1>Daftar Makanan Biskuit</h1>
	<table>
		<tr>
			<th>Nama Biskuit</th>
			<th>Jenis Biskuit</th>
			<th>Harga</th>
		</tr>
		<?php
		// daftar data makanan biskuit
		$daftar_biskuit = array(
			array("Marie Regal", "Biskuit Coklat", 5000),
			array("Oreo", "Biskuit Coklat", 10000),
			array("Digestive", "Biskuit Gandum", 7000),
			array("Tango", "Biskuit Kacang", 8000),
			array("Khong Guan", "Biskuit Kacang Hijau", 6000)
		);

		// menampilkan data makanan biskuit
		foreach ($daftar_biskuit as $biskuit) {
			echo "<tr>";
			echo "<td>" . $biskuit[0] . "</td>";
			echo "<td>" . $biskuit[1] . "</td>";
			echo "<td>" . $biskuit[2] . "</td>";
			echo "</tr>";
		}
		?>
	</table>
</body>
</html>
