<?php
session_start();

session_destroy();
header("location: poste_photo/poste_photo.php");
?>