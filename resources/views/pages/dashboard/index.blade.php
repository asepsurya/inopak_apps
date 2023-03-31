@extends('layout.main')
@section('container')
<h3 class="mb-3">Dashboard</h3>
<div class="card border border-300 h-100 w-100 overflow-hidden">
    <div class="bg-holder d-block bg-card" style="background-image:url({{ asset('assets/img/spot-illustrations/32.png') }});background-position: top right;"></div>
    <!--/.bg-holder-->
    <div class="bg-holder d-none d-sm-block d-lg-none d-xxl-block bg-card" style="background-image:url({{ asset('/assets/img/spot-illustrations/21.png') }});background-position: bottom right; background-size: auto;"></div>
    <!--/.bg-holder-->
    <div class="card-body px-5 position-relative">
      <div class="badge badge-phoenix fs--2 badge-phoenix-warning mb-4"><span class="fw-bold"><span id='date-time'></span></span><svg class="svg-inline--fa fa-award ms-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="award" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M288 358.3c13.98-8.088 17.53-30.04 28.88-41.39c11.35-11.35 33.3-14.88 41.39-28.87c7.98-13.79 .1658-34.54 4.373-50.29C366.7 222.5 383.1 208.5 383.1 192c0-16.5-17.27-30.52-21.34-45.73c-4.207-15.75 3.612-36.5-4.365-50.29c-8.086-13.98-30.03-17.52-41.38-28.87c-11.35-11.35-14.89-33.3-28.87-41.39c-13.79-7.979-34.54-.1637-50.29-4.375C222.5 17.27 208.5 0 192 0C175.5 0 161.5 17.27 146.3 21.34C130.5 25.54 109.8 17.73 95.98 25.7C82 33.79 78.46 55.74 67.11 67.08C55.77 78.43 33.81 81.97 25.72 95.95C17.74 109.7 25.56 130.5 21.35 146.2C17.27 161.5 .0008 175.5 .0008 192c0 16.5 17.27 30.52 21.34 45.73c4.207 15.75-3.615 36.5 4.361 50.29C33.8 302 55.74 305.5 67.08 316.9c11.35 11.35 14.89 33.3 28.88 41.4c13.79 7.979 34.53 .1582 50.28 4.369C161.5 366.7 175.5 384 192 384c16.5 0 30.52-17.27 45.74-21.34C253.5 358.5 274.2 366.3 288 358.3zM112 192c0-44.27 35.81-80 80-80s80 35.73 80 80c0 44.17-35.81 80-80 80S112 236.2 112 192zM1.719 433.2c-3.25 8.188-1.781 17.48 3.875 24.25c5.656 6.75 14.53 9.898 23.12 8.148l45.19-9.035l21.43 42.27C99.46 507 107.6 512 116.7 512c.3438 0 .6641-.0117 1.008-.0273c9.5-.375 17.65-6.082 21.24-14.88l33.58-82.08c-53.71-4.639-102-28.12-138.2-63.95L1.719 433.2zM349.6 351.1c-36.15 35.83-84.45 59.31-138.2 63.95l33.58 82.08c3.594 8.797 11.74 14.5 21.24 14.88C266.6 511.1 266.1 512 267.3 512c9.094 0 17.23-4.973 21.35-13.14l21.43-42.28l45.19 9.035c8.594 1.75 17.47-1.398 23.12-8.148c5.656-6.766 7.125-16.06 3.875-24.25L349.6 351.1z"></path></svg><!-- <span class="fa-solid fa-award ms-1"></span> Font Awesome fontawesome.com --></div>
      <h3 class="mb-5">Selamat Datang, {{ auth()->user()->nama }}</h3>
      <p class="text-700 fw-semi-bold"> Kami Percaya Pertumbuhan Ekonomi yang
        <br class="d-none d-sm-block"> Kuat ditopang oleh UMKM  <br class="d-none d-sm-block">yang Berkelanjutan </p>
    </div>
    <div class="card-footer border-0 py-0 px-5 z-index-1">
      <p class="text-700 fw-semi-bold">Follow Us <a href="https://inopakinstitute.or.id">Inopakinstitute.or.id </a>
    </div>
  </div>
  <script>
    var dt = new Date();
    document.getElementById('date-time').innerHTML=dt;
  </script>
@endsection