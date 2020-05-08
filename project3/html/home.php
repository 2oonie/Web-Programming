<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>Kitten Adoption Agency</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <link href = "../css/home.css" rel = "stylesheet" type = "text/css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	</head>
<body>

	<div class="jumbotron text-center" style="margin-bottom:0">
	<img align = "left" src ="../img/img_logo.jpg" alt ="logo" width = "100" height = "100"/>
	  <h1>Adopting Center<h1>
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
						  <button onclick="myFunction()" class="dropbtn" max-width = "100%">Menu</button>
						  <div id="myDropdown" class="dropdown-content">
							<a href="home.php">Home</a>
							<a href="registerpage.php">Registration</a>
							<a href="animated.php">Animations</a>
						  </div>
						</div>
							<br>
		  <h2>About Myself</h2>
		  <img src="../img/img_countryside.jpg" style="max-width:100%"/>
		  <br><br>
		  <p>I am a proud owner of this fine establishment. My main mission in life is to find a home for all these adorable 
				and energetic little creatures.</p>
		  <br>
		  <h3>Story of Adoption</h3>
		  <br>
		
			<img src="../img/img_three_kittens.jpg" style="max-width:100%"/>
			<br><br>
				<p>Hannah felt like there was something missing in her life. So, she 
					recently came to our establishment and adopted three beautiful newborn kittens. She knew right at that 
					moment. The three beautiful newborn kittens were the one to fill her life with happily. 
				<br><br>
				
			<img src="../img/img_two_kittens.jpg" style="max-width:100%"/>
				<p>Jen was so happy to adopt two cutie kittens for our establishment. She could not stop hugging and cuddling with them and was updating us.  
				</p>
			<br>
		  <h3>Pet Adoption Agencies</h3>
		  <p>Here are some other pet adoption agencies where you are visit. They are happy to assist you if you have any questions.</p>
		  <ul class="nav nav-pills nav-stacked">
			<li class="active"><a href="https://apamo.org/" method="get" target="_blank">APA Adoption</a></li>
			<li><a href="https://www.strayrescue.org/animals-for-adoption" method="get" target="_blank">Stray Rescue</a></li>
			<li><a href="https://www.adoptapet.com/public/about_us/" method="get" target="_blank">AdoptAPet</a></li>
		  </ul>
		  <hr class="hidden-sm hidden-md hidden-lg">
		</div>
		<div class="col-sm-8">
		  <h2>Welcome to the Adoption Agency</h2>
				<h5>Established in April 1, 1990</h5>
				<img src="../img/img_farmhouse.jpg" style="max-width:100%"/>
				<br><br>
				<p> Since the late 1990s, our main objection is to bring a little bundle of enjoy to everyone and anyone out there.
					 There are some much different type of adorable and energetic felines waiting for you and they are looking for a house to spend the rest of their life with.
					 You could be the one. Come and register online or visit our establishment.  
				</p>
		
				<br>
		  <h3>How Adoptions Work Today</h3>
				<p> If you are new to adoption, you are likely wondering exactly what adoption is and what are the process of adopting. You do not have to worry because we have a 24/7 hours
				service to assist you.  
				</p>
				
				<br>
				
				<h5>Photo of Newborn Kittens:</h5>
			
				  <img class="mySlides" src="../img/img_bbw_kitten.jpg"
				  style="width:400px;height:200px;">
				  <img class="mySlides" src="../img/img_bg_kittens.jpg"
				  style="width:400px;height:200px;">
				  <img class="mySlides" src="../img/img_wg_kitten.jpg"
				  style="width:400px;height:200px;">
				<br>
				<p>These kittens are happily waiting for you to adopt them...</p>
				
			  </div>
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
