<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
	<title>Raffle v2</title>
	<?php require 'logic.php'; ?>

    <style>
        section {
            margin:25px 0px;
        }

        label {
            display:block;
        }
    </style>


</head>
<body>

	<h1>Raffle v2</h1>

	<form method='POST' action='index.php'>

        <label>
            Enter 4 contestant names
        </label>

		<input type='text' name='contestant0'><br>
		<input type='text' name='contestant1'><br>
		<input type='text' name='contestant2'><br>
		<input type='text' name='contestant3'><br>

		<input type='submit' value='Pick the winners!'>

	</form>

    <section>
        <ul>
        	<?php foreach($contestants as $key => $value) { ?>
        		<li><?php echo htmlspecialchars($key, ENT_QUOTES, 'UTF-8');?> is a <?php echo $value?></li>
        	<?php } ?>
        </ul>
    </section>

	<section>
    	<?php if($winnerCount == 0) { ?>
    		No winners this round :(
    	<?php } elseif($winnerCount > 1) { ?>
    		It's a tie!
    	<?php } ?>
    </section>

    <footer>
        <a href='https://github.com/susanBuck/dwa15-php-practice'>View the code</a>
    </footer>

</body>
</html>
