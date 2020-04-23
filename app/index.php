<?PHP
session_start();
if ( $_SESSION['sesion'] == '' || (time() > $_SESSION['expire'])) {
	header ("Location: /");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title> Multi</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
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
<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	

<!--MI NAVBAR-->

<nav class="navbar navbar-expand-md navbar-light bg-light">
    	<a href="#" class="navbar-brand">Multi Bot</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="#" class="nav-item nav-link active">Twitch</a>
            <a href="#" class="nav-item nav-link">Instagram</a>
		<!--      <a href="#" class="nav-item nav-link">Comming Soon...</a>-->
        <!--      <a href="#" class="nav-item nav-link" tabindex="-1">Comming Soon..</a>-->
        </div>
        <div class="navbar-nav ml-auto">
            <a  class="btn btn-secondary pull-left" href='logout.php'>Cerrar Sesion</a>
        </div>
    </div>
</nav>
<!--FIN MI NAVBAR-->

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-26">
						Twitch Bot!
					</span>
					<div class="col-12 user-img">
						<img src="images/icons/twitch_logo.webp"/>
					</div>
<!--INICIO DE MI FORMULARIO-->
<!--CAMPOS DE DATOS-->

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100 text-center" type="text" id="user" name="email">
						<span class="focus-input100 text-center" data-placeholder="Ingrese nombre del canal"></span>
					</div>
					<div class="form-group">

						<label for="exampleSelect1">Seleccione cantidad de views</label>
							<select class="form-control" id="cantidadViews">
								<option>1</option>
								<option>20</option>
								<option>50</option>
								<option>100</option>
							</select>
					</div>

<!--FIN CAMPOS DE DATOS-->

<!--BOTON-->

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button onclick="sender()" type="button" class="login100-form-btn">
								Enviar
							</button>
						</div>
					</div>
<!--FIN BOTON-->
<!--CONSULTAS-->

					<div class="text-center p-t-115">
						<span class="txt1">
							Consultas? 
						</span>

						<a class="txt2" href="#">
							            multibot@gmail.com
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
<!--FIN CONSULTAS-->

<!--FIN DE MI FORMULARIO-->

	<script>


function sender(){
        $.ajax({
            type: "POST",
            url: "sender.php",
			data: {username: $("#user").val(), views: $("#cantidadViews").val()},
            success: function (response){
				$json = (JSON.parse(response));

				console.log($json);
			},
	})              
};

	</script>




	<div id="dropDownSelect1"></div>
	
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