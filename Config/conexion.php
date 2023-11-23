<?php
$servidor="localhost";
$usuario="root";
$password="";
$db="fundacion";
$conexion=mysqli_connect($servidor,$usuario,$password,$db)or die(mysqli_connect_error());