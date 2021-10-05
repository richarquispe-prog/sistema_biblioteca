<?php
	include 'conexion.php'; //Conexion a la bd
	if ($_POST) {
		/*  obtener valores de los -input-  y guardar en las variables */
		$DNI = $_POST['dni'];  
		$nom = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$celular = $_POST['celular'];
		$correo = $_POST['correo'];
		$pass = $_POST['pass1'];
		$rep_pass = $_POST['pass2'];

		$result = 0;
		if (is_numeric($DNI) and $DNI != 0) {
		 	$query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE DNI = '$DNI'");
		 	$result = mysqli_fetch_array($query);
		}
		if ($result > 0) {
			$alert =  '<div class="alert alert-secondary"" role="alert">
                       Este usuario ya existente
                    </div>';
		}elseif ($pass == $rep_pass) {
			$insert = mysqli_query($conexion, "INSERT INTO usuarios(apellidos, Correo_Institucional, DNI, nombre, Password, repita_contraseña, telefono, tipo_usuario) VALUES('$apellidos', '$correo', '$DNI', '$nom', '$pass', '$rep_pass', '$celular', 'ESTUDIANTE')");
			//$alert = '<div  style="color: green;">Registrado</div>';
			 $alert = '<div class="alert alert-warning" role="alert">
                       Registro exitoso 
                    </div>';
		}else{
			$alert = '<div class="alert alert-danger" role="alert">
                       Las contraseña no coinciden
                    </div>';
		}
	}
?>
<?php include('menu_administrador.php');?>


<div class="container-fluid">
    <!--      Card Ediit    -->
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <center>
                        <!--<h3>BIBLIOTECA EPIS</h3>-->
                        <h6 class="m-0 font-weight-bold text-success">
                            REGISTRAR
                        </h6>
                    </center>
                </div>
                <form method="post">


                    <div id="main-containe">
                        <div class="container">
                            <!--<form method="post" class="es-reg">-->
                            <center>
                                <!--<img src="img/sistemas.png" width="600" height="100">-->
                                <!--<h2>BIBLIOTECA EPIS</h2><br>
			<h3>REGISTRAR ESTUDIANTE</h3><br><br>-->
                                <?php echo isset($alert) ? $alert : ""; ?>
                                <div class="mb-3"><br>
                                    <input type="text" name="nombre" placeholder="Nombres" class="form-control" required
                                        onkeypress="return sololetras(event)" onpaste="return false"
                                        title="Debe contener solo  letras ">
                                    <!--?!.* (?: |$))-->
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="apellidos" required placeholder="Apellidos"
                                        class="form-control" required onkeypress="return sololetras(event)"
                                        onpaste="return false" title="Debe contener solo  letras ">
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="celular" required placeholder="celular"
                                        class="form-control" onkeypress="return solonumero(event)"
                                        onpaste="return false" title="Debe contener 9 números y empezar con 9">
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="dni" required placeholder="DNI" class="form-control"
                                        onkeypress="return solonumero(event)" onpaste="return false"
                                        title="Debe contener">
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="correo" required placeholder="Correo" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <input type="password" name="pass1" required placeholder="contraseña"
                                        class="form-control">
                                </div>
                                <div class="mb-3">
                                    <input type="password" name="pass2" required placeholder="repita contraseña"
                                        class="form-control">

                                </div>
                                <!--<a href="es_login.php" class="btn btn-secondary">Volver</a>-->
                                <input type="submit" value="Registrar" class="btn btn-success" class="button"><br>

                                <br>
                            </center>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php');?>

</body>
<script>
function sololetras(e) { //recibe el evento parametro 
    key = e.keyCode || e.which;
    teclado = String.fromCharCode(key).toLowerCase();
    letras = " abcdefghijklmnñopqrstuvwxyz";
    especiales = "8-37-38-46-164";
    teclado_especial = false;
    for (var i in especiales) {
        if (key == especiales[i]) {
            teclado_especial = true;
            break;
        }
    }
    if (letras.indexOf(teclado) == -1 && !teclado_especial) {
        return false;
    }
}



function solonumero(e) {
    key = e.keyCode || e.which;
    teclado = String.fromCharCode(key);
    numeros = "0123456789";
    especiales = "8-37-38-46";
    teclado_especial = false;
    for (var i in especiales) { //buscando la tecla presionada 
        if (key == especiales[i]) {
            teclado_especial = true;
        }
    }
    if (numeros.indexOf(teclado) == -1 && !teclado_especial) { // si esque no encuentra va ser menos 1
        return false;
    }
}
</script>



</html>