<?php
    session_start(); 
    include "header.php";
    $subtotal=0;
?>
<br>
<link rel="stylesheet" href="style/des.css">
<h2 align="center" style="color: white; background: rgb(230, 123, 141);" class="py-4">Cart</h2>
<table class="table table-hover striped">
    
    <tbody>
        <?php
        
        if(isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $key_produk => $val_produk): 
                $subtotal += $val_produk['harga'] * $val_produk['qty'];
            ?>
                <tr>
                    <td><?=($key_produk+1)?></td>
                    <td><img src="<?=$val_produk['foto_produk']?>"></td>
                    <td><?=$val_produk['nama_produk']?></td>
                    <td>$<?=$val_produk['harga']?>.00</td>
                    <td><?=$val_produk['qty']?></td>

                    <td><a href="hapus_keranjang.php?id=<?=$key_produk?>" class="btn btn-danger"><strong>X</strong></a></td>
                </tr>
            <?php endforeach;
        } else {
            echo "<tr><td colspan='4'>Keranjang belanja kosong</td></tr>";
        }
        ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3"><strong>Subtotal</strong></td>
            <td colspan="2">$<?= number_format($subtotal, 2) ?></td>
            <td></td>
        </tr>
    </tfoot>
</table>
    <a href="checkout.php" align="right" class="button2 btn-sm m-2 py-2 bg-dark">Change Payment Method</a><br><br><br><br><br><br><br><br><br><br>
<?php 
    include "footer.php";
?>
