<?php
    	$id = $_GET['id'];

		if(empty($id))
			header('Location: login.html ');
		else {
?>
<!doctype html>
	<head>
		<meta charset="utf-8">
		<title>Dscoop - Evolución Digital 2015</title>
		<link rel="stylesheet" href="style.css">
		<link rel="shortcut icon" href="img/favicon.ico">
		<meta name="description" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="cleartype" content="on">
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	</head>

	<body>
		<!--[if lt IE 9]>
			<p class="chromeframe">Estás usando una versión <strong>vieja</strong> de tu explorador. Por favor <a href="http://browsehappy.com/" target="_blank"> actualiza tu explorador</a> para tener una experiencia completa.</p>
		<![endif]-->
		<header>
			<div class="width clearfix">
				<img class="columna c-3 small-5 medium-5" src="img/dscoop-event-logo.png" alt="">
				<img class="columna c-3 right medium-5 small-5" src="img/dscoop-hp-logo.png" alt="">
			</div><!-- width clearfix -->
		</header>
		<div class="container">

			<div class="main"  style="padding-top: 150px">
				<div id="registros" class="width clearfix">
				</div><!-- registros -->

				<div class="width clearfix">

					<a class="columna c-3 small-12 boton" href="DescargaCSV.php">Descarga archivo</a>

				</div><!-- width -->

			</div><!-- main -->

		</div><!-- container -->

		<footer>

		</footer>

	</body>

	<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    <script src="dscoop.js"></script>
    <script type="text/javascript">
		$(document).ready(function(e) {
            $.ajax({    //create an ajax request to load_page.php
				type: "GET",
				url: "MuestraRegistros.php",
				dataType: "html",   //expect html to be returned
				success: function(response){
				$("#registros").html(response);
				//alert(response);
				}
			});
        });
	</script>
</html>
<?php } ?>

