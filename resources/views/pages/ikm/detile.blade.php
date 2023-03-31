@extends('layout.main')
@section('container')
@foreach ($ikm as $ikm)
<div class="card cover-image my-5">
  <div
    class="card-header hover-actions-trigger d-flex justify-content-center align-items-end position-relative mb-7 mb-xxl-0"
    style="min-height: 214px; ">
    <div class="bg-holder" style="background-image:url({{ asset('assets/img/generic/26.png') }});"></div><input
      class="d-none" id="upload-cover-image" type="file"><label class="cover-image-file-input"
      for="upload-cover-image"></label>
    <div class="hover-actions end-0 bottom-0 pe-1 pb-2 text-white"><svg
        class="svg-inline--fa fa-camera me-2 overlay-icon" aria-hidden="true" focusable="false" data-prefix="fas"
        data-icon="camera" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
        <path fill="currentColor"
          d="M194.6 32H317.4C338.1 32 356.4 45.22 362.9 64.82L373.3 96H448C483.3 96 512 124.7 512 160V416C512 451.3 483.3 480 448 480H64C28.65 480 0 451.3 0 416V160C0 124.7 28.65 96 64 96H138.7L149.1 64.82C155.6 45.22 173.9 32 194.6 32H194.6zM256 384C309 384 352 341 352 288C352 234.1 309 192 256 192C202.1 192 160 234.1 160 288C160 341 202.1 384 256 384z">
        </path>
      </svg><!-- <span class="fa-solid fa-camera me-2 overlay-icon"> </span> Font Awesome fontawesome.com -->
    </div>
    <!--/.bg-holder-->
    <div class="avatar avatar-5xl feed-profile">
      @if ($ikm->gambar)
      <a data-bs-toggle="modal" data-bs-target="#UpdatePicture">
        <img class="rounded-circle bg-white img-thumbnail shadow-sm" src="{{ asset('storage/'.$ikm->gambar) }}"
          width="150" height="150" alt="">
      </a>
      @else
      <a data-bs-toggle="modal" data-bs-target="#UpdatePicture">
        <img class="rounded-circle bg-white img-thumbnail shadow-sm" src="{{ asset('assets/img/default_user.png') }}"
          width="150" height="150" alt="">
      </a>
      @endif

    </div>
  </div>
  <div class="card-body">
    <div class="row justify-content-xl-between">
      <small>Nama : </small>
      <div class="col-auto">
        <div class="d-flex flex-wrap mb-3 align-items-center">

          <h2 class="me-2">{{ $ikm->nama}}</h2><br><span class="fw-semi-bold fs-1 text-1100">/ {{ $ikm->jenisProduk
            }}</span>

        </div>
        <small><span class="fas fa-clock"></span> Joined at : {{ $ikm->created_at->diffForHumans() }}</small>
      </div>
      <div class="col-auto">
        <div class="btn-group">
          <form action="/project/dataikm/{{ $project->id }}/update" method="POST">
            @csrf
            <input type="text" value="{{ $project->id}}" name="getId_project" hidden>
            <input type="text" value="{{ $ikm->id}}" name="getId_IKM" hidden>
            <button class="btn btn-primary"><span class="fas fa-pencil"></span> Edit Data</button>
          </form>
          <a href="/project/dataikm/{{ $project->id }}" class="btn btn-phoenix-secondary me-2 mb-2 mb-sm-0"> Kembali
          </a>
        </div>
      </div>

    </div>
  </div>
