
<?php

session_start();
unset($_SESSION['userid']);
unset($_SESSION['id']);
unset($_SESSION['mode']);
$_SESSION['error_message'] = 'You have successfully loged out!';
header('location: index.php');

?>