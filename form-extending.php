<?php
require('includes/Form.php'); # <--- Still need this because MyForm.php will extend it
require('includes/MyForm.php');

use Buck\MyForm;

$mockData = [
    'passwordA' => 'abc', # Fail
    'passwordB' => 'abc@', # Fail
    'passwordC' => 'abc@1' # Pass
];

$form = new MyForm($mockData);

$errors = $form->validate([
    'passwordA' => 'required|password',
    'passwordB' => 'required|password',
    'passwordC' => 'required|password',
]);

var_dump($errors);
