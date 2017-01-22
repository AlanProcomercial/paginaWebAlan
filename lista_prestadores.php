 <!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="style.css"></head>
<body>
<div class="div-wrapper">
	<?php
	$servername = "mysql13.000webhost.com";
	$username = "a4171482_admin";
	$password = "adminbopo";
	$dbname = "a4171482_prest";

	$con = mysqli_connect($servername, $username, $password, $dbname);
	if (!$con) {
		die('Could not connect: ' . mysqli_error($con));
	}

	$sql = "SELECT * FROM Prestadores WHERE hide != 1";
	$result = mysqli_query($con, $sql);
	echo "encontrado ". mysqli_num_rows($result) . " resultados";
	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
			echo "<div class='div-wrapper'>";
			echo "<img style='float:left' src ='". $row["imagenPerfil"]. "' onClick={GoToWebView('". $row["pseudoname"] ."')} class='imagen_perfil'>";
			echo "<div onClick={GoToWebView('". $row["pseudoname"] ."')} class='div_link'>";
			echo '<p class="boxed" id="pseudoname">';
			echo $row["pseudoname"];
			echo "</p>";
			echo '<p class="boxed" id="description">';
			echo $row["description"];
			echo "</p>";
			echo "</div>";
			echo "</div>";
		}
	} else {
		echo "0 results";
	}

	mysqli_close($con);
	?>
</div>
</body>
<script>
var url="prestador_view.html";
function GoToWebView(id){
	window.location.href=url+"?id="+id;
}
</script>
</html>
