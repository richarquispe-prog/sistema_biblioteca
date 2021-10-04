<?php
	require_once "conexion.php";
	session_start();
	if ($_POST) {
		$correo = $_POST['correo'];//llama correo y se guarda en la variable
		$Pass = $_POST['contra'];
		$query= mysqli_query($conexion, "SELECT DNI, nombre, Correo_Institucional, Password, Tipo_usuario FROM usuarios WHERE Correo_Institucional = '$correo' AND Password = '$Pass' AND Tipo_usuario = 'Estudiante'");
		$Rpta = mysqli_num_rows($query);// guarda en la variable  con la cantidad  que encontro en la consulta con esas condiciones -----filas CUENTA
		if ($Rpta > 0) {// SI SE ENCONTRO MAS DE UNA COINCIDENCIA EN LA BD
			$dato = mysqli_fetch_array($query);// SE ALMACENA EN EL DATO y llama a la funcion mysqli  que toma la fila indicada (column)  de donde se hizo la consulta
			$_SESSION['DNI'] = $dato['DNI'];//guarda los datos si se desa pasar a otro archivo
			$_SESSION['nombre'] = $dato['nombre']; 
			header("location:catalogo.php");/* llamar a otro formulario*/
			$alert = "<div  style='color: green;'>
              Sesión Iniciada :)
              </div>";// si pasa todo eso va a mostrar 
		}else{
			$alert = '<div  style="color: red;">
              Correo o contraseña incorrecta :(
            </div>';
            session_destroy();// se destruye la sesion 
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inicio</title>

    <link rel="stylesheet" href="Styles/es_style.css">
   <!--iconoooo-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
	<section id="conta"class="conta">
		<form  method="post" class="es_login"><!--si esque ocurre el metodo post-->
			<img src="img/sistemas.png" width="300" height="100">
			<center>
				<h2>ESTUDIANTE</h2>
				<br>
				<!--<h3>Bienvenido</h3><br>-->
				<p>Iniciar Sesión</p><br><br>
				<?php echo isset($alert) ? $alert : ""; ?><!--INGRESO-->
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                </svg>

				<input type="text" name="correo" required placeholder="Correo Institucional" >
				<br><br>
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-unlock-fill" viewBox="0 0 16 16">
                        <path d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2z"/>
                </svg>
				<input type="password" name="contra" required placeholder="Contraseña">
                <span class="input__eye" style="display: none;"></span>

				<br><br><br>
				<input type="submit"  value="Iniciar Sesión" class="button"><br>

				<!--<a href="es_registro.php" class="button1"  >Registrar</a>-->

				<a href="index.php" class="button">Volver</a>
			</center>
		</form>
		<div class="ctn-text">
			<div class="capa">
			<!--<center><h1>ESTUDIANTE</h1></center>-->
			</div>
			
		</div>
	</section>
</body>

</html>
