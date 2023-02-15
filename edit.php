<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stok Barang</title>
</head>
<body>
<fieldset class="input">
    <h2 style="text-align: center; font-family: sans-serif;">Silahkan isi Form di bawah</h2>
        <form action="POST">
            <label for="name">Nama</label>
            <br>
            <input type="text" id="name" name="name" placeholder="Nama anda" autofocus>
            <br><br>
            <label for="jumlah">jumlah</label>
            <br>
            <input type="number" id="jumlah" value="1" name="jumlah" min="1">
            <br><br>
            <label for="jurusan">Pilih Kategori</label> <br>
            <select id="jurusan">
                <option disabled>Silahkan Pilih</option>
                <option></option>
            </select> <br><br>
            <label for="keterangan">Keterangan</label>
            <br>
            <textarea class="keterangan" id="keterangan" name="keterangan" placeholder="masukan keterangan barang"></textarea>
            <br><br>
            <button class="res" type="reset">Reset</button>
            <button class="sub" type="submit">Simpan</button>
        </form>
</fieldset>
</body>
</html>

<style>

    input {
        width: 100%;
        margin: auto;
        display: inline-block;
        box-sizing: border-box;
    }

    .keterangan {
        resize: none;
        width: 99%;
    }
    .input {
        border-radius: 15px;
        background-color: #f2f2f2;
        padding: 20px;
        width: 25%;
        margin: auto;
        margin-top: 15%;
    }
    .sub {
        background-color: green;
        width: 20%;
        color: white;
    }
    .res {
        background-color: orange;
        width: 20%;
        color: white;
    }
</style>