</div>
{{-- alert --}}
@include('partials.pesan')
{{-- end Alerrt --}}
<div class="row gy-3 gx5 gx-xxl-6">
  <div class="col-lg-5 col-xl-4">

    <div class="mb-8">
      <div class="d-flex pb-4 align-items-end">
        <h3 class="flex-1 mb-0">Bencmark Produk</h3><a class="btn btn-primary btn-sm" data-bs-toggle="modal"
          data-bs-target="#verticallyCentered"><span class="fas fa-cloud-upload-alt "></span> Upload Bencmark</a>
      </div>

      <div class="row g-3">
        @if ($ikm->bencmark->count())
        @foreach ($ikm->bencmark as $image)
        <div class="col-4">
          <form action="/project/ikms/{{ $image->id }}/deletebencmark" method="post">
            @csrf
            <input type="text" value="{{ $image->gambar }}" name="oldImage" hidden>
            <div class="item" style="max-height:150px; max-width:150px; overflow:hidden; ">
              <button class="notify-badge bg-danger" type="submit">x</button>
              <a data-fslightbox href=" {{ asset('/storage/'.$image->gambar) }} " data-gallery="gallery-photos">
                <img class="w-100 rounded-3 " src="{{ asset('/storage/'.$image->gambar) }}" alt="" srcset=""
                  height="150"></a>
            </div>
          </form>
        </div>

        @endforeach
        @else
        <div class="row g-3">
          <div class="dropzone dropzone-multiple p-0 dz-clickable" id="my-awesome-dropzone"
            data-dropzone="data-dropzone"
            data-options="{&quot;url&quot;:&quot;valid/url&quot;,&quot;maxFiles&quot;:1,&quot;dictDefaultMessage&quot;:&quot;Choose or Drop a file here&quot;}">
            <div class="dz-message" data-dz-message="data-dz-message">
              <div class="dz-message-text"><img class="me-2" src="" width="25" alt="">Photo tidak Ditemukan</div>
            </div>
            <div class="dz-preview dz-preview-multiple m-0 d-flex flex-column"></div>
          </div>
        </div>
        @endif
      </div>

    </div>
    <div class="mb-8">
      <div class="d-flex pb-4 align-items-end">
        <h3 class="flex-1 mb-0">Desain Produk</h3><a class="btn btn-primary btn-sm" data-bs-toggle="modal"
          data-bs-target="#uploadDesign"><span class="fas fa-cloud-upload-alt "></span> Upload Desain Produk</a>
      </div>
      <div class="row g-3">
        @if ($ikm->produkDesign->count())
        @foreach ($ikm->produkDesign as $image)
        <div class="col-4">
          <form action="/project/ikms/{{ $image->id }}/deleteDesain" method="post">
            @csrf
            <input type="text" value="{{ $image->gambar }}" name="oldImage" hidden>
            <div class="item" style="max-height:150px; max-width:150px; overflow:hidden;">
              <button class="notify-badge bg-danger" type="submit">x</button>
              <a data-fslightbox href=" {{ asset('/storage/'.$image->gambar) }} " data-gallery="gallery-photos">
                <img class="w-100 rounded-3" src="{{ asset('/storage/'.$image->gambar) }}" alt="" srcset=""
                  height="150"></a>
            </div>
          </form>
        </div>

        @endforeach
        @else
        <div class="row g-3">
          <div class="dropzone dropzone-multiple p-0 dz-clickable" id="my-awesome-dropzone"
            data-dropzone="data-dropzone"
            data-options="{&quot;url&quot;:&quot;valid/url&quot;,&quot;maxFiles&quot;:1,&quot;dictDefaultMessage&quot;:&quot;Choose or Drop a file here&quot;}">
            <div class="dz-message" data-dz-message="data-dz-message">
              <div class="dz-message-text"><img class="me-2" src="" width="25" alt="">Photo tidak Ditemukan</div>
            </div>
            <div class="dz-preview dz-preview-multiple m-0 d-flex flex-column"></div>
          </div>
        </div>
        @endif
      </div>
    </div>
  </div>
  <div class="col-lg-7 col-xl-8">
    <div class="py-1">
      <div class="card mb-5">
        <div class="card-body">
          <!-- Nav tabs -->

          <ul class="nav nav-underline " id="myTab" role="tablist">

            <li class="nav-item" role="presentation"><a class="nav-link " id="home-tab" data-bs-toggle="tab"
                href="#tab-info" role="tab" aria-controls="tab-home" aria-selected="false" tabindex="-1"><i
                  data-feather="user"></i>
                IKM</a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" id="home-tab" data-bs-toggle="tab"
                href="#tab-home" role="tab" aria-controls="tab-home" aria-selected="false" tabindex="-1"><i
                  data-feather="box"></i>
                Produk</a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" id="profile-tab" data-bs-toggle="tab"
                href="#tab-profile" role="tab" aria-controls="tab-profile" aria-selected="false" tabindex="-1"><i
                  data-feather="command"></i> Legalitas
              </a></li>

            <li class="nav-item" role="presentation"><a class="nav-link  active" id="bencmark-tab" data-bs-toggle="tab"
                href="#tab-bencmark" role="tab" aria-controls="tab-bencmark" aria-selected="false" tabindex="-1"><i
                  data-feather="file"></i> Brainstorming</a></li>
            <li class="nav-item" role="presentation"><a class="nav-link " id="cots-tab" data-bs-toggle="tab"
                href="#tab-cots" role="tab" aria-controls="tab-cots " aria-selected="false" tabindex="-1"><i
                  data-feather="home"></i> Coaching on The Spot (COTS)</a></li>

          </ul>
          <div class="tab-content mt-3" id="myTabContent">
            <div class="tab-pane fade  " id="tab-info" role="tabpanel" aria-labelledby="home-tab">
              <div id="London" class="tabcontent" style="display: block;">
                <form action="/project/dataikm/createIkm" method="post">
                  @csrf
                  <div class="section1">
                    <input type="text" name="gambar" hidden>
                    <div class="row g-3 mb-3">
                      <div class="col-md-6">
                        <label class="form-label" for="provinsi">Nama Lengkap<span style="color:red">*</span></label>
                        <input class="form-control @error('nama') is-invalid @enderror" id="nama" type="text"
                          placeholder="Nama Lengkap" name="nama" required value="{{ $ikm->nama }}" readonly />
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
                          <input required class="form-control @error('telp') is-invalid @enderror" type="text "
                            placeholder="Nomor Telepon" name="telp" id="telp" value="{{ $ikm->telp }}" readonly />
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
                        <label class="form-label" for="email">Jenis Kelamin<span style="color:red">*</span></label>
                        <select required class="form-control @error('gender') is-invalid @enderror"
                          aria-label="Default select example" name="gender" id="gender" disabled>
                          @if ($ikm->gender==1)
                          <option value="1">Laki - Laki</option>
                          @else
                          <option value="2">Perempuan</option>
                          @endif

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
                          <option value="">{{ $project->NamaProjek }}</option>
                        </select>
                      </div>
                    </div>


                  </div>
                  {{-- section 2 --}}
                  <div class="section2">

                    <div class="mb-3 text-start">
                      <label class="form-label" for="alamat">Alamat<span style="color:red">*</span></label>
                      <input required class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                        name="alamat" type="text" placeholder="Alamat" value="{{ $ikm->alamat }}" readonly />
                    </div>
                    <div class="row g-3 mb-3">
                      <div class="col-md-6">
                        <label class="form-label" for="provinsi">Provinsi<span style="color:red">*</span></label>
                        <select required
                          class="form-control  js-example-basic-single @error('provinsi') is-invalid @enderror"
                          id="provinsi" name="id_provinsi" disabled>
                          <option value="">{{ $ikm->province->name }}</option>
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
                          class="form-control js-example-basic-single @error('kota') is-invalid @enderror" disabled>
                          <option value="">{{ $ikm->regency->name }}</option>

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
                        <select required
                          class="form-select js-example-basic-single @error('kecamatan') is-invalid @enderror"
                          id="kecamatan" name="id_kecamatan" disabled>
                          <option value="">{{ $ikm->district->name }}</option>
                        </select>
                        @error('kecamatan')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                      </div>
                      <div class="col-md-6">
                        <label class="form-label" for="desa">Kelurahan/Desa<span style="color:red">*</span></label>
                        <select required class="form-select js-example-basic-single @error('desa') is-invalid @enderror"
                          id="desa" name="id_desa" disabled>

                          <option value="">{{ $ikm->village->name }}</option>

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
                          <input required class="form-control @error('rt') is-invalid @enderror" id="rt" name="rt"
                            type="text" placeholder="RT" value="{{ $ikm->rt }}" readonly />
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
                          <input required class="form-control @error('rw') is-invalid @enderror" id="rw" name="rw"
                            type="text" placeholder="RW" value="{{ $ikm->rw }}" readonly />
                        </div>
                        @error('rw')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                      </div>
                    </div>


                  </div>

              </div>
            </div>
          </div>

          {{-- --}}
          <div class="tab-content mt-3" id="myTabContent">
            <div class="tab-pane fade " id="tab-home" role="tabpanel" aria-labelledby="home-tab">
              <div id="London" class="tabcontent" style="display: block;">

                <div class="row mg-b-30">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-label ">Jenis Produk <span style="color:red">*</span></label>

                      <input class="form-control mb-3 @error('jenisProduk') is-invalid @enderror" type="text"
                        id="jenisProduk" name="jenisProduk" placeholder="Jenis Produk" value="{{ $ikm->jenisProduk }}"
                        readonly>
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-label">Merk<span style="color:red">*</span> </label>
                      <input class="form-control mb-3" type="text" id="merk" name="merk" placeholder="Merk"
                        value="{{ $ikm->merk }}">
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-label">Tagline<span style="color:red">*</span></label>
                      <input class="form-control mb-3" type="text" id="tagline" name="tagline"
                        placeholder="Tagline Produk" value="{{ $ikm->tagline }}" required>
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-label">Kelebihan Produk<span style="color:red">*</span></label>
                      <input class="form-control mb-3" type="text" id="kelebihan" name="kelebihan"
                        value="{{ $ikm->kelebihan }}" placeholder="Ex : Gurih,Renyah,Non MSG" readonly>
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-label">Gramasi(g) <span style="color:red">*</span></label>
                      <div class="input-group">
                        <input type="text" class="form-control mb-3" id="gramasi" name="gramasi"
                          value="{{ $ikm->gramasi }}" placeholder="Gramasi Produk" readonly>
                        <div class="input-group-append">
                          <span class="input-group-text">gram</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <input type="text" class="form-control mb-3" hidden="" name="gramasi_new" id="gramasi_new">
                  </div>

                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-label">Segmentasi Produk <span style="color:red">*</span></label>
                      <input class="form-control mb-3" type="text" id="segmentasi" name="segmentasi"
                        placeholder="Masukan Segementasi Produk" value="{{ $ikm->segementasi }}" readonly>
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-label">Harga Produk <span style="color:red">*</span></label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Rp.</span>
                        </div>
                        <input type="text" class="form-control mb-3" name="harga" id="harga" placeholder="Harga Produk"
                          value="{{ $ikm->harga }}" readonly>
                      </div>
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-6">
                    <div class="form-group  mb-3">
                      <label class="form-label">Varian Produk <span style="color:red">*</span></label>
                      <textarea rows="4" cols="100" name="varian" class="form-control" id="varian"
                        placeholder="Varian Produk" readonly>{{ $ikm->varian }}</textarea>
                      <small>* Masukan Varian Produk</small>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group mb-3">
                      <label class="form-label">Komposisi Produk <span style="color:red">*</span></label>
                      <textarea rows="4" cols="100" name="komposisi" class="form-control" id="komposisi"
                        placeholder="Komposisi" readonly>{{ $ikm->komposisi }}</textarea>
                      <small>* Masukan Komposisi Produk</small>
                    </div>
                  </div>
                  <div class="row-lg-9">
                    <div class="form-group mb-3">
                      <label class="form-label">Redaksi Produk<span style="color:red">*</span></label>
                      <textarea rows="6" cols="100" name="redaksi" class="form-control " id="redaksi"
                        placeholder="Redaksi Produk">{{ $ikm->redaksi }}</textarea>
                      <small>* Masukan redaksi Produk</small>
                    </div>
                  </div>
                  <div class="row-lg-9">
                    <div class="form-group mb-3">
                      <label class="form-label">Keterangan Lainnya</label>
                      <textarea rows="6" cols="100" name="other" class="form-control " id="other"
                        placeholder="Keterangan Lainnya" readonly>{{ $ikm->other }}</textarea>
                      <small>* Contoh : cara memasak , Saran Penyajian</small>
                    </div>
                  </div>

                </div>

              </div>
            </div>
            {{-- --}}
            <div class="tab-pane fade" id="tab-profile" role="tabpanel" aria-labelledby="profile-tab">

              <div class="row ">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-label">Nama Perusahaan<span style="color:red">*</span></label>
                    <input class="form-control mb-3 @error('namaUsaha') is-invalid @enderror" type="text"
                      name="namaUsaha" id="namaUsaha" placeholder="Nama Perusahaan" value="{{ $ikm->namaUsaha }}"
                      readonly>
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
                      value="{{ $ikm->noNIB }}" readonly>
                  </div>
                  <div class="form-group">
                    <label class="form-label">Nomor SP - IRT</label>
                    <input class="form-control mb-3" type="text" name="noPIRT" id="noPIRT" placeholder="SP-IRT"
                      value="{{ $ikm->noPIRT }}" readonly>
                  </div>
                  <div class="form-group">
                    <label class="form-label">Layak Sehat</label>
                    <input class="form-control mb-3" type="text" name="noLayakSehat" id="noLayakSehat"
                      placeholder="Layak Sehat" value="{{ $ikm->noLayaSehat }}" readonly>
                  </div>
                  <div class="form-group">
                    <label class="form-label">Halal</label>
                    <input class="form-control mb-3" type="text" name="noHalal" id="noHalal" placeholder="Halal"
                      value="{{ $ikm->noHalal }}" readonly>
                  </div>
                  <div class="form-group">
                    <label class="form-label">CPPOB</label>
                    <input class="form-control mb-3" type="text" name="CPPOB" id="CPPOB" placeholder="CPPOB"
                      value="{{ $ikm->CPPOB }}" readonly>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-label">ISO</label>
                    <input class="form-control mb-3" type="text" name="noISO" id="noISO" placeholder="ISO"
                      value="{{ $ikm->noISO }}" readonly>
                  </div>
                  <div class="form-group">
                    <label class="form-label">Hak Merek (HAKI)</label>
                    <input class="form-control mb-3" type="text" name="noHAKI" id="noHAKI" placeholder="Hak Merek"
                      value="{{ $ikm->noHAKI }}" readonly>
                  </div>
                  <div class="form-group">
                    <label class="form-label">HACCP</label>
                    <input class="form-control mb-3" type="text" name="HACCP" id="HACCP" placeholder="HACCP"
                      value="{{ $ikm->HACCP }}" readonly>
                  </div>
                  <div class="form-group">
                    <label class="form-label">Legalitas Lainnya</label>
                    <textarea class="form-control mb-3" type="text" name="legalitasLain" id="legalitasLain"
                      placeholder="Legalitas Lainnya" readonly>{{ $ikm->legalitasLain }}</textarea>
                    <small>* Catatan: Kosongkan Jika tidak memiliki legalitas atau sertifikasi</small>
                  </div>
                </div>
                {{-- id_project --}}
                {{-- <input type="text" name="id_Project" id="id_Project" value="{{ $project->id }}" hidden> --}}
                {{-- end --}}
              </div>

              </form>
            </div>
            <div class="tab-pane fade active show" id="tab-bencmark" role="tabpanel" aria-labelledby="bencmark-tab">

              <div class="row justify-content-between align-items-end g-3 mb-5">
                <div class="col-12 col-sm-auto col-xl-8">
                  <h2 class="mb-0">Form Brainstorming Produk</h2>
                </div>
                <div class="col-12 col-sm-auto col-xl-4">
                  <div class="d-flex"><a href="/report/brainstorming/{{ $ikm->id }}/{{ $ikm->nama }}" target="_blank"
                      class="btn btn-primary px-5 w-100 text-nowrap"><span class="far fa-file-pdf"></span> Export</a>
                  </div>
                </div>
              </div>

              <!-- The toolbar will be rendered in this container. -->
              <div id="toolbar-container"></div>

              <!-- This container will become the editable. -->
              <div id="editor">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Produk</th>
                      <th scope="col">Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Jenis Produk</td>
                      <td>{{ $ikm->jenisProduk}}</td>
                    </tr>
                    <tr>
                      <td>Merk</td>
                      <td>{{ $ikm->merk }}</td>
                    </tr>
                    <tr>
                      <td>Komposisi </td>
                      <td>{{ $ikm->komposisi }}</td>
                    </tr>
                    <tr>
                      <td>Varian Produk</td>
                      <td>{{ $ikm->varian }}</td>
                    </tr>
                    <tr>
                      <td>Kelebihan Produk</td>
                      <td>{{ $ikm->kelebihan }}</td>
                    </tr>
                    <tr>
                      <td>Nama Perusahaan </td>
                      <td>{{ $ikm->namaUsaha }}</td>
                    </tr>
                    <tr>
                      <td>PIRT </td>
                      <td>{{ $ikm->noPIRT }}</td>
                    </tr>
                    <tr>
                      <td>Halal</td>
                      <td>{{ $ikm->noHalal }}</td>
                    </tr>
                    <tr>
                      <td>Legalitas lainnya</td>
                      <td>{{ $ikm->legalitasLain }}</td>
                    </tr>
                    <tr>
                      <td>Saran Penyajian / Keterangan Lainnya </td>
                      <td>{{ $ikm->other }}</td>
                    </tr>

                  </tbody>

                </table>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Produk</th>
                      <th scope="col">Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Segmentasi </td>
                      <td>{{ $ikm->segmentasi }}</td>
                    </tr>
                    <tr>
                      <td>Jenis Kemasan dan Ukuran </td>
                      <td>{{ $ikm->jenisKemasan }}</td>
                    </tr>
                    <tr>
                      <td>Tagline</td>
                      <td>{{ $ikm->tagline }}</td>
                    </tr>
                    <tr>
                      <td>Redaksi</td>
                      <td>{{ $ikm->redaksi }}</td>
                    </tr>
                    <tr>
                      <td>Gramasi</td>
                      <td>{{ $ikm->gramasi }}g</td>
                    </tr>


                  </tbody>
                </table>

              </div>
            </div>

            <div class="tab-pane fade " id="tab-cots" role="tabpanel" aria-labelledby="cots-tab">
              <hr>

              @if ($cots != 0)
              @foreach ($cotsview as $a)
              <form action="/project/ikms/{{ $ikm->id }}/a" method="POST">
                @csrf
                <div class="row justify-content-between align-items-end g-3 mb-5">
                  <div class="col-12 col-sm-auto col-xl-8">
                    <h3>Form COTS</h3>
                    <p> Coaching on The Spot Form </p>
                  </div>

                  <div class="col-12 col-sm-auto col-xl-4">
                    <div class="d-flex ">
                      <a class="btn btn-phoenix-primary px-5 me-2" id="export"
                        href="/report/cots/{{ $ikm->id }}/{{ $ikm->nama }}"> Export</a>
                      <a class="btn btn-primary px-5 w-100 text-nowrap" id="enable">Edit</a>
                    </div>
                    <div class="d-flex">
                      <a class="btn btn-phoenix-primary px-5 me-2" id="batal">Batal</a>
                      <button class="btn btn-primary px-5 w-100 text-nowrap" type="submit" id="simpan">Simpan</button>

                    </div>
                  </div>
                </div>

                <div class="d-flex flex-row-reverse">
                  <ul class="nav nav-underline" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation"><a class="nav-link active" id="informasiIkm-tab"
                        data-bs-toggle="tab" href="#tab-informasiIkm" role="tab" aria-controls="tab-home"
                        aria-selected="true">Langkah 1</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" id="Dokumentasi-tab"
                        data-bs-toggle="tab" href="#tab-Dokumentasi" role="tab" aria-controls="tab-profile"
                        aria-selected="false" tabindex="-1">Langkah
                        2</a>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link" id="contact-tab" data-bs-toggle="tab"
                        href="#tab-contact" role="tab" aria-controls="tab-contact" aria-selected="false"
                        tabindex="-1">Langkah
                        3</a>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link" id="galery-tab" data-bs-toggle="tab"
                        href="#tab-galery" role="tab" aria-controls="tab-galery" aria-selected="false"
                        tabindex="-1">Dokumentasi</a></li>
                  </ul>
                </div>
                <hr class="mt-0">

                <input type="text" name="id_ikm" value="{{ $ikm->id }}" hidden>
                <input type="text" name="id_project" value="{{ $project->id }}" hidden>
                <input type="text" name="id_cots" value="{{ $a->id }}" hidden>
                <div class="tab-content mt-3" id="myTabContent">
                  <div class="tab-pane fade show active" id="tab-informasiIkm" role="tabpanel"
                    aria-labelledby="home-tab">

                    <div class="mb-3">
                      <label for="sejarah" class="form-label">Sejarah Singkat</label>
                      <textarea name="sejarahSingkat" id="sejarahSingkat" cols="30" rows="10" class="form-control"
                        placeholder="(Tahun berdiri dan alasan pendirian usaha)"
                        disabled>{{ $a->sejarahSingkat }}</textarea>
                    </div>
                    <div class="mb-3">
                      <label for="sejarah" class="form-label">Produk yang Dijual Saat ini</label>
                      <textarea name="produkjual" id="produkjual" cols="30" rows="10" class="form-control"
                        placeholder="(Jenis produk, harga, gramasi)" disabled>{{ $a->produkjual }}</textarea>
                    </div>
                    <div class="mb-3">
                      <label for="sejarah" class="form-label">Cara Pemasaran</label>
                      <textarea name="carapemasaran" id="carapemasaran" cols="30" rows="10" class="form-control"
                        placeholder="( Offline dan online)" disabled>{{ $a->carapemasaran }}</textarea>
                    </div>

                  </div>
                  <div class="tab-pane fade" id="tab-Dokumentasi" role="tabpanel" aria-labelledby="Dokumentasi-tab">
                    <div class="mb-3">
                      <label for="sejarah" class="form-label">Bahan Baku</label>
                      <textarea name="bahanbaku" id="bahanbaku" cols="30" rows="10" class="form-control"
                        placeholder="( Sebutkan bahan baku yang dipakai,serta kendala pada bahan baku tersebut )"
                        disabled>{{ $a->bahanbaku }}</textarea>
                    </div>
                    <div class="mb-3">
                      <label for="sejarah" class="form-label">Proses Produksi/Mesin yang digunakan</label>
                      <textarea name="prosesproduksi" id="prosesproduksi" cols="30" rows="10" class="form-control"
                        placeholder="( Jelaskan proses produksi yang dilakukan IKM, dan sebutkan mesin yang terlibat )"
                        disabled>{{ $a->prosesproduksi }}</textarea>
                    </div>
                    <div class="mb-3">
                      <label for="sejarah" class="form-label">Omset</label>
                      <textarea name="omset" id="omset" cols="30" rows="10" class="form-control"
                        placeholder="( Besaran Omset dan Satuan waktu (minggu/bulan/tahun) )"
                        disabled>{{ $a->omset }}</textarea>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="tab-contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="mb-3">
                      <label for="sejarah" class="form-label">Kapasitas Produksi</label>
                      <textarea name="kapasitasProduksi" id="KapasitasProduksi" cols="30" rows="10" class="form-control"
                        placeholder="( Besaran Kapasitas, satuan kapasitas(kg/gram/psc/ml) dan Satuan waktu (minggu/bulan/tahun) )"
                        disabled>{{ $a->kapasitasProduksi }}</textarea>
                    </div>
                    <div class="mb-3">
                      <label for="sejarah" class="form-label">Kendala yang dihadapi saat ini</label>
                      <textarea name="kendala" id="kendala" cols="30" rows="10" class="form-control"
                        placeholder="( kendala yang sedang dihadapi )" disabled>{{ $a->kendala }}</textarea>
                    </div>
                    <div class="mb-3">
                      <label for="sejarah" class="form-label">Solusi yang diberikan tenaga ahli</label>
                      <textarea name="solusi" id="solusi" cols="30" rows="10" class="form-control"
                        placeholder="( solusi tenaga ahli )" disabled> {{ $a->solusi }}</textarea>
                    </div>
                  </div>
              </form>

            </div>


            @endforeach

            @else
            <div class="row g-3">
              <div class="dropzone  p-0 dz-clickable" id="my-awesome-dropzone">
                <div class="dz-message" data-dz-message="data-dz-message">
                  <div class="dz-message-text">Data tidak Ditemukan</div>
                  <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#cotsForm">+ Buat
                    Laporan</button>
                </div>
                <div class="dz-preview dz-preview-multiple m-0 d-flex flex-column"></div>
              </div>
            </div>
            @endif
          </div>
          <div class="tab-pane fade " id="tab-galery" role="tabpanel" aria-labelledby="galery-tab">
            @if ($dokumentasicotscek)
            <div class="mb-8">
              <div class="d-flex pb-4 align-items-end">
                <h3 class="flex-1 mb-0">Dokumentasi Kegiatan</h3><a class="btn btn-primary btn-sm"
                  data-bs-toggle="modal" data-bs-target="#addDokumentasi"><span class="fas fa-cloud-upload-alt "></span>
                  + Tambah Gambar</a>
              </div>
              <div class="row g-3">

                @foreach ($dokumentasicots as $doc)
                @foreach ($doc->gambar as $img)
                <div class="col-12 col-sm-6 col-md-4 col-xxl-3">
                  <div class="btn-reveal-trigger position-relative rounded-3 overflow-hidden p-4"
                    style="height: 236px;">
                    <div class="bg-holder"
                      style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0) 39.41%, rgba(0, 0, 0, 0.4) 100%), url({{ asset('/storage/'.$img) }})">
                    </div>
                    <div class="position-relative h-100 d-flex flex-column justify-content-between">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="z-index-2"><button
                            class="btn btn-icon btn-reveal dropdown-toggle dropdown-caret-none transition-none"
                            type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                            aria-expanded="false" data-bs-reference="parent"><svg
                              class="svg-inline--fa fa-ellipsis-vertical" aria-hidden="true" focusable="false"
                              data-prefix="fas" data-icon="ellipsis-vertical" role="img"
                              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 512" data-fa-i2svg="">
                              <path fill="currentColor"
                                d="M64 360C94.93 360 120 385.1 120 416C120 446.9 94.93 472 64 472C33.07 472 8 446.9 8 416C8 385.1 33.07 360 64 360zM64 200C94.93 200 120 225.1 120 256C120 286.9 94.93 312 64 312C33.07 312 8 286.9 8 256C8 225.1 33.07 200 64 200zM64 152C33.07 152 8 126.9 8 96C8 65.07 33.07 40 64 40C94.93 40 120 65.07 120 96C120 126.9 94.93 152 64 152z">
                              </path>
                            </svg><!-- <span class="fas fa-ellipsis-v"></span> Font Awesome fontawesome.com --></button>
                          <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations">

                            <button class="dropdown-item " type="submit">View </button>
                            <hr>
                            <form action="/project/ikms/{{ $ikm->id }}/deleteDoc" method="POST">

                              @csrf

                              <input type="text" value="{{ $doc->id }}" name="id_gambar" hidden>
                              <input type="text" value="{{ $doc->id_ikm }}" name="id_ikm" hidden>
                              <input type="text" value="{{ $img }}" name="old_gambar" hidden>
                              <button class="dropdown-item text-danger" type="submit">Hapus</button>
                            </form>
                          </div>
                        </div>
                      </div>
                      {{-- <h3 class="text-white light fw-bold line-clamp-2">{{ $project->NamaProjek }}</h3> --}}
                    </div><a data-fslightbox class="stretched-link" href="{{ asset('/storage/'.$img) }}"></a>
                  </div>
                </div>
                @endforeach
                @endforeach


              </div>
            </div>
            @else
            <div class="row g-3">
              <div class="dropzone  p-0 dz-clickable" id="my-awesome-dropzone">
                <div class="dz-message" data-dz-message="data-dz-message">
                  <div class="dz-message-text">Data tidak Ditemukan</div>
                  <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#addDokumentasi">+ Upload
                    Gallery</button>
                </div>
                <div class="dz-preview dz-preview-multiple m-0 d-flex flex-column"></div>
              </div>
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- end Content --}}
</div>
</div>
{{-- modal upload Gallery Cots --}}
<div class="modal fade" id="addDokumentasi" tabindex="-1" aria-labelledby="addDokumentasiModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addDokumentasiModalLabel">Upload Photo Dokumentasi</h5><button class="btn p-1"
          type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs--1"></span></button>
      </div>
      <div class="modal-body">

        <form class="dropzone dropzone-multiple p-0" id="dropzone" data-dropzone="data-dropzone"
          action="/project/ikms/{{ $ikm->id }}/dokumentasi" method="POST" enctype="multipart/form-data">
          @csrf
          <label for="foto" class="form-label">Pilih Photo :</label>
          <input type="text" name="id_ikm" id="id_ikm" value="{{ $ikm->id }}" hidden>
          <input type="text" name="id_project" id="id_project" value="{{ $project->id }}" hidden>
          <input type="file" name="gambar[]" id="gambar" class="form-control">



      </div>
      <div class="modal-footer"><button class="btn btn-primary" type="submit">Upload</button></form><button
          class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</button></div>
    </div>
  </div>
