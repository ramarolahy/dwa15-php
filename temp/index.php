<?php require('getAllBooks.php'); ?>
<!DOCTYPE html>
<html>
<head>

	<title>Foobooks</title>
	<meta charset='utf-8'>

</head>
<body>


<h1>Foobooks</h1>

<?php foreach($books as $title => $book): ?>

    <div class='book'>
        <h2><?=$title?></h2>
        By <?=$book['author'];?>
    </div>

<?php endforeach; ?>

</body>
</html>
