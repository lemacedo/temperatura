<?php
class Pegainfo{

public function temperatura(){
$endereco='http://www.climatempo.com.br/previsao-do-tempo/cidade/2234/bomsucessodeitarare-sp';
$cURL= curl_init($endereco);
curl_setopt($cURL,CURLOPT_RETURNTRANSFER, true);
$resultado = curl_exec($cURL);
$resposta=curl_getinfo($cURL, CURLINFO_HTTP_CODE);

curl_close($cURL);

$palavra= explode('left temp-momento top10',$resultado);

$temp=substr($palavra[1],2,2);



return $temp;
}

}

?>