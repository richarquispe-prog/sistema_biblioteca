<?php include('menu_administrador.php');?>

<?php
	include 'conexion.php';
 ?>

<br>
<div class="container-fluid">

    <div id="main-containe">

<div class="card shadow mb-4">
	<div class="card-header py-3">
	<center><h3>LISTA DE USUARIOS</h3></center>
</div>
<div class="container">
        <!--<div class="row">
                <div class="col-lg-12">-->
                	   <div class="card-body">
                    <div class="table-responsive">
	<table  id="example" class="table table-sm" style="width:100%" >
		<thead>
		<tr><td>Nombre </td>
			<td>Apellido</td>
			<td>Usuario</td>
			<td>DNI</td>
			<td>CORREO</td>
			<td>Contraseña</td>
			<td>Acciones</td>
			<td></td>
		</tr>
		</thead>
			<?php
include 'conexion.php';
//session_start();
//echo $_SESSION['DNI'] ;
//$var=$_SESSION['DNI'] ;
?>

		<?php 
		$sql="SELECT * from usuarios ";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['apellidos'] ?></td>
			<td><?php echo $mostrar['tipo_usuario'] ?></td>
			<td><?php echo $mostrar['DNI'] ?></td>
			<td><?php echo $mostrar['Correo_Institucional'] ?></td>
			
			<td><?php echo $mostrar['Password'] ?></td>
			<td><a href="editar_Usuario.php?DNI= <?php echo $mostrar['DNI'];?>" class="btn btn-success">Editar</a></td>
			<td><a href="eliminar_usuario.php?DNI=<?php echo $mostrar['DNI']; ?>" class="btn btn-danger">
                                                   Eliminar</td>
			
			<!--<td><?php //echo $mostrar['imagen'] ?></td>-->

			<?php

		?>
			
			
		</tr>
	<?php
	}
	 ?>
	</table>
	</div>
                </div>
        </div>
    </div>
  
  </div>
<br><br>
<!--<center>
	<a href="añadirlibro.php" class="button1">Añadir libro</a>
	</center>-->
</div>
 <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
  <!--  <script src="popper/popper.min.js"></script>-->
    <script src="bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>    
     
    <script type="text/javascript" src="formato.js"></script>
 	<?php include('includes/footer.php');?>
</body>
</html>





