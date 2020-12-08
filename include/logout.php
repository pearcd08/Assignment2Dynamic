<?php
//start session
@session_start();
//kill all sessions
@session_destroy();
header(string: 'location: index.php');
?>
