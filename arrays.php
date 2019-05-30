<!DOCTYPE html>
<html>
<head>
	<title>Arrays</title>
</head>
<body>
<?php
$alimentos=array("frutas" =>array("tropical"=>"kiwi","jugosa"=>"nandarina"),"leches"=>array("natural"=>"de vaca","con telita"=>"de cabra"),"carnes"=>array("dura"=>"cabrito","cara"=>"de chancho"));

          echo $alimentos["carnes"]["dura"];

         /* foreach ($alimentos as $clave => $alim) {
          	   echo "$clave";
          	while (list($clave,$valor)=each($alim)) {
          		echo "$clave=$valor <br>";
          	}
          }*/
          echo var_dump($alimentos);
?>

</body>
</html>