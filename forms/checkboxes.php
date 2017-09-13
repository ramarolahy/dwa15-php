<?php require('checkboxesLogic.php') ?>
<!DOCTYPE html>
<html>
<head>

    <title>Checkboxes Example</title>
    <meta charset='utf-8'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css' rel='stylesheet'>
    <link href='../styles.css' rel='stylesheet'>

</head>
<body>

    <h1>Checkboxes Example</h1>

    <form method='POST' action='checkboxes.php'>

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
