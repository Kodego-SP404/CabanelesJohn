<?php 
session_start();

//destroy the session
sessioon_destroy();
header('Location: /SP404/phpdemo/13_sessions.php')