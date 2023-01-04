<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!--My CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."/style.css" ?>">
    <script src="<?php echo base_url()."/script.js"?>"></script>
    
    <title>Produk Pijar Camp</title>
  </head>
  <body>
    <div class="col-md-6 m-auto text-center">
      <h1 style="margin: 30px; 0"><b>Daftar Produk</b></h1>
    </div>
    <div>
        <?php
        foreach ($data as $produk) {
        ?>
        <form action="<?php echo base_url('Home/data_edit')?>" method="post" enctype="multipart/form-data">
            <textarea hidden name="id"><?php echo $produk['id_produk']?></textarea>
            <div class="form-group">
                <label>Nama Produk</label>
                <textarea type="text" class="form-control" placeholder="Tulis Nama Produk" name="nama"><?php echo $produk['nama_produk']?></textarea>
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <textarea type="text" class="form-control" placeholder="Deskripsi Produk" name="keterangan" style="resize:none; height:200px;"><?php echo $produk['keterangan']?></textarea>
            </div>
            <div class="form-group">
                <label>Harga Produk</label>
                <textarea type="text" class="form-control" placeholder="Tulis Harga Produk" name="harga"><?php echo $produk['harga']?></textarea>
            </div>
            <div class="form-group">
                <label>Jumlah Produk</label>
                <textarea type="text" class="form-control" placeholder="Tulis Jumlah Produk" name="jumlah"><?php echo $produk['jumlah']?></textarea>
            </div>
            <div class="text-center">
              <button type="submit">Submit</button>
            </div>
        </form>
        <?php
        }
        ?>
    </div>
  </body>
</html>