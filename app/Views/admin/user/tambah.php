

<?php echo form_open(base_url('admin/user/tambah'),' class="form-horizontal"') ?>

<table border="1" width="30%">
  <tr>
    <td>
    <div class="form-group row">
  <label class="col-sm-3 control-label text-right">Nama lengkap<span class="text-danger">*</span></label>
</td>

<td>
  <div class="col-sm-9">
        <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Pengguna" value="<?php echo set_value('nama') ?>">
  </div>
</div>
</td>
</tr>

<tr>
  <td>
  <div class="form-group row">
  <label class="col-sm-3 control-label text-right">Username <span class="text-danger">*</span></label>
</td>
<td>
<div class="col-sm-9">
    <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo set_value('username') ?>">
  </div>
</div>
</td>
  </tr>

<tr>
  <td>
  <div class="form-group row">
  <label class="col-sm-3 control-label text-right">Password <span class="text-danger">*</span></label>
</td>
<td>
  <div class="col-sm-9">
    <input type="text" name="password" class="form-control" placeholder="Password" value="<?php echo set_value('password') ?>">
  </div>
</div>         
</td>
</tr>


<tr>
  <td>
  <div class="form-group row">
  <label class="col-sm-3 control-label text-right">Email <span class="text-danger">*</span></label>
</td>
<td>
  <div class="col-sm-9">
    <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo set_value('email') ?>">
  </div>
</div>
</td>
</tr>     

<tr>
  <td>
  <div class="form-group row">
  <label class="col-sm-3 control-label text-right">Level Hak Akses</label>
</td>
<td>
  <div class="col-sm-9">
    <select name="akses_level" class="form-control">
      <option value="Admin">Admin</option>
      <option value="User">User</option>
    </select>
  </div>
</div>
</td>
</tr>

</table>

<div class="form-group row">
  <label class="col-sm-3 control-label text-right"></label>
  <div class="col-sm-9">
    <div class="btn-group">
        <button type="submit" name="submit" class="btn btn-success btn-lg"><i class="fa fa-save"></i><a>Simpan Data</a></button>
        <button type="reset" name="reset" class="btn btn-info btn-lg"><i class="fa fa-cut"></i><a> Reset</a></button>
        <button class="btn btn-info btn-lg"><i class="fa fa-back"></i><a href="<?php echo base_url('admin/user') ?>"> Kembali</a></button>
    </div>
  </div>
</div>

<?php echo form_close(); ?>