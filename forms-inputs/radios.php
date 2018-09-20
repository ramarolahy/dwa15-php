<?php
require 'radios-logic.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Radio Example</title>
    <meta charset='utf-8'>
    <link href='../css/styles.css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
          rel='stylesheet' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm'
          crossorigin='anonymous'>
</head>
<body>
<h1>Radios Example</h1>

<form method='GET' action='radios.php'>
    <fieldset class='radios'>
        <legend>Select which day you're available</legend>
        <ul class='radios'>
            <!-- Note that each radio has the same name of `day` -->
            <li><label><input type='radio'
                              name='day'
                              value='mon' <?php if (isset($day) and $day == 'mon') echo 'checked' ?>> Monday</label>
            <li><label><input type='radio'
                              name='day'
                              value='tue' <?php if (isset($day) and $day == 'tue') echo 'checked' ?>> Tuesday</label>
            <li><label><input type='radio'
                              name='day'
                              value='wed' <?php if (isset($day) and $day == 'wed') echo 'checked' ?>> Wednesday</label>
            <li><label><input type='radio'
                              name='day'
                              value='thu' <?php if (isset($day) and $day == 'thu') echo 'checked' ?>> Thursday</label>
            <li><label><input type='radio'
                              name='day'
                              value='fri' <?php if (isset($day) and $day == 'fri') echo 'checked' ?>> Friday</label>
        </ul>
    </fieldset>

    <input type='submit' value='Check availability' class='btn btn-primary btn-sm'>

    <?php if ($_GET) : ?>
        <div class='alert alert-info' role='alert'>
            You selected: <?= ucfirst($day) ?>
        </div>
    <?php endif; ?>

</form>

<a class='return' href='/forms-inputs'>&larr; Return to all form input examples</a>

</body>
</html>
