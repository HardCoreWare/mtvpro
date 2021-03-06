<?php
require_once __DIR__ . '/vendor/autoload.php';

use Google\Cloud\BigQuery\BigQueryClient;
$projectId='informe-211921';

$bigQuery = new BigQueryClient([
    'projectId' => $projectId,
]);


error_reporting (0);
$email=$_POST['email']; 
error_reporting (0);
$pass=$_POST['pass']; 
error_reporting (0);
$name=$_POST['name'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Iniciar Sesion</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-90 p-b-30">
				<form class="login100-form validate-form" action="" method="POST">

					<div class="text-center p-t-55 p-b-30">
						<span class="txt1">
							Iniciar Sesión
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Porfavor Ingresa este campo">
						<input class="input100" type="text" name="email" id="email" placeholder="e-mail">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-20" data-validate = "Porfavor ingresa este campo">
						<span class="btn-show-pass">
							<i class="fa fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" id="pass" placeholder="Contraseña">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" value="Ingresar" id="ingresar" class="login100-form-btn">
							Ingresar
						</button>
					</div>
					
					
				</form>
			</div>
		</div>
	</div>

</body>
</html>
<?php 



$query = <<<ENDSQL
select usuario, name, contrasena from `INFOR.USER` where usuario="$email";
ENDSQL;
$queryJobConfig = $bigQuery->query($query);
$queryResults = $bigQuery->runQuery($queryJobConfig);



if ($queryResults->isComplete()) {
    $i=0;
    $rows = $queryResults->rows();
	foreach($rows as $row){ 
		print_r($row);
  } 
}else {
    throw new Exception('The query failed to complete');
}


if($row['usuario']=="lzarate@pitsistemas.com"){
	header("Dark/index.php");
	die();
}
else{
	header("index.php");
		die();
	}



?>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>