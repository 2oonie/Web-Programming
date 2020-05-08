<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>Confirmation</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <link href = "../css/register.css" rel = "stylesheet" type = "text/css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	  
	  

	</head>
	<body>

		<div class="jumbotron text-center" style="margin-bottom:0">
		<img align = "left" src ="../img/img_logo.jpg" alt ="logo" width = "100" height = "100"/>
		  <h1>Confirmation<h1>
		</div>

		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
			  </button>
			  <a class="navbar-brand" href="#">Ramen Cat</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="home.php">Home</a></li>
				<li><a href="registerpage.php">Registration Page</a></li>
				<li><a href="animated.php">Animation Page</a></li>
			  </ul>
			</div>
		  </div>
		</nav>
		<center>
		<?php
			foreach($_POST as $key => $value) {
				if($key == "password" || $key == "repeatPassword")
				{
					$value = "*******";
				}
				echo "<br/>$key : $value<br/>";
			}
		?>
		</center>
		<div class="jumbotron text-center" style="margin-bottom:0">
		  <p style ="font-size: 10px">2020 Manschester Ln, St.Louis, MO 63112
						</p>
						<p style ="font-size: 10px">Phone:+1 314 1234151
						</p>

						<a href="mailto:someone@example.com"><span class="glyphicon glyphicon-envelope"></span></a>

						<a href="https://www.reddit.com/r/Kitten/" method="get" target="_blank"><span class="glyphicon glyphicon-camera"></span></a>

						<a href="https://www.youtube.com/watch?v=jPhGpktH56Q" method="get" target="_blank"><span class="glyphicon glyphicon-film"></span></a>
		</div>

		<script>
				/* When the user clicks on the button, 
				toggle between hiding and showing the dropdown content */
				function myFunction() {
				  document.getElementById("myDropdown").classList.toggle("show");
				}

				// Close the dropdown if the user clicks outside of it
				window.onclick = function(event) {
				  if (!event.target.matches('.dropbtn')) {
					var dropdowns = document.getElementsByClassName("dropdown-content");
					var i;
					for (i = 0; i < dropdowns.length; i++) {
					  var openDropdown = dropdowns[i];
					  if (openDropdown.classList.contains('show')) {
						openDropdown.classList.remove('show');
					  }
					}
				  }
				}
			</script>
	</body>
</html>