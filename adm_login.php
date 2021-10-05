<?php
	require_once "conexion.php"; //----conexion a la BD
	session_start();    //para iniciar sesión
	if ($_POST) {   //----cuando el formulario manda datos atravez del boton
		//--------recoleccion de datos de entrada y guardar en variables
		$correo = $_POST['correo'];
		$Pass = $_POST['contra'];
		//--------consulta MySql [$conexion=conexion a la BD] [SELECT * FROM tablename WHERE (condicion para iniciar sesion como administrador)]----
		$query= mysqli_query($conexion, "SELECT DNI, nombre, Correo_Institucional, Password, Tipo_usuario FROM usuarios WHERE Correo_Institucional = '$correo' AND Password = '$Pass' AND Tipo_usuario = 'Administrador'");
		//------$rpta almacena cuantas filas consultadas de la tabla usuarios---
		$Rpta = mysqli_num_rows($query);
		//------si se encontró datos
		if ($Rpta > 0) {
			$dato = mysqli_fetch_array($query);		//de la fila obtenida ... va consultar las columnas
			$_SESSION['DNI'] = $dato['DNI'];		//--En session va guardar los datos de la columna solicidada
			$_SESSION['nombre'] = $dato['nombre']; 
			header("location:acervo.php");/* llamar a otro formulario*/

			//----mensaje de confirmación de la linea [47]
			$alert = "<div  style='color: green;'> 
              Sesión Iniciada :)
              </div>";
		}else{
			$alert = '<div  style="color: red;">
              Correo o contraseña incorrecta :(
            </div>';
            session_destroy();
		}
	}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Inicio</title>
    <link rel="stylesheet" type="text/css" href="Styles/adm_style.css">
    <!--iconoooo-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <section id="cont">
        <form method="post" class="adm_login">
            <img src="img/sistemas.png" width="300" height="90">
            <center>
                <h2>ADMINISTRADOR</h2>
                <br>
                <!--<h3>BIENVENIDO</h3>-->
                <br>
                <p>Iniciar Sesión</p>
                <br>
                <?php echo isset($alert) ? $alert : ""; ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-person-fill" viewBox="0 0 16 16">
                    <!-- icono-->
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                </svg>
                <input type="email" name="correo" required placeholder="correo institucional">
                <br><br>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-unlock-fill" viewBox="0 0 16 16">
                    <path
                        d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2z" />
                </svg>
                <input type="password" name="contra" required placeholder="contraseña">
                <br><br><br>
                <input type="submit" value="Iniciar Sesión" class="button_"><br><br>
                <a href="index.php" class="button1">Volver</a>
            </center>
        </form>
        <div class="ctn-text">
            <div class="capa">
                <!--<center><h1>ADMINISTRADOR</h1></center>-->
            </div>

        </div>
    </section>
</body>

</html>