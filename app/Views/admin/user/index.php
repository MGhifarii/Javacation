<p>
	<button class="btn btn-success btn-lg" >
	<a href="<?php echo base_url('admin/user/tambah') ?>">
		Tambah User
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
			<th width="10%">Nama</th>
			<th width="10%">Email</th>
			<th width="10%">Username</th>
			<th width="10%">Level</th>
			<th width="10%">Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; foreach($user as $user) { ?>
		<tr>
			<center>
			<td class="text-center"><?php echo $no ?></td>
			<td><?php echo $user['nama'] ?></td>
			<td><?php echo $user['email'] ?></td>
			<td><?php echo $user['username'] ?></td>
			<td><?php echo $user['akses_level'] ?></td>
			<td>
			</center>
				<button class="btn btn-warning btn-sm"><a href="<?php echo base_url('admin/user/edit/'.$user['id_user']) ?>">
					Edit
				</a></button>
				<button class="btn btn-danger btn-sm">
				<a href="<?php echo base_url('admin/user/delete/'.$user['id_user']) ?>" onclick="return confirm('Yakin ingin menghapus user ini?')">
					Hapus
				</a>
				</button>
			</td>
		</tr>
		<?php $no++; } ?>
	</tbody>
</table>