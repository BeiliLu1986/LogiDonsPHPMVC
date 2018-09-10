<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Language" content="en-ca">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- Stylesheets -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<link rel="stylesheet" type="text/css" href="./css/full-width-pics.css">
<link rel="stylesheet" type="text/css" href="./css/body.css">
<title>LogiDons</title>
</head>
<body class="d-flex flex-column"> 
<!-- MENU -->
<nav class="navbar navbar-expand-lg navbar-light bg-light" >
  <a class="navbar-brand" href="?action=">LogiDons</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
		<li class="nav-item active" >
			<a class="nav-link" href="?action=">Accueil &nbsp;<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="?action=creerDon">Faire un don &nbsp; <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-heart-empty"></a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="?action=newBenevole">Bénévolat &nbsp; <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-dashboard"></a>
		</li>
		<?php
			if (!ISSET($_SESSION)) session_start();
			if (ISSET($_SESSION["connecté"]))
			{
		?>
		<li class="nav-item">
			<a class="nav-link" href="?action=deconnecter">D&#233connecter &nbsp; <?php echo $_SESSION["connecté"]; ?>&nbsp;<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-off"></span></a>
		</li>
		<?php	
			}
			else
			{
		?>
		<li class="nav-item">
			<a class="nav-link" href="?action=connecter">Se connecter &nbsp;<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></a>
		</li>
		<?php	
			}
		?>	
    </ul>
   </div>
</nav>
<!-- MENU -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">LogiDons</h1>
    <h4 class="display-5">Gestion des dons pour un centre d’aide aux démunis.</h4>
  </div>
</div>
<!-- Content  -->			
<div class="container-fluid" style="min-height:500px;">
<!--****************** /row Content ********* -->
    <div class="row">
	    <div id="content" class= "col-md-12">
				<?php	include $vue.".php";?>	
					
		</div>
	</div>
<!--****************** /row Content **********-->
</div>
<!--/.fluid-container-->
<!-- Footer -->
<footer class="navbar-default text-black mt-4">
    <div class="container-fluid py-3">
           <!-- Copyright -->
    <div class="footer-copyright text-center py-3 " >
	   &#9400; 2018 Copyright:<a>www.logidons.com</a>
	 </div>
    <!-- Copyright -->
    </div>
</footer>
<!-- Footer -->  
</body>
</html>


