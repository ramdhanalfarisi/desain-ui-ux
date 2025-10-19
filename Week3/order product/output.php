<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama    = htmlspecialchars($_POST['nama'] ?? '');
    $produk  = htmlspecialchars($_POST['produk'] ?? '');
    $ukuran  = htmlspecialchars($_POST['ukuran'] ?? '');
    $jumlah  = (int) ($_POST['jumlah'] ?? 0);
    $metode  = htmlspecialchars($_POST['Metode'] ?? '');

    echo "<h2>Detail Pesanan Anda</h2>";
    echo "<p><strong>Nama:</strong> $nama</p>";
    echo "<p><strong>Produk:</strong> $produk</p>";
    echo "<p><strong>Ukuran:</strong> $ukuran</p>";
    echo "<p><strong>Jumlah:</strong> $jumlah</p>";
    echo "<p><strong>Metode Pembayaran:</strong> $metode</p>";
} else {
}
?>
