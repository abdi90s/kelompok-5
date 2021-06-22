<?php 
session_start();
session_destroy();
header('location: /1/tugas-kereta/index.php');
