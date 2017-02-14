<?php require('getAllBooks.php'); ?>

<!DOCTYPE html>
<html>
<head>

	<title>Foobooks</title>
	<meta charset='utf-8'>

    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
	<link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css' rel='stylesheet'>
	<link href='css/styles.css' rel='stylesheet'>

</head>
<body>

    <h1>Foobooks</h1>

    <form method='GET' action='index.php'>

        <label for='searchTerm'>Search by title:</label>
        <input type='text' name='searchTerm' required id='searchTerm' value='<?=$form->prefill('searchTerm')?>'>

        <input type='checkbox' name='caseSensitive' <?php if($form->isChecked('caseSensitive')) echo 'CHECKED' ?>>
        <label>Make case sensitive</label>

        <br>
        <input type='submit' class='btn btn-primary btn-small'>

    </form>

	<?php if($errors): ?>

		<div class='alert alert-danger'>
			<ul>
				<?php foreach($errors as $error): ?>
					<li><?=$error?></li>
				<?php endforeach; ?>
			</ul>
		</div>

	<?php elseif($form->isSubmitted()): ?>

        <div class='alert alert-info'>Searched for: <?=sanitize($searchTerm)?></div>

	    <?php if(!$haveResults): ?>
	        No books found
	    <?php endif; ?>

	    <?php foreach($books as $title => $book): ?>

	        <div class='book'>
	            <h2><?=$title?></h2>

	            By <?=$book['author']?><br>

	            Published <?=$book['published']?>
	        </div>

	    <?php endforeach; ?>

	<?php endif; ?>

</body>
</html>
