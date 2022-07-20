<p>
<button class="btn btn-success btn-lg" >	
	<a href="<?php echo base_url('admin/kategori/tambah') ?>">
		Tambah Berita
	</a>
</button>
</p>

<?php $session = \Config\Services::session($config);
if($session->getFlashdata('sukses')) { ?>
<p class="alert alert-success"><?php echo $session->getFlashdata('sukses'); ?></p>
<?php } ?>

<table  border="1" class="table table-bordered table-hover">
	<thead>
		<tr class="bg-info">
			<th class="text-center" width="5%">NO</th>
			<th width="20%">Nama</th>
			<th width="20%">Slug</th>
			<th width="20%">Urutan</th>
			<th width="15%">Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; foreach($kategori as $kategori) { ?>
		<tr>
			<td class="text-center"><?php echo $no ?></td>
			<td><?php echo $kategori['nama_kategori'] ?></td>
			<td><?php echo $kategori['slug_kategori'] ?></td>
			<td><?php echo $kategori['urutan'] ?></td>
			<td>
				<button class="btn btn-warning btn-sm"><a href="<?php echo base_url('admin/kategori/edit/'.$kategori['id_kategori']) ?>">
					Edit
				</a></button>
				<button class="btn btn-warning btn-sm"><a href="<?php echo base_url('admin/kategori/delete/'.$kategori['id_kategori']) ?>" onclick="return confirm('Yakin ingin menghapus kategori ini?')">
					Hapus
				</a></button>
			</td>
		</tr>
		<?php $no++; } ?>
	</tbody>
</table>