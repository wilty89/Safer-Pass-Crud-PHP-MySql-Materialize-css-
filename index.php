<!--------INICIO CODIGOS HTML -->
<?php
session_start();
if(isset($_SESSION['username1'])){
    
?>
<!DOCTYPE html>
<html>

<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

<head>
    <title>Gestor de Contrasenas</title>
</head>

<body>
    <nav>
        <div class="nav-wrapper #283593 indigo darken-3">
            <a href="#" class="brand-logo">GS LATAM</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><?php echo "Bienvenido: " . $_SESSION["username1"]; ?> </li>
                <li><a href="eliminar.php">Eliminar Clave</a></li>
                <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>


            </ul>
        </div>
    </nav>

    <h5 class="center-align">Anadir </h5>

    <form method="post" action="index.php">
        <div class="container">
            <label>Usuario</label>
            <input type="text" required="required" name="user">
            <label>Clave</label>
            <input type="password" required="required" name="pass">
            <input type="submit" name="submit" value="Agregar"
                class="btn waves-effect waves-light #e8eaf6 indigo lighten-5">
        </div>
    </form>
    <br>

    <?php

if (isset($_POST['submit'])) {

//datos de connexion 

$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='prueba';
$Usuario= $_POST['user'];
$Clave= $_POST['pass'];
$Fecha= date("Y-m-d");
$Ipad= $_SERVER['REMOTE_ADDR'];

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if ($con == False) {
	echo  "error de conexion";

} else {
	
	//echo "Tamo ariba";

	}


$sql = "INSERT INTO usuarios(usuario,clave,fecha,ipad) VALUES ('$Usuario','$Clave', '$Fecha', '$Ipad')";

if (mysqli_query($con,$sql)) {


echo "Se ha anadido una nueva contrasena";

} else {

echo "erro al intentar guardar la contrasena";
}


}
?>
    <br>
    <br>

    <div class="card-panel">
        <h6>Claves Guardadas</h6>
    </div>
    <table class="striped container responsive-table">
        <thead>
            <th>Usuario</th>
            <th>Clave </th>
            <th>Fecha de registro </th>
            <th> Direcion IP </th>
        </thead>
        <?php


$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='prueba';

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

$query="SELECT * FROM usuarios";

        $run=mysqli_query($con,$query);//here run the sql query.

        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
               
    $user=$row[0];
    $pass=$row[1];
    $date=$row[2];
    $ip=$row[3];

    echo '<tr>';

 ?>
        <td><?php echo $user; ?></td>
        <td><?php echo $pass; ?></td>
        <td><?php echo $date; ?></td>
        <td><?php echo $ip; ?></td>

        <?php 
    echo '</tr>';
   
   }

?>

    </table>
    <?php include 'footer.php';?>
</body>

</html>
<?php
} else {
    header('Location: login.html');
}
?>