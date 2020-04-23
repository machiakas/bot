<?PHP
session_start();
if (!(isset($_SESSION['sesion']) && $_SESSION['sesion'] != '')) {
    header ("Location: /login-test/");
}
$usuario = $_SESSION['usuario'];


?>
<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <title>Portal Administracion</title>

    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="static/css/index.css">
    <link rel="shortcut icon" type="image/png" href="static/img/twitch_logo.webp">

    <script
            src="https://code.jquery.com/jquery-3.4.1.js"
            integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
            crossorigin="anonymous"></script>


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


        
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="static/img/twitch_logo.webp"/>
                </div>
                <form class="col-12" id="formulario">
                    <div class="form-group" id="user-garoup">
                        <input type="text" class="form-control" name="usuario" placeholder="Ingrese canal"/>
                        <input type="password" class="form-control" name="pass" placeholder="Ingrese pass"/>
                    </div>
                    

                    <button onclick="mandar(); mandar2();" type="button" id="boton" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Iniciar! </button>
                </form>
            </div>

        </div>
    </div>
</body>
<script>



    function mandar(){
        $.ajax({
            type: "POST",
            url: "post.php",
            data: $('#formulario').serialize(),
            success: console.log(this.success),
    }
)};
    function mandar2(){
        if(pass=="test"){
        $.ajax({
            type: "POST",
            url: "http://ec2-52-90-42-232.compute-1.amazonaws.com:60321/machiakas",
    }
)}};



    
</script>



</html>