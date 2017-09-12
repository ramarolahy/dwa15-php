<?php
require('formDemoLogic.php');
?>

<!DOCTYPE html>
<html>
<head>

    <title>Form Tests</title>
    <meta charset='utf-8'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css' rel='stylesheet'>
    <link href='styles.css' rel='stylesheet'>

</head>
<body>


    <h2>Form Tests</h2>
    <form>

        <label for='email'>Email (required|email)</label>
        <input type='text' name='email' id='email' value='<?=$form->prefill('email', 'foo@bar')?>'>

        <label for='username'>username (alphaNumeric)</label>
        <input type='text' name='username' id='username' value='<?=$form->prefill('username', 'foob@r')?>'>

        <label for='age'>Year (numeric)</label>
        <input type='text' name='year' value='<?=$form->prefill('year', 'abcd')?>'>

        <label for='age'>Age (min:16)</label>
        <input type='number' name='age' value='<?=$form->prefill('age', '99')?>'>

        <label for='score'>Score (max:5)</label>
        <input type='number' name='score' value='<?=$form->prefill('score', '99')?>'>

        <label for='rank'>Rank (numeric|min:0|max:5)</label>
        <input type='number' name='rank' value='<?=$form->prefill('rank', '99')?>'>

        <input type='submit' class='btn'>

        <?php if (isset($errors)) :?>
            <div class='alert alert-danger'>
                <ul>
                    <?php foreach ($errors as $error) :?>
                        <li><?=$error?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

    </form>

</body>
