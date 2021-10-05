<?php include('menu_estudiante.php');?>


<?php
session_start();
//echo $_SESSION['DNI'] ;

?>


<?php 
if($_POST){
	$archivo =$_FILES['imagen']['tmp_name'];
$destino = "imagenes/".$_FILES['imagen']['name'];
move_uploaded_file($archivo, $destino);
}else{


	$conexion=mysqli_connect('localhost','root','','bibliotecaepis');

		$sql="SELECT imagen,titulo,n_control,estado,formato,cantidad,genero from libro";
		$result=mysqli_query($conexion,$sql);

		

?>


<center>



    <div class="card shadow mb-4" style="width:70%">
        <div class="card-header py-3">
            <center>
                <h1>CATÁLOGO</h1>
            </center>
        </div>
        <div class="container">
            <!--<div class="row">
                <div class="col-lg-12">-->


            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-sm" style="width:70%">
                        <thead>
                            <tr>
                                <td>Libro</td>
                                <td>Genero</td>
                                <td>Estado</td>
                                <td>Formato</td>
                                <!--<td>Titulo</td>-->
                                <td>Acciones</td>
                            </tr>
                        </thead>
                        <?php	while($mostrar=mysqli_fetch_array($result)){

if ($mostrar['cantidad'] == 1) {
                        $estado = '<span class="badge bg-success">Disponible</span>';
                    } else {
                        $estado = '<span class="badge bg-danger">Prestado</span>';
                    }



		?>


                        <tr>
                            <td><img width='100' height='100' src=' <?php echo $mostrar["imagen"] ?>'>
                                <p><?php echo $mostrar["titulo"]?></p>
                            </td>
                            <td> <span class="badge bg-secondary"><?php echo $mostrar["genero"]?></span></td>
                            <td>
                                <p><?php echo $estado; ?></p>
                            </td>
                            <td> <span class="badge bg-warning text-dark"><?php echo $mostrar["formato"]?></span></td>
                            <div class="pie">

                                <?php
		if ($mostrar['cantidad'] == 1) {?>
                                <td><a href="visualizar.php?n_control= <?php echo $mostrar['n_control']?>"
                                        class="btn btn-outline-primary">Solicitar Libro</a></td>
                                <?php  } else {?>
                                <td> <button type="button" class="btn btn-outline-primary" disabled>
                                        Solicitar Libro
                                    </button></td>
                                <?php }


			?>

                        </tr>

                        <?php
}
	
}

	 ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</center>



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