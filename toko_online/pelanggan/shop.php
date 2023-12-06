<?php 
include "../header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style/styleShop.css">
  <link rel="stylesheet" href="../style/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Shop</title>
</head>
<body>

  <section class="product">
    <div class="container">
      <div class="row py-5 text-center">
        <div class="col-lh-6 m-auto">
         <h1>Our Product</h1>
        </div>
      </div>
      <div class="row py-3">
        <?php 
        include "../koneksi.php";
        $qry_barang=mysqli_query($conn,"select * from produk");
        while ($dt_barang=mysqli_fetch_array($qry_barang)) {
          ?>
        <div class="col-lg-4">
          <div class="card p-2">
            <div class="card-body">
              <img src="../produk/<?=$dt_barang['foto_produk']?>" class="img-fluid pb-3" alt="">
              <h5 class="head1"><?=$dt_barang['nama_produk']?></h5>
              <p class="per1"><?=substr($dt_barang['deskripsi'],0,20)?>...</p>
              <h4 class="head1">$<?=$dt_barang['harga']?></h4>
              <a href="beli_produk.php?id_produk=<?=$dt_barang['id_produk']?>"><button class="button2 btn-sm m-2 py-2">Add to cart</button></a>

            </div>
          </div>
        </div>
        <?php
      }
        ?>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<?php 
include '../footer.php';
?>
</body>
</html>