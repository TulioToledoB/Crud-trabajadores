<!DOCTYPE html>
<html lang="en">
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<title>Alta trabajadores</title>
<style>

.get-in-touch {
  max-width: 800px;
  margin: 50px auto;
  position: relative;

}
.get-in-touch .title {
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 3px;
  font-size: 3.2em;
  line-height: 48px;
  padding-bottom: 48px;
     color: #5543ca;
    background: #5543ca;
    background: -moz-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
    background: -webkit-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
    background: linear-gradient(to right,#f4524d  0%,#5543ca  100%) !important;
    -webkit-background-clip: text !important;
    -webkit-text-fill-color: transparent !important;
}

.contact-form .form-field {
  position: relative;
  margin: 32px 0;
}
.contact-form .input-text {
  display: block;
  width: 100%;
  height: 36px;
  border-width: 0 0 2px 0;
  border-color: #5543ca;
  font-size: 18px;
  line-height: 26px;
  font-weight: 400;
}
.contact-form .input-text:focus {
  outline: none;
}
.contact-form .input-text:focus + .label,
.contact-form .input-text.not-empty + .label {
  -webkit-transform: translateY(-24px);
          transform: translateY(-24px);
}
.contact-form .label {
  position: absolute;
  left: 20px;
  bottom: 11px;
  font-size: 18px;
  line-height: 26px;
  font-weight: 400;
  color: #5543ca;
  cursor: text;
  transition: -webkit-transform .2s ease-in-out;
  transition: transform .2s ease-in-out;
  transition: transform .2s ease-in-out, 
  -webkit-transform .2s ease-in-out;
}
.contact-form .submit-btn {
  display: inline-block;
  background-color: #000;
   background-image: linear-gradient(125deg,#a72879,#064497);
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 16px;
  padding: 8px 16px;
  border: none;
  width:200px;
  cursor: pointer;
}
table {
  border-collapse: collapse;
  width: 100%;
}

table, th, td {
  text-align: center;
}

th, td {
  padding: 12px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #ddd;
}


</style>
		  
	<body>
<section class="get-in-touch">
<div class="contact-form row">
   <h1 class="title">Borrar Registro de trabajador</h1>
   
   <table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Apellido 1</th>
					<th>Apellido 2</th>
					<th>E-mail</th>
					<th>Numero segun tipo</th>
				</tr>
			</thead>
								<?php
											session_start();
							

							$enlace = mysqli_connect('localhost','prova','prova', 'empleados');
							if (!$enlace) {
								echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
								echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
								echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
								exit;
							}

							$pregunta="SELECT * FROM employees WHERE ECode='".$_POST['clau']."'";
							$_SESSION['valor']=$_POST['clau'];
						   

							$sql=mysqli_query($enlace,$pregunta);
							$row=mysqli_fetch_array($sql);
							echo "<tr align='center'>";
								echo "<td>".$row[0]."</td>";
								echo "<td>".$row[1]."</td>";
								echo "<td>".$row[2]."</td>";
								echo "<td>".$row[3]."</td>";
								echo "<td>".$row[4]."</td>";
								echo "<td>".$row[5]."</td>";
							echo "</tr>";
							echo "<br>";
						
							 $sql=mysqli_query($enlace,$pregunta);


							mysqli_close($enlace);
								?>
		</table>
			<form action="borrarTrabajador.php">
			  <div class="form-field col-lg-12">
				 <input class="submit-btn" type="submit" value="Aceptar">
			  </div>
			</form>
			
			<form action="gestion.php">
			  <div class="form-field col-lg-12">
				 <input class="submit-btn" type="submit" value="Volver">
			  </div>
			</form>
		</div>
		</section>
	</body>
</html>