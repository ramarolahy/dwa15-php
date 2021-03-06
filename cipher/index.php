<?php
require '../includes/helpers.php';
require 'logic.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Secret Cipher</title>
    <meta charset='utf-8'>

    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
          rel='stylesheet' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm'
          crossorigin='anonymous'>
    <link href='css/styles.css' rel='stylesheet'>
</head>
<body>

<h1>Secret Cipher</h1>

<p id='definition'>
    <strong>ci·pher</strong>: secret or disguised way of writing; a code.
</p>

<form method='GET' action='process.php'>

    <div class='form-group'>
        <label for='message'>Your message:</label>
        <textarea name='message' id='message'>Hello World</textarea>
    </div>

    <div class='form-group'>
        <h2>Choose your encoding type...</h2>

        <label>
            <input type='radio'
                   name='type'
                   value='vowels' <?= (!isset($type) or $type == 'vowels') ? 'checked' : '' ?>>
            Vowel replacement
        </label>
        <p>Vowels are replaced with their numerical equivalent where a=0, e=1, i=2, o=3, u=4</p>

        <label>
            <input type='radio'
                   name='type'
                   value='shift' <?= (isset($type) && $type == 'shift') ? 'checked' : '' ?>>
            Shift letters
        </label>
        <p>Each letter is replaced with its adjacent letter in the alphabet; e.g. a becomes b, x becomes y, z becomes a, etc.</p>
    </div>

    <input type='submit' value='Encode' class='btn btn-primary'>
</form>

<?php if (isset($encodedMessage)) : ?>
    <h2>Results:</h2>
    <div id='results'>
        <?= sanitize($encodedMessage) ?>
    </div>
<?php endif ?>

</body>
</html>
