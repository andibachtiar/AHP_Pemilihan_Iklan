<?php
$sql_pk_row = "
select * from tbl_creator where id_creator = '$_GET[id]'
";
$q_pk_row = mysqli_query($conn, $sql_pk_row) or die("Error Executing The Data(s)");
$count_pk_row = mysqli_num_rows($q_pk_row);	
$data_row = mysqli_fetch_array($q_pk_row);
?>
<!-- Page heading -->
<div class="page-head">
<h2 class="pull-left"><i class="icon-user"></i> Creator</h2>

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
                  <div class="pull-left">Forms Edit Creator</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>
                  <div class="clearfix"></div>
                </div>

                <div class="widget-content">
                  <div class="padd">

                    <!-- Form starts.  -->
                    <form id="form_reg" name="form_reg" action="creator/edit_post.php" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
                              
                                <div class="form-group">
                                  <label class="col-lg-4 control-label">Nama</label>
                                  <div class="col-lg-8">
                                    <input type="text" class="form-control" placeholder="Nama" name="nm_tim" id="nm_creator" value="<?php echo $data_row['nm_tim']; ?>">
                                    
                                    <input type="hidden" name="id" id="id" value="<?php echo $data_row['id_creator']; ?>">
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

<!-- Matter ends -->