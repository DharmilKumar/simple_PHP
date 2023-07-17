<html>
<body>
<form method = "POST" actipon="">
	<input type="number" name="yash">
	<input type="submit" >
</form>
</body>
</html>
<?php
if(isset($_POST['yash'])){
$x = $_POST['yash'];

switch($x)
{
	case 1:
		echo Date("Y/m/d");
		
	break;
	case 2:
		echo Date("Y.m.d");
		
	break;
	case 3:
		echo Date("Y-m-d");
		
	break;
}
}
?>
