<?php
$a =  5;
$b = 7;
$c = 43;
if($a>$b && $a>$c){
	echo "a is max";
}
elseif($b>$c && $b>$a){
	echo "b is max";
}
else {
	echo "c is max";
}

?>