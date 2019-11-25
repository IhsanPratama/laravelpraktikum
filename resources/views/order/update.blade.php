<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data</title>
</head>
<body>
    <h1>Edit Data Mahasiswa</h1>
    <form action="/order/{{$order->id}}/updating" method="post">
        {{csrf_field()}}
        <input type="text" name="kode_transaksi" id="" placeholder="Kode Transaksi.." value="{{$order->kode_transaksi}}"><br>
        <input type="text" name="nama_customer" id="" placeholder="Nama Customer.." value="{{$order->nama_customer}}"><br>
        <input type="text" name="produk" id="" placeholder="Produk.." value="{{$order->produk}}"><br>
        <input type="text" name="total" id="" placeholder="Total.." value="{{$order->total}}"><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>