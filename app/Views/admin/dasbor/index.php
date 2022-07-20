<p>
<button class="btn btn-success btn-lg" >	
	<a href="<?php echo base_url('admin/berita/tambah') ?>">
		Tambah Berita
	</a>
</button>
</p>


<?php $session = \Config\Services::session($config);
if($session->getFlashdata('sukses')) { ?>
<p class="alert alert-success"><?php echo $session->getFlashdata('sukses'); ?></p>
<?php } ?>

<table border="1" class="table table-bordered table-hover">
	<thead>
		<tr class="bg-info">
			<th class="text-center" width="5%">NO</th>
			<th width="10%">Gambar</th>
			<th width="20%">Judul</th>
			<th width="10%">Kategori</th>
			<th width="10%">Jenis</th>
			<th width="5%">Status</th>
			<th width="10%">Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; foreach($berita as $berita) { ?>
		<tr>
			<center>
			<td class="text-center"><?php echo $no ?></td>
			<td class="text-center"><img src="<?php echo base_url('assets/upload/image/'.$berita['gambar']) ?>" class="img img-thumbnail" width="80"></td>
			<td><?php echo $berita['judul_berita'] ?></td>
			<td><?php echo $berita['nama_kategori'] ?></td>
			<td><?php echo $berita['jenis_berita'] ?></td>
			<td><?php echo $berita['status_berita'] ?></td>
			<td>
			</center>
				<button class="btn btn-warning btn-sm"><a href="<?php echo base_url('admin/berita/edit/'.$berita['id_berita']) ?>">
					Edit
				</a></button>
				<button class="btn btn-danger btn-sm">
				<a href="<?php echo base_url('admin/berita/delete/'.$berita['id_berita']) ?>" onclick="return confirm('Yakin ingin menghapus berita ini?')">
					Hapus
				</a>
				</button>
			</td>
		</tr>
		<?php $no++; } ?>
	</tbody>
</table>