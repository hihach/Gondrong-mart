<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$produk = $_POST['produk'];
simpan($produk, $conn);

header("Location: ". url('home'));
