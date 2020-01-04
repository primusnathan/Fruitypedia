<div class="container">
<h2 class="display-4 title-page">Detail Transaksi <?php echo $id_trans?> </h2>
<hr class="style1">
<?php if($this->session->flashdata('pesan')!=null): ?>
                    <div class= "alert alert-success alert-dismissible fade show" role="alert"><?= $this->session->flashdata('pesan');?> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button></div>
                <?php endif?>
                <?php if($this->session->flashdata('gagal')!=null): ?>
                    <div class= "alert alert-danger alert-dismissible fade show" role="alert"><?= $this->session->flashdata('gagal');?> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button></div>
                <?php endif?>
<div style="overflow-x:auto">
<table class="table table-hover" id="LaporanTabel" style="width:100%;">
			    <thead>
					<tr> 
                        <th>No</th>
					    <th>Produk</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
					</tr>
				</thead>
				<tbody>
        <?php $no=1; ?>
				<?php 
                foreach ($detail as $isi) : ?>
                  <tr>
                    <td>
                      <?= $no++ ?>
                    </td>
                    <td>
                    <img src="<?php echo base_url('assets/images/products-img/'.$isi->gambar_produk);?>" alt="..." style="width:100px;height:100px">
                        <?php echo $isi->nama_produk?>
                    </td>
                    <td>
                        <?php echo $isi->qty?>
                    </td>
                    <td>
                        Rp. <?php echo $isi->total_harga?>
                    </td>
				</tr>
<?php endforeach; ?>
</tbody>
<tfoot>
    <tr>
      <td colspan="3">Total Harga</td>
      <td>Rp. <?php echo $grand_total?></td>
    </tr>
  </tfoot>
        </table>
        </div>
</div>
