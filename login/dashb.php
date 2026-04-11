<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: loginpage.php");
    exit();
}                 
?>             

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Death Note</title>
    <link rel="stylesheet" href="dashb.css">
</head>
<body>
    <video autoplay loop muted playsinline>
    <source src="oni.mp4" type="video/mp4">
</video>
</body>
</html>