<?php
include "../../conf/koneksi.php";
date_default_timezone_set("Asia/Jakarta");

$id=$_POST['id'];

$nm_kerusakan=$_POST['nm_kerusakan'];
$solusi=$_POST['solusi'];
$id_spare_part=$_POST['id_spare_part'];


$sql="update tbl_kerusakan set					   
nm_kerusakan='$nm_kerusakan',
solusi='$solusi',
id_spare_part='$id_spare_part'
where id_kerusakan = '$id'";
$result=mysqli_query($conn, $sql);

$del = "delete from tbl_kerusakan_dtl
where id_kerusakan = '$id'";
$q_del = mysqli_query($conn, $del);


for ($i=0;$i<sizeof($_POST['chkBox']);$i++) {
			$box = $_POST["chkBox"][$i];
			$id_tanda_kerusakan=$_POST['id_tanda_kerusakan'][$i];
			
			error_reporting(E_ALL ^ ( E_NOTICE | E_WARNING));
			$tanda = $_POST["id_tanda_kerusakan_$box"];
			
			if(!empty($tanda)){
					$datax = $tanda;       
					$sql_i="INSERT INTO tbl_kerusakan_dtl(
						id_kerusakan,
						id_tanda_kerusakan
						)VALUES(
						'$id',
						'$id_tanda_kerusakan'
						)";
					$result_i=mysqli_query($conn, $sql_i);
			}
			
}

echo "
<script type='text/javascript'>
document.location='../index.php?page=kerusakan';
</script>";
		
				
?>