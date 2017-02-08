<?php

#echo 'You searched for '.$_GET['searchTerm'];

$description = "<script>alert('Attention; your password has been compromised, visit http://shady.com to secure your account.')</script>";


?>

<?=htmlentities($description, ENT_QUOTES, "UTF-8"); ?>
