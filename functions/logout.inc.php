<?php
// Loggar ut användaren
session_start();
session_destroy();
header("Location: ../index.php");