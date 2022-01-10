<?php
include "../../conf/koneksi.php";
date_default_timezone_set("Asia/Jakarta");

$id=$_POST['id'];

$nm_tim=$_POST['nm_tim'];
			

$sql="update tbl_creator set					   
nm_tim='$nm_tim'
where id_creator = '$id'";
$result=mysqli_query($conn, $sql);

echo "
<script type='text/javascript'>
document.location='../index.php?page=creator';
</script>";
		
				
?>