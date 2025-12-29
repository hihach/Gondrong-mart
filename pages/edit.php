<?php
$id = $_GET['id_produk'];
//cek apakah produknya ada
$sql = mysqli_query($conn, "select * from produk where id_produk = $id");
if (!$sql){
    header("Location: ". url('home'));
    exit;
} else {
    $produk = mysqli_fetch_assoc($sql);
}
?>
<div class="container">
    <div class="header-row">
        <div class="header-back">
            <a href="javascript:history.back()" class="back-btn"><i class="bi bi-arrow-left"></i></a>
            <div class="header-text">
                <h2>Edit Produk</h2>
                <p class="subtitle">Perbarui data produk yang dipilih.</p>
            </div>
        </div>
    </div>
</div>

<!-- form -->
<div class="swing-in-top-fwd">
    <div class="form-card">

        <form method="POST" action="<?=url("update", "action", ["id_produk"=>$produk['id_produk']])?>">
            <input type="hidden" name="produk[id_produk]" value="<?= $produk['id_produk'] ?>">
            <div class="form-group full">
                <label>Nama Barang</label>
                <input type="text" name="produk[nama_produk]" value="<?= $produk['nama_produk'] ?>">
            </div>

            <div class="form-group">
                <label>Stok</label>
                <input type="number" name="produk[stok]" value="<?= $produk['stok'] ?>">
            </div>

            <div class="form-group">
                <label>Harga</label>
                <input type="number" name="produk[harga]" value="<?= $produk['harga'] ?>">
            </div>

            <div class="btn-row">
                <button type="submit" class="btn-primary"><i class="bi bi-arrow-clockwise"></i>&nbsp; Perbarui</button>
                <button type="button" class="btn-danger"><i class="bi bi-x-circle-fill"></i> &nbsp; Batal</button>
            </div>
        </form>

    </div>
</div>
