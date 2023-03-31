<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--<link rel="stylesheet" href="{{ public_path('assets/css/theme.min.css') }}">-->
    <!--<link rel="stylesheet" href="{{ public_path('assets/css/user.min.css') }}">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
    #cover_sheet {

    position         : absolute;

    top              : 0px;
    left             : 0px;
    right            : 0px;
    bottom           : 0px;

    overflow         : hidden;
    margin           : 0;
    padding          : 0;
}
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
    <title>COTS</title>
</head>

<body  style="font-size:9pt;" >
    <!--<div id="cover_sheet">-->
    <!--    <img src="https://img.freepik.com/premium-vector/landscape-with-mountains-mountains-night-with-moon-walpaper-mountains-desktop-background_444852-309.jpg?w=2000">-->
    <!--</div>-->

    <div class="container">
        <div align="center">
            <img src="{{ public_path('assets/img/logo.png') }}" alt="" width="200">
        </div>
        <hr class="new">
        <table class="table " id="customers" >
            <tbody>
                @foreach ($row as $r )
                <tr style="padding-top:0px;border:0px;">
                    <td colspan="2">
                        <div class="d-flex">
                            <div align="center">
                                <img src="{{ asset('storage/'.$r->gambar) }}" width="100" height="100"
                                    class="rounded-circle"><br>
                                <div align="center" style="margin-top:10px">
                                    <small>Nama IKM :</small><br>
                                    <strong>{{ $r->nama }}</strong>
                                </div>
                            </div>
                        </div>


                    </td>

                </tr>
                <tr>
                    <td bgcolor="#ececec" style="width: 150px;padding-left:10px;" height="20">&nbsp;Nama Produk </td>
                    <td> {{ $r->NamaProduk }}</td>
                </tr>
                <tr>
                    <td bgcolor="#ececec" style="width: 150px;padding-left:10px;" height="20">&nbsp;Merk </td>
                    <td> {{ $r->merk }}</td>
                </tr>
                <tr>
                    <td bgcolor="#ececec" style="width: 150px;padding-left:10px;" height="80">&nbsp;Alamat </td>
                    <td> {{ $r->alamat }} Kecamatan {{ $r->kecamatan }} Kelurahan {{ $r->desa }} Kota/Kab. {{ $r->kota
                        }} Provinsi {{ $r->provinsi }}</td>
                </tr>
                <tr>
                    <td bgcolor="#ececec" style="width: 150px;padding-left:10px;" height="20">&nbsp;No Handphone </td>
                    <td> {{ $r->no_hp }}</td>
                </tr>

        </table>
    </div>


    <table class="table table-bordered " id="customers" style="padding-left:40px;">

        <tr bgcolor="#ececec">
            <td>
                1.
            </td>
            <td><strong> Sejarah Singkat Awal Pendirian Usaha </strong></td>
        </tr>
        <tr>
            <td></td>
            <td style="padding:5px;color:rgb(80, 80, 80)">
                <p>{{ $r->sejarahSingkat }}</p>
            </td>
        </tr>
        <tr bgcolor="#ececec">
            <td>
                2.
            </td>
            <td><strong> Produk yang dijual saat ini </strong></td>
        </tr>
        <tr>
            <td></td>
            <td style="padding:5px;color:rgb(80, 80, 80)">
                <p>{{ $r->produkjual }}</p>
            </td>
        </tr>
        <tr bgcolor="#ececec">
            <td>
                3.
            </td>
            <td><strong> Cara Pemasaran </strong></td>
        </tr>
        <tr>
            <td></td>
            <td style="padding:5px;color:rgb(80, 80, 80)">
                <p>{{ $r->carapemasaran }}</p>
            </td>
        </tr>
        <tr bgcolor="#ececec">
            <td>
                4.
            </td>
            <td><strong> Bahan Baku </strong></td>
        </tr>
        <tr>
            <td></td>
            <td style="padding:5px;color:rgb(80, 80, 80)">
                <p>{{ $r->bahanbaku }}</p>
            </td>
        </tr>
        <tr bgcolor="#ececec">
            <td>
                5.
            </td>
            <td><strong> Proses Produksi/Mesin yang digunakan </strong></td>
        </tr>
        <tr>
            <td></td>
            <td style="padding:5px;color:rgb(80, 80, 80)">
                <p>{{ $r->prosesproduksi }}</p>
            </td>
        </tr>
        <tr bgcolor="#ececec">
            <td>
                6.
            </td>
            <td><strong> Omset </strong></td>
        </tr>
        <tr>
            <td></td>
            <td style="padding:5px;color:rgb(80, 80, 80)">
                <p>{{ $r->omset }}</p>
            </td>
        </tr>
        <tr bgcolor="#ececec">
            <td>
                7.
            </td>
            <td><strong> Kapasitas Produksi </strong></td>
        </tr>
        <tr>
            <td></td>
            <td style="padding:5px;color:rgb(80, 80, 80)">
                <p>{{ $r->kapasitasproduksi }}</p>
            </td>
        </tr>
        <tr bgcolor="#ececec">
            <td>
                8.
            </td>
            <td><strong> Kendala yang dihadapi saat ini </strong></td>
        </tr>
        <tr>
            <td></td>
            <td style="padding:5px;color:rgb(80, 80, 80)">
                <p>{{ $r->kendala }}</p>
            </td>
        </tr>
        <tr bgcolor="#ececec">
            <td>
                9.
            </td>
            <td><strong> Solusi yang Diberikan Tenaga Ahli </strong></td>
        </tr>
        <tr>
            <td></td>
            <td style="padding:5px;color:rgb(80, 80, 80)">
                <p>{{ $r->solusi }}</p>
            </td>
        </tr>

    </table>
    @endforeach


    <div class="page_break"></div>
    
    
<div class="container">

    <div class="row mb-5" >
        <div align="center">
            <h3>Dokumentasi Kegiatan</h3>
      
        <hr class="new">
    
         </div>
    </div>
</div>



   


    <div class="container">
        <div class="row">
            <div class="grid">
        @foreach ($dokumentasi as $g )
             @foreach ($g->gambar as $d)
      <div class="g-col-6 g-col-md-4">
            <div style="min-height:100px">
              <img src="{{ asset('storage/'.$d) }}" alt="" width="550">
            </div>
          </div>
     
            @endforeach
     @endforeach
     </div>
        </div>
    </div>



</body>

</html>