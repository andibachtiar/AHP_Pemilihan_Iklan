<?php    
session_start();   
$session = $_SESSION['login_sess_operator'];
if(empty($session))
{
    header("location:../index.php?page=login"); 
}
?>