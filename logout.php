
<?php

session_start();
$_SESSION['error_message'] = 'You have successfully loged out!';
header('location: index.php');

?>