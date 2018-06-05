<div class="col-md-10">
	<div class="row">
		<div class="col-md-12">
			<div class="content-box-header">
				<div class="panel-title">Master Jenis Reklame</div>
			<div class="panel-options">
				<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
				<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
			</div>
  		</div>
  		<div class="content-box-large box-with-header">
	  		<form id="master_bb_type">
	  			<fieldset>
	  				<div class="form-group">
	  					<label>Kode Jenis Reklame</label>
	  					<input class="form-control" type="text" name="bbtype_code" placeholder="Kode Jenis Reklame">
	  				</div>
	  				<div class="form-group">
	  					<label>Nama Jenis Reklame</label>
	  					<input class="form-control" type="text" name="bbtype_name" placeholder="Nama Jenis Reklame">
	  				</div>
	  				<div class="form-group">
	  					<label>Info Jenis Reklame</label>
	  					<textarea class="form-control" type="text" name="bbtype_info" placeholder="Info Jenis Reklame" rows="3"></textarea>
	  				</div>
	  			</fieldset>
	  			<div>						  				
	  				<button type="button" class="btn btn-primary" onclick="simpan()">Simpan</button>
	  			</div>
	  		</form>
		</div>
		</div>
	</div>
</div>

<script>
function simpan()
        {            
            $.ajax({
                url : "<?php echo site_url('Master/Tambah_jenis_BB')?>",
                type: "POST",
                data: $('#master_bb_type').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        alert('Data Berhasil Disimpan');    
                        $('[name="bbtype_code"]').val("");
                        $('[name="bbtype_name"]').val("");  
                        $('[name="bbtype_info"]').val("");                
                    }                   
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }
</script>