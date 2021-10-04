<?php
//$con = mysqli_connect("localhost","root","","bibliotecaepis");
include 'conexion.php';
	$DNI = $_GET['DNI'];
	

	$eliminar="DELETE  FROM usuarios  WHERE  DNI=$DNI";

	
	if(mysqli_query($conexion,$eliminar)){
		/*echo" dato guardado";*/
		
		echo $alert = "<div  style='color: green;'> 
              libro actualizado </div>";
             header("location:lista_usuario.php");

	}else{
		/*mysqli_error();*/
		echo"error";
	}
?>