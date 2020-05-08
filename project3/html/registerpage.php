<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>Registration</title>
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
		  <h1>Registration<h1>
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
							<h3 align="center">Kitten</h3>
							<h4 align="center">Kitten</h4>
							<!--<img src="../img/img_blanket_kitten.jpg" style="max-width:100%"/><br>-->
							<img src="../img/img_blanket_2kitten.jpg" style="max-width:100%"/><br>
							<img src="../img/img_basket_kitten.jpg" style="max-width:100%"/><br>
							<img src="../img/img_2kitten.jpg" style="max-width:100%"/><br>
							<!--<img src="../img/img_bundle_kittens.jpg" style="max-width:100%"/><br>-->
							<img src="../img/img_4kitten.jpg" style="max-width:100%"/><br>
							<img src="../img/img_kittens.jpg" style="max-width:100%"/><br>
							<h4 align="center">Kitten</h4>
							<h3 align="center">Kitten</h3>
			  </div>
			  
			  <?php
					include 'register.php';
				?>

			<div class="col-sm-8">
			   <form method="post" novalidate action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			  <div class="col-sm-6">
			  <br><br><br><br><br>
								<h3 class="double">Account Information</h3>
										
										<br>
										<label for ="username">Username: </label><br/>
										<input id ="userName" type ="text" name ="userName" placeholder ="Enter Username" size ="40" value="<?php echo $userName;?>"/><br/>
										<span class="error">* <?php echo $userNameErr;?></span>
									
										<br>
										<label for ="password">Password: </label><br/>
										<input id ="password" type = "password" name ="password" placeholder ="Enter password" size ="40" value="<?php echo $password;?>"/><br/>
										<span class="error">* <?php echo $passwordErr;?></span>
										
										<br>
										<label for ="repeatPassword">Confirm Password: </label><br/>
										<input id ="repeatPassword" type ="password" name ="repeatPassword" placeholder ="Enter confirm password" size ="40" value="<?php echo $repeatPassword;?>"/><br/>
										<span class="error">* <?php echo $repeatPasswordErr;?></span>
										
								</div>
								<div class="col-sm-6">
								<br><br><br><br><br>
								<h3 class="double">Personal Information</h3>
												<br>
												<label for="firstName">First Name: </label><br/>
												<input id="firstName" type ="text" name ="firstName" placeholder ="Enter first name" value="<?php echo $firstName;?>"/><br/>
												<span class="error">* <?php echo $firstNameErr;?></span>
												
												<br>
												<label for="lastName"> Last Name: </label><br/>
												<input id="lastName" type ="text" name ="lastName" placeholder ="Enter last name" value="<?php echo $lastName;?>"/><br/>
												<span class="error">* <?php echo $lastNameErr;?></span>
											
												<br>
												<label for ="firstAddress">Address: </label><br/>
												<input id ="firstAddress" type ="text" name ="firstAddress" placeholder ="Enter first address" value="<?php echo $firstAddress;?>" /><br/>
												<span class="error">* <?php echo $firstAddressErr;?></span>
												
												<br>
												<label for ="secondAddress">Address: </label><br/>
												<input type ="text" name ="secondAddress" placeholder ="Enter second address"  value="<?php echo $secondAddress;?>"/><br/>
												<span class="error">* <?php echo $secondAddressErr;?></span>
											
												<br>
												<label for ="city">City: </label><br/>
												<input id ="city" type ="text" name ="city" placeholder ="Enter city" value="<?php echo $city;?>"/><br/> 
												<span class="error">* <?php echo $cityErr;?></span>
												
												<br>
												<label for ="states">State: </label><br/>
											
												<select id="states" name = "states">
													<option <?php if($states == "select") { echo "selected"; } ?> value ="select">Select</option>
													<option <?php if($states == "alabama") { echo "selected"; } ?> value ="alabama">Alabama</option>
													<option <?php if($states == "alaska") { echo "selected"; } ?> value ="alaska">Alaska</option>
													<option <?php if($states == "arizona") { echo "selected"; } ?> value ="arizona">Arizona</option>
													<option <?php if($states == "arkansas") { echo "selected"; } ?> value ="arkansas">Arkansas</option>
													<option <?php if($states == "california") { echo "selected"; } ?> value ="california">California</option>
													<option <?php if($states == "colorado") { echo "selected"; } ?> value ="colorado">Colorado</option>
													<option <?php if($states == "connecticut") { echo "selected"; } ?> value ="connecticut">Connecticut</option>
													<option <?php if($states == "delaware") { echo "selected"; } ?> value ="delaware">Delaware</option>
													<option <?php if($states == "florida") { echo "selected"; } ?> value ="florida">Florida</option>
													<option <?php if($states == "georgia") { echo "selected"; } ?> value ="georgia">Georgia</option>
													<option <?php if($states == "hawaii") { echo "selected"; } ?> value ="hawaii">Hawaii</option>
													<option <?php if($states == "idaho") { echo "selected"; } ?> value ="idaho">Idaho</option>
													<option <?php if($states == "illinois") { echo "selected"; } ?> value ="illinois">Illinois</option>
													<option <?php if($states == "indiana") { echo "selected"; } ?> value ="indiana">Indiana</option>
													<option <?php if($states == "iowa") { echo "selected"; } ?> value ="iowa">Iowa</option>
													<option <?php if($states == "kansas") { echo "selected"; } ?> value ="kansas">Kansas</option>
													<option <?php if($states == "kentucky") { echo "selected"; } ?> value ="kentucky">Kentucky</option>
													<option <?php if($states == "louisiana") { echo "selected"; } ?> value ="louisiana">Louisiana</option>
													<option <?php if($states == "maine") { echo "selected"; } ?> value ="maine">Maine</option>
													<option <?php if($states == "maryland") { echo "selected"; } ?> value ="maryland">Maryland</option>
													<option <?php if($states == "massachusetts") { echo "selected"; } ?> value ="massachusetts">Massachusetts</option>
													<option <?php if($states == "michigan") { echo "selected"; } ?> value ="michigan">Michigan</option>
													<option <?php if($states == "minnesota") { echo "selected"; } ?> value ="minnesota">Minnesota</option>
													<option <?php if($states == "mississippi") { echo "selected"; } ?> value ="mississippi">Mississippi</option>
													<option <?php if($states == "missouri") { echo "selected"; } ?> value ="missouri">Missouri</option>
													<option <?php if($states == "montana") { echo "selected"; } ?> value ="montana">Montana</option>
													<option <?php if($states == "nebraska") { echo "selected"; } ?> value ="nebraska">Nebraska</option>
													<option <?php if($states == "nevada") { echo "selected"; } ?> value ="nevada">Nevada</option>
													<option <?php if($states == "newHampshire") { echo "selected"; } ?> value ="newHampshire">New Hampshire</option>
													<option <?php if($states == "newJersey") { echo "selected"; } ?> value ="newJersey">New Jersey</option>
													<option <?php if($states == "newMexico") { echo "selected"; } ?> value ="newMexico">New Mexico</option>
													<option <?php if($states == "newYork") { echo "selected"; } ?> value ="newYork">New York</option>
													<option <?php if($states == "northCarolina") { echo "selected"; } ?> value ="northCarolina">North Carolina</option>
													<option <?php if($states == "northDakota") { echo "selected"; } ?> value ="northDakota">North Dakota</option>
													<option <?php if($states == "ohio") { echo "selected"; } ?> value ="ohio">Ohio</option>
													<option <?php if($states == "oklahoma") { echo "selected"; } ?> value ="oklahoma">Oklahoma</option>
													<option <?php if($states == "oregon") { echo "selected"; } ?> value ="oregon">Oregon</option>
													<option <?php if($states == "pennsylvania") { echo "selected"; } ?> value ="pennsylvania">Pennsylvania</option>
													<option <?php if($states == "rhodeIsland") { echo "selected"; } ?> value ="rhodeIsland">Rhode Island</option>
													<option <?php if($states == "southCarolina") { echo "selected"; } ?> value ="southCarolina">South Carolina</option>
													<option <?php if($states == "southDakota") { echo "selected"; } ?> value ="southDakota">South Dakota</option>
													<option <?php if($states == "tennessee") { echo "selected"; } ?> value ="tennessee">Tennessee</option>
													<option <?php if($states == "texa") { echo "selected"; } ?> value ="texa">Texa</option>
													<option <?php if($states == "utah") { echo "selected"; } ?> value ="utah">Utah</option>
													<option <?php if($states == "vermont") { echo "selected"; } ?> value ="vermont">Vermont</option>
													<option <?php if($states == "virginia") { echo "selected"; } ?> value ="virginia">Virginia</option>
													<option <?php if($states == "washington") { echo "selected"; } ?> value ="washington">Washington</option>
													<option <?php if($states == "westVirginia") { echo "selected"; } ?> value ="westVirginia">West Virginia</option>
													<option <?php if($states == "wisconsin") { echo "selected"; } ?> value ="wisconsin">Wisconsin</option>
													<option <?php if($states == "wyoming") { echo "selected"; } ?> value ="wyoming">Wyoming</option>
													<option <?php if($states == "other") { echo "selected"; } ?> value ="other">Other</option>
												</select><br/>
												
												<span class="error">* <?php echo $statesErr;?></span>
												
												<br>
												<label for ="zipCode">Zip Code: </label><br/>											
												<input id ="zipCode" type ="tel" name ="zipCode" placeholder ="xxxxx or xxxxx-xxxx" value="<?php echo $zipCode;?>"/><br/>
												<span class="error">* <?php echo $zipCodeErr;?></span>
												
												<br>
												<label for ="phoneNumber">Phone Number: </label><br/>										
												<input id ="phoneNumber" type ="tel" name ="phoneNumber" placeholder ="xxx-xxx-xxxx" value="<?php echo $phoneNumber;?>"/><br/>
												<span class="error">* <?php echo $phoneNumberErr;?></span>
												
												<br>
												<label for ="email">Email: </label><br/>											
												<input id ="email" type ="text" name ="email" placeholder ="ex. x@x.x" value="<?php echo $email;?>"/><br/>
												<span class="error">* <?php echo $emailErr;?></span>
												
												
												<br>
												<label for ="gender">Gender: </label><br/>
											
												<input type="radio" name="Gender" id="maleGender" <?php if (isset($Gender) && $Gender=="male") echo "checked";?> value="male"/>
												<label for="maleGender"> Male </label>
												<input type="radio" name="Gender" id="femaleGender" <?php if (isset($Gender) && $Gender=="female") echo "checked";?> value="female"/>
												<label for="femaleGender"> Female </label>
												<input type="radio" name="Gender" id="otherGender" <?php if (isset($Gender) && $Gender=="other") echo "checked";?> value="other"/> 
												<label for="otherGender">Other </label><br/>
												<span class="error">* <?php echo $GenderErr;?></span>
											
												<br>
												<label for ="martialStatus">Martial Status: </label><br/>
												<input type ="radio" name ="Status" id ="singleStatus" <?php if (isset($Status) && $Status=="single") echo "checked";?> value ="single" />
												<label for ="singleStatus"> Single </label>
												<input type ="radio" name ="Status" id ="marriedStatus" <?php if (isset($Status) && $Status=="married") echo "checked";?> value ="married" />
												<label for ="marriedStatus"> Married </label>
												<input type ="radio" name ="Status" id ="widowedStatus" <?php if (isset($Status) && $Status=="widowed") echo "checked";?> value ="widowed" />
												<label for ="widowedStatus"> Widowed </label>
												<input type ="radio" name ="Status" id ="divorcedStatus" <?php if (isset($Status) && $Status=="divorced") echo "checked";?> value ="divorced" />
												<label for ="divorcedStatus"> Divorced </label>
												<input type ="radio" name ="Status" id ="separatedStatus" <?php if (isset($Status) && $Status=="separated") echo "checked";?> value ="separated" /> 
												<label for="separatedStatus"> Separated </label><br/>
												<span class="error">* <?php echo $StatusErr;?></span>
										
												<br>
												<label for ="birthDay">Date of birth: </label><br/>
											
												<input id ="birthDay" type = "date" name = "birthDay" placeholder="MM/dd/yyyy" value="<?php echo $birthDay;?>"/><br/>
												<span class="error">* <?php echo $birthDayErr;?></span>
									<br><br>
									</div>
									<br><br>
									<div align="center" style="margin-bottom:20%">
									<input id="sumbit" type="submit" value = "Submit Data"/>
									<input id="reset" type="submit" value = "Reset Data" name ="reset"/>
									</div>

							</form>
					
				  </div>
				</div>
			</div>
		  </div>
		</div>
		
		<?php
			//var_dump($isValid);
			if ($isValid) {
				?>
				<form id="hiddenForm" name="hiddenForm" 
					method="POST" action="confirmation.php">
					<?php
						foreach($_POST as $key => $value) {
							?>
							if($key == "birthDay")
							{
								$value = date("m/d/Y",strtotime($value));
							}
							<input name="<?php echo $key;?>" 
								value="<?php echo $value;?>"
								type="hidden"/>
							<?php
						}
					?>
				</form>
				<script>
					document.createElement('form').submit.call(document.getElementById('hiddenForm'));
				</script>
				<?php
			}
		?>

		

		
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