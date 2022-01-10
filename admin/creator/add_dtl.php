
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="table table-striped" id="example">
<thead class="text-primary">
  <tr>
    <th width="70" align="center"><div style="text-align:center">Kode</div></th>
    <th><div style="text-align:left">Nama</div></th>
    <th width="70" align="center"><div style="text-align:center">Satuan</div></th>
    <th width="70" align="right"><div style="text-align:right">Harga</div></th>
    <th width="70" align="center"><div style="text-align:center">Jumlah</div></th>
    <th width="70" align="center"><div style="text-align:center">Total Jumlah</div></th>
    <th width="70" align="center"><div style="text-align:center">Action</div></th>
  </tr>
</thead>
<?php
include "../../conf/koneksi.php";
$no_faktur = !empty($_GET['no_faktur']) ? $_GET['no_faktur'] : "";
$sql_pk_row = "
select 
a.*,
b.nm_brg,
b.harga_brg,
b.satuan_brg
from  tbl_faktur_dtl a
join tbl_barang b on a.kode_brg=b.kode_brg
where no_faktur = '$no_faktur'
";
$q_pk_row = mysqli_query($conn, $sql_pk_row) or die("Error Executing The Data(s)");
$count_pk_row = mysqli_num_rows($q_pk_row);													

$jumlah = 0;
$total_jumlah = 0;
if($count_pk_row > 0){
while($data_row = mysqli_fetch_array($q_pk_row)){
$jumlah = $jumlah + $data_row['jumlah'];
$total_jumlah = $total_jumlah + ($data_row['harga_brg'] * $data_row['jumlah']);
?>
<tr>
  <td width="70" align="center"><div style="text-align:center"><?php echo $data_row['kode_brg']; ?></div></td>
  <td><div style="text-align:left"><?php echo $data_row['nm_brg']; ?></div></td>
  <td width="70" align="center"><?php echo $data_row['satuan_brg']; ?></td>
<td width="70" align="right">
<div style="text-align:right">
<?=number_format($data_row['harga_brg'],0,'.',',').''.'' ?>
</div>
</td>
<td width="70" align="center">
    <div style="text-align:right">
    <?=number_format($data_row['jumlah'],0,'.',',').''.'' ?>
    </div>
</td>
<td width="70" align="right">
    <div style="text-align:right">
    <?=number_format($data_row['harga_brg'] * $data_row['jumlah'],0,'.',',').''.'' ?>
    </div>
</td>
<td width="70" align="center">
<div class='btn-group btn-group-sm'>
  <a class="btn btn-danger btn-sm" Onclick="ConfirmDelete('<?php echo $data_row['id_faktur_dtl']; ?>', '<?php echo $no_faktur; ?>')">Delete</a>
  
  </div>
</td>
</tr> 
<?php
}
?>
<tr>
  <td colspan="4" align="center"><strong>Total Jumlah
  </strong></td>
  <td width="70" align="right">
  <b><?=number_format($jumlah,0,'.',',').''.'' ?></b>
  </td>
  <td width="70" align="right">
  <b><?=number_format($total_jumlah,0,'.',',').''.'' ?></b>
  </td>
<td width="70" align="center">
</td>
</tr> 
<?php
}
?>
</table>
