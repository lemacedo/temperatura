<!doctype html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Temperatura</title>
</head>
<body onload="alteraImg();">

<div id="corpo">
	<div id="imagem">
		<img id="foto" src="img/nublado.svg">
	</div>
	<div id="temperatura">
<?php
	require_once"pegainfo.class.php";

	$temp=new Pegainfo;
	$graus=$temp->temperatura();
	echo $graus."º";

?>
	</div>

</div> <!--Fim div corpo-->


<script type="text/javascript">
	function alteraImg(){
		var temp= <?php echo $graus  ?>;
		if(temp <= 20){
			document.getElementById("foto").src = "img/nublado.svg"
		}else{
			document.getElementById("foto").src = "img/sol.png"
	}
}
</script>
</body>
</html>