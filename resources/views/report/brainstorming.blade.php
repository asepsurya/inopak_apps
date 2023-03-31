
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--<link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">-->
  <!--<link rel="stylesheet" href="/inopak_apps/public/assets/css/user.min.css">-->
  <style>
      #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

/*#customers tr:nth-child(even){background-color: #f2f2f2;}*/

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #f2f2f2;
 
}

hr.new {
  border: 1px solid #d6bc0b;
}

  </style>
  <title>Form Brainstorming</title>
</head>

<body style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
  <div class="container">
    <div class="d-flex justify-content-center mt-2" align="center">
      <img src="{{ public_path('assets/img/logo.png') }}" alt="" width="200">

    </div>
      <hr class="border border-primary border-3 opacity-75 new">
      <div class="mb-3 d-flex justify-content-center " align="center">

        <h3 style="color:rgb(58, 58, 58)">Form Brainstorming Produk</h3>
      </div>
      <table class="table table-bordered" id="customers">

        <thead>
          <tr style="background-color: rgba(105, 105, 105, 0);">
            <th style="width: 50px; text-align:center;" class="m-6">No</th>
            <th style="width: 200px;">Produk</th>
            <th>Keterangan</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($row as $r )
          <tr >
            <td style="text-align:center">1.</td>
            <td>Jenis Produk</td>
            <td>{{ $r->jenis_produk }}</td>
          </tr>
          <tr>
            <td style="text-align:center">2.</td>
            <td>Merk</td>
            <td>{{ $r->merk }}</td>
          </tr>
          <tr>
            <td style="text-align:center">3.</td>
            <td>Komposisi </td>
            <td>{{ $r->komposisi }}</td>
          </tr>
          <tr>
            <td style="text-align:center">4.</td>
            <td>Varian Produk</td>
            <td>{{ $r->varian }}</td>
          </tr>
          <tr>
            <td style="text-align:center">5.</td>
            <td>Kelebihan Produk</td>
            <td>{{ $r->kelebihan }}</td>
          </tr>
          <tr>
            <td style="text-align:center">6.</td>
            <td>Nama Perusahaan </td>
            <td>{{ $r->namaUsaha}}</td>
          </tr>
          <tr>
            <td style="text-align:center">7.</td>
            <td>PIRT </td>
            <td>{{ $r->PIRT }}</td>
          </tr>
          <tr>
            <td style="text-align:center">8.</td>
            <td>Halal</td>
            <td>{{ $r->Halal}}</td>
          </tr>
          <tr>
            <td style="text-align:center">9.</td>
            <td>Legalitas lainnya</td>
            <td>{{ $r->legalitasLain }}</td>
          </tr>
          <tr>
            <td style="text-align:center">10.</td>
            <td>Saran Penyajian / Keterangan Lainnya </td>
            <td>{{ $r->saranpenyajian }}</td>
          </tr>

        </tbody>

      </table>
      <table class="table table-bordered" id="customers">
        <thead>
          <tr>
            <th style="width: 50px; text-align:center;"> No</th>
            <th style="width: 200px">Produk</th>
            <th>Keterangan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td style="text-align:center">1.</td>
            <td>Segmentasi </td>
            <td>{{ $r->segmentasi }}</td>
          </tr>
          <tr>
            <td style="text-align:center">2.</td>
            <td>Jenis Kemasan dan Ukuran </td>
            <td>{{ $r->jeniskemasan }}</td>
          </tr>
          <tr>
            <td style="text-align:center">3.</td>
            <td>Tagline</td>
            <td>{{ $r->tagline }}</td>
          </tr>
          <tr>
            <td style="text-align:center">4.</td>
            <td>Redaksi</td>
            <td>{{ $r->redaksi }}</td>
          </tr>
          <tr>
            <td style="text-align:center">5.</td>
            <td>Gramasi</td>
            <td>{{ $r->gramasi }}g</td>
          </tr>
          @endforeach

        </tbody>
        
      </table>
    
    </div>
    {{-- <footer class="bg-light  text-lg-start">
      <!-- Copyright -->
      <div class=" p-3" style="color:rgb(58, 58, 58);size:3px">
        <small>
        <b>Data Bersifat rahasia dan hanaya dapat dipublikasikan untuk keperluan khusus</b><br>
        2023 Copyright INOPAK INSTITUTE
      </small>
        <a style="color:rgb(212, 164, 7)">www.inopakinstitute.or.id / inopakinstitute@gmail.com</a>
      </div>
      <!-- Copyright -->
    </footer> --}}
</body>

</html>