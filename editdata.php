<html>
<head>
	<title>UAS PEMROGAMAN WEB - 1</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="menubar">
	<a href="index.php">Home</a>
	<a href="input.php">Input Data</a>
	<a href="caridata.php">Cari Data</a>
	</div>
	<div class="konten">
	<center>
	<h2>Data Peserta Lomba</h2>
	<br/>
	<table border="1" class="table">
		<tr>
		<tr bgcolor="#C2CFDF">
			<th>No</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Jenis Lomba</th>
			<th>Opsi</th>		
		</tr>
		<?php 
		include "koneksi.php";
		$tampil=mysql_query("select * from peserta order by id desc");
        $total=mysql_num_rows($tampil);
		$query_mysql = mysql_query("SELECT * FROM peserta")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['jeniskel']; ?></td>
			<td><?php echo $data['umur']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
			<td><?php echo $data['lomba']; ?></td>
			<td>
				<a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> | 
				<a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
</center>
</body>
</html>