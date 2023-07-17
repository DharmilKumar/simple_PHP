<html>
<body bgcolor="pink">
<?php
	$arr = array(1=>"pgdca",2=>"mscit",3=>"mba");
	if (array_search("mscit", $arr)) 
	{
		echo "Value exists <br/>";
		echo $arr[2];
	} 
	else 
	{
		echo "Value doesn't exists";
	}
 ?>
 </body>
 </html>