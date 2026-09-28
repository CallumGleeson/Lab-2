<!-- receipt.php -->

	<?php
	
	$apple = 1;
	$banana = 0.50;
	$orange = 0.75;
	$qty = 3;

	$subtotal = $apple * $qty +  $banana * $qty +  $orange * $qty ;
	$totalVAT23 = $subtotal  * 1.23; 
	echo "Total inc VATS $totalVAT23, without VATS is $subtotal ";
?>