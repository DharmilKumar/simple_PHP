<html>
<body bgcolor="pink">
<?php
	function add($a,$b)
	{
		$add = $a + $b;
		echo "The Addition of two numbers is : ".$add."<br/>";
	}
	add(10,20);
	function sub($a,$b)
	{
		$sub = $a - $b;
		echo "The Subtraction of two numbers is : ".$sub."<br/>";
	}
	sub(30,20);
	function mul($a,$b)
	{
		$mul = $a * $b;
		echo "The Multiplication of two numbers is : ".$mul."<br/>";
	}
	mul(30,20);
	function div($a,$b)
	{
		$div = $a / $b;
		echo "The Division of two numbers is : ".$div."<br/>";
	}
	div(100,20);
?>
</body>
</html>