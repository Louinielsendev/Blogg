<?php
if (isset($_POST['submit'])){
    $name = $_POST["usrname"];
    $pas = $_POST["pwd"];

    require_once 'db.inc.php';
    

    function checkUsername($connection, $name){
        $sql = "SELECT * from users WHERE usersUserName = ?;";
        
        $stmt = mysqli_stmt_init($connection);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            
            header("location: index.php");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "s", $name);
        mysqli_stmt_execute($stmt);
        
        $resultData = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        }
        else {
            return false;
        }

        mysqli_stmt_close($stmt);
    }
    function loginUser($connection, $name, $pas){
        $userExists = checkUsername($connection, $name);
        
        if ($userExists === false){
           
        }
        $passwordHash = $userExists["usersPassword"];
        if($pas === $passwordHash){
            session_start();
            $_SESSION["ID"] = $userExists["usersID"];
            header ("location: index.php");
        }
        else{
            header ("location: loginpage.php");
           
        }
    }   
    loginUser($connection, $name, $pas);

} 