
<html>

<head>
<meta http-equiv="Content-Language" content="en-ca">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<link rel="stylesheet" href="./css/style.css" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<title>Connéxion</title>
</head>

<body>
    <div id="body">

	
        <div>
            
<?php

	$u = "";
	if (ISSET($_REQUEST["username"]))
		$u = $_REQUEST["username"];
?>	
	
                <form action=""  method="post">
                 <input name="username" id="login" type="text" value="<?php echo $u?>" placeholder="votre e-mail"/>
<?php if (ISSET($_REQUEST["field_messages"]["username"])) 
            echo "<div id='errormess'>".$_REQUEST["field_messages"]["username"]."</div>";
?>
                <input name="password" type="password" id="pass" placeholder="mot de pass"/>
 <?php if (ISSET($_REQUEST["field_messages"]["password"])) 
            echo "<div id='errormess'>".$_REQUEST["field_messages"]["password"]."</div>";
?>                  
                    

		<input name="action" value="connecter" type="hidden" /><br/>
                  <button value=" OK "  type="submit" id="btnOk">OK</button>
                    
	</form>
	
        </div>
     

</div>
</body>
</html>


