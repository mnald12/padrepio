
<?php

session_start();
unset($_SESSION['id']);
$_SESSION['error_message'] = 'You have successfully loged out!';
header('location: index.php');

?>