<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Order</title>
</head>
<body>
    <h1>Data Order</h1>
    @if(session('Success'))
        <p>{{session('Success')}}</p>
    @endif
    <a href="/order/create">Tambah Data</a><br><br>
    <form action="/order" method="get">
        <input type="text" name="cari" placeholder="Masukkan nama customer..">
        <button type="submit">Cari</button>
    </form>
    <table cellpadding=5>
        <tr>
            <th>Kode Transaksi</th>
            <th>Nama Customer</th>
            <th>Produk</th>
            <th>Total</th>
            <th>Aksi</th>
        </tr>
        @foreach ($order as $ord)
            <tr>
                <td>{{$ord->kode_transaksi}}</td>
                <td>{{$ord->nama_customer}}</td>
                <td>{{$ord->produk}}</td>
                <td>{{$ord->total}}</td>
                <td>
                    <a href="/order/{{$ord->id}}/update">Update</a>
                <a href="/order/{{$ord->id}}/delete" onclick="return confirm('Yakin menghapus Transaksi {{$ord->kode_transaksi}} atas nama {{$ord->nama_customer}}?')">Delete</a>
                </td>
            </tr>
        @endforeach
        
    </table>
    {{$order->links()}}
</body>
</html>
