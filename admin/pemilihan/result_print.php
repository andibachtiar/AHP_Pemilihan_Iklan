<!-- Stylesheets -->
<link href="../../style/bootstrap.css" rel="stylesheet">
<script type="text/javascript" src="../../assets/dashadmin/js/jquery.js"></script>
<script language="javascript" src="../../assets/js/jquery-1.6.2.min.js"></script>
<script language="javascript" src="../../assets/js/jquery-ui-1.8.14.custom.min.js"></script>
<script language="javascript" src="../../assets/js/ajax.js"></script>
<script language="javascript" src="../../assets/js/jquery.jqprint.js"></script>



<script>
window.print();
</script> 

<?php
include "../../conf/koneksi.php";
$id = $_GET['id'] != null ? $_GET['id'] : "";
$sql_cek = "
select a.*, b.*, c.nm_tim 
from tbl_project a
JOIN tbl_ide b on a.id_project=b.id_project and b.stts_ide = 1
join tbl_creator c on b.id_creator=c.id_creator

where a.id_project = '$id'
";
$q_cek = mysqli_query($conn, $sql_cek) or die("Error Executing The Data(s)");
$count_cek = mysqli_num_rows($q_cek);													
$data_row_cek = mysqli_fetch_array($q_cek);
?>

                            <table width="100%" border="0" cellspacing="2" cellpadding="2" class="table" style="font-size:12px">
                              <tr>
                                <td width="130">Nama Project                                  </td>
                                <td width="5">:</td>
                                <td><?php echo $data_row_cek['nm_project']; ?>
                                </td>
                                </tr>
                                <tr>
                                <td width="130">Nama Tim                                  </td>
                                <td width="5">:</td>
                                <td><?php echo $data_row_cek['nm_tim']; ?>
                                </td>
                                </tr>
                                <tr>
                                <td width="130">Tanggal                                  </td>
                                <td width="5">:</td>
                                <td><?php echo date("d M Y",strtotime($data_row_cek['tgl_ide']));?>
                                </td>
                                </tr>
                                <tr>
                                <td width="130">Talent                                  </td>
                                <td width="5">:</td>
                                <td><?php echo $data_row_cek['talent']; ?>
                                </td>
                                </tr>
                                <tr>
                                <td width="130">Wardrop                                  </td>
                                <td width="5">:</td>
                                <td><?php echo $data_row_cek['wardrop']; ?>
                                </td>
                                </tr>
                                <tr>
                                <td width="130">Lokasi                                  </td>
                                <td width="5">:</td>
                                <td><?php echo $data_row_cek['lokasi']; ?>
                                </td>
                                </tr>
                                <tr>
                                <td width="130">Tempat                               </td>
                                <td width="5">:</td>
                                <td><?php echo $data_row_cek['tempat']; ?>
                                </td>
                                </tr>
                                <tr>
                                <td width="130">Brodcase                               </td>
                                <td width="5">:</td>
                                <td><?php echo $data_row_cek['brodcase']; ?>
                                </td>
                                </tr>
                                <tr>
                                <td width="130">Durasi                                  </td>
                                <td width="5">:</td>
                                <td><?php echo $data_row_cek['durasi']; ?>
                                </td>
                                </tr>
                              </table>

                <hr  />
  
                            <table width="100%" class="table table-striped table-bordered table-hover" style="font-size:12px">
<thead>
  <tr>
    <th width="70"><div style="text-align:center">No.</div></th>
    <th><div style="text-align:left">Nama Creator</div></th>
    </tr>
</thead>
<?php
$sql_pk_row = "
select *
from  tbl_creator_dtl 
where id_creator = '$data_row_cek[id_creator]'
";
$q_pk_row = mysqli_query($conn, $sql_pk_row) or die("Error Executing The Data(sxc)");
$count_pk_row = mysqli_num_rows($q_pk_row);													

if($count_pk_row > 0){
	$nomor = 0 ;
while($data_row = mysqli_fetch_array($q_pk_row)){
	$nomor++;
?>
<tr>
  <td width="70"><div style="text-align:center"><?php echo $nomor; ?></div></td>
  <td><div style="text-align:left"><?php echo $data_row['nm_creator']; ?></div></td>
  </tr> 
<?php
}
?>
<?php
}
?>
</table>
                        