<?php
//$con = mysqli_connect("localhost","root","","bibliotecaepis");
include 'conexion.php';
	$codigo = $_GET['codigo_boleta'];
	

	$eliminar="DELETE  FROM boleta  WHERE  codigo_boleta=$codigo";

	
	if(mysqli_query($conexion,$eliminar)){
		/*echo" dato guardado";*/
		
		echo $alert = "<div  style='color: green;'> 
              libro actualizado </div>";
             header("location:boletas_admi.php");

	}else{
		/*mysqli_error();*/
		echo"error";
	}
?>