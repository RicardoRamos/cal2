<pre><?php

	include 'cal.php';
	echo '5 + 2= ' . soma (5, 2) . '<br>';
	echo '5 - 2= ' . sub (5, 2) . '<br>';
	echo '5 / 2= ' . div (5, 2) . '<br>';
	echo '5 * 2= ' . mult (5, 2) . '<br>';
	
	echo'5 + 2 * 3= ' . soma(5, mult(2, 3)) . '<br>';
	echo'8 - 3 + 5= ' . soma(sub(8, 3), 5 ) . '<br>';
	echo'9 / 3 + 4 * 2= ' . soma(div(9, 3), mult(4, 2)) . '<br>';
?></pre>