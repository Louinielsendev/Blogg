<?php
const username = "Loui";
const password = "Nielsen";
if (isset($_POST['submit'])){
    $name = $_POST['usrname'];
    $pas = $_POST['pwd'];
        if (username == $name && password == $pas){
            session_start();
            session_id(); 
            $id = session_id();
            $_SESSION['id'] = $id;
            header("Location: index.php");
        } 
        else{
            header('Location: loginpage.php'); 
        } 

} 