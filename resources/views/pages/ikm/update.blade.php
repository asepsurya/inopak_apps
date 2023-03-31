@extends('layout.main')
@section('container')
<form action="/project/dataikm/UpdateIkm" method="post">
    @csrf
    <div class="row justify-content-between align-items-end g-3 mb-5">
        <div class="col-12 col-sm-auto col-xl-8">
            <h2>Update IKM</h2>
        </div>
        <div class="col-12 col-sm-auto col-xl-4">
            <div class="d-flex"><a href="/project/dataikm/{{ $project->id }}" class="btn btn-phoenix-primary px-5 me-2">Batal</a>
                <button type="submit" class="btn btn-primary px-5 w-100 text-nowrap">Simpan</button>
            </div>
        </div>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @foreach ( $dataIkm as $a)

    <div class="py-1 mb-5">
        <ul class="nav nav-underline" id="myTab" role="tablist">
            <li class="nav-item" role="presentation"><a class="nav-link active" id="home-tab" data-bs-toggle="tab"
                    href="#tab-Updateinfo" role="tab" aria-controls="tab-home" aria-selected="false" tabindex="-1"><i
                        data-feather="user"></i> Infomasi
                    IKM</a></li>
            <li class="nav-item" role="presentation"><a class="nav-link " id="home-tab" data-bs-toggle="tab"
                    href="#tab-Updatehome" role="tab" aria-controls="tab-Updatehome" aria-selected="false"
                    tabindex="-1"><i data-feather="box"></i> Infomasi
                    Product</a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" id="profile-tab" data-bs-toggle="tab"
                    href="#tab-Updateprofile" role="tab" aria-controls="tab-profile" aria-selected="false"
                    tabindex="-1"><i data-feather="command"></i> Legalitas
                    / Informasi</a></li>

        </ul>
        <div class="tab-content mt-3" id="myTabContent">
            <div class="tab-pane fade  active show" id="tab-Updateinfo" role="tabpanel" aria-labelledby="home-tab">
                <div id="London" class="tabcontent" style="display: block;">

                    <div class="section1">
                        {{-- variabel id Ikm --}}
                        <input type="text" value="{{ $a->id }}" name="id_ikm" hidden>
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label class="form-label" for="provinsi">Nama Lengkap<span
                                        style="color:red">*</span></label>
                                <input class="form-control @error('nama') is-invalid @enderror" id="nama" type="text"
                                    placeholder="Nama Lengkap" name="nama" value="{{ $a->nama }}" />
                                @error('nama')
                                <div class="invalid-feedback">
                                    {{ $messssage }}
                                </div>
                                @enderror

                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="name">No Telepon<span style="color:red">*</span></label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">
                                        <span data-feather="phone" width="15"></span>
                                    </span>
                                    <input required class="form-control @error('telp') is-invalid @enderror"
                                        type="text " placeholder="Nomor Telepon" name="telp" id="telp"
                                        value="{{ $a->telp }}" />
                                </div>
                                @error('telp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                        </div>

                        <div class="row g-3 mb-3">

                            <div class="col-md-6">
                                <label class="form-label" for="email">Jenis Kelamin<span
                                        style="color:red">*</span></label>
                                <select required class="form-control @error('gender') is-invalid @enderror"
                                    aria-label="Default select example" name="gender">
                                    {{-- <option value="">-Pilih Gender-</option> --}}
                                    @if ($a->gender==1)
                                    <option value="1">Laki - Laki</option>
                                    @else
                                    <option value="2">Perempuan</option>
                                    @endif
                                    <option value="1">Laki - Laki</option>
                                    <option value="2">Perempuan</option>
                                </select>
                                @error('gender')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="id_Project" class="form-label"> Asosiasi / Komunitas </label>
                                <select name="id_Project" id="" class="form-control" disabled>
                                    <option value="{{ $project->id }}">{{ $project->NamaProjek }}</option>
                                </select>
                            </div>
                        </div>


                    </div>
                    {{-- section 2 --}}
                    <div class="section2">
                        <div class="mb-3 text-start">
                            <label class="form-label" for="alamat">Alamat<span style="color:red">*</span></label>
                            <input required class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                                name="alamat" type="text" placeholder="Alamat" value="{{ $a->alamat }}" />
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label class="form-label" for="provinsi">Provinsi<span
                                        style="color:red">*</span></label>
                                <select required
                                    class="form-control  js-example-basic-single-Update @error('provinsi') is-invalid @enderror"
                                    id="provinsiUpdate" name="id_provinsi">
                                    <option value="{{ $a->province->id }}">{{ $a->province->name }}</option>

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
                                <label class="form-label" for="kabupaten">Kota/Kabupaten<span
                                        style="color:red">*</span></label>
                                <select required id="kabupatenUpdate" name="id_kota"
                                    class="form-control js-example-basic-single-Update @error('kota') is-invalid @enderror">
                                 <option value="{{ $a->regency->id }}">{{ $a->regency->name}}</option>

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
                                <label class="form-label" for="kecamatan">Kecamatan<span
                                        style="color:red">*</span></label>
                                <select required
                                    class="form-select js-example-basic-single-Update @error('kecamatan') is-invalid @enderror"
                                    id="kecamatanUpdate" name="id_kecamatan">
                                    <option value="{{ $a->district->id }}">{{ $a->district->name }}</option>
                                </select>
                                @error('kecamatan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="desa">Kelurahan/Desa<span
                                        style="color:red">*</span></label>
                                <select required
                                    class="form-select js-example-basic-single-Update @error('desa') is-invalid @enderror"
                                    id="desaUpdate" name="id_desa">
                                   
                                    <option value="{{ $a->village->id }}" selected>{{ $a->village->name }}</option>
                                
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
                                    <input required class="form-control @error('rt') is-invalid @enderror" id="rt"
                                        name="rt" type="text" placeholder="RT" value="{{ $a->rt }}" />
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
                                    <input required class="form-control @error('rw') is-invalid @enderror" id="rw"
                                        name="rw" type="text" placeholder="RW" value="{{ $a->rw }}" />
                                </div>
                                @error('rw')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <button id="next1Update" class="btn btn-primary">Tahap Selanjutnya</button>
                    </div>

                </div>
            </div>
        </div>

        {{-- --}}
        <div class="tab-content mt-3" id="myTabContent">
            <div class="tab-pane fade  " id="tab-Updatehome" role="tabpanel" aria-labelledby="home-tab">
                <div id="London" class="tabcontent" style="display: block;">

                    <div class="row mg-b-30">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label ">Jenis Produk <span style="color:red">*</span></label>

                                <input class="form-control mb-3" type="text" id="jenisProduk" name="jenisProduk"
                                    placeholder="Enter lastname" value="{{ $a->jenisProduk }}">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Merk<span style="color:red">*</span> </label>
                                <input class="form-control mb-3" type="text" id="merk" name="merk"
                                    placeholder="Enter lastname" value="{{ $a->merk }}">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Tagline<span style="color:red">*</span></label>
                                <input class="form-control mb-3" type="text" id="tagline" name="tagline"
                                    value="{{ $a->tagline }}">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Kelebihan Produk<span style="color:red">*</span></label>
                                <input class="form-control mb-3" type="text" id="kelebihan" name="kelebihan"
                                    value="{{ $a->kelebihan }}">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Gramasi(g) <span style="color:red">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control mb-3" id="gramasi" name="gramasi"
                                        value="{{ $a->gramasi }}">
                                    <div class="input-group-append">
                                        <span class="input-group-text">gram</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label for="jenisKemasan" class="form-label">Jenis Kemasan dan Ukuran</label>
                            <textarea name="jenisKemasan" id="jenisKemasan" placeholder="Jenis Kemasan" class="form-control">{{ $a->jenisKemasan }}</textarea>
                          </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Segmentasi Produk <span style="color:red">*</span></label>
                                <input class="form-control mb-3" type="text" id="segmentasi" name="segmentasi"
                                    placeholder="Masukan Segementasi Produk" value="{{ $a->segmentasi }}">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Harga Produk <span style="color:red">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    <input type="text" class="form-control mb-3" name="harga" id="harga"
                                        value="{{ $a->harga }}">
                                </div>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group  mb-3">
                                <label class="form-label">Varian Produk <span style="color:red">*</span></label>
                                <textarea rows="4" cols="100" name="varian" class="form-control" id="varian_prod"
                                    required="">{{ $a->varian }}</textarea>
                                <small>* Masukan Varian Produk</small>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-label">Komposisi Produk <span style="color:red">*</span></label>
                                <textarea rows="4" cols="100" name="komposisi" class="form-control" id="komposisi"
                                    value=" " required="">{{ $a->komposisi }}</textarea>
                                <small>* Masukan Komposisi Produk</small>
                            </div>
                        </div>
                        <div class="row-lg-9">
                            <div class="form-group mb-3">
                                <label class="form-label">Redaksi Produk <span style="color:red">*</span></label>
                                <textarea rows="6" cols="100" name="redaksi" class="form-control " id="redaksi"
                                    value=" " required="">{{ $a->redaksi }}</textarea>
                                <small>* Masukan redaksi Produk</small>
                            </div>
                        </div>
                        <div class="row-lg-9">
                            <div class="form-group mb-3">
                                <label class="form-label">Keterangan Lainnya</label>
                                <textarea rows="6" cols="100" name="other" class="form-control " id="other" value=" "
                                    >{{ $a->other }}</textarea>
                                <small>* Contoh : cara memasak , Saran Penyajian</small>
                            </div>
                        </div>

                    </div>
                    <button id="next2Update" class="btn btn-primary">Tahap Selanjutnya</button>
                </div>
            </div>
            {{-- --}}
            <div class="tab-pane fade" id="tab-Updateprofile" role="tabpanel" aria-labelledby="profile-tab">

                <div class="row ">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Nama Perusahaan<span style="color:red">*</span></label>
                            <input class="form-control mb-3 @error('namaUsaha') is-invalid @enderror" type="text"
                                name="namaUsaha" id="namaUsaha" placeholder="Nama Perusahaan"
                                value="{{ $a->namaUsaha }}">
                        </div>
                    </div>
                    <br>
                    <div class="position-relative">
                        <hr class="bg-200 mt-5 mb-4">
                        <div class="divider-content-center">Perijinan</div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label">Nomor NIB</label>
                            <input class="form-control mb-3" type="text" name="noNIB" id="noNIB" placeholder="NIB"
                                value="{{ $a->noNIB }}">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Nomor SP - IRT</label>
                            <input class="form-control mb-3" type="text" name="noPIRT" id="noPIRT" placeholder="SP-IRT"
                                value="{{ $a->noPIRT }}">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Layak Sehat</label>
                            <input class="form-control mb-3" type="text" name="noLayakSehat" id="noLayakSehat"
                                placeholder="Layak Sehat" value="{{ $a->noLayakSehat }}">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Halal</label>
                            <input class="form-control mb-3" type="text" name="noHalal" id="noHalal" placeholder="Halal"
                                value="{{ $a->noHalal }}">
                        </div>
                        <div class="form-group">
                            <label class="form-label">CPPOB</label>
                            <input class="form-control mb-3" type="text" name="CPPOB" id="CPPOB" placeholder="CPPOB"
                                value="{{ $a->CPPOB }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label">ISO</label>
                            <input class="form-control mb-3" type="text" name="noISO" id="noISO" placeholder="ISO"
                                value="{{ $a->noISO }}">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Hak Merek (HAKI)</label>
                            <input class="form-control mb-3" type="text" name="noHAKI" id="noHAKI"
                                placeholder="Hak Merek" value="{{ $a->noHAKI }}">
                        </div>
                        <div class="form-group">
                            <label class="form-label">HACCP</label>
                            <input class="form-control mb-3" type="text" name="HACCP" id="HACCP" placeholder="HACCP"
                                value="{{ $a->HACCP }}">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Legalitas Lainnya</label>
                            <textarea class="form-control mb-3" type="text" name="legalitasLain" id="legalitasLain"
                                placeholder="Legalitas Lainnya">{{ $a->legalitasLain }}</textarea>
                            <small>* Catatan: Kosongkan Jika tidak memiliki legalitas atau sertifikasi</small>
                        </div>
                    </div>
                    {{-- id_project --}}
                    <input type="text" name="id_Project" id="id_Project" value="{{ $project->id }}" hidden>
                    {{-- end --}}
                </div>
               
</form>
</div>

</div>
@endforeach
{{-- script provinsi untuk Update Member --}}
<script>
    $(function(){
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
        });
  
        $(function (){
            $('#provinsiUpdate').on('change',function(){
                let id_provinsi = $('#provinsiUpdate').val();
                
                $.ajax({
                    type : 'POST',
                    url : "{{route('getkabupatenUpdate')}}",
                    data : {id_provinsi:id_provinsi},
                    cache : false,
  
                    success: function(msg){
                        $('#kabupatenUpdate').html(msg);
                        $('#kecamatanUpdate').html('');
                        $('#desaUpdate').html('');
                    },
                    error: function(data) {
                        console.log('error:',data)
                    },
                })
            })
  
  
            $('#kabupatenUpdate').on('change',function(){
                let id_kabupaten = $('#kabupatenUpdate').val();
              
                $.ajax({
                    type : 'POST',
                    url : "{{route('getkecamatanUpdate')}}",
                    data : {id_kabupaten:id_kabupaten},
                    cache : false,
  
                    success: function(msg){
                        $('#kecamatanUpdate').html(msg);
                        $('#desaUpdate').html('');
                       
                        
                    },
                    error: function(data) {
                        console.log('error:',data)
                    },
                })
            })
  
            $('#kecamatanUpdate').on('change',function(){
                let id_kecamatan = $('#kecamatanUpdate').val();
               
                $.ajax({
                    type : 'POST',
                    url : "{{route('getdesaUpdate')}}",
                    data : {id_kecamatan:id_kecamatan},
                    cache : false,
  
                    success: function(msg){
                        $('#desaUpdate').html(msg);
                       
                        
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
    $('.js-example-basic-single-Update').select2();
        $(document).ready(function(){
                  $('#next1Update').click(function(e){
                      e.preventDefault();
                      $('#myTab a[href="#tab-Updatehome"]').tab('show');
                  });
                  $('#next2Update').click(function(e){
                      e.preventDefault();
                      $('#myTab a[href="#tab-Updateprofile"]').tab('show');
                  });
              });
</script>
@endsection