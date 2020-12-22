<?php
session_start();
if(isset($_POST['Submit']))
{ 
if(isset($_SESSION["sIndex"]))
{
echo "The Session Value = " . $_SESSION["sIndex"];
}else{
    echo "no session";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <FORM method="POST">
<input type="submit" name="Submit" value="View">
</FORM>
</body>
</html>
