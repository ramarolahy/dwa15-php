<?php require('inputsLogic.php'); ?>

<!DOCTYPE html>
<html>
<head>

    <title>Simple Input Examples</title>
    <meta charset='utf-8'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css' rel='stylesheet'>
    <link href='../styles.css' rel='stylesheet'>

</head>
<body>

    <h1>Simple Input Examples</h1>

    <form method='POST' action='inputs.php'>

        <input type='hidden' name='userId' value='<?=$userId?>'>

        <label for='title'>Title</label>
        <input type='text' name='title' value='<?php if (isset($_POST['title'])) echo $_POST['title'] ?>'>

        <label for='description'>Description</label>
        <textarea name='description'><?php if (isset($_POST['description'])) echo $_POST['description'] ?></textarea>

        <label for='date'>Date published</label>
        <input type='date' name='date' value='<?php if (isset($_POST['date'])) echo $_POST['date'] ?>'>

        <input type='submit' class='btn btn-primary btn-sm'>

    </form>

    <footer>
        <a href='/forms/'>&larr; Other form examples</a>
    </footer>

</body>
</html>
