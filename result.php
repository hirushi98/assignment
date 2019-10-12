<!DOCTYPE html>
<head>
<title>Result</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>
	 <div class="alert alert-info alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>

			<?php

			require_once 'token.php';
			$val = $_POST["token"];


			if(isset($_POST['update_post'])){
				if(token::checkToken($val,$_COOKIE['SesT'])){
					echo "Valid request: ".$_POST['update_post']. "<br>";
					echo "Session ID:  ".$_COOKIE['SesT']."<br>";
					echo "Token:  ".$val;	
						
				}
				else{
				   echo "<b>Invalid CSRF token:"." ".$_POST['update_post']."</b>";
				}
			}
			?>
</strong></div>
   
</body>

</html>
