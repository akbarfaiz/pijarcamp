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
    <div class="text-center">
      <button onclick="location.href='<?php echo base_url('Home/tambah');?>'" type="button">Tambah Produk</button>  
    </div>
    <div class="site-container">
        <div class="col-md-6 m-auto text-center">
            <h1><b>Daftar Produk</b></h1>
        </div>
        <div class="row article-container">
            <?php
            foreach ($data as $produk) {
            ?>
            <article class="col-3 article-card">
                <div class="article-content">
                    <h3 class="card-title"><?php echo $produk['nama_produk'] ?></h3>
                    <p class="card-excerpt"><?php echo $produk['keterangan']?></p>
                    <p class="card-excerpt">Harga : Rp <?php echo $produk['harga']?></p>
                    <p class="card-excerpt">Jumlah : <?php echo $produk['jumlah']?></p>
                    <div class="row">
                      <div class="col-2 icon-box-link"><a href="<?php echo base_url('Home/edit'). '/' . $produk['id_produk'];?>">Edit</a></div>
                      <div class="col-2 icon-box-link"><a href="<?php echo base_url('Home/data_delete'). '/' . $produk['id_produk'];?>">Hapus</a></div>
                    </div>
                </div>
            </article>
            <?php
                }
            ?>
        </div>
    </div>
  </body>
</html>