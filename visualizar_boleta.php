
<?php include('menu_estudiante.php');?>
<?php 

	include 'conexion.php';

 ?>
<!--iconoooo-->
	<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />-->


	<div class="container-fluid">

<div id="main-containe">
    
<!--<center><h1>BOLETAS</h1></center>-->




<div class="card shadow mb-4">
	<div class="card-header py-3">
	<center><h3>BOLETAS PENDIENTES</h3></center>
</div>
<div class="container">
        <!--<div class="row">
                <div class="col-lg-12">-->

                		
                	   <div class="card-body">
                    <div class="table-responsive">  
                  
                	

	<table  id="example" class="table table-sm" style="width:100%" >
		<thead>
		<tr><td>CODIGO BOLETA </td>
			<td>DNI </td>
			<td>NUMERO DE CONTROL</td>
			<td>FECHA DE ENTREGA</td>
			<td>FECHA DE DEVOLUCION</td>
			<td>Accion</td>
			
			
			
		</tr>
		</thead>
			<?php
include 'conexion.php';


session_start();
//echo $_SESSION['DNI'] ;
$var=$_SESSION['DNI'] ;
?>

		<?php 
		$sql="SELECT * from boleta WHERE DNI=$var";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){			
			 		

                   
		 ?>

		<tr>
			<td><?php echo $mostrar['codigo_boleta'] ?></td>
			<td><?php echo $mostrar['DNI'] ?></td>
			<td><?php echo $mostrar['n_control'] ?></td>
			<td><?php echo $mostrar['fecha_entrega'] ?></td>
			
			<td><?php echo $mostrar['fecha_devolucion'] ?></td>

			<td><a target="_black" href="fpdf.php?codigo_boleta= <?php echo $mostrar['codigo_boleta'];?>" class="btn btn-outline-success">Boleta</a></td>
			
			
			<!--<td><?php //echo $mostrar['imagen'] ?></td>-->

			<?php

		?>
	
			<?php?>
			
			
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
 <br><br> <br><br>
 <br><br>

<?php include('includes/footer.php');?>
  
</body>

</html>

