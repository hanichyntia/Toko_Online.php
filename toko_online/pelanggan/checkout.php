<?php 
session_start();
include "koneksi.php";
$cart=@$_SESSION['cart'];
if (count($cart)>0) {
  mysqli_query($conn, "insert into transaksi(id_pelanggan, id_petugas, tgl_transaksi) value('".$_SESSION['id_pelanggan']."', '".$_SESSION['id_petugas']."',  '".date('Y-m-d')."')");
  $id=mysqli_insert_id($conn);
  foreach ($cart as $key_product => $val_product) {
    mysqli_query($conn, "insert into detail_transaksi(id_transaksi, id_produk, qty, subtotal) value ('".$id."', '".$val_product['id_buku']."', '".$val_product['qty']."')");
  }
  unset($_SESSION['cart']);
  echo '<script>alert("Anda berhasil meminjam buku");location.href="history_peminjaman.php"</script>';
}
?>