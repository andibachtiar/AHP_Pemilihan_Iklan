<?php
$id = $_GET['id'] != null ? $_GET['id'] : "";
$sql_cek = "
select a.*, b.*,
c.nm_tim
from tbl_ide a
join tbl_project b on a.id_project=b.id_project
join tbl_creator c on a.id_creator=c.id_creator
where id_ide = '$id'
";
$q_cek = mysqli_query($conn, $sql_cek) or die("Error Executing The Data(s)");
$count_cek = mysqli_num_rows($q_cek);													
$data_row_cek = mysqli_fetch_array($q_cek);
?>
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
<div class="widget wgreen">
                
                <div class="widget-head">
                  <div class="pull-left">Detail Ide</div>
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
                        </div>
                    </div>
       
                  </div>
                </div>
                <hr  />
                
                <div class="widget-head">
                  <div class="pull-left">Detail Creator</div>
                  <div class="clearfix"></div>
                </div>
                
                <div class="widget-content">
                  <div class="padd">
                  <div class="form-group">
                        <div class="col-lg-12">    
                            <table width="100%" class="table table-striped table-bordered table-hover">
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
