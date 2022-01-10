<!-- Page heading -->
<div class="page-head">
<h2 class="pull-left"><i class="icon-gear"></i> Kerusakan</h2>

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
<div class="widget wgreen">
                
                <div class="widget-head">
                  <div class="pull-left">Forms Input Kerusakan</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>
                  <div class="clearfix"></div>
                </div>


                                
                                
                <div class="widget-content">
                  <div class="padd">
                    <!-- Form starts.  -->
                    <form id="form_reg" name="form_reg" action="kerusakan/add_post.php" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
                              
                                <div class="form-group">
                                  <label class="col-lg-5 control-label">Kerusakan</label>
                                  <div class="col-lg-7">
                                    <input type="text" class="form-control" placeholder="Nama" name="nm_kerusakan" id="nm_kerusakan">
                                  </div>
                                </div>
                                   
                                 
<div class="form-group">
<label class="col-lg-4 control-label" style="display:block;">Spare Part</label>
<div class="col-lg-8">
<select class="form-control" name="id_spare_part" id="id_spare_part">
<?php
$sql_pk_row = "
select *
from tbl_spare_part
";
$q_pk_row = mysqli_query($conn, $sql_pk_row) or die("Error Executing The Data(s)");
$count_pk_row = mysqli_num_rows($q_pk_row);													

if($count_pk_row > 0){
while($data_row = mysqli_fetch_array($q_pk_row)){
?>
  <option value="<?php echo $data_row['id_spare_part']; ?>"><?php echo $data_row['nm_spare_part']; ?></option>
  <?php
}
}
?>
</select>
</div>
</div>                    


<div class="form-group">
  <label class="col-lg-4 control-label">Solusi</label>
  <div class="col-lg-8">
    <textarea class="form-control" rows="3" placeholder="Solusi" name="solusi" id="solusi"></textarea>
  </div>
</div> 

<hr />

<div class="form-group">
<label class="col-lg-4 control-label" style="display:block;">Tanda Kerusakan</label>
<div class="col-lg-11">
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
                                    
                                    
                                <div class="form-group">
                                <input type="hidden" class="form-control" placeholder="Nama" name="id_user" id="id_user" value="<?php echo $login_id_user; ?>">
                                  <div class="col-lg-offset-1 col-lg-9">
                                    
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <button type="reset" class="btn btn-default">Reset</button>
                                    <button type="button" class="btn btn-warning" onclick="history.back();">Back</button>
                                  </div>
                                </div>
                              </form>
                  </div>
                </div>
                  <div class="widget-foot">
                    <!-- Footer goes here -->
                  </div>
              </div>
</div> 
            
            
                     
</div>
</div>
</div>

<!-- Matter ends -->