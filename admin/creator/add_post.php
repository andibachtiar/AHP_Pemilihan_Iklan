<?php
include "../../conf/koneksi.php";
date_default_timezone_set("Asia/Jakarta");

$nm_tim=$_POST['nm_tim'];
$sql="INSERT INTO tbl_creator(					   
nm_tim
)VALUES(
'$nm_tim'
)";
$result=mysqli_query($conn, $sql);

echo "
<script type='text/javascript'>
document.location='../index.php?page=creator';
</script>";
