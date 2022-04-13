<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="card-panel">
    <h6>Eiminar Usuario</h6>
    </div>
<form method="post" action="eliminar.php">
	<label>Usuario</label>
<input type="text" required="required" name="user1" >

<input type="submit" name="submit1" value="Eliminar">

<?php
//PHP para suprimir usuario

// valida si hay un post llamado submit1 y ejecuta esos codigos
if (isset($_POST['submit1'])) {

//datos de connexion 

$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='prueba';
$Usuario= $_POST['user1'];


$con1 = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

$sql1 = "Delete From usuarios  WHERE usuario = '$Usuario'";

if (mysqli_query($con1,$sql1)) {


echo "Contrasena eliminada.";
echo'<hr>';
echo"<a class='btn btn-primary' href='index.php'>Regresar al inicio</a>";

} else {

echo "Contrasena no ha podido ser eliminada ";
}


}
$data[] = json_decode( file_get_contents('http://localhost/crudphp/api.php/'), true );

echo'<br>';
print json_encode($data);
/*
echo'<br>';
foreach($data['city'] as $val){
$cars_together = implode(", ", $val);
    print_r($cars_together);
}
*/
?>

</form>
</body>
</html>