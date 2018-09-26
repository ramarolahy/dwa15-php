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

<?php if (isset($errors) && $errors) : ?>
    <div class='alert alert-danger'>
        <ul>
            <?php foreach ($errors as $error) : ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<p>
    Note: Fields accepting numerical values were set with a type of <em>text</em> instead of
    <em>number</em> to bypass any client-side validation for the purposes of the demonstration.
</p>

<form>
    <p>
        <label for='email'>Email (required|email)</label>
        <span class='info'>Required; must be a valid email address format</span>
        <input type='text' name='email' id='email' value='<?= $form->prefill('email', 'test@gmail.com') ?>'>

        <label for='email'>URL (required|url)</label>
        <span class='info'>Required; must be a valid url format</span>
        <input type='text' name='url' id='url' value='<?= $form->prefill('url', 'https://dwa15.com') ?>'>

        <label for='username'>Username (required|alphaNumeric)</label>
        <span class='info'>Must contain letters or digits; no symbols</span>
        <input type='text' name='username' id='username' value='<?= $form->prefill('username', 'dwa15') ?>'>

        <label for='age'>Year (required|digit|maxLength:4|minLength:4)</label>
        <span class='info'>Can only contain digits 0-9, no symbols, and must be <= 4 chars long</span>
        <input type='text' name='year' value='<?= $form->prefill('year', "2018") ?>'>

        <label for='rank'>Total (required|numeric|min:0|max:5)</label>
        <span class='info'>Can contain a numeric value consisting of digits, negative sign, and/or decimal</span>
        <input type='text' name='total' value='<?= $form->prefill('total', '100.25') ?>'>

        <label for='age'>Age (required|min:18)</label>
        <span class='info'>Must be a numeric value >= 16</span>
        <input type='text' name='age' value='<?= $form->prefill('age', '20') ?>'>

        <label for='score'>Score (required|max:100)</label>
        <span class='info'>Must be a numeric value <= 100</span>
        <input type='text' name='score' value='<?= $form->prefill('score', '99') ?>'>

        <label for='rank'>Rank (required|digit|min:1|max:5)</label>
        <span class='info'>Must be a digit value between 1 and 5 (inclusive)</span>
        <input type='text' name='rank' value='<?= $form->prefill('rank', '3') ?>'>

        <label for='rating'>Rating (required|numeric|min:1|max:5)</label>
        <span class='info'>Must be a numeric value between 1 and 5 (inclusive)</span>
        <input type='text' name='rating' value='<?= $form->prefill('rating', '3.5') ?>'>

        <input type='submit' class='btn btn-primary' value='Run tests...'>

        <?php if (isset($errors) && $errors) : ?>
    <div class='alert alert-danger'>
        <ul>
            <?php foreach ($errors as $error) : ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php elseif ($submitted): ?>
        <div class='alert alert-info'>
            No errors
        </div>
    <?php endif ?>

</form>

</body>
