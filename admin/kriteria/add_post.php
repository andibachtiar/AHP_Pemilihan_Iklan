<?php
include "../../conf/koneksi.php";
date_default_timezone_set("Asia/Jakarta");

$nm_kerusakan=$_POST['nm_kerusakan'];
$solusi=$_POST['solusi'];
$id_spare_part=$_POST['id_spare_part'];
$id_user=$_POST['id_user'];

$sql="INSERT INTO tbl_kerusakan(					   
nm_kerusakan,
solusi,
id_spare_part,
id_user
)VALUES(
'$nm_kerusakan',
'$solusi',
'$id_spare_part',
'$id_user'
)";
$result=mysqli_query($conn, $sql);



$sql_pk_row_tanda = "
select *
from tbl_kerusakan
order by id_kerusakan desc limit 1
";
$q_pk_row_tanda = mysqli_query($conn, $sql_pk_row_tanda) or die("Error Executing The Data(s)");
$count_pk_row_tanda = mysqli_num_rows($q_pk_row_tanda);													
$data_row_tanda = mysqli_fetch_array($q_pk_row_tanda);
$id_kerusakan=$data_row_tanda['id_kerusakan'];	
	
	
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
						'$id_kerusakan',
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