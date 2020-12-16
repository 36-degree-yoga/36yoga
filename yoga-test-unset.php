<?php
session_start();
unset($_SESSION['yoga_test']);

header('Location: yoga-test.php');
