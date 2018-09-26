<?php
require('FormTest.php');

# Index 0 = The value to test
# Index 1 = The validation rule to test with
# Index 3 = Expected result - true if validation is supposed to pass, false if it's supposed to fail

$tests = [
    ['abc', 'alpha', true],
    ['abc123', 'alpha', false], # Fails b/c it contains numbers
    ['123', 'alpha', false], # Fails because it contains numbers
    ['123@#', 'alpha', false], # Fails b/c it contains numbers and symbols

    ['abc', 'alphaNumeric', true],
    ['abc123', 'alphaNumeric', true],
    ['abc123$$', 'alphaNumeric', false], # Fails b/c it contains symbols
    ['-123', 'alphaNumeric', false], # Fails because it contains a symbol

    ['123', 'digit', true],
    ['-123', 'digit', false], # Fails because it contains a symbol
    ['12.3', 'digit', false],

    ['123', 'numeric', true],
    ['-123', 'numeric', true],
    ['12.3', 'numeric', true],
    ['12.3x', 'numeric', false], # Fails because it contains a letter

    ['', 'required', false],
    ['abc', 'required', true],
    [' ', 'required', false], # Fails b/c it contains a blank space which counts as a character

    ['', 'min:5', false],
    ['9', 'min:5', true],
    ['0', 'min:5', false],
    ['9', 'max:10', true],
    ['10', 'max:10', true],
    ['11', 'max:10', false],
    ['-5', 'min:0', false],
    ['-5', 'min:-10', true],
    ['10.1', 'max:10', false],
    ['9.9', 'max:10', true],
    ['a', 'max:100', false],
    ['a', 'min:100', false],

    ['2018', 'minLength:4', true],
    ['18', 'minLength:4', false], # Fails b/c it's not long enough
    ['18', 'maxLength:2', true],
    ['-18', 'maxLength:2', false], # Fails because it's too long
    ['-18', 'maxLength:3', true],

    ['test@gmail.com', 'email', true],
    ['test@gmail', 'email', false],
    ['testgmail.com', 'email', false],
    ['', 'email', false],

    ['http://weather.com', 'url', true],
    ['weather.com', 'url', false],
    ['http://weather', 'url', true], # FILTER_VALIDATE_URL Does see this as a valid URL
    ['', 'url', false],

];

$formTest = new FormTest($tests);
?>

<?php foreach ($formTest->output as $line): ?>
    <?= $line ?><br>
<?php endforeach; ?>


