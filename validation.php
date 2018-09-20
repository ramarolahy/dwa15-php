<?php
require 'validation-logic.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Validation tests using Form.php</title>
    <meta charset='utf-8'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
          rel='stylesheet' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm'
          crossorigin='anonymous'>
    <link href='css/styles.css' rel='stylesheet'>
</head>
<body>

<h2>Validation tests using Form.php</h2>
<form>

    <label for='email'>Email (required|email)</label>
    <input type='text' name='email' id='email' value='<?= $form->prefill('email', 'foo@bar') ?>'>

    <label for='username'>Username (alphaNumeric)</label>
    <input type='text' name='username' id='username' value='<?= $form->prefill('username', 'foob@r') ?>'>

    <label for='age'>Year (numeric)</label>
    <input type='text' name='year' value='<?= $form->prefill('year', 'abcd') ?>'>

    <label for='age'>Age (min:16)</label>
    <input type='number' name='age' value='<?= $form->prefill('age', '99') ?>'>

    <label for='score'>Score (max:5)</label>
    <input type='number' name='score' value='<?= $form->prefill('score', '99') ?>'>

    <label for='rank'>Rank (numeric|min:0|max:5)</label>
    <input type='number' name='rank' value='<?= $form->prefill('rank', '99') ?>'>

    <input type='submit' class='btn btn-primary' value='Run tests...'>

    <?php if (isset($errors)) : ?>
        <div class='alert alert-danger'>
            <ul>
                <?php foreach ($errors as $error) : ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

</form>

</body>
