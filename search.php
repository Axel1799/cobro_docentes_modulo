<!DOCTYPE html>
<html lang="es">

<head>
	<title>Cobro Docentes</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/cash.png" />
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="app.js"></script>
	<script src="https://kit.fontawesome.com/85b07c1155.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript">
		window.onload = function () {
			OpenBootstrapPopup();
		};
		function OpenBootstrapPopup() {
			$("#ventana-modal").modal('show');
		}
	</script>
	

</head>

<body>
	

	<!-- Image and text -->

	<nav class="navbar navbar-light justify-content-center navbar-custom">
		<a class="navbar-brand" href="http://www.unae.edu.py/">
			<img src="images/logo2.png" width="130" height="55">
		</a>
	</nav>


	<div class="bg-contact2">
		<div class="container-contact2">
			<div class="wrap-contact2">

				

				<form action="/cobros/cobro_docentes_modulo/" method="POST" class="contact2-form validate-form">
					<span class="contact2-form-title">
						Cobros - Prueba
					</span>

					<?php

					require("data/db.php");

					if (isset($_POST["acta"])) {

						$bu = $_POST["acta"];

						$query = "SELECT * FROM cobros WHERE acta LIKE '$bu'";
						

						if ($result = mysqli_query($mysqli, $query)) {

							$row_count = mysqli_num_rows($result);

							if($row_count > 0){

							

							while ($finfo = mysqli_fetch_assoc($result)) {
								

					?>

								<span class="contact2-form-title" style="color: #f8d121">
									¡Encontrado!
								</span>
								<span class="contact2-form-title" style="color: #E74F52">
									<h5 style="text-align: center;">Estos datos corresponden al mes de</h5>
									<h4 style="text-align: center;">OCTUBRE</h4>
									<h5 style="text-align: center;">Que se abonan del 10 al 15 de noviembre del 2022</h5>
								</span>							

								<div class="modal" tabindex="-1" id="ventana-modal">
									<div class="modal-dialog modal-dialog-centered">
										<div class="modal-content">					
											<div class="modal-header">
												
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<p style="text-align:center; color: #cf1313">
													Tenga en cuenta que si alguno de los datos expresados en esta página difiere a los datos que usted considera correctos, 
													debe comunicar esa diferencia a su Unidad Académica y dicho cambio se aplicará a partir de las 24 horas sucesivas.
												</p>
											</div>
											<div class="container-contact2-form-btn">
												<div class="wrap-contact2-form-btn">
													<div class="contact2-form-bgbtn"></div>
													<button class="contact2-form-btn" data-dismiss="modal">
														Aceptar
													</button>
												</div>
											</div><br>	
										</div>
									</div>
								</div>

								
								
								
								<p>Código de acta <?= $finfo["acta"] ?></p><br>

								<div class="wrap-input2 validate-input" data-validate="Name is required">
									<span class="focus-input2" data-placeholder="¿HABILITADO/A PARA COBRAR?"></span><br>
									<input class="input2" style="font-weight: bold" type="text" font placeholder="<?= $finfo["habilitado"] ?>" readonly>
								</div><br>

								<div class="wrap-input2 validate-input" data-validate="Name is required">
									<span class="focus-input2" data-placeholder="HORAS A COBRAR EN ESTA MATERIA"></span><br>
									<input class="input2" style="font-weight: bold" type="text" placeholder="<?= $finfo["hours"] ?>" readonly>
								</div>

								<div class="wrap-input2 validate-input" data-validate="Name is required">
									<span class="focus-input2" data-placeholder="DESCRIPCIÓN"></span><br>
									<textarea class="input2" style="font-weight: bold" type="text" placeholder="<?= $finfo["descripcion"] ?>" readonly></textarea>
								</div>

								<div class="wrap-input2 validate-input" data-validate="Name is required">
									<span class="focus-input2" data-placeholder="CURSO"></span><br>
									<textarea class="input2" style="font-weight: bold" type="text" placeholder="<?= $finfo["curso"] ?>" readonly></textarea>
								</div>

								<div class="wrap-input2 validate-input" data-validate="Name is required">
									<span class="focus-input2" data-placeholder="CONTROL DE CARGA DE PUNTAJES A MAIUS - MGTER. FRANCISCO CANTONI"></span><br>
									<input class="input2" style="font-weight: bold" type="text" placeholder="<?= $finfo["control_cantoni"] ?>" readonly>
								</div>

								<div class="wrap-input2 validate-input" data-validate="Name is required">
									<span class="focus-input2" data-placeholder="CONTROL DE CARGA DE HORAS ASIGNADAS - LIC. NADIA CORREA"></span><br>
									<input class="input2" style="font-weight: bold" type="text" placeholder="<?= $finfo["control_nadia"] ?>" readonly>
								</div>

								<div class="wrap-input2 validate-input" data-validate="Name is required">
									<span class="focus-input2" data-placeholder="CONTROL DE PLATAFORMA MOODLE - UNIDAD ACADÉMICA"></span><br>
									<input class="input2" style="font-weight: bold" type="text" placeholder="<?= $finfo["control_moodle"] ?>" readonly>
								</div>
								<!-- Fuera temporalmente 
								<div class="wrap-input2 validate-input" data-validate="Name is required">
									<span class="focus-input2" data-placeholder="CONTROL POR COLONIAS (Solo aplicable a la Sede Hohenau)"></span><br>
									<input class="input2" style="font-weight: bold" type="text" placeholder="<?= $finfo["control_colonias"] ?>" readonly>
								</div>
								-->

								<div class="wrap-input2 validate-input" data-validate="Name is required">
									<span class="focus-input2" data-placeholder="CONTROL ACADÉMICO - UNIDAD ACADÉMICA"></span><br>
									<input class="input2" style="font-weight: bold" type="text" placeholder="<?= $finfo["control_academico"] ?>" readonly>
								</div>

								<div class="wrap-input2 validate-input" data-validate="Name is required">
									<span class="focus-input2" data-placeholder="CONTROL DEL PROYECTO DE INVESTIGACIÓN/EXTENSIÓN - UNIDAD ACADÉMICA"></span><br>
									<input class="input2" style="font-weight: bold" type="text" placeholder="<?= $finfo["proyecto_inv"] ?>" readonly>
								</div>

								<div class="wrap-input2 validate-input" data-validate="Name is required">
									<span class="focus-input2" data-placeholder="OBSERVACIÓN"></span><br>
									<textarea class="input2" style="font-weight: bold" type="text" placeholder="<?= $finfo["obs"] ?>" readonly></textarea>
								</div>					

					<?php						
							}
						}else{ ?>

							<span class="contact2-form-title" style="color: #f92f60">
								No Encontrado
							</span>
							<div class="wrap-input2 validate-input" data-validate="Name is required">
								<br>
								<p readonly style="text-align: center;">El código del acta ingresado no existe.</p>
							</div><?php
						}
							
						}
						
						mysqli_free_result($result);
						
						
						
					}
					


					mysqli_close($mysqli);
					?>
					<br>
					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
							<button class="contact2-form-btn">
								Introducir nuevo código
							</button>
						</div>
					</div>
					<br>
					<p style="color: #6b6b6b">
						<u>Observación</u>: Tenga en cuenta que si alguno de los datos expresados en esta página difiere a los datos que usted considera correctos, debe comunicar esa diferencia a su Unidad Académica y dicho cambio se aplicará a partir de las 24 horas sucesivas.
					</p> 
					<br><p align="center">Ante cualquier inconsistencia, comunicarse al +595 986 635960</p>

				</form>
			</div>
		</div>
	</div>




	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>
<div class="center">


<footer class="footer-distributed">

	<div class="footer-left justify-content-center">
		<p>Designed by Axel Jara &copy; 2022</p>
	</div>

</footer>
</div>

</body>

</html>
