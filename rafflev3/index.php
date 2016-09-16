<!-- Note: This file demonstrates the use of PHP's alternative syntax described in the notes -->

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Raffle v3</title>
    <?php require 'logic.php'; ?>

    <style>
        .error {
            background-color:red;
            color:white;
            padding:5px;
            width:300px;
            margin:5px 0px;
        }

        section {
            margin:25px 0px;
        }

        label {
            display:block;
        }
    </style>

</head>
<body>

    <h1>Raffle v3 - with Validation</h1>

    <form method='POST' action='index.php'>
        <label>
            Enter 4 contestant names
            <small>(No numbers, no special characters)</small>
        </label>

        <input type='text' name='contestant0'><br>
        <input type='text' name='contestant1'><br>
        <input type='text' name='contestant2'><br>
        <input type='text' name='contestant3'><br>

        <input type='submit' value='Pick the winners!'>

        <?php if(isset($error)): ?>
            <div class='error'><?php echo $error; ?></div>
        <?php endif ?>

    </form>

    <section>
        <ul>
            <!--
            Note: The htmlspecialchars method is used to strip the output of any characters the user might have entered that we
            don't want to display (e.g. script tags).
            -->
            <?php foreach($contestants as $key => $value): ?>
                <li><?php echo htmlspecialchars($key, ENT_QUOTES, 'UTF-8');?> is a <?php echo $value?></li>
            <?php endforeach; ?>
        </ul>
    </section>

    <section>
        <?php if($winnerCount == 0): ?>
            No winners this round :(
        <?php elseif($winnerCount > 1): ?>
            It's a tie, there was more than one winner!
        <?php endif; ?>
    </section>

    <footer>
        <a href='https://github.com/susanBuck/dwa15-php-practice'>View the code</a>
    </footer>

</body>
</html>
