<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#ffffff">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Login Pengguna</title>
    {{-- JS --}}
    <script src="{{ asset('vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendors/simplebar/simplebar.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/config.js') }}"></script> --}}
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    {{-- CSS --}}
    
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('vendors/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/theme.min.css') }}" type="text/css" rel="stylesheet" id="style-default">
    <link href="{{ asset('assets/css/user.min.css') }}" type="text/css" rel="stylesheet" id="user-style-default">
    <link href="{{ asset('vendors/choices/choices.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    {{-- <link href="{{ asset('assets/css/user.min.css') }}" type="text/css" rel="stylesheet" id="user-style-default"> --}}
    <style>
        .select2.select2-container {
            width: 100% !important;
        }

        .select2.select2-container .select2-selection {
            font-family: "Nunito Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: 12px;
            border: 1px solid #cbd0dd;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 0.375rem;
            height: 36px;
            padding: 2px;
            margin-bottom: 15px;
            outline: none !important;
            transition: all .15s ease-in-out;
        }

        .select2.select2-container .select2-selection .select2-selection__rendered {
            font-weight: 600;
            color: #3b3b3b;
            line-height: 32px;
            padding-right: 33px;
        }

        .select2.select2-container .select2-selection .select2-selection__arrow {
            background: #f8f8f8;

            border-left: 1px solid #ccc;
            -webkit-border-radius: 0 3px 3px 0;
            -moz-border-radius: 0 3px 3px 0;
            border-radius: 0 3px 3px 0;
            height: 32px;
            width: 33px;
        }

        .select2.select2-container.select2-container--open .select2-selection.select2-selection--single {
            background: #f8f8f8;
        }

        .select2.select2-container.select2-container--open .select2-selection.select2-selection--single .select2-selection__arrow {
            -webkit-border-radius: 0 3px 0 0;
            -moz-border-radius: 0 3px 0 0;
            border-radius: 0 3px 0 0;
        }

        .select2.select2-container.select2-container--open .select2-selection.select2-selection--multiple {
            border: 1px solid #34495e;
        }

        .select2.select2-container .select2-selection--multiple {
            height: auto;
            min-height: 34px;
        }

        .select2.select2-container .select2-selection--multiple .select2-search--inline .select2-search__field {
            margin-top: 0;
            height: 32px;
        }

        .select2.select2-container .select2-selection--multiple .select2-selection__rendered {
            display: block;
            padding: 0 4px;
            line-height: 29px;
        }

        .select2.select2-container .select2-selection--multiple .select2-selection__choice {
            background-color: #f8f8f8;
            border: 1px solid #ccc;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            margin: 4px 4px 0 0;
            padding: 0 6px 0 22px;
            height: 24px;
            line-height: 24px;
            font-size: 12px;
            position: relative;
        }

        .select2.select2-container .select2-selection--multiple .select2-selection__choice .select2-selection__choice__remove {
            position: absolute;
            top: 0;
            left: 0;
            height: 22px;
            width: 22px;
            margin: 0;
            text-align: center;
            color: #e74c3c;
            font-weight: bold;
            font-size: 16px;
        }

        .select2-container .select2-dropdown {
            background: transparent;
            border: none;
            margin-top: -5px;
        }

        .select2-container .select2-dropdown .select2-search {
            padding: 0;
        }

        .select2-container .select2-dropdown .select2-search input {
            outline: none !important;
            border: 1px solid #aab2ca !important;
            border-bottom: none !important;
            padding: 4px 6px !important;
        }

        .select2-container .select2-dropdown .select2-results {
            padding: 0;
        }

        .select2-container .select2-dropdown .select2-results ul {
            background: #fff;
            border: 1px solid #aab2ca;
        }

        .select2-container .select2-dropdown .select2-results ul .select2-results__option--highlighted[aria-selected] {
            background-color: #3498db;
        }
    </style>
</head>

