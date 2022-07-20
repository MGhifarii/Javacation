

<?php echo form_open(base_url('admin/kategori/tambah'),' class="form-horizontal"') ?>

<table border="1" >
<tr>
  <td>
  <div class="form-group row">
  <label class="col-sm-3 control-label text-right">Nama Kategori<span class="text-danger">*</span></label>
</td>
<td>
<div class="col-sm-9">
        <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" placeholder="Nama Kategori" value="<?php echo set_value('nama_kategori') ?>">
  </div>
</div>
</td>
  </tr>


<tr>
  <td>
  <div class="form-group row">
  <label class="col-sm-3 control-label text-right">Urutan <span class="text-danger">*</span></label>
</td>

<td>
<div class="col-sm-9">
    <input type="number" name="urutan" class="form-control" placeholder="Urutan" value="<?php echo set_value('urutan') ?>">
  </div>
</div>
</td>
  </tr>


</table>


<div class="form-group row">
  <label class="col-sm-3 control-label text-right"></label>
  <div class="col-sm-9">
    <div class="btn-group">
        <button type="submit" name="submit" class="btn btn-success btn-lg"><i class="fa fa-save"></i> <a>Simpan Data</a></button>
        <button type="reset" name="reset" class="btn btn-info btn-lg"><i class="fa fa-cut"></i> <a>Reset</a></button>
        <button class="btn btn-info btn-lg"><a href="<?php echo base_url('admin/kategori') ?>">Kembali</a></button>
    </div>
  </div>
</div>

<?php echo form_close(); ?>