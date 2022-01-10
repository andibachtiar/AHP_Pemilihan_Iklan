<?php
include "../../conf/koneksi.php";
date_default_timezone_set("Asia/Jakarta");

$id=$_POST['id'];
$nm_creator=$_POST['nm_creator'];

$sql_pk_row_p = "select * from tbl_creator_dtl where id_creator = '$id' and nm_creator = '$nm_creator'";
$q_pk_row_p = mysqli_query($conn, $sql_pk_row_p) or die("Error Executing The Data(sbb)");											
$data_row_p = mysqli_fetch_array($q_pk_row_p);
$count_pk_row = mysqli_num_rows($q_pk_row_p);	

if($count_pk_row > 0){
	echo "<script type='text/javascript'>
	  alert('Nama Creator sudah tersedia...!');
	  </script>";
	
}else{

$sql="INSERT INTO tbl_creator_dtl (
id_creator,
nm_creator
)VALUES(
'$id',
'$nm_creator'
)";
$result=mysqli_query($conn, $sql);

echo "<script type='text/javascript'>
	  document.location.reload();
	  </script>";

}
?>