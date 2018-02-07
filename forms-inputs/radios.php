<?php
require 'radios-logic.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Radio Example</title>
    <meta charset='utf-8'>
    <link href='../css/styles.css' rel='stylesheet'>
</head>
<body>
    <h1>Radios</h1>

    <form method='GET' action='radios.php'>
        <fieldset class='radios'>
            <legend>Select which day you're available</legend>
            <label><input type='radio' name='day' value='mon' <?php if ($day == 'mon') echo 'CHECKED'?>> Monday</label>
            <label><input type='radio' name='day' value='tue' <?php if ($day == 'tue') echo 'CHECKED'?>> Tuesday</label>
            <label><input type='radio' name='day' value='wed' <?php if ($day == 'wed') echo 'CHECKED'?>> Wednesday</label>
            <label><input type='radio' name='day' value='thu' <?php if ($day == 'thu') echo 'CHECKED'?>> Thursday</label>
            <label><input type='radio' name='day' value='fri' <?php if ($day == 'fri') echo 'CHECKED'?>> Friday</label>
        </fieldset>

        <input type='submit' class='btn btn-primary btn-sm'>

        <?php if ($_POST) : ?>
            <div class="alert alert-info" role="alert">
                Day selected: <?=ucfirst($day)?>
            </div>
        <?php endif; ?>

    </form>

</body>
</html>
