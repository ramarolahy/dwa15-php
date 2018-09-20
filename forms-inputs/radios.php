<?php
require('radios-logic.php');
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
    <h1>Radios</h1>

    <form method='GET' action='radios.php'>
        <fieldset class='radios'>
            <legend>Select which day you're available</legend>
            <label><input type='radio' name='day' value='mon' <?php if ($day == 'mon') echo 'checked'?>> Monday</label>
            <label><input type='radio' name='day' value='tue' <?php if ($day == 'tue') echo 'checked'?>> Tuesday</label>
            <label><input type='radio' name='day' value='wed' <?php if ($day == 'wed') echo 'checked'?>> Wednesday</label>
            <label><input type='radio' name='day' value='thu' <?php if ($day == 'thu') echo 'checked'?>> Thursday</label>
            <label><input type='radio' name='day' value='fri' <?php if ($day == 'fri') echo 'checked'?>> Friday</label>
        </fieldset>

        <input type='submit' value='Check availability' class='btn btn-primary btn-sm'>

        <?php if ($_GET) : ?>
            <div class="alert alert-info" role="alert">
                Day selected: <?=ucfirst($day)?>
            </div>
        <?php endif; ?>

    </form>

</body>
</html>
