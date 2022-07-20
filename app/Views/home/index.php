	<center>
		<span><strong>Rekomendasi tempat wisata yang ada di pulau jawa</strong></span>
	</center>
	<h1></h1>	
	<hr>
	<br>
<center>
	<table width="50%">
		<tr align="center">
			<td>
<?php $no=1; foreach($berita as $berita) { ?>
	<div class="col-md-4 berita">
		<p class="text-center">
			<img width="100%" height="100%" src="<?php echo base_url('assets/upload/image/'.$berita['gambar']) ?>" class="img img-thumbnail img-fluid">
		</p>
		<h2><a href="<?php echo base_url('home/read/'.$berita['slug_berita']) ?>"><?php echo $berita['judul_berita'] ?></a></h2>
		<p><?php echo strip_tags(character_limiter($berita['isi']),50) ?></p>

		<p class="text-right"><a href="<?php echo base_url('home/read/'.$berita['slug_berita']) ?>">Baca detail...</a></p>
	</div>
	<?php $no++; } ?>
</div>
</td>
</tr>
</table>
</center>