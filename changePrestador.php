<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$servername = "mysql13.000webhost.com";
$username = "a4171482_admin";
$password = "adminbopo";
$dbname = "a4171482_prest";
$hide_int = (int)($_GET["hide"] === 'true');

$con = mysqli_connect($servername, $username, $password, $dbname);
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

$querySelect = "SELECT * FROM Prestadores WHERE pseudoname='" . $_GET["pseudoname"] . "'";
$result = mysqli_query($con,$querySelect);
if(mysqli_num_rows($result)<1){
	echo "ERROR: no existe ese usuario";
}else {
	$queryInsert="UPDATE Prestadores SET firstname = '". $_GET["name"] ."', lastname = '". $_GET["lastname"]."',email='" . $_GET["email"]."',description='" . $_GET["description"]."',imagenPerfil='" . $_GET["perfil"]."',hide=" . $hide_int ." WHERE pseudoname='" . $_GET["pseudoname"] . "';";
	$result = mysqli_query($con,$queryInsert);
	if($result==1){
		echo "guardado con exito";
	}else {
		echo "ERROR: "+$conn->error;
	}
}

mysqli_close($con);
?>
</body>
</html>