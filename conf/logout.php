<?php
session_start();
session_unset('login_sess_admin');
session_unset('login_sess_operator');
session_destroy();
header("location:../index.php");
?>