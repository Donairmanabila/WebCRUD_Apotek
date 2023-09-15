<html>
<head>
	<title>Pembelian Obat Inner Join</title>
	<link rel="SHORTCUT ICON" href="image/donah.ico">
</head>
<body>
	<fieldset>
	<center><b><h3>Data Pembelian Obat</b></h3></center>
		<form action="" method="POST">
		<div class="form-group" style="margin-bottom: 15px">
			<label for="kode">Nama Obat :</label>
			<select name="pilih">
				<option>--Pilih--</option>
				<?php while ($r = $this->model->fetch($data)) { ?>
				<option value="<?php echo $r[0]; ?>"><?php echo $r[1]; ?><option>
				<?php } ?>
			</select>
		</div>
		<div class="form-group" style="margin-bottom: 15px">
			<label for="tgl">Tanggal Pembelian :</label>
			<input type="date" name="tanggal">
		</div>
		<input type="submit"  name="submit" value="Simpan"/>
	</form>
</fieldset>
</body>
</html>
<?php
	if(isset($_POST['submit'])) { //Jika button submit di klik maka panggil fungsi insert pada controller
		$main = new controller();
		$main->insert();
	}
?>
			
					