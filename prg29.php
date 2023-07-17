<html>
<body bgcolor="pink">
<?php
	$a = ["Red","Blue","Green","Pink","Yellow"];
	$i = 0;
	for($i=4;$i>=0;$i--)
	{
		echo "The array element is ::  ".$a[$i]."<br/>";
	}
	echo "The total number of array elements are :: ".count($a);
?>
</body>
</html>