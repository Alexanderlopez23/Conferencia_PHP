<?php

//Este archivo se usa para conexion a la BASE DE DATOS ('webcamp')
//variable conn para dar los parametros para hacer conexion 
$conn = new mysqli('localhost', 'root', '', 'webcamp');

if ($conn->connect_error) {
    echo $error->$conn->connect_error;
}















