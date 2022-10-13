<?php
session_start();
if (isset($_SESSION['ID'])){
    header("Location: index.php");
}
include_once 'headers/loginheader.php'
?>

    <form action="functions/login.inc.php" method='POST'>
        <input type="text" name='usrname' placeholder='Användarnamn'>
        <input type="password" name='pwd' placeholder = 'Lösenord'>
        <button type='submit' name='submit'>Logga in</button>
    </form>
    <?php
    if (isset($_GET["error"])){
        echo "<p>Fel Användarnamn eller lösenord!<p>";
    }
    ?>
</body>
</html>

