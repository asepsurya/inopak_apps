<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">-->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>-->
  </body>
    <title>Laporan IKM</title>
</head>
 <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        /*#customers tr:nth-child(even){background-color: #f2f2f2;}*/

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #f2f2f2;

        }

        hr.new {
            border: 1px solid #d6bc0b;
        }

        .page_break {
            page-break-before: always;
        }
    </style>
<body style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
    <div class="container">
        <div class="d-flex justify-content-center " align="center">
            <img src="{{ asset('assets/img/logo.png') }}" alt="" width="200">
        </div>
        <hr class="new">
        <div class="row">
            @php $no = 1; @endphp
            <table  id="customers">
                <thead bgcolor="#ececec">
                    <th>No.</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Produk</th>
                    <th>Merk</th>
                    <th>Telp</th>
                    <th>Perusahaan</th>
                </thead>
                <tbody>
                    @foreach($ikm as $r)

                    <tr style="padding-left:10px;">
                        <td>{{ $no++ }}</td>
                        <td>{{ $r->nama }}</td>
                        <td>{{ $r->jenisProduk }}</td>
                        <td>{{ $r->merk }}</td>
                        <td>{{ $r->telp}}</td>
                        <td>{{ $r->namaUsaha }}</td>
                    </tr>    
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>