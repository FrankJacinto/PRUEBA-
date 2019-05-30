<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
       
	?>



	<?php
$mysqli = new mysqli("localhost", "root", "", "axis");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

$mysqli = new mysqli("127.0.0.1", "root", "", "axisgl");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

echo $mysqli->host_info . "\n";
?>

</body>
</html>