</div>
{{-- modal COTS --}}
<div class="modal fade" id="cotsForm" tabindex="-1" aria-labelledby="cotsFormModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cotsFormModalLabel">Laporan Coaching on The Spot (COTS)</h5><button class="btn p-1"
          type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs--1"></span></button>
      </div>
      <div class="modal-body">
        <div class="alert alert-soft-success" role="alert">


          <div class="row align-items-center g-3 g-sm-5 text-center text-sm-start">
            <div class="col-12 col-sm-auto">
              <div class="avatar avatar-5xl">
                @if ($ikm->gambar)
                <a data-bs-toggle="modal" data-bs-target="#UpdatePicture">
                  <img class="rounded-circle bg-white img-thumbnail shadow-sm"
                    src="{{ asset('storage/'.$ikm->gambar) }}" width="150" height="150" alt="">
                </a>
                @else
                <a data-bs-toggle="modal" data-bs-target="#UpdatePicture">
                  <img class="rounded-circle bg-white img-thumbnail shadow-sm"
                    src="{{ asset('assets/img/default_user.png') }}" width="150" height="150" alt="">
                </a>
                @endif
              </div>
            </div>
            <div class="col-12 col-sm-auto flex-1">
              <h3 class="alert-heading fw-semi-bold">{{ $ikm->nama }}</h3>
              <hr>
              <li style="list-style:none;">Nama Produk : {{ $ikm->nama }}</li>
              <li style="list-style:none;">Merk : {{ $ikm->merk }}</li>
              <li style="list-style:none;">Alamat : {{ $ikm->alamat }}, Kecamatan {{ $ikm->district->name }}, Kota {{
                $ikm->regency->name }}, Provinsi {{ $ikm->province->name }}</li>
              <li style="list-style:none;">No Handphone : {{ $ikm->telp }}</li>

            </div>
          </div>

        </div>

        <ul class="nav nav-underline" id="myTab" role="tablist">
          <li class="nav-item" role="presentation"><a class="nav-link active" id="informasiIkm-tab" data-bs-toggle="tab"
              href="#tab-informasiIkm" role="tab" aria-controls="tab-home" aria-selected="true">Langkah 1</a></li>
          <li class="nav-item" role="presentation"><a class="nav-link" id="Dokumentasi-tab" data-bs-toggle="tab"
              href="#tab-Dokumentasi" role="tab" aria-controls="tab-profile" aria-selected="false" tabindex="-1">Langkah
              2</a></li>
          <li class="nav-item" role="presentation"><a class="nav-link" id="contact-tab" data-bs-toggle="tab"
              href="#tab-contact" role="tab" aria-controls="tab-contact" aria-selected="false" tabindex="-1">Langkah
              3</a></li>

        </ul>
        <form action="/project/ikms/{{ $ikm->id }}/cots" method="post">
          @csrf
          <input type="text" name="id_ikm" value="{{ $ikm->id }}" hidden>
          <input type="text" name="id_project" value="{{ $project->id }}" hidden>
          <div class="tab-content mt-3" id="myTabContent">
            <div class="tab-pane fade show active" id="tab-informasiIkm" role="tabpanel" aria-labelledby="home-tab">
              <form action="" method="post">
                <div class="mb-3">
                  <label for="sejarah" class="form-label">Sejarah Singkat<span style="color:red">*</span></label>
                  <textarea name="sejarahSingkat" id="sejarahSingkat" cols="30" rows="10"
                    class="form-control @error('sejarahSingkat') is-invalid @enderror"
                    placeholder="(Tahun berdiri dan alasan pendirian usaha)">{{ old('sejarahSingkat') }}</textarea>
                  @error('sejarahSingkat')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="sejarah" class="form-label">Produk yang Dijual Saat ini<span
                      style="color:red">*</span></label>
                  <textarea name="produkjual" id="produkjual" cols="30" rows="10"
                    class="form-control @error('produkjual') is-invalid @enderror"
                    placeholder="(Jenis produk, harga, gramasi)">{{ old('produkjual') }}</textarea>
                  @error('produkjual')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="sejarah" class="form-label">Cara Pemasaran<span style="color:red">*</span></label>
                  <textarea name="carapemasaran" id="carapemasaran" cols="30" rows="10"
                    class="form-control @error('carapemasaran') is-invalid @enderror"
                    placeholder="( Offline dan online)">{{ old('carapemasaran') }}</textarea>
                  @error('carapemasaran')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <a id="next1" class="btn btn-primary">Langkah Selanjutnya</a>
            </div>
            <div class="tab-pane fade" id="tab-Dokumentasi" role="tabpanel" aria-labelledby="Dokumentasi-tab">
              <div class="mb-3">
                <label for="sejarah" class="form-label">Bahan Baku<span style="color:red">*</span></label>
                <textarea name="bahanbaku" id="bahanbaku" cols="30" rows="10"
                  class="form-control @error('bahanbaku') is-invalid @enderror"
                  placeholder="( Sebutkan bahan baku yang dipakai,serta kendala pada bahan baku tersebut )">{{ old('bahanbaku') }}</textarea>
                @error('bahanbaku')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="sejarah" class="form-label">Proses Produksi/Mesin yang digunakan<span
                    style="color:red">*</span></label>
                <textarea name="prosesproduksi" id="prosesproduksi" cols="30" rows="10"
                  class="form-control  @error('prosesproduksi') is-invalid @enderror"
                  placeholder="( Jelaskan proses produksi yang dilakukan IKM, dan sebutkan mesin yang terlibat )">{{ old('prosesproduksi') }}</textarea>
                @error('prosesproduksi')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="sejarah" class="form-label">Omset<span style="color:red">*</span></label>
                <textarea name="omset" id="omset" cols="30" rows="10"
                  class="form-control @error('omset') is-invalid @enderror"
                  placeholder="( Besaran Omset dan Satuan waktu (minggu/bulan/tahun) )">{{ old('omset') }}</textarea>
                @error('omset')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <a id="next2" class="btn btn-primary">Langkah Selanjutnya</a>
            </div>
            <div class="tab-pane fade" id="tab-contact" role="tabpanel" aria-labelledby="contact-tab">
              <div class="mb-3">
                <label for="sejarah" class="form-label">Kapasitas Produksi<span style="color:red">*</span></label>
                <textarea name="kapasitasProduksi" id="KapasitasProduksi" cols="30" rows="10"
                  class="form-control @error('kapasitasProduksi') is-invalid @enderror"
                  placeholder="( Besaran Kapasitas, satuan kapasitas(kg/gram/psc/ml) dan Satuan waktu (minggu/bulan/tahun) )">{{ old('kapasitasProduksi') }}</textarea>
                @error('kapasitasProduksi')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="sejarah" class="form-label">Kendala yang dihadapi saat ini<span
                    style="color:red">*</span></label>
                <textarea name="kendala" id="kendala" cols="30" rows="10"
                  class="form-control @error('kendala') is-invalid @enderror"
                  placeholder="( kendala yang sedang dihadapi )">{{ old('kendala') }}</textarea>
                @error('kendala')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="sejarah" class="form-label">Solusi yang diberikan tenaga ahli<span
                    style="color:red">*</span></label>
                <textarea name="solusi" id="solusi" cols="30" rows="10"
                  class="form-control @error('solusi') is-invalid @enderror"
                  placeholder="( solusi tenaga ahli )">{{ old('solusi') }}</textarea>
                @error('solusi')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <a id="next3" class="btn btn-primary">Langkah Selanjutnya</a>
            </div>
          </div>

      </div>
      <div class="modal-footer"><button class="btn btn-primary" type="submit" id="save">Simpan Data</button></form><button
          class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</button></div>
    </div>
  </div>
