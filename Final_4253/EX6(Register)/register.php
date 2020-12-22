<html>
<head>
<title>User Registration</title>
</head>
<body> 
<form action="Register.php" method="post" >
<table border="0" >
<tr><td>Name:
</td></tr>
<tr><td>
<input type="text" name="name"><br>
</td></tr>
<tr><td>Username:
</td></tr>
<tr><td>
<input type="text" name="uname"><br>
</td></tr>
<tr><td>Password
</td></tr>
<tr><td>
<input type="password" name="passwordR"><br>
</td></tr>
<tr><td>
<label for="city">Choose a City:</label>
<select name="city" id="city">
  <option value="Skopje">Skopje</option>
  <option value="NewYork">New York</option>
  <option value="Amsterdam">Amsterdam</option>
  <option value="Tokyo">Tokyo</option>
</select> 
</td></tr>
<tr><td>Type of User
</td></tr>
<tr><td>
<input type="radio" name="tUser" value="Free" checked> Free&nbsp;
  <input type="radio" name="tUser" value="Basic">Basic
  <input type="radio" name="tUser" value="Premium">Premium
</tr></td>
<tr><td>End user Agreement
</td></tr>
<tr><td>
<input type="checkbox" name="EULA" required><br>
</table>
  <input type="submit" value="Submit">
</form>
<br> 

<?php
if (isset($_POST['name'])){ 

$hostname='localhost';
$username='root';
$password='';
$database='register';

$name;
$uName;
$passwordR = "";
$param_password = password_hash($passwordR, PASSWORD_DEFAULT); //hashing password
$city;
$tUser;



	if (isset($_POST['name'])){		
		$name = $_POST['name'];		
	}
	if (isset($_POST['uname'])){		
		$uName = $_POST['uname'];		
	}
	if (isset($_POST['passwordR'])){		
		$passwordR = $_POST['passwordR'];		
	}
	if (isset($_POST['city'])){		
		$city = $_POST['city'];		
	}	
	if (isset($_POST['tUser'])){		
		$tUser = $_POST['tUser'];		
	}		

	$mysqli = new mysqli($hostname, $username, $password, $database);
	if ($mysqli->connect_errno) {
		echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	
    $sql = "INSERT INTO reservation (Name, Username, Password, City, tUser) VALUES ('".$name."','".$uName."','".$param_password."','".$city."','".$tUser."');";

    
	if(mysqli_query($mysqli,$sql)){
		echo "<br>";
        echo "Your registration has been submitted";
    }else{
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
    
	mysqli_close($mysqli);
}
?>
</body>
 </html>