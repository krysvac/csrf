<?php
session_start();
include 'csrf.class.php';
 
$csrf = new csrf();
 
// Generate Token Id and Valid
$token_id = $csrf->get_token_id();
$token_value = $csrf->get_token($token_id);

?>

<form action="submit.php" method="post">
<input type="hidden" name="<?= $token_id; ?>" value="<?= $token_value; ?>" />
<input type="submit" value="Login"/>
</form>