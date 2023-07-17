<html>
<body>
<?php
    function makeBold( $text ) 
	{
		return "<b>$text</b>";
    }
	function makeItalic( $text ) 
	{
		return "<i>$text</i>";
    }
    $normalText = "WELCOME TO PHP WORLD...!.";
    $boldText = makeBold( "WELCOME TO PHP WORLD...!." );
	$italicText = makeItalic( "WELCOME TO PHP WORLD...!." );
    echo "<b>The bold font ::</b>";
	echo "<p>$normalText</p>";
    echo "<p>$boldText</p><br>";
	echo "<b>The italic font ::</b>";
    echo "<p>$normalText</p>";
    echo "<p>$italicText</p>";
?>
</body>
</html>