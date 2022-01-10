<?php
$id = $_GET['id'] != null ? $_GET['id'] : "";
$sql_cek = "
select * from tbl_creator where id_creator = '$id'
";
$q_cek = mysqli_query($conn, $sql_cek) or die("Error Executing The Data(s)");
$count_cek = mysqli_num_rows($q_cek);													
$data_row_cek = mysqli_fetch_array($q_cek);
?>
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
                  <div class="pull-left">Detail Creator</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>
                  <div class="clearfix"></div>
                </div>

                <div class="widget-content">
                  <div class="padd">
                  <div class="form-group">
                        <div class="col-lg-12">    
                            <table width="100%" border="0" cellspacing="2" cellpadding="2" class="table">
                              <tr>
                                <td width="130">Nama Tim
                                  <input type="hidden" class="form-control" name="id_user" id="id_user" value="<?php echo $login_id; ?>" readonly="readonly" />
                                  <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id; ?>" readonly="readonly" /></td>
                                <td width="5">:</td>
                                <td><input type="text" class="form-control" name="nm_tim" id="nm_tim" value="<?php echo $data_row_cek['nm_tim']; ?>" readonly="readonly"  />
                                </td>
                                </tr>
                              </table>
                        </div>
                    </div>
       
                                
                                    <hr />
                                
<div class="form-group">
<div id="message"></div>
    <div class="col-lg-12">  
    <table width="100%" border="0" cellspacing="2" cellpadding="2" class="table">
  <tr>
    <td width="130">Nama Creator</td>
    <td width="5">:</td>
    <td>
    <div class="col-md-8" style="margin-left:-15px;">
    <input type="text" class="form-control" name="nm_creator" id="nm_creator" />
      </div>
      <div class="col-md-2" style="margin-left:-25px;">
      <button type="button" class="btn btn-success" onclick="addNew()"><i class="fa fa-plus"></i> Add</button>
      </div>
      </td>
  </tr>
  
  

  
</table>
<div id="loadPage">
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="table table-striped" id="example">
<thead class="text-primary">
  <tr>
    <th width="70"><div style="text-align:center">No.</div></th>
    <th><div style="text-align:left">Nama Creator</div></th>
    <th width="70" align="center"><div style="text-align:center">Action</div></th>
  </tr>
</thead>
<?php
$sql_pk_row = "
select *
from  tbl_creator_dtl 
where id_creator = '$id'
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
  <td width="70" align="center">
  <div class='btn-group btn-group-sm'>
    <a class="btn btn-danger btn-sm" Onclick="ConfirmDelete('<?php echo $data_row['id_creator_dtl']; ?>')">Delete</a>
    
    </div>
</td>
</tr> 
<?php
}
?>
<?php
}
?>
</table>
    </div>
</div>   
</div>                                
                                
                                
                                
                                
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

<script type="text/javascript">
	function ConfirmDelete(id)
	{
	  var x = confirm("Are you sure you want to delete?");
	  if (x){	
		  $.ajax({
				type: "GET",
				url: "creator/delete_new.php",
				data: {
					id : id
				},
				cache: false,
				success : function(result){
					document.location.reload();
					//$("#loadPage").load('barang_keluar/add_dtl.php?no_faktur='+ no_faktur);
				}
			});
	  }else{
		return false;
	  }
	}
</script>
<script type="text/javascript">
	function addNew()
	{
		var dt_id = $('#id').val();
		var dt_nm_creator = $('#nm_creator').val();
		
	 	$.ajax({
			type: "POST",
			url: "creator/add_new.php",
			data: {
				id : dt_id,
				nm_creator : dt_nm_creator
			},
			cache: false,
			success : function(result){
				$("#message").html(result);
				/*
				console.log(result.trim);
				
				if(result.trim != ""){
					alert('Nama Creator sudah tersedia...!');
				}else{
					document.location.reload();
				}
				*/
				
			}
		});
	}
</script>
