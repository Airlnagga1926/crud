

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<body>
    <h1 style="text-align: center; font-family: sans-serif;">Data Table</h1>
    <br><br>
    <a class="inpo" href="creat.php"><button>Tambah</button></a>
    <br></br>
    <table border="2">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>Jumlah</th>
                    <th>Kategori</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="a">
                <?php
                    include "conection.php";
                    global $host;
                    // LEFT JOIN kategori ON kategori.id=barang.id ORDER BY barang.nama
                    $query = mysqli_query($host,"SELECT * FROM barang");
                    $no = 1;
                    while($data = mysqli_fetch_assoc($query)){
                    ?>
                <tr>
                    <th><?php echo $no++ ?></th>
                    <th><?php echo $data['nama']; ?> </th>
                    <th><?php echo $data['jumlah']; ?> </th>
                    <th><?php echo $data['id_jkategori']; ?> </th>
                    <th><?php echo $data['keterangan']; ?> </th>
                    <th><a href="edit.php?id=<?php echo $data['id'] ?>"><button class="edit">Edit</button></a>
                    <a href="delete.php?id=<?php echo $data['id'] ?>"><button class="hapus">Hapus</button></a>
                    </th>
                </tr>
                   <?php } ?>
            </tbody>
    </table>
</body>
</html>

<style>
    table {
        width: 80%;
        margin: auto;
    }
    thead {
        background-color:gray ;
        color: white;
    }
    .hapus {
        background-color: red;
        color: white;
        border-radius: 0%;
        border: none;
    }
    .edit {
        margin: 0em 1em 0em 0em ;
        background-color: orange;
        color: white;
        border: none;
    }
    .a {
        background-color: silver;
    }
    .inpo {
        padding-left: 79%;
    }
</style>