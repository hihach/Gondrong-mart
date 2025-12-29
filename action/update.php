<?php
$produk = $_POST['produk'];
update($produk, $conn);
header("Location: " . url('home'));
