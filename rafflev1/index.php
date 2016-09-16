<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<title>Raffle v1</title>
	<?php require 'coin-flip-approach.php'; ?>
</head>
<body>

	<h1>Raffle v1</h1>


	<!-- Print the contestants array -->
	<?php foreach($contestants as $key => $value) { ?>
		<?php echo $key; ?> is a <?php echo $value; ?><br>
	<?php } ?>


	<!-- Bonus features! -->
	<br>
	<?php if($winnerCount == 0) { ?>

		No winners this round :(

	<?php } elseif($winnerCount > 1) { ?>

		It's a tie!

	<?php } ?>

	<p>
		<a href='./'>Play again...</a>
	</p>

	<p>
		<a href='https://github.com/susanBuck/dwa15-php-practice/tree/master/rafflev1'>View the code</a>
	</p>

</body>
</html>
