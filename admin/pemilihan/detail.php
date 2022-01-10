<?php
$id = $_GET['id'] != null ? $_GET['id'] : "";
$sql_cek = "
select *
from tbl_project 
where id_project = '$id'
";
$q_cek = mysqli_query($conn, $sql_cek) or die("Error Executing The Data(s)");
$count_cek = mysqli_num_rows($q_cek);													
$data_row_cek = mysqli_fetch_array($q_cek);
?>
<div class="page-head">
<h2 class="pull-left"><i class="fa fa-search"></i> Pemilihan</h2>

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
                  <div class="pull-left">Detail Project</div>
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
                                <td width="130">Nama Client</td>
                                <td width="5">:</td>
                                <td><?php echo $data_row_cek['nm_client']; ?>
                                </td>
                                </tr>
                                <tr>
                                <td width="130">Keterangan</td>
                                <td width="5">:</td>
                                <td><?php echo $data_row_cek['keterangan_project']; ?>
                                </td>
                                </tr>
                              </table>
                        </div>
                    </div>
       
                  </div>
                </div>
                <hr  />
<form id="form_reg" name="form_reg" action="pemilihan/save_post.php" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">                
 <input type="hidden" name="id_project" id="id_project" value="<?php echo $id; ?>">
                <div class="widget-head">
                  <div class="pull-left">Daftar Ide</div>
                  <div class="widget-icons pull-right">
                  	<button type="submit" class="btn btn-xl" ><i class="fa fa-save" style="font-size:23px"></i></button>
                  </div>
                  <div class="clearfix"></div>
                </div>
                
                <div class="widget-content">
                  <div class="padd">
                        <div class="col-lg-12">    

                            <table width="100%" class="table table-bordered">
<thead>
  <tr>
    <th width="20"><div style="text-align:center">No.</div></th>
    <th width="100" align="center"><div style="text-align:center">Tanggal</div></th>
    <th><div style="text-align:left">Nama Tim</div></th>
    <th colspan="2"><div style="text-align:left">Talent</div></th>
    <th colspan="2"><div style="text-align:left">Wardrop</div></th>
    <th colspan="2"><div style="text-align:left">Lokasi</div></th>
    <th colspan="2"><div style="text-align:left">Tempat</div></th>
    <th colspan="2"><div style="text-align:left">Brodcase</div></th>
    <th colspan="2"><div style="text-align:left">Durasi</div></th>
    </tr>
</thead>
<?php
$sql_pk_row = "
select a.*, b.*, c.nm_tim
from  tbl_ide a
join tbl_project b on a.id_project=b.id_project
join tbl_creator c on a.id_creator=c.id_creator
where a.id_project = '$data_row_cek[id_project]'
order by a.id_ide desc
";
$q_pk_row = mysqli_query($conn, $sql_pk_row) or die("Error Executing The Data(sxc)");
$count_pk_row = mysqli_num_rows($q_pk_row);													

if($count_pk_row > 0){
	$nomor = 0 ;
while($data_row = mysqli_fetch_array($q_pk_row)){
	$nomor++;
?>
<tr>
  <td width="20"><div style="text-align:center"><?php echo $nomor; ?></div></td>
  <td width="100" align="center"><div style="text-align:center"><?php echo date("d M Y",strtotime($data_row['tgl_ide']));?></div></td>
  <td><div style="text-align:left"><?php echo $data_row['nm_tim']; ?></div></td>
  <td width="10"><input name="id_ide_talent_<?=($nomor) ?>" type="checkbox" id="id_ide_talent_<?=($nomor) ?>" value="<?php echo $data_row['id_ide'];?>" /></td>
  <td width="100"><div style="text-align:left"><?php echo $data_row['talent']; ?></div></td>
  <td width="10"><input name="id_ide_wardrop_<?=($nomor) ?>" type="checkbox" id="id_ide_wardrop_<?=($nomor) ?>" value="<?php echo $data_row['id_ide'];?>" /></td>
  <td width="100"><div style="text-align:left"><?php echo $data_row['wardrop']; ?></div></td>
  <td width="10"><input name="id_ide_lokasi_<?=($nomor) ?>" type="checkbox" id="id_ide_lokasi_<?=($nomor) ?>" value="<?php echo $data_row['id_ide'];?>" /></td>
  <td width="100"><div style="text-align:left"><?php echo $data_row['lokasi']; ?></div></td>
  <td width="10"><input name="id_ide_tempat_<?=($nomor) ?>" type="checkbox" id="id_ide_tempat_<?=($nomor) ?>" value="<?php echo $data_row['id_ide'];?>" /></td>
  <td width="100"><div style="text-align:left"><?php echo $data_row['tempat']; ?></div></td>
  <td width="10"><input name="id_ide_brodcase_<?=($nomor) ?>" type="checkbox" id="id_ide_brodcase_<?=($nomor) ?>" value="<?php echo $data_row['id_ide'];?>" /></td>
  <td width="100"><div style="text-align:left"><?php echo $data_row['brodcase']; ?></div></td>
  <td width="10"><input name="chkBox[]" type="hidden" class="tombol" value="<?=($nomor) ?>" />
    <input name="id_ide_durasi_<?=($nomor) ?>" type="checkbox" id="id_ide_durasi_<?=($nomor) ?>" value="<?php echo $data_row['id_ide'];?>" /></td>
  <td width="100"><div style="text-align:left"><?php echo $data_row['durasi']; ?></div></td>
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
</form>
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
