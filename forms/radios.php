<?php
require('radiosLogic.php');
?>

<!DOCTYPE html>
<html>
<head>

    <title>Radio Example</title>
    <meta charset='utf-8'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css' rel='stylesheet'>
    <link href='../styles.css' rel='stylesheet'>

</head>
<body>
    <h1>Radios Example</h1>

    <form method='POST' action='radios.php'>
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

    <footer>
        <a href='/forms/'>&larr; Other form examples</a>
    </footer>

</body>
</html>
