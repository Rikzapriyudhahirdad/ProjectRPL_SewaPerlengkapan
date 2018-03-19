<html>
<head>
    <title><?php echo $judul; ?></title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
<body>
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
<h1 >Products Table</h1>
    <table  id="barang" class="table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th>id_barang</th>
            <th>nama</th>
            <th>deskripsi</th>
            <th>harga</th>
            <th>gambar</th>
            <th>stok</th>
            <th>  <?php echo '<a class="btn btn-primary btn-sm" href="'.base_url().'index.php/controller_barang/barang">Tambah Barang</a>'?> </th>

        </tr>
    </thead>
    <tbody>
            <?php
            foreach($daftar_barang as $barang){
            ?>

        <tr>
            <td><?php echo $barang->id_barang; ?></td>
            <td><?php echo $barang->nama; ?></td>
            <td><?php echo $barang->deskripsi; ?></td>
            <td><?php echo $barang->harga; ?></td>
            <td><?php echo $barang->gambar; ?></td>
            <td><?php echo $barang->stok; ?></td>
            <td>
    <?php echo '<a class="btn btn-primary btn-sm" href="'.base_url().'/controller_barang/edit_barang/'.$barang->id_barang.'">Edit</a>'?>
                <?php echo '<a class="btn btn-danger btn-sm" href="'.base_url().'/controller_barang/delete_barang/'.$barang->id_barang.'" onclick="return confirm(\'Anda yakin akan menghapus '.$barang->nama.'?\')">Delete</a>'?>
            </td>
        </tr>
           <?php } ?>
    </tbody>
    <tfoot>

    </tfoot>
    </table>
</div>
</div>
</body>
<script>$(document).ready(function(){
    $('#barang').DataTable();
});</script>
</html>
