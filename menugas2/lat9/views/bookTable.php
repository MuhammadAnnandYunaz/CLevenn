<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku | G.211.21.0075</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }
        .container{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .table {
            border: 1px solid #222;
           
        }

        tr th {
            border: 1px solid #222;
            padding: 2px 6px;
            font-size: 16px;
        }

        tr td {
            padding: 2px 6px;
            font-size: 14px;
            border: 1px solid #222;
        }

        h3 {
            text-align: center;
            margin-bottom: 15px;
        }

        p {
            margin-top: 20px;
            text-align: center;
            font-size: 12px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3>PHP MVC - Muh. Annan Yunaz</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Tahun</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    if ($daftar) {
                        foreach ($daftar as $list) { ?>
                            <tr>
                                <td style="text-align: center;"><?= $no++; ?></td>
                                <td><?= $list["judul"]; ?></td>
                                <td><?= $list["pengarang"]; ?></td>
                                <td><?= $list["tahun"]; ?></td>
                            </tr>
                        <?php
                        }
                    } else {
                        ?>
                        <tr>
                            <td colspan="4" style="text-align: center;">
                                Data belum ada
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
    </div>
</body>

</html>