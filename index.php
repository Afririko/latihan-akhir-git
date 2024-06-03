<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistem Kepegawaian PT.FAREL KATERING</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="main_container">
<div id="header">
<h1> Sistem Kepegawaian PT.FAREL KATERING<br></h1>
</div>
<div id="navigation">
	<a href="index.php">Home</a> 
	<a href="index.php?page=input">Input Data Pegawai</a> 
	<a href="index.php?page=tampil">Tampil Data Pegawai</a> 
	<a href="index.php?page=about">About Us</a> 
</div>

<?php
$page = (isset($_GET['page']))? $_GET['page'] : "main";
switch ($page) {
	case 'input': include "input_peg.php"; break;
	case 'edit'	: include "edit_peg.php"; break;
	case 'delete' : include "delete_peg.php"; break;
	case 'tampil' : include "tampil.php"; break;
	case 'foto' : include "foto.php"; break;
	case 'about' : include "about.php"; break;
	case 'main' :
	default : include 'utama.php';	
}
?>

<div id="footer">&copy; Agustus 2018  / <a href="mailto:Afririkosuprayatna@gmail.com">Afririko Suprayatna</a>  </div>
</div>
</body>
</html>
