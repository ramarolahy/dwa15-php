<?php
require 'dropdown-logic.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dropdown Example</title>
    <meta charset='utf-8'>
    <link href='../css/styles.css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
          rel='stylesheet' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm'
          crossorigin='anonymous'>

</head>
<body>

<h1>Dropdown Example</h1>

<form method='GET' action='dropdown.php'>
    <label for='day'>Select which day you're available</label>
    <select name='day' id='day'>
        <option value='choose'>Choose one...</option>
        <option value='mon' <?php if ($day == 'mon') echo 'selected' ?>>Monday</option>
        <option value='tue' <?php if ($day == 'tue') echo 'selected' ?>>Tuesday</option>
        <option value='wed' <?php if ($day == 'wed') echo 'selected' ?>>Wednesday</option>
        <option value='thu' <?php if ($day == 'thu') echo 'selected' ?>>Thursday</option>
        <option value='fri' <?php if ($day == 'fri') echo 'selected' ?>>Friday</option>
    </select>

    <input type='submit' value='Check availability' class='btn btn-primary btn-sm'>

    <?php if ($_GET) : ?>
        <?php if ($notSelected): ?>
            <div class='alert alert-warning' role='alert'>
                Please choose an option
            </div>
        <?php else: ?>
            <div class='alert alert-info' role='alert'>
                You selected: <em><?= $day ?></em>
            </div>
        <?php endif; ?>
    <?php endif; ?>
</form>

<a class='return' href='/forms-inputs'>&larr; Return to all form input examples</a>

</body>
</html>
