<?php 
session_start();
include('inc/conc.php');
session_unset();
session_destroy();
header('Location: login.php');



?>