</div>
{{-- end Modal COTS --}}
{{-- modal --}}
<div class="modal fade" id="verticallyCentered" tabindex="-1" aria-labelledby="verticallyCenteredModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="verticallyCenteredModalLabel">Upload Bencmark Produk</h5><button class="btn p-1"
          type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs--1"></span></button>
      </div>
      <div class="modal-body">
        <form action="/project/ikms/{{ encrypt($ikm->id )}}/bencmark" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="text" name="id_ikm" id="id_ikm" value="{{ $ikm->id }}" hidden>
          <input type="text" name="id_Project" id="id_Project" value="{{ $project->id }}" hidden>
          <input name="gambar" type="file" class="form-control" />
      </div>
      <div class="modal-footer"><button class="btn btn-primary" type="submit">Upload</button></form><button
          class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</button></div>
    </div>
  </div>
</div>
{{-- upload Design --}}
<div class="modal fade" id="uploadDesign" tabindex="-1" aria-labelledby="uploadDesignModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="uploadDesignModalLabel">Upload Desain Produk</h5><button class="btn p-1"
          type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs--1"></span></button>
      </div>
      <div class="modal-body">
        <form action="/project/ikms/{{ encrypt($ikm->id )}}/tambahDesain" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="text" name="id_ikm" id="id_ikm" value="{{ $ikm->id }}" hidden>
          <input type="text" name="id_project" id="id_Project" value="{{ $project->id }}" hidden>
          <input name="gambar" type="file" class="form-control" />
      </div>
      <div class="modal-footer"><button class="btn btn-primary" type="submit">Upload</button></form><button
          class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</button></div>
    </div>
  </div>
