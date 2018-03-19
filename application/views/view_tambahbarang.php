<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
<style>.
</style>
  </head>
  <body>
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">


<h1>Tambah Barang</h1>
<form action="<?php echo base_url().'controller_barang/simpan_barang'; ?>" method="post">

  <div class="form-group row">
    <label for="Nama" class="col-sm-2 col-form-label">ID Barang :</label>
    <div class="col-sm-10">
      <input type="text" name="id_barang" class="form-control" id="id_barang" placeholder="ID Barang">
    </div>
  </div>
  <div class="form-group row">
    <label for="Nama" class="col-sm-2 col-form-label">Nama Barang :</label>
    <div class="col-sm-10">
      <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
    </div>
  </div>
    <div class="form-group row">
    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi Barang :</label>
    <div class="col-sm-10">
      <input type="text" name="deskripsi" class="form-control" id="barang" placeholder="Deskripsi">
    </div>
  </div>
    <div class="form-group row">
    <label for="harga" class="col-sm-2 col-form-label">Harga Barang :</label>
    <div class="col-sm-10">
      <input type="text" name="harga" class="form-control" id="harga" placeholder="Harga">
    </div>
  </div>
  <div class="form-group row">
    <label for="upload" class="col-sm-2 col-form-label">Upload Gambar :</label>
    <div class="col-sm-10">
      <input type="file" name="gambar" class="form-control" id="upload" placeholder="">
    </div>
  </div>
    <div class="form-group row">
    <label for="stok" class="col-sm-2 col-form-label"> Stok Barang</label>
    <div class="col-sm-10">
      <input type="text" name="stok" class="form-control" id="stok" placeholder="Stok">
    </div>
  </div>
  <div class="col-sm-10-right ">
      <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
    </div>
  </div>
 </form>
      </div>
      <div class="col-md-1"></div>
    </div>

    <script>    <script>$(document).ready(function(){
    $('#barang').DataTable();
});</script>
  </body>

</html>
