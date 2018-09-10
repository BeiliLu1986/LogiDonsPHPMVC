<div class="container">
          
<?php
	$u = "";
	if (ISSET($_REQUEST["username"]))
		$u = $_REQUEST["username"];
?>
        <form class="form-horizontal" role="form" method="POST" action="">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h2>Connexion</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group has-danger">
                        <label class="sr-only" for="email">E-Mail Address</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                            <input class="form-control" name="username" id="login" type="text" value="<?php echo $u?>" placeholder="votre@courriel.com" required autofocus/>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                           <?php if (ISSET($_REQUEST["field_messages"]["username"])) 
								echo "<div id='errormess'>".$_REQUEST["field_messages"]["username"]."</div>";
							?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="sr-only" for="password">Password</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                            <input class="form-control" name="password" type="password" id="pass" placeholder="Mot de pass"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                        <?php if (ISSET($_REQUEST["field_messages"]["password"])) 
							echo "<div id='errormess'>".$_REQUEST["field_messages"]["password"]."</div>";
						?>  
                        </span>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 1rem">
                <div class="col-md-3"></div>
                <div class="col-md-6">
					<input name="action" value="connecter" type="hidden" />
                    <button type="submit" class="btn btn-success"><i class="fa fa-sign-in"></i> Login</button>
                </div>
            </div>
        </form>
    </div>		


