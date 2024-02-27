<?php
include 'koneksi.php';

$total_quantity = 0;

if (isset($_POST['order-btn'])) {

    $nama = $_POST['nama'];
    $notelp = $_POST['no_telp'];
    $tanggal = $_POST['tanggal'];
    $alamat = $_POST['alamat'];
    $message = $_POST['message'];

    $cart_query = mysqli_query($koneksi, "SELECT * FROM `cart`");
    $price_total = 0;
    $total_products = array(); // Inisialisasi array di sini

    if (mysqli_num_rows($cart_query) > 0) {
        while ($product_item = mysqli_fetch_assoc($cart_query)) {
            $product_name = $product_item['name'];
            $quantity = $product_item['quantity'];
            $product_price = ($product_item['price'] * $product_item['quantity']);
            $price_total += $product_price;


            // Tambahkan setiap produk ke dalam array
            $total_products[] = $product_name . '(' . $quantity . ')';
        }
    }

    // Gabungkan hasil format menjadi satu string dengan pemisah koma
    $total_product = implode(', ', $total_products);

    $detail_query = mysqli_query($koneksi, "INSERT INTO `transaksi`(pesanan, nama, no_telp, alamat, tanggal, message, total_harga) VALUES ('$total_product', '$nama', '$notelp', '$alamat', '$tanggal', '$message', '$price_total')") or die('query failed');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="checkout.css">
</head>

<body>
    <div class="container">
        <div class="checkoutLayout">


            <div class="returnCart">
                <a href="index.php" class="btn">Keep shopping</a>
                <h1>List Product in Cart</h1>
                <?php
                include 'koneksi.php';
                $data = mysqli_query($koneksi, "select * from cart");
                $cek2 = mysqli_num_rows($data);
                $total = 0;
                $grand_total = 0;
                $counter = 1;


                if ($cek2 > 0) {
                    while ($d = mysqli_fetch_assoc($data)) {
                        $id = $d['id'];
                        $nama = $d['name'];
                        $harga = $d['price'];
                        $gambar = $d['image'];
                        $quantity = $d['quantity'];
                        $total_price = ($d['price'] * $d['quantity']);
                        $total_quantity += $quantity;
                        $grand_total = $total += $total_price;

                ?>

                        <div class="list">

                            <div class="item">
                                <img width="110rem" height="auto" src="admin/gambar_menu/<?php echo $gambar ?>">
                                <div class="info">
                                    <div class="name" style="margin-left: 1.5rem;"><?php echo $nama ?></div>
                                    <div class="price" style="margin-left: 1.5rem;">Rp. <?php echo number_format($harga) ?>/<?php echo $quantity ?> product</div>
                                </div>
                                <div class="quantity"><?php echo $quantity ?></div>
                                <div class="returnPrice"><?php echo number_format($total_price) ?></div>
                            </div>

                        </div>
                <?php
                    }
                }
                ?>
            </div>



            <div class="right">
                <h1>Checkout</h1>
                <form action="send.php" method="post" target="blank_target">

                    <div class="form">
                        <div class="group">
                            <label for="name">Full Name</label>
                            <input type="text" name="nama" id="name" required>
                        </div>

                        <div class="group">
                            <label for="phone">Phone Number</label>
                            <input type="text" name="no_telp" id="phone" required>
                        </div>

                        <div class="group">
                            <label for="address">Address</label>
                            <input type="text" name="alamat" id="address" required>
                        </div>

                        <div class="group">
                            <label for="date">Date</label>
                            <input type="datetime-local" name="tanggal" required>
                        </div>

                        <div class="group">
                            <label for="city">Message</label>
                            <input type="text" name="message" required>
                        </div>
                    </div>
                    <div class="return">
                        <div class="row">
                            <div>Total Quantity</div>
                            <div class="totalQuantity"><?php echo $total_quantity ?></div>
                        </div>
                        <div class="row">
                            <div>Total Price</div>
                            <div class="totalPrice"><?php echo number_format($grand_total) ?></div>
                        </div>
                    </div>
                    <input type="hidden" name="noWa" value="62882001743703">
                    <button class="buttonCheckout" type="submit" name="submit">CHECKOUT</button>
                </form>
            </div>
        </div>
    </div>


    <script src="checkout.js"></script>

</body>

</html>