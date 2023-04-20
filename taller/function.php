<?php

$conn=mysqli_connect('localhost','root','root','taller');

if($conn){
    print "si conecto  ";
}
else{
    print "algo salio mal";
}

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$fechanacimiento=$_POST['fechanacimiento'];
$direccion=$_POST['direccion'];

print ("$nombre, $apellido, $fechanacimiento, $direccion");

$query="insert into taller.tabla(nombre,apellido,direccion,fechanacimiento) values('$nombre', '$apellido', '$direccion', '$fechanacimiento')";

print $query;

$result=mysqli_query($conn,$query);

if($result){
    print "si conecto  ";
}
else{
    print "algo salio mal";
}

?>