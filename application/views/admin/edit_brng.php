<div class="page-header">
  <h3>Edit Barang</h3>
</div>
<?php foreach ($barang as $b){ ?>
<form action="<?php echo base_url().'admin/update_barang' ?>" method="post" enctype="multipart/form-data">    
  <div class="form-group">
    <label>Nama Barang</label>
    <input type="hidden" name="id_brng" value="<?php echo $b->id_brng; ?>">
    <input type="text" name="nm_brng" class="form-control" value="<?php echo $b->nm_brng; ?>">
    <?php echo form_error('nama_barang'); ?>
  </div>
  <div class="form-group">
    <label>Harga</label>
    <input type="text" name="hrg" class="form-control" value="<?php echo $b->hrg; ?>">
    <?php echo form_error('harga'); ?>
  </div>
  <div class="form-group">
    <input type="submit" value="Update" class="btn btn-primary">
		<input type="button" value="Kembali" class="btn btn-danger" onclick="window.history.go(-1)">
  </div>
  </form>
  <?php } ?>
