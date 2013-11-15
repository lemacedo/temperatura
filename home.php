<!doctype html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Temperatura</title>
</head>
<body>

<div id="corpo">
	<div id="imagem">
		<img src="img/sol.png">
	</div>
	<div id="temperatura">
<?php
	require_once"pegainfo.class.php";

	$temp=new Pegainfo;
	$graus=$temp->temperatura();
	echo $graus."ºC";

?>
	</div>
</div> <!--Fim div corpo--!>



</body>
</html>