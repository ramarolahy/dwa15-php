<?php
require 'logic.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Version C</title>
    <meta charset='utf-8'>
</head>
<body>

<h1>Book search</h1>
<h2>Version C</h2>

<form method='GET' action='index.php'>

    <label>Search for a book:
        <input type='text' name='searchTerm' value='The Great Gatsby'>
    </label>

    <input type='submit' value='Search'>
</form>

<?php if ($searchTerm): ?>
    <p>
        You searched for <strong><?= sanitize($searchTerm) ?></strong>.
    </p>

    <?php if ($haveBooks): ?>
        <h2>Results:</h2>
        <?php foreach ($books as $title => $book): ?>
            <div class='book'>
                <?= $title; ?> by <?= $book['author'] ?>
                <img src='<?php echo $book['cover_url']; ?>' alt='Cover photo for <?= $title; ?>'>
            </div>
        <?php endforeach ?>
    <?php else: ?>
        <p>No results found</p>
    <?php endif ?>
<?php endif ?>

</body>
</html>