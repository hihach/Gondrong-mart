<div class="container">
    <div class="header-row">
        <div class="header-back">
            <a href="javascript:history.back()" class="back-btn"><i class="bi bi-arrow-left"></i></a>
            <div class="header-text">
                <h2>Tambah Produk</h2>
                <p class="subtitle">Isi formulir berikut untuk menambahkan produk baru.</p>
            </div>
        </div>
    </div>
</div>

<!-- form -->
<div class="swing-in-top-fwd">
    <div class="form-card">

        <form method="POST" action="<?= url('simpan', 'action')?>">
            <div class="form-group full">
                <label>Nama Barang</label>
                <input type="text" name="produk[nama_produk]">
            </div>

            <div class="form-group">
                <label>Stok</label>
                <input type="number" name="produk[stok]">
            </div>

            <div class="form-group">
                <label>Harga</label>
                <input type="number" name="produk[harga]">
            </div>

            <div class="btn-row">
                <button type="submit" class="btn-primary"> <i class="bi bi-bookmark-fill"></i>&nbsp; Simpan</button>
                <button type="button" class="btn-danger"><i class="bi bi-x-circle-fill"></i>&nbsp; Batal</button>
            </div>
        </form>


    </div>

</div>
