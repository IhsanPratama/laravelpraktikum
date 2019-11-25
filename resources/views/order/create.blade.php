<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="/order/creating" method="post">
        {{csrf_field()}}
        <input type="text" name="kode_transaksi" id="" placeholder="Kode Transaksi.."><br>
        <input type="text" name="nama_customer" id="" placeholder="Nama Customer.."><br>
        <input type="text" name="produk" id="" placeholder="Produk.."><br>
        <input type="text" name="total" id="" placeholder="Total.."><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>