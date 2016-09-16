<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
	<title>Raffle v2</title>
	<?php require 'logic.php'; ?>
</head>
<body>

	<h1>Raffle v2</h1>

	<form method='POST' action='index.php'>

		<input type='text' name='contestant0'><br>
		<input type='text' name='contestant1'><br>
		<input type='text' name='contestant2'><br>
		<input type='text' name='contestant3'><br>

		<input type='submit' value='Pick the winners!'>

	</form>

	<?php //print_r($_POST); ?>

	<?php foreach($contestants as $key => $value) { ?>
		<?php echo htmlspecialchars($key, ENT_QUOTES, 'UTF-8');?> is a <?php echo $value?><br>
	<?php } ?>

	<!-- Bonus features! -->
	<br>
	<?php if($winnerCount == 0) { ?>
		No winners this round :(
	<?php } elseif($winnerCount > 1) { ?>
		It's a tie!
	<?php } ?>

    <a href='https://github.com/susanBuck/dwa15-php-practice'>View the code</a>

</body>
</html>
