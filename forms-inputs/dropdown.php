<?php
require 'dropdown-logic.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dropdown Example</title>
    <meta charset='utf-8'>
</head>
<body>

    <h1>Dropdown (select)</h1>

    <form method='GET' action='dropdown.php'>
        <label for='day'>Select which day you're available</label>
        <select name='day' id='day'>
            <option value='choose'>Choose one...</option>
            <option value='mon' <?php if ($day == 'mon') echo 'SELECTED'?>>Monday</option>
            <option value='tue' <?php if ($day == 'tue') echo 'SELECTED'?>>Tuesday</option>
            <option value='wed' <?php if ($day == 'wed') echo 'SELECTED'?>>Wednesday</option>
            <option value='thu' <?php if ($day == 'thu') echo 'SELECTED'?>>Thursday</option>
            <option value='fri' <?php if ($day == 'fri') echo 'SELECTED'?>>Friday</option>
        </select>

        <input type='submit' value='Submit'>

        <?php if ($_POST) : ?>
            <div class="alert <?=$alertType?>" role="alert">
                <?=$results?>
            </div>
        <?php endif; ?>
    </form>

</body>
</html>
