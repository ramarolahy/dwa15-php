<?php
require 'includes/Form.php';

$form = new DWA\Form($_GET);

$submitted = $form->isSubmitted();

if ($submitted) {
    $errors = $form->validate(
        [
            'email' => 'required|email',
            'url' => 'required|url',
            'username' => 'required|alphaNumeric',
            'year' => 'required|digit|minLength:4|maxLength:4',
            'total' => 'required|numeric',
            'age' => 'required|min:18',
            'score' => 'required|max:100',
            'rank' => 'required|digit|min:1|max:5',
            'rating' => 'required|numeric|min:1|max:5',
        ]
    );
}
