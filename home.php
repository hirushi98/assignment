<!DOCTYPE html>
<head>
<title>Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script>
	
	$(document).ready(function(){

	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("token_value").setAttribute('value', this.responseText) ;
		}
	};
	
	xhttp.open("GET", "tokenGen.php", true);
	xhttp.send();
	
	});
</script>
</head>

  <strong>
 
			<?php
			if(isset($_POST['username'],$_POST['password'])){
				$user_name = $_POST['username'];
				$password = $_POST['password'];
				if($user_name == 'admin' && $password == 'admin123'){
					echo 'Successfully logged in';
				
				}
				else{
					echo 'Invalid Credentials';
					exit();
				}
			}
			?>




<body>
	<br>
	<br>
   <div  align="center" >
    		<h2>Write Something</h2>
            <form action="result.php" method="post">
          
                 
              <input id="input"  name="update_post" placeholder="" class="input"><br><br>
		     <input type="hidden" name="token" value="" id="token_value"/>
		
                 <div class="form-group">
                   <input type="submit" name="Submit" class="btn btn-info btn-md" value="Update Post">
                </div> 
                    
            </form>
    </div>

</body>

</html>

 
