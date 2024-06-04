<html>
<head>
	<title>UAS PEMROGAMAN WEB - 3</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="menubar">
	<a href="index.php">Home</a>
	<a href="lihatdata.php">Lihat Data</a>
	<a href="caridata.php">Cari Data</a>
	</div>
	<div class="konten">
	<center>
	<h2>Input data baru</h2>
	</br>
	<form action="input-aksi.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" required></td>					
			</tr>
			<tr>
			<td>Jenis Kelamin</td>
			<td><select name="jeniskel" required>
			<option>Laki-laki</option>
			<option>Perempuan</option>
			</select></td>
			</tr>			
			<tr>
				<td>Umur</td>
				<td><input type="text" name="umur" required></td>					
			</tr>
			<tr>
				<td>Alamat</td>
				<td><textarea name="alamat" rows="5" cols="30" required></textarea></td>					
				</tr>
			<tr>
			<td>Jenis Lomba</td>
			<td><select name="lomba" required>
			<option>Balap Karung</option>
			<option>Makan Kerupuk</option>
			<option>Tarik Tambang</option>
			<option>Karaoke</option>
			</select></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" value="Simpan">
				&nbsp;<input type="reset" name="batal" value="Batal"></td>
			</tr>				
		</table>
	</form>
	</center>
	</div>
</body>
</html>