<?php
require('tools.php');
require('Library.php');
require('../Form.php');

# Instantiate the objects we'll need
$library = new Library('books.json');
$form = new DWA\Form($_GET);

$errors = [];

# Form validation
if($form->isSubmitted()) {

    $searchTerm = $form->get('searchTerm', $default = ''); # String
    $caseSensitive = $form->isChosen('caseSensitive'); # Boolean

    $errors = $form->validate(
        [
            'searchTerm' => 'required',
        ]
    );

    if($errors)
        $books = [];
    else
        $books = $library->getByTitle($searchTerm, $caseSensitive);

    $haveResults = (count($books) == 0) ? false : true;

}
