<?php
require('checkboxes-logic.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Checkboxes Example</title>
    <meta charset='utf-8'>
    <link href='../css/styles.css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
          rel='stylesheet' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm'
          crossorigin='anonymous'>

</head>
<body>

<h1>Checkboxes</h1>

<p>
    This form demonstrates how to handle a group of related checkboxes.
</p>

<form method='GET' action='checkboxes.php'>

    <!-- Trick to makes it so that if no checkboxes are selected, we still receive form data -->
    <input type='hidden' name='submitted' value='1'>

    <fieldset class='checkboxes'>
        <legend>Select which days you're available</legend>
        <ul>
            <li>
                <label><input type='checkbox'
                              name='days[]'
                              value='mon' <?php if (strstr($results, 'mon')) echo 'checked' ?>> Monday</label>
            </li>
            <li>
                <label><input type='checkbox'
                              name='days[]'
                              value='tue' <?php if (strstr($results, 'tue')) echo 'checked' ?>> Tuesday</label>
            </li>
            <li>
                <label><input type='checkbox'
                              name='days[]'
                              value='wed' <?php if (strstr($results, 'wed')) echo 'checked' ?>> Wednesday</label>
            </li>
            <li>
                <label><input type='checkbox'
                              name='days[]'
                              value='thu' <?php if (strstr($results, 'thu')) echo 'checked' ?>> Thursday</label>
            <li>
                <label><input type='checkbox'
                              name='days[]'
                              value='fri' <?php if (strstr($results, 'fri')) echo 'checked' ?>> Friday</label>
            </li>
        </ul>
    </fieldset>

    <input type='submit' value='Find availabilities' class='btn btn-primary btn-sm'>

    <?php if ($submitted) : ?>
        <div class='alert <?= $alertType ?>'>
            <?= $results ?>
        </div>
    <?php endif; ?>

</form>

</body>
</html>
