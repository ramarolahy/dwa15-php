<?php
require('helpers.php');
require('logic.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Secret Cipher</title>
    <meta charset='utf-8'>

    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/styles.css' rel='stylesheet'>

</head>
<body>

    <h1>Secret Cipher</h1>

    <p id='definition'>
        <strong>ci·pher</strong>: secret or disguised way of writing; a code.
    </p>

    <form method='GET'>

        <div class='form-group'>
            <label for='message'>Your message:</label><br>
            <textarea name='message' id='message'>Hello World</textarea>
        </div>

        <div class='form-group'>
            <label>Choose your encoding type...</label><br>

            <input type='radio' name='type' value='vowels' <?=$checkVowels?>>

            <label for='vowels'>Vowel replacement</label>
            <p>Vowels are replaced with their numerical equivalent where a=0, i=1, o=2, etc.</p>

            <input type='radio' name='type' value='shift' <?=$checkShift?>>
            <label for='vowels'>Shift letters</label>
            <p>
                Each letter is replaced with its adjacent letter in the alphabet;
                e.g. a becomes b, x becomes y, z becomes a, etc.
            </p>
        </div>

        <input type='submit' value='Encode'>
    </form>

    <?php if (isset($results)) : ?>
        <h2>Results:</h2>
        <div id='results'>
            <?=sanitize($results)?>
        </div>
    <?php endif ?>

    </body>
    </html>
