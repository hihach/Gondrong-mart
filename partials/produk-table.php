<div class="wrapper swing-in-top-fwd ">

    <div class="card">
        <div class="top">
            <form action="index.php" method="GET" style="flex-grow: 1; margin-right: 15px;">
                <input type="hidden" name="page" value="home">
                <input
                    type="text"
                    name="cari"
                    class="search-input"
                    placeholder="Cari produk..."
                    value="<?= htmlspecialchars($keyword ?? '') ?>"
                    autocomplete="off"
                    style="width: 100%;" />
            </form>
            <a href="<?= url("add") ?>" class="tambah-btn"><i class="bi bi-plus"></i> Tambah Produk</a>
        </div>

        <div class="table-box">
            <table>
                <thead>
                    <tr>
                        <th style="width: 30px">No</th>
                        <th>Produk</th>
                        <th style="width: 50px">Stok</th>
                        <th>Harga</th>
                        <th>Status</th>
                        <th style="width: 50px">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if ($totalProduk > 0) : ?>
                        <?php $no = 1 ?>
                        <?php while ($row = mysqli_fetch_assoc($query)) : ?>

                            <tr data-id="<?= $row['id_produk'] ?>"
                                data-nama="<?= htmlspecialchars($row['nama_produk']) ?>"
                                data-stok="<?= $row['stok'] ?>"
                                data-harga="<?= $row['harga'] ?>"
                                data-status="<?= $row['stok'] > 0 ? 'Tersedia' : 'Habis' ?>">
                                <td><?= $no++ ?></td>
                                <td class="td-nama"><?= htmlspecialchars($row['nama_produk']) ?></td>
                                <td><?= $row['stok'] ?></td>
                                <td><?= number_format($row['harga'], 0, ',', '.') ?></td>
                                <td><?= $row['stok'] > 0 ? 'Tersedia' : 'Tidak Tersedia' ?></td>
                                <td> <button class="action-btn" onclick="showDropdown(event)"> ⋮ </button></td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else : ?>

                        <tr>
                            <td colspan="6" style="text-align: center; padding: 30px; color: #666;">
                                <i class="bi bi-search" style="font-size: 2rem; display:block; margin-bottom: 10px;"></i>
                                Data tidak ditemukan atau Kosong brok.
                            </td>
                        </tr>

                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
