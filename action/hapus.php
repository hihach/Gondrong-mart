<?php

$id = $_GET['id_produk'] ?? null;

if ($id) {
    $hapus = mysqli_query($conn, "Delete from produk where id_produk = $id");
    header("Location: ". url('home'));
    exit;
} else {
    header("Location: ". url('home'));
    exit;
}
