

<form action="<?php echo base_url('admin/berita/edit/'.$berita['id_berita']) ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
<input type="hidden" name="id_berita" value="<?php echo $berita['id_berita'] ?>">

<table border="1" width="80%">
  <tr>
<td>
  <div class="form-group row">
  <label class="col-sm-3 control-label text-right">Judul berita<span class="text-danger">*</span></label>
</td>
<td>
  <div class="col-sm-9">
  <input type="text" name="judul_berita" id="judul_berita" class="form-control" placeholder="Judul Berita" value="<?php echo $berita['judul_berita'] ?>">
  </div>
</div>
</td>  
</tr>

<tr>
<td>
<div class="form-group row">
  <label class="col-sm-3 control-label text-right">Kategori <span class="text-danger">*</span></label>
</td>  
<td>
<div class="col-sm-9">
    <select name="id_kategori" class="form-control">
      <?php foreach ($kategori as $key => $kategori) { ?>
      <option value="<?php echo $kategori['id_kategori'] ?>" <?php if($berita['id_kategori']==$kategori['id_kategori']) { echo "selected"; } ?>>
        <?php echo $kategori['nama_kategori'] ?>
      </option>
      <?php } ?>
    </select>
  </div>
</div>
</td>

</tr>

<tr>
  <td>
  <div class="form-group row">
  <label class="col-sm-3 control-label text-right">Jenis Berita</label>
  </td>
  <td>
   <div class="col-sm-9">
    <select name="jenis_berita" class="form-control">
      <option value="Berita">Berita</option>
      <option value="Profil" <?php if($berita['jenis_berita']=="Profil") { echo "selected"; } ?>>Profil</option>
    </select>
  </div>
</div>
</td>
</tr>

<tr>
  <td>
  <div class="form-group row">
  <label class="col-sm-3 control-label text-right">Jenis Berita</label>
</td>
<td>
<div class="col-sm-9">
    <select name="jenis_berita" class="form-control">
      <option value="Berita">Berita</option>
      <option value="Profil" <?php if($berita['jenis_berita']=="Profil") { echo "selected"; } ?>>Profil</option>
    </select>
  </div>
</div>
</td>
  </tr>


<tr>
  <td>
  <div class="form-group row">
  <label class="col-sm-3 control-label text-right">Status Berita</label>
</td>
<td>
<div class="col-sm-9">
    <select name="status_berita" class="form-control">
      <option value="Publish">Publish</option>
      <option value="Draft" <?php if($berita['status_berita']=="Draft") { echo "selected"; } ?>>Draft</option>
    </select>
  </div>
</div>
</td>
  </tr>


<tr>
  <td>
  <div class="form-group row">
  <label class="col-sm-3 control-label text-right">Isi berita <span class="text-danger">*</span></label>
</td>
<td>
 <div class="col-sm-9">
    <textarea name="isi" class="form-control editor" placeholder="Isi berita"><?php echo $berita['isi']; ?></textarea>
  </div>
</div>         
</td>
 </tr>      

<tr>
  <td>
  <div class="form-group row">
  <label class="col-sm-3 control-label text-right">Keyword untuk Google <span class="text-danger">*</span></label>
 </td>
 <td>
 <div class="col-sm-9">
    <textarea name="keywords" class="form-control" placeholder="Keyword untuk Google"><?php echo $berita['keywords']; ?></textarea>
  </div>
</div>
</td>
 </tr>


<tr>
  <td>
  <div class="form-group row">
  <label class="col-sm-3 control-label text-right">Upload Gambar <span class="text-danger">*</span></label>
</td>
<td>
  <div class="col-sm-9">
    <input type="file" name="gambar" class="form-control" required>
  </div>
</div>
</td>
</tr>



</table>



<div class="form-group row">
  <label class="col-sm-3 control-label text-right"></label>
  <div class="col-sm-9">
    <div class="btn-group">
        <button type="submit" name="submit" class="btn btn-success btn-lg"><i class="fa fa-save"></i> <a> Simpan Data</a></button>
        <button type="reset" name="reset" class="btn btn-info btn-lg"><i class="fa fa-cut"></i><a> Reset</a></button>
        <button class="btn btn-info btn-lg"><a href="<?php echo base_url('admin/berita') ?>">Kembali</a></button>
    </div>
  </div>
</div>

<?php echo form_close(); ?>