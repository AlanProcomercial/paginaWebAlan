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

$con = mysqli_connect($servername, $username, $password, $dbname);
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

$querySelect = "SELECT * FROM Prestadores WHERE pseudoname='" . $_GET["pseudoname"] . "'";
$result = mysqli_query($con,$querySelect);
if(mysqli_num_rows($result)>0){
	echo "ya existe ese nombre";
}else {
	$queryInstert="INSERT INTO Prestadores (firstname,lastname,pseudoname,email,description,imagenPerfil) VALUES ('". $_GET["name"] ."','". $_GET["lastname"]."','". $_GET["pseudoname"]."','" . $_GET["email"]."','" . $_GET["description"]."','" . $_GET["perfil"]."')";;
	$result = mysqli_query($con,$queryInstert);
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