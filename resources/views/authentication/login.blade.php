<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#ffffff">
    <title>Login Pengguna</title>
    {{-- JS --}}
    <script src="{{ asset('vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendors/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>
    {{-- CSS --}}
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('vendors/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/theme.min.css') }}" type="text/css" rel="stylesheet" id="style-default">
    <link href="{{ asset('assets/css/user.min.css') }}" type="text/css" rel="stylesheet" id="user-style-default">
</head>

<body>
    <!-- ===============================================-->
    <!--    Main Content                                -->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container-fluid px-0" data-layout="container">
            <div class="container">
                <div class="row flex-center min-vh-100 py-5">
                    <div class="col-sm-10 col-md-8 col-lg-5 col-xl-5 col-xxl-3"><a
                            class="d-flex flex-center text-decoration-none mb-4" href="/login">
                            <div class="d-flex align-items-center fw-bolder fs-5 d-inline-block"><img
                                    src="{{ asset('assets/img/icons/logo.png') }}" alt="phoenix" width="58" /></div>
                        </a>
                        <div class="text-center mb-7">
                            <h3 class="text-1000">Login Pengguna</h3>
                            <p class="text-700">Akses ke dalam akun Anda</p>
                        </div>
                        <form action="/login" method="post">
                            @csrf
                        <div class="mb-3 text-start"><label class="form-label" for="email">Email / Nomor Telepon</label>
                            <div class="form-icon-container">
                                <input value="{{ old('email') }}" class="form-control form-icon-input @error('email') is-invalid @enderror" id="username" name="email"
                                    type="text" placeholder="Email / Nomor Telepon" /><span
                                    class="fas fa-user text-900 fs--1 form-icon"></span>
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror 
                                </div>
                                    
                        </div>
                        <div class="mb-3 text-start"><label class="form-label" for="password">Password</label>
                            <div class="form-icon-container"><input class="form-control form-icon-input @error('password') is-invalid @enderror" type="password" id="password" name="password"
                                  placeholder="Password" /><span class="fas fa-key text-900 fs--1 form-icon"></span>
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror  
                            </div>
                        </div>
                        <div class="row flex-between-center mb-7">
                            <div class="col-auto">
                                <div class="form-check mb-0"><input class="form-check-input" id="basic-checkbox"
                                        type="checkbox" /><label class="form-check-label mb-0"
                                        for="basic-checkbox">Tampilkan Password</label></div>
                            </div>
                            <div class="col-auto"><a class="fs--1 fw-semi-bold" href="forgot-password.html">Lupa Password?</a></div>
                            <div class="py-3">

                                @if(session()->has('Berhasil'))
                                <div class="alert alert-outline-success d-flex align-items-center" role="alert">
                                     <span class="fas fa-check-circle text-success fs-3 me-3"></span>
                                     <p class="mb-0 flex-1">{{session('Berhasil')}}</p>
                                     <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                                 </div>
                                 @endif
                                 @if(session()->has('loginError'))
                                <div class="alert alert-outline-danger d-flex align-items-center" role="alert">
                                    <span class="fas fa-times-circle text-danger fs-3 me-3"></span>
                                     <p class="mb-0 flex-1">{{session('loginError')}}</p>
                                     <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                                 </div>
                                 @endif
                            </div>
                            
                        </div>
                        
                        <button class="btn btn-primary w-100 mb-3" type="submit">Masuk</button>
                    </form>
                        {{-- <small class="d-flex justify-content-center">Belum Mempunyai Account?<a class="fs--1 fw-bold" href="/register"> Mendaftar</a>
                        </small> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- ===============================================-->
        <!--                JavaScripts                     -->
        <!-- ===============================================-->
        {{-- <script src="{{ asset('vendors/popper/popper.min.js') }}"></script> --}}
        <script src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ asset('vendors/anchorjs/anchor.min.js') }}"></script>
        <script src="{{ asset('vendors/is/is.min.js') }}"></script>
        <script src="{{ asset('vendors/fontawesome/all.min.js') }}"></script>
        <script src="{{ asset('vendors/lodash/lodash.min.js') }}"></script>
        {{-- <script src="{{ asset('vendors/list.js/list.min.js') }}"></script> --}}
        {{-- <script src="{{ asset('vendors/feather-icons/feather.min.js') }}"></script> --}}
        <script src="{{ asset('vendors/dayjs/dayjs.min.js') }}"></script>
        {{-- <script src="{{ asset('assets/js/phoenix.js') }}"></script> --}}
</body>

</html>