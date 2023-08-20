<?php
require 'MODELO/conexion.php';
//SI EL BOTON ES PRESIONADO QUE SE AGA LO SIGUIENTE
if(!empty($_POST["registro"])){
    $nombre=$_POST["Nombre"];
    $apellido=$_POST["Apellido"];
    $email=$_POST["Email"];
    $usuario=$_POST["usuario"];
    $password=$_POST["Clave"];
    $consulta = " insert into usuarios(Nombre, Apellido, Correo, Usuario, Contraseña)values('$nombre','$apellido','$email', '$usuario', '$password') ";
    $query = mysqli_query($conexion, $consulta);
    if($query){
        echo '<script>alert("guardado correctamente");
        location.href = "http://localhost/VideoJuegosMayeSoft/";
        </script>';
    }
}
?>