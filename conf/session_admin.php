<?php    
session_start();   
$session = $_SESSION['login_sess_admin'];
if(empty($session))
{
    header("location:../index.php?page=login"); 
}
?>