<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="CSS/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;400&display=swap" rel="stylesheet">
		
	</head>
	<body>
		

		<?php include 'manu.php' ;?>

		<div class="jumbotron">
  <h1>Zoom'in</h1>
  <p>We will give an erotic touch to your portrait</p>
</div>


<section class="my-5" >
			<div class="py-5">
				<h2 class="text-center">Contact With Us</h2>
			</div>


			<div class="w-50 m-auto">
			   <form action="userinfo.php" method="post">
			   	<div class="form-group">
			   		<label> Name </label>
			   		<input type="text" name="user" autocomplete="off" class="form-control">
			   		
			   	</div>

			   	<div class="form-group">
			   		<label> Email Id  </label>
			   		<input type="text" name="email" autocomplete="off" class="form-control">
			   		
			   	</div>

			   	<div class="form-group">
			   		<label> Mobile No.  </label>
			   		<input type="text" name="mobile" autocomplete="off" class="form-control">
			   		
			   	</div>

			   		<div class="form-group">
			   		<label> Comments </label>
			   		<textarea class="form-control" name="comment">
			   			
			   		</textarea>
			   		
			   	</div>

			   	<button type="submit" class="btn btn-success">Submit</button>

			   	
			   </form>
			</div>
		</section>
	
</section>











<footer>
			<h4 class="p-3 bg-dark text-center text-white">@zoom'in</h4>
			<h4 class="p-3 bg-transparent text-center text-black">email : zoomin@gmail.com</h4>

			<h4 class="p-3 bg-dark text-center text-white">phone : 01706345678</h4>

		</footer>


	</body>
	</html>