</div>
{{-- end Upload Design --}}
{{-- modal Update Pict --}}
<div class="modal fade" id="UpdatePicture" tabindex="-1" aria-labelledby="UpdatePictureModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="UpdatePictureModalLabel">Ubah Foto IKM</h5><button class="btn p-1" type="button"
          data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs--1"></span></button>
      </div>
      <div class="modal-body">
        <form action="/project/ikms/{{ $ikm->id }}/update" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="text" name="id_projek" value="{{ $project->id }}" hidden>
          <input type="text" name="id_ikm" id="id_ikm" value="{{ $ikm->id }}" hidden>
          <input type="file" name="gambar" id="gambar" class="form-control" onchange="previewImage()">
          <input type="text" name="oldImage" id="old-image" value="{{ $ikm->gambar }}" hidden>
          <div class="my-3">
            <!--<small>Image Preview :</small>-->
            <!--<img src="" alt="" class="img-preview img-fluid " width="200">-->
          </div>
      </div>
      <div class="modal-footer"><button class="btn btn-primary" type="submit" >Simpan</button></form><button
          class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</button></div>
    </div>
  </div>
</div>

@endforeach

<script>
  $(document).ready(function(){
  $("#simpan").hide();
  $("#batal").hide();
  $("#enable").click(function(){
    $("#simpan").show();
    $("#batal").show();
    $("#enable").hide();
    $("#export").hide();
    document.getElementById("sejarahSingkat").disabled = false;
    document.getElementById("produkjual").disabled = false;
    document.getElementById("carapemasaran").disabled = false;
    document.getElementById("bahanbaku").disabled = false;
    document.getElementById("prosesproduksi").disabled = false;
    document.getElementById("omset").disabled = false;
    document.getElementById("KapasitasProduksi").disabled = false;
    document.getElementById("kendala").disabled = false;
    document.getElementById("solusi").disabled = false;

  });
  $("#batal").click(function(){
    $("#simpan").hide();
    $("#batal").hide();
    $("#enable").show();
    $("#export").show();
    document.getElementById("sejarahSingkat").disabled = true;
    document.getElementById("produkjual").disabled = true;
    document.getElementById("carapemasaran").disabled = true;
    document.getElementById("bahanbaku").disabled = true;
    document.getElementById("prosesproduksi").disabled = true;
    document.getElementById("omset").disabled = true;
    document.getElementById("KapasitasProduksi").disabled = true;
    document.getElementById("kendala").disabled = true;
    document.getElementById("solusi").disabled = true;
  });
});
</script>

<script>
  function previewImage(){
    const image = document.querySelector('#gambar');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display ='block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[1]);

    oFReader.onload = function(oFREvent){
        imgPreview.src =oFREvent.target.result;
    }

}
</script>
<script>
  DecoupledEditor
      .create( document.querySelector( '#editor' ) )
      .then( editor => {
          const toolbarContainer = document.querySelector( '#toolbar-container' );

          toolbarContainer.appendChild( editor.ui.view.toolbar.element );
      } )
      .catch( error => {
          console.error( error );
      } );
</script>
<script>
  $('#save').hide();
  $('#next1').click(function(e){
   e.preventDefault();
      $('#myTab a[href="#tab-Dokumentasi"]').tab('show');
  });
  $('#next2').click(function(e){
   e.preventDefault();
      $('#myTab a[href="#tab-contact"]').tab('show');
  });
  $('#next3').click(function(){
    $('#save').show();
  });
</script>
@endsection