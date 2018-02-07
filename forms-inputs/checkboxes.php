<?php
require 'checkboxes-logic.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Checkboxes Example</title>
    <meta charset='utf-8'>
    <link href='../css/styles.css' rel='stylesheet'>
</head>
<body>

    <h1>Checkboxes</h1>

    <form method='GET' action='checkboxes.php'>

        <!-- Trick to makes it so that if no checkboxes are selected, we still receive $_POST data -->
        <input type='hidden' name='alwaysPost' value='0'>

        <fieldset class='checkboxes'>
            <legend>Select which days you're available</legend>
            <label><input type='checkbox' name='days[]' value='mon' <?php if (strstr($results, 'mon')) echo 'CHECKED'?>> Monday</label>
            <label><input type='checkbox' name='days[]' value='tue' <?php if (strstr($results, 'tue')) echo 'CHECKED'?>> Tuesday</label>
            <label><input type='checkbox' name='days[]' value='wed' <?php if (strstr($results, 'wed')) echo 'CHECKED'?>> Wednesday</label>
            <label><input type='checkbox' name='days[]' value='thu' <?php if (strstr($results, 'thu')) echo 'CHECKED'?>> Thursday</label>
            <label><input type='checkbox' name='days[]' value='fri' <?php if (strstr($results, 'fri')) echo 'CHECKED'?>> Friday</label>
        </fieldset>

        <input type='submit' value='Submit'>

        <?php if ($_POST) : ?>
            <div class="alert <?=$alertType?>" role="alert">
                <?=$results?>
            </div>
        <?php endif; ?>

    </form>

</body>
</html>
