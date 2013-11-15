<!doctype html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Temperatura</title>
</head>
<body>

<?php
require_once"pegainfo.class.php";

$temp=new Pegainfo;
$graus=$temp->temperatura();

echo $graus."ºC";

?>

<img src="img/nublado.svg" />

</body>
</html>