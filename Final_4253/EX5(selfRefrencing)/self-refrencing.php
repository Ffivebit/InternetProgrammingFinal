<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">

</head>
<body>
<?php
$width = 0;
$height = 0;
$left = "";
$right = "";
$top = 0;

if (isset($_GET['width'])){
	$width = $_GET['width'];
}
if (isset($_GET['height'])){
	$height = $_GET['height'];
}
if (isset($_GET['left'])){
	$left = $_GET['left'];
}
if (isset($_GET['right'])){
	$right = $_GET['right'];
}
if (isset($_GET['top'])){
	$top = $_GET['top'];
}

?>

<form action="self-refrencing.php" method="GET">
				Width: <input type="Text" name="width" id="width" value="<?php echo $width?>" > <br>
                Height: <input type="Text" name="height" id="height" value="<?php echo $height;?>" > <br>
                left: <input type="Text" name="left" id="left" value="<?php echo $left;?>" > <br>
                Right: <input type="Text" name="right" id="right" value="<?php echo $right;?>" > <br>
                Up or Down (+ or -): <input type="Text" name="top" id="top" value="<?php echo $top;?>" > <br>
                <p>For the left & right param you can only input 1 at a time to move the div</p>
				<input type="submit" value="Create">
</form>


<div style="width: <?php echo $width; ?>; height: <?php echo $height; ?>; position:relative; left:<?php echo $left; ?>; right:<?php echo $right; ?>; top:<?php echo $top; ?>; background-color: black" />


	
</body>
</html>