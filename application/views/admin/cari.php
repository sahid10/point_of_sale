<div class="page-header">
  <h3>Daftar Barang</h3>
</div>

  <!-- /.blog-main -->

        
    <table class="table table-hover table-bordered">
      <thead>
        <tr  style="text-align: center;font-weight: bold; ">
          <td>No.</td>
          <td>Nama Barang</td>
          <td>Harga</td>
          <td>Pilihan</td>
        </tr>
      </thead>
      <tbody>
       <?php
      $no = 1;
      foreach ($barang as $b) {
      ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $b->nm_brng ?></td>
        <td align="right"><?php echo $b->hrg ?></td>
        <td nowrap="nowrap">
          <a class="btn btn-primary btn-xs" href="<?php echo base_url().'admin/edit_brng/'.$b->id_brng; ?>"><span class="glyphicon glyphicon-zoom-in">Edit</span></a>
          <a class="btn btn-warning btn-xs" href="<?php echo base_url().'admin/hapus_brng/'.$b->id_brng; ?>"><span class="glyphicon glyphicon-remove">Hapus</span></a>
        </td>
        </tr>
         <?php } ?>
        <tr>

        </tr>
     
      </tbody>
    </table>
    