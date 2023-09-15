<html>
<head>
	<title>APOTEK SEHAT DONAH</title> 
	<link rel="SHORTCUT ICON" href="image/donah.ico" >
	<center>SELAMAT DATANG DI APOTEK SEHAT DONAH 😎 </center>
</head>
	<body>
		<center><b><h3>Data Pembelian Obat</h3></b></center>
		<table border="1" cellpadding="7" cellspacing="0" align="center">
			<tr style="background-color: pink;">
				<td>ID Obat</th>
				<th>Kode Obat</th>
				<th>Nama Obat</th>
				<th>Harga Obat</th>
				<th>Tanggal Pembelian</th>
				<th></th>
				<th></th>
			</tr>
			<tr align="center">
			</tr>
			<?php while($row = $this->model->fetch($data)) {
				echo "
					<tr>
					<td>$row[0]</td>
					<td>$row[1]</td>
					<td>$row[2]</td>
					<td>$row[3]</td>
					<td>$row[4]</td>
					<td><a href='index.php?e=$row[0]'>Edit Data</a></td>
<td><a href='index.php?d=$row[0]' onClick=\"return confirm('Hapus Data?')\"\>Hapus Data</a></td>
					</tr>
					";
			}?>
		</table>
		<center><a href='index.php?i=add'>Tambah Data Obat</a></center>
</body>
</html>