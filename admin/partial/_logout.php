<?php
session_start();

session_destroy();
header('location: http://localhost/hi5-sharing-social-media-website/login.php');  
?>