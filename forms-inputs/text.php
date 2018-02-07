<?php
require 'text-logic.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Simple Input Examples</title>
    <meta charset='utf-8'>
    <link href='../css/styles.css' rel='stylesheet'>
</head>
<body>

    <h1>Text inputs</h1>

    <form method='GET' action='text.php'>

        <input type='hidden' name='userId' value='<?=$userId?>'>

        <label for='title'>Title</label>
        <input type='text' name='title' value='<?php if (isset($_POST['title'])) echo $_POST['title'] ?>'>

        <label for='description'>Description</label>
        <textarea name='description'><?php if (isset($_POST['description'])) echo $_POST['description'] ?></textarea>

        <label for='date'>Date published</label>
        <input type='date' name='date' value='<?php if (isset($_POST['date'])) echo $_POST['date'] ?>'>

        <input type='submit' class='btn btn-primary btn-sm'>

    </form>

</body>
</html>
