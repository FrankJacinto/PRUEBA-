<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
	   // funciones por paso de parametros y referencia
       function cambiar_mayuscula(&$param){
       $param=strtolower($param);
       $param=ucwords($param);
       return $param;
       }
       $variable ="Hola MuNDO";
       echo cambiar_mayuscula($variable). "<br>";
       echo $variable;
       //tema arrays
       //podemos almacenar varios arreglos
       //arrays indexados y asociativos
      $semana[]="Lunes";
      $semana[]="Martes";
      $semana[]="Miercoles";

      for($i=0;$i<count($semana);$i++){
         echo "fimer for:    $semana[$i] <br>";
      }
      echo $semana[1];
      $meses=array("Enero","Febrero","Marzo");
     

      $datos=array("Nombre"=>"Juan","Apellido"=>"Arevalo","Peruana"=>"nacionalidad");
      $empresas=array("AXIS GL","AXIS GLOBAL","CORAL");

     // $datos="124";
      echo $datos["Nombre"];
      echo "<br>";
      if (is_array($datos)) {
      	  echo "es una array";
      }
      else{
      	echo "No es un array";
      }

      foreach ($datos as $id => $valor) {
      	echo " A $id le corresponde $valor <br>";
      }
// ordenar un array
      $frutas= array("manzana","uva","grnadilla");
      sort($frutas);
      for ($j=0;$j<count($frutas);$j++) {
      	  echo " holi $frutas[$j] <br>";
      }
	?>
	<select>
		<option><?=$semana[1]?></option>
		<option><?=$semana[1]?></option>
		<<option><?	=$semana[2]?></option>

	</select> <br>
	<select>
		<option><?=$meses[3]?></option>
		<option><?=$meses[1]?></option>
		<option><?=$meses[2]?></option>

	</select>
	<br>


</body>
</html>