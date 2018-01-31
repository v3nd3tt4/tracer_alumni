<div class="col-lg-9">

  <div class="panel panel-default">
    <div class="panel-heading">Tracer Alumni</div>
    <div class="panel-body">
      <h3>Silahkan isi form</h3><hr/>
      <form method="POST" action="<?=base_url()?>welcome/simpan_alumni">
      <div class="form-group">
        <label>NPM</label><input type="text" name="npm" id="npm" class="form-control">
      </div>
      <div class="form-group">
        <label>Nama</label><input type="text" name="nama" id="nama" class="form-control">
      </div>
      <div class="form-group">
        <label>Email</label><input type="email" name="email" id="email" class="form-control">
      </div>
      <div class="form-group">
        <label>Foto *type jpg atau png max. 500 kb</label><input type="file" name="foto" id="foto" class="form-control">
      </div>
      <div class="form-group">
        <label>Tempat Lahir</label><input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control">
      </div>
      <div class="form-group">
        <label>Tanggal Lahir</label><input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
      </div>
      <div class="form-group">
        <label>Tahun Lulus</label><input type="text" name="tahun_lulus" id="tahun_lulus" class="form-control">
      </div>
      <div class="form-group">
        <label>Tempat Bekerja</label><input type="text" name="tempat_bekerja" id="tempat_bekerja" class="form-control">
      </div>
      <div class="form-group">
        <label>Alamat Tempat Bekerja</label><textarea name="alamat_kantor" id="alamat_kantor" class="form-control"></textarea>
      </div>
      <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
      </form>
    </div>
  </div>

</div>
<!-- /.col-lg-9 -->