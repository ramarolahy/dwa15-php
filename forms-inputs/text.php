<?php
require 'text-logic.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Simple Input Examples</title>
    <meta charset='utf-8'>
    <link href='../css/styles.css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
          rel='stylesheet' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm'
          crossorigin='anonymous'>
</head>
<body>

<h1>Text inputs</h1>

<form method='GET' action='text.php'>

    <p>Nothing special is done with the data in this form, it's just showing how to retrieve/pre-fill the text fields.</p>

    <input type='hidden' name='userId' value='<?= $userId ?>'>

    <label for='title'>Title</label>
    <input type='text' name='title' value='<?php if ($title) echo $title ?>'>

    <label for='description'>Description</label>
    <textarea name='description'><?php if ($description) echo $description ?></textarea>

    <label for='date'>Date published</label>
    <input type='date' name='date' value='<?php if ($date) echo $date ?>'>

    <input type='submit' class='btn btn-primary btn-sm'>

</form>

<a class='return' href='/forms-inputs'>&larr; Return to all form input examples</a>

</body>
</html>
