<?php
# Note - liberties taken with demo file:
# Not including full HTML structure
# Code islands in HTML include php logic

require('helpers.php');
require('Cipher.php');
?>

<h1>Cipher Demo</h1>


<h2>shift</h2>
<p>
    Each letter is replaced with its adjacent letter in the alphabet; e.g. a becomes b, x becomes y, z becomes a, etc.
</p>
<?php
$cipherA = new Cipher('shift');
dump('Hello World = '.$cipherA->encode('Hello World'));
dump('zoo = '.$cipherA->encode('zoo'));
?>


<h2>vowels</h2>
<p>
    vowels are replaced with their numerical equivalent where a=0, i=1, o=2, etc.
</p>
<?php
$cipherB = new Cipher('vowels');
dump('Hello World = '.$cipherB->encode('Hello World'));
dump('zoo = '.$cipherB->encode('zoo'));
?>


<h2>Cipher method does not exist</h2>
<?php
try {
    $cipherB = new Cipher('xyz');
} catch (Exception $e) {
    dump($e->getMessage());
}
?>
