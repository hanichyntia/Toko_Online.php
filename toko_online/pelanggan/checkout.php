<?php
session_start();
include "../header.php";
include "../koneksi.php"; // Make sure to include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you have a form submission for the checkout process
    // You may want to perform further validation and sanitization here

    // Example: Insert order details into the database
    $user_id = $_SESSION['id_user']; // Assuming you have set 'id_user' during login

    // Insert order information into the 'transaksi' table
    $insert_order_query = "INSERT INTO transaksi (id_user, tgl_transaksi) VALUES ('$user_id', NOW())";
    mysqli_query($conn, $insert_order_query);

    $order_id = mysqli_insert_id($conn);

    // Insert each item in the cart into the 'detail_transaksi' table
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key_produk => $val_produk) {
            $product_id = $val_produk['id_produk'];
            $quantity = $val_produk['qty'];
            $subtotal = $val_produk['harga'] * $quantity;

            $insert_item_query = "INSERT INTO detail_transaksi (id_transaksi, id_produk, qty, subtotal) VALUES ('$order_id', '$product_id', '$quantity', '$subtotal')";
            mysqli_query($conn, $insert_item_query);
        }

        // Clear the cart after successful checkout
        unset($_SESSION['cart']);

        echo '<script>alert("Checkout successful");location.href="success.php"</script>';
    } else {
        echo '<script>alert("Keranjang belanja kosong");location.href="keranjang.php"</script>';
    }
} else {
    // Display the cart contents if accessed directly without form submission
    // You may want to add additional handling or redirection here
    echo "Invalid access to checkout.php";
}

include "../footer.php";
?>
