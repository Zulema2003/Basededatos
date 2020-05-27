<?php
	include ('conexion.php');

	$con=new conexion();

	$usuario=$_POST['usuario'];
	$password=$_POST['password'];

	$query="SELECT * FROM `usuario` WHERE user='$usuario' AND password='$password'";
	$user=$con->query($query);
	$con->close();
	

	if($user->num_rows==1)
	{
	    ("location:diseño.php");
	}
	else 
	{
		("location:index.html");
    }


?>
