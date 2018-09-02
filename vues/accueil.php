<?php 
require_once '/modele/classes/GereUser.php';
if (!ISSET($_SESSION)) {
    session_start();
}


$c = (ISSET($_REQUEST['courriel']))?$_REQUEST['courriel']:"";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.6/css/bootstrap.min.css" />
<style>
    body {
        background-image: url(./img/bg1.jpg);
        /*height : 150px;
        overflow: auto;*/
    }
    form {
        background-color: #d9edf7;
        padding: 10px 10px 50px 10px;
        margin-top: 10px;
        /*height : 150px;
        overflow: auto;*/
    }    
    .error {
        color : red;
    }
</style>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
<div class="heading-contact">
        <div class="container">
        <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                        <div class="wow bounceInDown" data-wow-delay="0.4s">
                        <div class="section-heading">
                        <h2 class="jumbotron"></h2>
                        <i class="fa fa-2x fa-angle-down"></i>
                        </div>
                        </div>
                </div>
        </div>
        </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="boxed-grey">
                <div class="row">
                    <div class="col-md-6">
                        <form id="contact-form" method="post" action="">
                        <input type="hidden" name="action" value="connecter" />
                        <h3>Connexion</h3>
                        <div class="form-group">
                            <label for="username">
                                USERNAME</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="text" class="form-control" id="username" name="username" value="<?=$c?>" placeholder="" required="required" /></div>
                            <span class="error"><?=GereUser::getMessage("username")?></span>
                        </div>
                        <div class="form-group">
                            <label for="motDePasse">
                                Mot de passe</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span>
                                    </span>
                                    <input type="password" class="form-control" id="motDePasse" name="motDePasse" placeholder="Mot de passe" required="required" />
                                </div>
                                    <span class="error"><?=GereUser::getMessage("motDePasse")?></span>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-skin pull-right" id="bConnexion" name="bConnexion" >
                                Se connecter</button>
                        </div>
                     </form>
                  </div>
                    
                </div>
            </div>
        </div>
    </div>	
</div>
</body>

</html>
