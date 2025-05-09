<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="/aset/img/Udakost/transparent-udakost/Vertical-Uda Kost Logo.png">
        <title>Dokumen</title>
        
        <style>
            body {
                text-align: center;
            }

            table {
                border-collapse: collapse;
                width: 100%;
            }

            td {
                border: 1px solid black;
                padding: 5px;
            }

            thead {
                background-color: #d3d3d3;
            }
        </style>
    </head>

    <body>
        <h2>Laporan Kos</h2>
        <table class="table mt-3">
            <thead class="">
                <tr>
                    <td>No.</td>
                    <td>Penyewa</td>
                    <td>Kamar</td>
                    <td>Tanggal Bayar</td>
                    <td>Harga</td>
                    <td>Status</td>
                </tr>
            </thead>

            @foreach ($kontrak as $k)
            <tbody class="">
                <tr class="table-striped">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $k->penyewa->nama }}</td>
                    <td>{{ $k->kamar->nama }}</td>
                    <td>{{ $k->tgl_bayar }}</td>
                    <td>Rp {{ $k->kamar->harga }}</td>
                    <td
                        style="{{ $k->status === 'sudah lunas' ? 'color:green' : 'color:red'}}">
                        {{ $k->status }}
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </body>
</html>
