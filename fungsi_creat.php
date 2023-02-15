<?php

    include "conecton.php";
    $name = $_POST['name'];
    $jumlah = $_POST['jumlah'];
    $kategori = $_POST['kategori'];
    $keterangan = $_POST['keterangan'];

    global $host;
    mysqli_query($con,"INSERT INTO barang VALUE('', '$name', '$jumlah', '$kategori','$keterangan')");

    header("location:index.php");

?>