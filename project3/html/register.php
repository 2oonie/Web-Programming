<?php
$resetForm = false;
if(isset($_POST["reset"]))
{
	$_POST = [];
	$resetForm = true;
}

// define variables and set to empty values
$userNameErr = "";
$passwordErr = "";
$repeatPasswordErr = "";
$firstNameErr = "";
$lastNameErr = "";
$firstAddressErr = "";
$secondAddressErr = "";
$cityErr = "";
$statesErr = "";
$zipCodeErr = "";
$phoneNumberErr = "";
$emailErr = "";
$GenderErr = "";
$StatusErr = "";
$birthDayErr = "";
$userName = "";
$password = "";
$repeatPassword = "";
$firstName = "";
$lastName = "";
$firstAddress = "";
$secondAddress = ""; 
$city = "";
$states = "";
$zipCode = "";
$phoneNumber = "";
$email = "";
$Gender = "";
$Status = "";
$birthDay = "";

$isValid = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$isValid = true;
	
	if(isset($_POST["userName"]))
	{
		$userName = clean_input($_POST["userName"]);
	}
	if (empty($userName)) 
	{
		$userNameErr = "User Name is required";
		$isValid = false;
	} 
	else 
	{
		if (strlen($userName) > 50 || strlen($userName) < 6)
		{
			$userNameErr = "Must be 6 to 50 characters";
			$isValid = false;
		}
	}
	
	if(isset($_POST["password"]))
	{
		$password = clean_input($_POST["password"]);
	}
	if (empty($password)) 
	{
		$passwordErr = "Password is required";
		$isValid = false;
	} 
	else
	{
		if (strlen($password) > 50 || strlen($password) < 7)
		{
			$passwordErr = "Must be 8 to 50 characters";
			$isValid = false;
		}
		elseif (!preg_match("#[A-Z]+#", $password))
		{
			$passwordErr = "Must contain a capital letter";
			$isValid = false;
		}
		elseif (!preg_match("#[a-z]+#",$password))
		{
			$passwordErr = "Must contain a lowercase letter";
			$isValid = false;
		}
		elseif (!preg_match("#[0-9]+#", $password))
		{
			$passwordErr = "Must contain a digit";
			$isValid = false;
		}
		elseif (!preg_match("/\W/", $password))
		{
			$passwordErr = "Must contain a special character";
			$isValid = false;
		}
	}
	
	if(isset($_POST["repeatPassword"]))
	{
		$repeatPassword = clean_input($_POST["repeatPassword"]);	
	}
	if (empty($repeatPassword)) 
	{
		$repeatPasswordErr = "Please confirm password";
		$isValid = false;
	} 
	elseif ($repeatPassword != $password)
	{
			$repeatPasswordErr = "Passwords do not match";
			$isValid = false;
	}
		
	if(isset($_POST["firstAddress"]))
	{
		$firstAddress = clean_input($_POST["firstAddress"]);	
	}
	if (empty($firstAddress)) 
	{
		$firstAddressErr = "Address is required";
		$isValid = false;
	} 
	else
	{
		if (strlen($firstAddress) > 100)
		{
			$firstAddressErr = "Max length of 100 characters";
			$isValid = false;
		}
		elseif (!preg_match("#[0-9a-zA-Z ]+#", $firstAddress))
		{
			$firstAddressErr = "Only numbers and letters allowed";
			$isValid = false;
		}
	}
	
	if(isset($_POST["secondAddress"]))
	{
		$secondAddress = clean_input($_POST["secondAddress"]);	
	}
	if (empty($secondAddress)) 
	{
		$secondAddressErr = "Address is required";
		$isValid = false;
	} 
	else
	{
		if (strlen($secondAddress) > 100)
		{
			$secondAddressErr = "Max length of 100 characters";
			$isValid = false;
		}
		elseif (!preg_match("#[0-9a-zA-Z ]+#", $secondAddress))
		{
			$secondAddressErr = "Only numbers and letters allowed";
			$isValid = false;
		}
	}
	
	if(isset($_POST["city"]))
	{
		$city = clean_input($_POST["city"]);	
	}
	if (empty($city)) 
	{
		$cityErr = "City is required";
		$isValid = false;
	} 
	else 
	{
		if (strlen($city) > 50)
		{
			$cityErr = "Max length of 50 characters";
			$isValid = false;
		}
	}
	
	if(isset($_POST["zipCode"]))
	{
		$zipCode = clean_input($_POST["zipCode"]);	
	}
	$zipCode = preg_replace("/[^0-9]/", "", $zipCode );
	$code = str_split($zipCode, 5);
	$zipCode = $code[0]. ( isset($code[1]) ? "-". $code[1] : "" );
	if (empty($zipCode)) {
		$zipCodeErr = "Zip code is required";
		$isValid = false;
	} else 
	{
		if (preg_match("/[a-zA-Z]/", $zipCode))
		{
			$zipCodeErr = "Must contain only digits";
			$isValid = false;
		}			
		elseif (strlen($zipCode) != 10 && strlen($zipCode) != 5)
		{
			$zipCodeErr = "Must be 5 or 9 digits";
			$isValid = false;
		}
		elseif (!preg_match("/^[0-9]{5}(-[0-9]{4})?$/", $zipCode))
		{
			$zipCodeErr = "Must be in xxxxx or xxxxx-xxxx format";
			$isValid = false;
		}
	}
	
	if(isset($_POST["phoneNumber"]))
	{
		$phoneNumber = clean_input($_POST["phoneNumber"]);	
	}
	$phoneNumber = preg_replace("/[^0-9]/", "", $phoneNumber );
	if(strlen($phoneNumber) > 3)
	{
		$number = str_split($phoneNumber, 6);
		$phoneNumber = join('-', str_split($number[0],3)). "-" . ( isset($number[1]) ? $number[1] : "" );
	}
	
	if (empty($phoneNumber)) 
	{
			$phoneNumberErr = "Phone number is required";
			$isValid = false;
	}
	else 
	{
		if (preg_match("/[a-zA-Z]/", $phoneNumber))
		{
			$phoneNumberErr = "Must contain only digits";
			$isValid = false;
		}	
		elseif (!preg_match("/^([0-9]{3})-([0-9]{3})-([0-9]{4})/", $phoneNumber))
		{
			$phoneNumberErr = "Must be in xxx-xxx-xxxx format";
			$isValid = false;
		}
		elseif (strlen($phoneNumber) != 12)
		{
			$phoneNumberErr = "Must be a 10 digits";
			$isValid = false;
		}
	}
	

	if(isset($_POST["firstName"]))
	{
		$firstName = clean_input($_POST["firstName"]);	
	}
	if (empty($_POST["firstName"])) 
	{
		$firstNameErr = "First name is required";
		$isValid = false;
	} 
	else 
	{
		// check if name only contains letters 
		if (!preg_match("/^[a-zA-Z ]*$/",$firstName)) 
		{
			$firstNameErr = "Only letters allowed";
			$isValid = false;
		}
	}
	
	if(isset($_POST["lastName"]))
	{
		$lastName = clean_input($_POST["lastName"]);
	}
	if (empty($_POST["lastName"])) 
	{
		$lastNameErr = "Last Name is required";
		$isValid = false;
	} // check if name only contains letters 
		
	else 
	{
		if (!preg_match("/^[a-zA-Z ]*$/",$lastName)) 
		{
			$lastNameErr = "Only letters allowed";
			$isValid = false;
		}
	}
	
	
	if(isset($_POST["email"]))
	{
		$email = clean_input($_POST["email"]);
	}
	if (empty($_POST["email"])) 
	{
		$emailErr = "Email is required";
		$isValid = false;
	} 
	else 
	{
		// check if e-mail address is well-formed
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
		{
			$emailErr = "Invalid email format";
			$isValid = false;
		}
	}
	
	if (isset($_POST["Gender"])) 
	{
		$Gender = clean_input($_POST["Gender"]);
		if (empty($_POST["Gender"])) 
		{
			$GenderErr = "Gender is required";
			$isValid = false;
		}
	} 
	else
	{
		$GenderErr = "Gender is required";
		$isValid = false;
	}
	
	if (isset($_POST["Status"])) 
	{
		$Status = clean_input($_POST["Status"]);
		if (empty($_POST["Status"])) 
		{
			$StatusErr = "Status is required";
			$isValid = false;
		}
	} 
	else 
	{
		$StatusErr = "Status is required";
		$isValid = false;
	}
	
	if (isset($_POST["states"])) 
	{
		$states = clean_input($_POST["states"]);
		if (empty($_POST["states"])) 
		{
			$statesErr = "State is required";
			$isValid = false;
		}
	} 
	else
	{
		$statesErr = "State is required";
		$isValid = false;
	}
	
	if(isset($_POST["birthDay"]))
	{
		$birthDay = clean_input($_POST["birthDay"]);
	}
	$birthDayVer = date("m/d/Y",strtotime($birthDay));
	if (empty($birthDay)) 
	{
		$birthDayErr = "Date of Birth is required";
	} 
	else
	{
		if (!preg_match("/^((0|1)\d{1})\/((0|1|2)\d{1})\/((19|20)\d{2})/", $birthDayVer))
		{
			$birthDayErr = "Must be proper date in 'MM/dd/yyyy' format";
		}			
	}
	
	if($isValid == true)
	{
		$_POST["birthDay"] = $birthDayVer;
		$_POST["zipCode"] = $zipCode;
		$_POST["phoneNumber"] = $phoneNumber;
	}		
	
 	if($resetForm == true)
	{
		$userNameErr = "";
		$passwordErr = "";
		$repeatPasswordErr = "";
		$firstNameErr = "";
		$lastNameErr = "";
		$firstAddressErr = "";
		$secondAddressErr = "";
		$cityErr = "";
		$statesErr = "";
		$zipCodeErr = "";
		$phoneNumberErr = "";
		$emailErr = "";
		$GenderErr = "";
		$StatusErr = "";
		$birthDayErr = "";
	}		
  
}

function clean_input($data) 
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>