<?php
include "../../conf/koneksi.php";
date_default_timezone_set("Asia/Jakarta");

$id_project=$_POST['id_project'];
$id_creator=$_POST['id_creator'];


$talent=$_POST['talent'];
$wardrop=$_POST['wardrop'];
$lokasi=$_POST['lokasi'];
$tempat=$_POST['tempat'];

$brodcase=$_POST['brodcase'];
$durasi=$_POST['durasi'];
$tgl_ide=$_POST['tgl_ide'];

$sql="INSERT INTO tbl_ide(					   
id_project,
id_creator,
talent,
wardrop,
lokasi,
tempat,
brodcase,
durasi,
tgl_ide
)VALUES(
'$id_project',
'$id_creator',
'$talent',
'$wardrop',
'$lokasi',
'$tempat',
'$brodcase',
'$durasi',
'$tgl_ide'
)";
$result=mysqli_query($conn, $sql);

echo "
<script type='text/javascript'>
document.location='../index.php?page=ide';
</script>";
			
			
?>