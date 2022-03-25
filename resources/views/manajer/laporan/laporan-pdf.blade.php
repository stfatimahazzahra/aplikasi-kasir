<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
</head>
<body>
    <h1>Export PDF</h1>
    <table border="1" cellspacing="0" cellpadding="2">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama pelanggan</th>
                <th>Menu</th>
                <th>Jumlah</th>
                <th>Total</th>
                <th>Nama Pegawai</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transaksis as $transaksi)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $transaksi->nama_pelanggan }}</td>
                <td>{{ $transaksi->nama_menu }}</td>
                <td>{{ $transaksi->jumlah }}</td>
                <td>{{ $transaksi->total_harga }}</td>
                <td>{{ $transaksi->nama_pegawai }}</td>
                <td>{{ $transaksi->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>