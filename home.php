<!doctype html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Temperatura</title>
</head>
<body>

<?php
include"pegainfo.class.php";

$temp=new Pegainfo;
$graus=$temp->temperatura();

echo $graus."ºC";

?>

</body>
</html>