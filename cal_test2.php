<pre><?php

	include 'cal.php';
	
	if (soma (5, 2) == 5 + 2)
	echo 'ok<br>';
	else
	echo 'erro<br>';
	
	if (sub (5, 2) == 5 - 2)
	echo 'ok<br>';
	else
	echo 'erro<br>';
	
	if (div (5, 2) == 5 / 2)
	echo 'ok<br>';
	else
	echo 'erro<br>';
	
	if (mult (5, 2) == 5 * 2)
	echo 'ok<br>';
	else
	echo 'erro<br>';
	
	if (soma (5, mult(2, 3)) == 5 + (2 * 3))
	echo 'ok<br>';
	else
	echo 'erro<br>';
	
	if (soma (sub(8, 3), 5) == 8 - 3 + 5)
	echo 'ok<br>';
	else
	echo 'erro<br>';
	
	if (soma (div(9, 3), mult (4, 2)) == (9/ 3) + (4 * 2))
	echo 'ok<br>';
	else
	echo 'erro<br>';
	
?></pre>