<!--script src="../asset/jquery.js"></script>
<!--script language="javascript" src="../js/jquery-1.6.2.min.js"></script>
<!--script language="javascript" src="../js/jquery-ui-1.8.14.custom.min.js"></script!-->
<script type="text/javascript">
	function ConfirmDelete(id)
	{
	  var x = confirm("Are you sure you want to delete?");
	  if (x){	
		  $.ajax({
				type: "GET",
				url: "kriteria/delete.php",
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
<h2 class="pull-left"><i class="icon-gears"></i> Kriteria</h2>

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
		<div class="pull-left">Daftar kriteria</div>
		<div class="widget-icons pull-right">
             <a href="#" ><i class="icon-chevron-up"></i></a> 
            <a href="#" ><i class="icon-remove"></i></a>
        </div>  
		<div class="clearfix"></div>
	</div>
    
	<div class="widget-content referrer">
<!-- Widget content -->

<table width="100%" class="table table-striped table-bordered table-hover">
<tr>
<th width="30" align="center"><center>#</center></th>
<th align="left">Kriteria</th>
<th width="150" align="center"><div style="text-align:center">Created By</div></th>
</tr>
<?php
$sql_pk_row = "
select a.*, b.nm_user
from tbl_kriteria a
join tbl_user b on a.id_user=b.id_user
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
<td><?php echo $data_row['nm_kriteria']; ?></td>
<td width="150" align="center"><?php echo $data_row['nm_user']; ?></td>
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