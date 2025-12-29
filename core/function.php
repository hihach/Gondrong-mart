<?php

function url($name, $type = 'page', $params = [])
{
    $base = "index.php?$type=$name";

    if (!empty ($params)){
        $base .= '&' . http_build_query($params);
    }

    return $base;
}


function simpan($data, $conn)
{
    $nama = $data['nama_produk'];
    $stok = $data['stok'];
    $harga = $data['harga'];
    $sql = "insert into produk (nama_produk, stok, harga) values ('$nama', $stok, $harga)";
    mysqli_query($conn, $sql);
}

function update($data, $conn)
{
    $id = $data['id_produk'];
    $nama = $data ['nama_produk'];
    $stok = $data['stok'];
    $harga = $data['harga'];
    $sql = "update produk set nama_produk = '$nama', stok = $stok, harga = $harga where id_produk = $id";
    mysqli_query($conn, $sql);
}
