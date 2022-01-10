<script type="text/javascript">
	function ConfirmDelete(id)
	{
	  var x = confirm("Are you sure you want to delete?");
	  if (x){	
		  $.ajax({
				type: "GET",
				url: "ide/delete.php",
				data: {
					id : id
				},
				cache: false,
				success : function(result){
					document.location.reload();
				}
			});
	  }else{
		return false;
	  }
	}

	
</script>

<!-- Page heading -->
<div class="page-head">
<h2 class="pull-left"><i class="fa fa-podcast"></i> Ide</h2>

<!-- Breadcrumb -->

<div class="clearfix"></div>

</div>
<!-- Page heading ends -->



<!-- Matter -->

<div class="matter">
<div style="padding-left:10px; padding-right:10px;">

<div class="row">
	<!-- Browsers -->
    
<div class="col-md-12">
<div class="widget">
<!-- Widget title -->
	<div class="widget-head">
		<div class="pull-left">Daftar Ide</div>
		<div class="widget-icons pull-right">
            <a href="index.php?page=ide_add"><i class="icon-plus"></i> Add</a> &nbsp; &nbsp;
             <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
            <a href="#" class="wclose"><i class="icon-remove"></i></a>
        </div>  
		<div class="clearfix"></div>
	</div>
    
	<div class="widget-content referrer">
<!-- Widget content -->

<table width="100%" class="table table-striped table-bordered table-hover">
<tr>
<th width="30" align="center"><center>#</center></th>
<th width="150" align="center">Tanggal</th>
<th align="left">Nama Project</th>
<th width="200" align="left">Nama Tim</th>
<th width="100" align="center"><div style="text-align:center">Action</div></th>
</tr>
<?php
$sql_pk_row = "
select a.*, b.*,
c.nm_tim
from tbl_ide a
join tbl_project b on a.id_project=b.id_project
join tbl_creator c on a.id_creator=c.id_creator
";
$q_pk_row = mysqli_query($conn, $sql_pk_row) or die("Error Executing The Data(s)");
$count_pk_row = mysqli_num_rows($q_pk_row);													

if($count_pk_row > 0){
	$no=0;
while($data_row = mysqli_fetch_array($q_pk_row)){
	$no++;
?>
<tr>
<td width="30" align="center"><?php echo $no; ?>
<td width="150" align="center"><div style="text-align:center"><?php echo date("d M Y",strtotime($data_row['tgl_ide']));?></div></td>
<td><?php echo $data_row['nm_project']; ?></td>
<td width="200"><?php echo $data_row['nm_tim']; ?></td>
<td width="100" align="center">
  <a href="index.php?page=ide_detail&id=<?php echo $data_row['id_ide']; ?>" class="btn btn-xs btn-primary"><i class="icon-search"></i></a> 
  <a href="index.php?page=ide_edit&id=<?php echo $data_row['id_ide']; ?>" class="btn btn-xs btn-warning"><i class="icon-pencil"></i></a> 
  <a class="btn btn-xs btn-danger" Onclick="ConfirmDelete('<?php echo $data_row['id_ide']; ?>')"><i class="icon-remove"></i></a></td>
</tr> 
<?php
}
}
?>
</table>

    <div class="widget-foot">
    </div>
    </div>
</div>
</div> 
            
            
                     
</div>
</div>
</div>

<!-- Matter ends -->