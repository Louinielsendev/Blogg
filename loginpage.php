<?php
session_start();
if (isset($_SESSION['id'])){
    header("Location: index.php");
}
include_once 'loginheader.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.inc.php" method='POST'>
        <input type="text" name='usrname' placeholder='Användarnamn'>
        <input type="password" name='pwd' placeholder = 'Lösenord'>
        <button type='submit' name='submit'>Logga in</button>
    </form>
    <?php
    if (isset($_GET["error"])){
        echo "<p> Fel Användarnamn eller lösenord!";
    }
    ?>
</body>
</html>

