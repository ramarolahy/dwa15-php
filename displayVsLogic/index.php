<?php require('logic.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Display vs. Logic example</title>
    <meta charset='utf-8'>

    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>

</head>
<body>

    <form method='GET'>
        <label for='answer'>What color might an apple be?</label>
        <input type='text' name='answer' id='answer'>
        <input type='submit' value='Check your answer'>
    </form>

    <?php if (isset($correct)) : ?>

        <?php if ($correct) : ?>
            <div class='positive'>
                <i class="fa fa-smile-o"></i> <?=sanitize($answer)?> is correct!
            </div>
        <?php else : ?>
            <div class='negative'>
                <i class="fa fa-frown-o"></i> <?=sanitize($answer)?> is incorrect; please try again.
            </div>
        <?php endif; ?>

    <?php endif ?>


</body>
</html>
