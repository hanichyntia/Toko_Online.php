<?php 
include "../header.php";
include "../koneksi.php";
$qry_barang=mysqli_query($conn, "select * from produk where id_produk = '".$_GET['id_produk']."'");
$dt_barang=mysqli_fetch_array($qry_barang);
?>

<link rel="stylesheet" href="../style/des.css">
<h1 style="text-align: center;">Descritption</h1><br>
<div class="row">
  <div class="col-md-4">
    <img src="../produk/<?=$dt_barang['foto_produk']?>" class="card-img-top">
  </div>
  <div class="col-md-5">
    <form action="masukkan_keranjang.php?id_produk=<?=$dt_barang['id_produk']?>" method="post">
    <table >
      <thead>
        <tr>
          <td><h2><?=$dt_barang['nama_produk']?></h2><br></td>
        </tr>
        <tr>
          <td><img src="../produk/<?=$dt_barang['foto_produk']?>" width="65px"></td>
        </tr>
        <tr>
          <td><br><p><?=$dt_barang['deskripsi']?></p><br></td>
        </tr>
        <tr>
          <td><span>$<?=$dt_barang['harga']?>.00</span></td>
        </tr>
        <tr>
          <td><br><input class="form-control text-center me-3" id="inputQuantity" type="number" style="max-width: 3rem; border-color: rgb(245, 97, 121)" name="jumlah_pinjam"/></td>
        </tr>
        <tr>
          <td colspan="2"><br><input type="submit" class="button2 btn-sm m-2 py-2" value="Add To Cart" name="Beli"></td>
        </tr>
      </thead>
    </table>
    </form>
  </div>
</div><br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<?php 
include '../footer.php';
?>