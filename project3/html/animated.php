<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>Kitten Animations</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <link href = "../css/animated.css" rel = "stylesheet" type = "text/css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	</head>
	<body>

		<div class="jumbotron text-center" style="margin-bottom:0">
			<img align = "left" src ="../img/img_logo.jpg" alt ="logo" width = "100" height = "100"/>
			<h1>Animations<h1>
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

		<div class="container">
		  <div class="row">
			<div class="col-sm-4">
				<div class="dropdown">
					<button onclick="myFunction()" class="dropbtn">Menu</button>
						  <div id="myDropdown" class="dropdown-content">
							<a href="home.php">Home</a>
							<a href="registerpage.php">Registration</a>
							<a href="animated.php">Animations</a>
						  </div>
				</div>
				<br>
				<img class="mySlides" src="../img/img_1234.jpg"
				style="width:400px;height:200px;">
				<img class="mySlides" src="../img/img_12345.jpg"
				style="width:400px;height:200px;">
				<img class="mySlides" src="../img/img_123456.jpg"
				style="width:400px;height:200px;">
			
				<h2>About The Club</h2>
				<p>"As the world grows more connected, digitally and physically, people are living closer together and interacting in ways they 
				never have before. As a result, the process of building communities – coming together with 
				people across cultures to share goals and ideas – is more important than ever before." - post-it</p>
				<br>
				<p>Nevertheless, we created this community to share to the world about our love for kittens and how they are
				the joy and love of our life.</p>
				<p> Come join the community, we're happily to have you on board.</p>
				<br>
		
				
				<hr class="hidden-sm hidden-md hidden-lg">
			</div>
				<div class="col-sm-8">
					<div class="effect">
						<p>Come Join the Rescue Community</p>
						<p>"Ramen Cat"</p>
					</div>
					<div>
						<div id="cat"></div>
						<div id="plateform"></div>
					</div>	  
				</div>
	     </div>
	   </div>


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
			var myIndex = 0;
			carousel();

			function carousel() 
			{
			  var i;
			  var x = document.getElementsByClassName("mySlides");
			  for (i = 0; i < x.length; i++)
			  {
				x[i].style.display = "none";
			  }
			 myIndex++;
			 if (myIndex > x.length) {myIndex = 1}
			 x[myIndex-1].style.display = "block";
			 setTimeout(carousel, 3000);
			}
		</script>
		
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
