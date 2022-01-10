<!-- Page heading -->
<div class="page-head">
<h2 class="pull-left"><i class="fa fa-podcast"></i> Ide</h2>

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
                  <div class="pull-left">Forms Input Ide</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>
                  <div class="clearfix"></div>
                </div>


                                
                                
                <div class="widget-content">
                  <div class="padd">
                    <!-- Form starts.  -->
                    <form id="form_reg" name="form_reg" action="ide/add_post.php" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
<div class="form-group">
<label class="col-lg-4 control-label" style="display:block;">Nama Project</label>
<div class="col-lg-8">
<select class="form-control" name="id_project" id="id_project">
<option>--Pilih Project--</option>
<?php
$sql_pk_row = "
select *
from tbl_project order by nm_project asc
";
$q_pk_row = mysqli_query($conn, $sql_pk_row) or die("Error Executing The Data(s)");
$count_pk_row = mysqli_num_rows($q_pk_row);													

if($count_pk_row > 0){
while($data_row = mysqli_fetch_array($q_pk_row)){
?>
  <option value="<?php echo $data_row['id_project']; ?>"><?php echo $data_row['nm_project']; ?></option>
  <?php
}
}
?>
</select>
</div>
</div> 


<div class="form-group">
<label class="col-lg-4 control-label" style="display:block;">Nama Creator</label>
<div class="col-lg-8">
<select class="form-control" name="id_creator" id="id_creator">
<option>--Pilih Creator--</option>
<?php
$sql_pk_row_c = "
select *
from tbl_creator order by nm_tim asc
";
$q_pk_row_c = mysqli_query($conn, $sql_pk_row_c) or die("Error Executing The Data(s)");
$count_pk_row_c = mysqli_num_rows($q_pk_row_c);													

if($count_pk_row_c > 0){
while($data_row_c = mysqli_fetch_array($q_pk_row_c)){
?>
  <option value="<?php echo $data_row_c['id_creator']; ?>"><?php echo $data_row_c['nm_tim']; ?></option>
  <?php
}
}
?>
</select>
</div>
</div>                                    

<div class="form-group">
  <label class="col-lg-4 control-label">Tanggal</label>
  <div class="col-lg-8">
    <input type="text" class="form-control" name="tgl_ide" id="tgl_ide">
  </div>
</div>
                                
                                
                                 
              


<div class="form-group">
  <label class="col-lg-4 control-label">Talent</label>
  <div class="col-lg-8">
    <textarea class="form-control" rows="3" name="talent" id="talent"></textarea>
  </div>
</div> 

<div class="form-group">
  <label class="col-lg-4 control-label">Wardrop</label>
  <div class="col-lg-8">
    <textarea class="form-control" rows="3" name="wardrop" id="wardrop"></textarea>
  </div>
</div> 


<div class="form-group">
  <label class="col-lg-4 control-label">Lokasi</label>
  <div class="col-lg-8">
    <textarea class="form-control" rows="3" name="lokasi" id="lokasi"></textarea>
  </div>
</div> 

<div class="form-group">
  <label class="col-lg-4 control-label">Tempat</label>
  <div class="col-lg-8">
    <textarea class="form-control" rows="3" name="tempat" id="tempat"></textarea>
  </div>
</div> 

<div class="form-group">
  <label class="col-lg-4 control-label">Brodcase</label>
  <div class="col-lg-8">
    <textarea class="form-control" rows="3" name="brodcase" id="brodcase"></textarea>
  </div>
</div> 


<div class="form-group">
  <label class="col-lg-4 control-label">Durasi</label>
  <div class="col-lg-8">
    <textarea class="form-control" rows="3" name="durasi" id="durasi"></textarea>
  </div>
</div> 

<hr />                           
                                    
                                <div class="form-group">
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

<script>
$(function(){
	$('#tgl_ide').datepicker({
		format: 'yyyy-mm-dd'
	}).on('changeDate', function (ev) {
		(ev.viewMode == 'days') ? $(this).datepicker('hide') : '';      
	});

});
</script>