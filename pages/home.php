<?php
//search dan tampilkan produuk
$keyword = $_GET['cari'] ?? null;
if($keyword){
    $safe_keyword = mysqli_real_escape_string($conn, $keyword);
    $sql = "select * from produk where nama_produk like '%$safe_keyword%' order by id_produk desc";
} else {
    $sql = 'select*from produk order by id_produk desc';

}
$query= mysqli_query($conn, $sql);
//hitungtotal
$totalProduk = mysqli_num_rows($query);
?>
<div class="container">
    <div class="header-row">
        <div>
            <h2>Produk</h2>
            <div class="subtitle">
                Mengelola dan memperbarui data produk secara efisien.
            </div>
        </div>

        <div class="total-box">
            <div class="total-label">Total Produk</div>
            <div class="total-number" id="totalProduk"><?= $totalProduk ?></div>
        </div>
    </div>
    <?php include 'partials/produk-table.php' ?>
</div>
