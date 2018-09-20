<?php
require 'includes/Form.php';

$form = new DWA\Form($_GET);

if ($form->isSubmitted()) {
    $errors = $form->validate(
        [
            'email' => 'required|email',
            'username' => 'alphaNumeric',
            'year' => 'numeric',
            'age' => 'min:16',
            'score' => 'max:5',
            'rank' => 'numeric|min:0|max:5',
        ]
    );
}
