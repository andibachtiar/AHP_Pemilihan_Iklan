<script src="../js/jquery-1.11.2.min.js"></script>
<script src="../js/jquery-1.9.1.js"></script>
<script>

</script>

<!-- Page heading -->
<div class="page-head">
<h2 class="pull-left"><i class="fa fa-search" style="font-size:18px"></i> Pemilihan</h2>

<!-- Breadcrumb -->

<div class="clearfix"></div>

</div>
<!-- Page heading ends -->



<!-- Matter -->

<div class="matter">
<div class="container">

<div class="row">
	<!-- Browsers -->
    
<div class="col-md-12">
<div class="widget">
<!-- Widget title -->
	<div class="widget-head">
		<div class="pull-left">Daftar Project</div>
		  
		<div class="clearfix"></div>
	</div>
    
	<div class="widget-content referrer">
<!-- Widget content -->

<div class="padd">
                    <!-- Form starts.  -->
<form id="form_reg" name="form_reg" action="index.php?page=diagnosa_result" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
<div class="form-group">
<div class="col-lg-12">
<table width="100%" class="table table-striped table-bordered table-hover">
<tr>
<th width="30" align="center"><center>#</center></th>
<th>Tanda Kerusakan</th>
<th width="100" align="center"><div style="text-align:center">Action</div></th>
</tr>
<?php
$sql_pk_row_tanda = "
select *
from tbl_tanda_kerusakan
";
$q_pk_row_tanda = mysqli_query($conn, $sql_pk_row_tanda) or die("Error Executing The Data(s)");
$count_pk_row_tanda = mysqli_num_rows($q_pk_row_tanda);													
$nomor = 0;
if($count_pk_row_tanda > 0){
while($data_row_tanda = mysqli_fetch_array($q_pk_row_tanda)){
$nomor++;
?>
<tr>
<td width="30" align="center"><?php echo $nomor; ?>
<td><?php echo $data_row_tanda['nm_tanda_kerusakan']; ?><input type="hidden" name="id_tanda_kerusakan[]" id="id_tanda_kerusakan[]" value="<?php echo $data_row_tanda['id_tanda_kerusakan'];?>" /></td>
<td width="100" align="center">
  <input name="chkBox[]" type="hidden" class="tombol" value="<?=($nomor) ?>" />
  <input name="id_tanda_kerusakan_<?=($nomor) ?>" type="checkbox" id="id_tanda_kerusakan_<?=($nomor) ?>" value="<?php echo $data_row_tanda['id_tanda_kerusakan'];?>" />
  
</td>
</tr> 
<?php
}
}
?>
</table>
</div>
</div>                    
                                
                                    <hr />
                                    
                                    
                                
<div style="padding:15px;">     
    <button type="submit" class="btn btn-primary">Diagnosa</button>
    <button type="reset" class="btn btn-default">Reset</button>
    <button type="button" class="btn btn-warning" onclick="history.back();">Back</button>
</div>                                  
                              </form>
                  </div>

    <div class="widget-foot">
    </div>
    </div>
</div>
</div> 
            
            
                     
</div>
</div>
</div>

<!-- Matter ends -->