<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container-fluid px-0" data-layout="container">
            <div class="container">
                <div class="row flex-center min-vh-100 py-5">
                    <div class="col-sm-10 col-md-7 col-lg-5 "><a class="d-flex flex-center text-decoration-none mb-4"
                            href="/login">
                            <div class="d-flex align-items-center fw-bolder fs-5 d-inline-block"><img
                                    src="{{ asset('assets/img/icons/logo.png') }}" alt="phoenix" width="58" /></div>
                        </a>
                        <div class="text-center mb-7">
                            <h3 class="text-1000">Mendaftar</h3>
                            <p class="text-700">Form Daftar Account Baru</p>
                        </div>
                        {{-- section 1 --}}
                        <div id="info">
                       
                    <div class="alert alert-soft-warning alert-dismissible fade show" role="alert">
                        <strong>Perhatian!</strong> Mohon isi form yang kosong!!
                        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    
                              
                        </div>
                        <form action="/register" method="post">
                            @csrf
                        <div class="section1">
                            <div class="position-relative">
                                <hr class="bg-200 mt-5 mb-4" />
                                <div class="divider-content-center">Step 1</div>
                            </div>
                            <div class="mb-3 text-start">
                                <label class="form-label" for="nik">NIK<span style="color:red">*</span></label>
                                <input required class="form-control @error('nik') is-invalid @enderror" id="nik" type="text" placeholder="Nomor NIK" name="nik" value="{{ old('nik') }}" 
                                required maxlength="16"/>
                                @error('nik')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                                <div class="mb-3 text-start">
                                    <label class="form-label" for="name">Nama Lengkap<span style="color:red">*</span></label>
                                    <input required class="form-control @error('nama') is-invalid @enderror" id="name" type="text" placeholder="Nama Lengkap" name="nama" value="{{ old('nama') }}"/>
                                    @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3 text-start">
                                    <label class="form-label" for="name">No Telepon<span style="color:red">*</span></label>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-wrapping">
                                            <span data-feather="phone" width="15"></span>
                                        </span>
                                        <input required class="form-control @error('telp') is-invalid @enderror" type="text " placeholder="Nomor Telepon" name="telp" id="telp" value="{{ old('telp') }}"/>
                                    </div>
                                   @error('telp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3 text-start">
                                    <label class="form-label" for="email">Jenis Kelamin<span style="color:red">*</span></label>
                                    <select required class="form-control @error('gender') is-invalid @enderror" aria-label="Default select example" name="gender">
                                        <option value="">Jenis Kelamin</option>
                                        <option value="1">Laki - Laki</option>
                                        <option value="2">Perempuan</option>
                                    </select>
                                     @error('gender')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div> 
                                <div class="mb-3 text-start">
                                    <label class="form-label" for="komunitas">Asosiasi / Komunitas</label>
                                    <input class="form-control " id="komunitas" type="text" placeholder="Asosiasi / Komunitas" name="komunitas" value="{{ old('komunitas') }}"/>
                                </div>
                                
                                    <a class="btn btn-primary w-100 mb-3" id="sectionOneButton">Next <span data-feather="arrow-right"></span></a>
                            
                               
                        </div>
                        {{-- section 2 --}}
                        <div class="section2">
                            <div class="position-relative">
                                <hr class="bg-200 mt-5 mb-4" />
                                <div class="divider-content-center">Step 2</div>
                            </div>
                            <div class="mb-3 text-start">
                                <label class="form-label" for="alamat">Alamat<span style="color:red">*</span></label>
                                <input required class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" type="text"
                                    placeholder="Alamat"  value="{{ old('alamat') }}"/>
                            </div>
                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="provinsi">Provinsi<span style="color:red">*</span></label>
                                    <select required class="form-control js-example-basic-single @error('provinsi') is-invalid @enderror" id="provinsi" name="id_provinsi">
                                        <option value="">Pilih Provinsi</option>
                                        @foreach ($provinsi as $p)
                                        <option value="{{ $p->id }}">{{ $p->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('provinsi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror        
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="kabupaten">Kota/Kabupaten<span style="color:red">*</span></label>
                                    <select required id="kabupaten" name="id_kota"
                                        class="form-control js-example-basic-single @error('kota') is-invalid @enderror">
                                        <option value="">Kota/Kabupaten</option>

                                    </select>
                                    @error('kota')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror   
                                </div>
                            </div>

                            <div class="row g-3 mb-2">
                                <div class="col-md-6">
                                    <label class="form-label" for="kecamatan">Kecamatan<span style="color:red">*</span></label>
                                    <select required class="form-select js-example-basic-single @error('kecamatan') is-invalid @enderror" id="kecamatan" name="id_kecamatan">
                                        <option value="">Pilih Kecamatan</option>
                                    </select>
                                    @error('kecamatan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror   
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="desa">Kelurahan/Desa<span style="color:red">*</span></label>
                                    <select required class="form-select js-example-basic-single @error('desa') is-invalid @enderror" id="desa" name="id_desa">
                                        <option value="">Kelurahan/Desa</option>
                                    </select>
                                         @error('desa')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                </div>
                            </div>
                            <div class="row g-3 mb2">
                                <div class="col-md-6">
                                    <div class="mb-3 text-start">
                                        <label class="form-label" for="rt">RT<span style="color:red">*</span></label>
                                        <input required class="form-control @error('rt') is-invalid @enderror" id="rt" name="rt" type="text"
                                            placeholder="RT" value="{{ old('rt') }}" />
                                        @error('rt')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 text-start">
                                        <label class="form-label" for="rw">RW<span style="color:red">*</span></label>
                                        <input required class="form-control @error('rw') is-invalid @enderror" id="rw" name="rw" type="text"
                                            placeholder="RW" value="{{ old('rw') }}" />
                                    </div>
                                    @error('rw')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror   
                                </div>
                            </div>
                            <div class="mb-3 text-start">
                                <label class="form-label" for="email">Email<span style="color:red">*</span></label>
                                <input required class="form-control @error('email') is-invalid @enderror" id="email" name="email" type="email"
                                    placeholder="name@example.com" />
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror   
                            </div>
                            <div class="row g-3 mb-3">
                                <div class="col-md-6"><label class="form-label" for="password">Password<span style="color:red">*</span></label><input
                                        class="form-control form-icon-input @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password" required/>
                                        @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror   
                                </div>
                                <div class="col-md-6"><label class="form-label" for="confirm_password">Confirm
                                        Password<span style="color:red">*</span></label><input class="form-control form-icon-input @error('confirmPassword') is-invalid @enderror" type="password"
                                        placeholder="Confirm Password" name="confirmPassword" required/>
                                        @error('confirmPassword')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror   
                                    </div>
                            </div>
                            {{-- <div class="form-check mb-3"><input class="form-check-input" id="termsService"
                                    type="checkbox" /><label class="form-label fs--1 text-none" for="termsService">I
                                    accept the <a href="#!">terms </a>and <a href="#!">privacy policy</a></label>
                            </div> --}}
                            <button class="btn btn-primary w-100 mb-3">Mendaftar</button>
                            <div class="text-center"><a class="btn btn-soft-secondary me-1 mb-1" id="backButton">Kembali</a></div>
                            </form>
                            
                        </div>
                        <small class="d-flex justify-content-center">Sudah mempunyai akun? <a href="/login">Login</a></small>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- ===============================================-->
        <!--                JavaScripts                     -->
        <!-- ===============================================-->
        <script src="{{ asset('vendors/choices/choices.min.js') }}"></script>
        <script src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ asset('vendors/anchorjs/anchor.min.js') }}"></script>
        <script src="{{ asset('vendors/is/is.min.js') }}"></script>
        <script src="{{ asset('vendors/fontawesome/all.min.js') }}"></script>
        <script src="{{ asset('vendors/lodash/lodash.min.js') }}"></script>
        <script src="{{ asset('vendors/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('vendors/dayjs/dayjs.min.js') }}"></script>
        {{-- <script src="{{ asset('assets/js/phoenix.js') }}"></script> --}}
        
<script>

    $(function(){
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
        });

        $(function (){
            $('#provinsi').on('change',function(){
                let id_provinsi = $('#provinsi').val();
                
                $.ajax({
                    type : 'POST',
                    url : "{{route('getkabupaten')}}",
                    data : {id_provinsi:id_provinsi},
                    cache : false,

                    success: function(msg){
                        $('#kabupaten').html(msg);
                        $('#kecamatan').html('');
                        $('#desa').html('');
                    },
                    error: function(data) {
                        console.log('error:',data)
                    },
                })
            })


            $('#kabupaten').on('change',function(){
                let id_kabupaten = $('#kabupaten').val();
              
                $.ajax({
                    type : 'POST',
                    url : "{{route('getkecamatan')}}",
                    data : {id_kabupaten:id_kabupaten},
                    cache : false,

                    success: function(msg){
                        $('#kecamatan').html(msg);
                        $('#desa').html('');
                       
                        
                    },
                    error: function(data) {
                        console.log('error:',data)
                    },
                })
            })

            $('#kecamatan').on('change',function(){
                let id_kecamatan = $('#kecamatan').val();
               
                $.ajax({
                    type : 'POST',
                    url : "{{route('getdesa')}}",
                    data : {id_kecamatan:id_kecamatan},
                    cache : false,

                    success: function(msg){
                        $('#desa').html(msg);
                       
                        
                    },
                    error: function(data) {
                        console.log('error:',data)
                    },
                })
            })
        })
    });
</script>
       <script>
            $(document).ready(function(){
                        feather.replace()
                            $(document).ready(function() {
                        $('.js-example-basic-single').select2();
                    });
                        // 
                        $(".section2").hide();
                        $("#info").hide();
                        // 
                        $("#sectionOneButton").click(function(){
                            var nik=$("#nik").val();
                            var nama=$("#nama").val();
                            var gender=$("#gender").val();
                            var telp=$("#telp").val();
                            
                            if (nik=="" || nama=="" || gender =="" || telp ==""){
                                alert("Isi data dengan lengkap");
                                $("#info").show();
                            }else{
                                $("#info").hide();
                                $(".section1").hide();
        		                $(".section2").show();  
                            }
                            
                           
        		        }); 
                        $("#backButton").click(function(){
        		            $(".section2").hide();
        		            $(".section1").show();
        		        }); 
            });
                   
        </script>

</body>

</html>