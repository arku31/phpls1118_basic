<?php
session_start();
$_SESSION['login'] = 'arku';
$_SESSION['password'] = '123';
?>
<a href="/session2.php?key=value">Link</a>
