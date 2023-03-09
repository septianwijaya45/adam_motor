<!DOCTYPE html>
<html lang="en"><style>
            #table {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            #table td, #table th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #table tr:nth-child(even){background-color: #f2f2f2;}

            #table tr:hover {background-color: #ddd;}

            #table th {
                padding-top: 10px;
                padding-bottom: 10px;
                text-align: left;
                background-color: #4CAF50;
                color: white;
            }
        </style><head>
<style>
</style>
</head><body>
        <div style="text-align: center;">
            <h3> Laporan Return barang</h3>
        </div>
        <br><br><br>
        <table id="table">
            <thead>
                <tr>
                    <th>Nama Pembeli</th>
                    <th>Nama Barang</th>
                    <th>Status Return</th>
                    <th>Tanggal Return</th>
                    <th>Total Uang</th>
                    <th>Total QTY</th>
                </tr>
            </thead>
            <tbody>
                <tr style="border: none">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><?= $data['nama_pembeli'] ?></td>
                    <td><?= $data['nama_menu'] ?></td>
                    <td><?= $data['status_return'] ?></td>
                    <td><?= $data['tgl_return'] ?></td>
                    <td><?= $data['total_uang'] ? $data['total_uang'] : '-' ?></td>
                    <td><?= $data['qty'] ? $data['qty'] : '-' ?></td>
                </tr>
            </tbody>
        </table>

        <br><br><br><br><br>
        <div style="text-align: right; margin-right: 50px">
            <p>Pembuat Laporan</p>
            <br><br><br>
            <p><?= $data['nama_user'] ?></p>
        </div>
</body></html>