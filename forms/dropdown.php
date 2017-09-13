<?php require('dropdownLogic.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Dropdown Example</title>
    <meta charset='utf-8'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css' rel='stylesheet'>
    <link href='../styles.css' rel='stylesheet'>
</head>
<body>

    <h1>Dropdown Example</h1>

    <form method='POST' action='dropdown.php'>
        <label for='day'>Select which day you're available</label>
        <select name='day' id='day'>
            <option value='choose'>Choose one...</option>
            <option value='mon' <?php if ($day == 'mon') echo 'SELECTED'?>>Monday</option>
            <option value='tue' <?php if ($day == 'tue') echo 'SELECTED'?>>Tuesday</option>
            <option value='wed' <?php if ($day == 'wed') echo 'SELECTED'?>>Wednesday</option>
            <option value='thu' <?php if ($day == 'thu') echo 'SELECTED'?>>Thursday</option>
            <option value='fri' <?php if ($day == 'fri') echo 'SELECTED'?>>Friday</option>
        </select>

        <input type='submit' class='btn btn-primary btn-sm'>

        <?php if ($_POST) : ?>
            <div class="alert <?=$alertType?>" role="alert">
                <?=$results?>
            </div>
        <?php endif; ?>

    </form>

    <footer>
        <a href='/forms/'>&larr; Other form examples</a>
    </footer>

</body>
</html>
