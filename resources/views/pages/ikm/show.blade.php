@extends('layout.main')
@section('container')

<h2 class="text-bold text-1100 mb-5">DATA IKM {{ $project->NamaProjek }}</h2>
<div id="members"
  data-list="{&quot;valueNames&quot;:[&quot;customer&quot;,&quot;email&quot;,&quot;mobile_number&quot;,&quot;city&quot;,&quot;last_active&quot;,&quot;joined&quot;],&quot;page&quot;:10,&quot;pagination&quot;:true}">
  <div class="row align-items-center justify-content-between g-3 mb-3">
    <div class="col col-auto">
      <div class="search-box">
        <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
            class="form-control search-input search" type="search" placeholder="Search members" aria-label="Search" >
          <svg class="svg-inline--fa fa-magnifying-glass search-box-icon" aria-hidden="true" focusable="false"
            data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 512 512" data-fa-i2svg="">
            <path fill="currentColor"
              d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z">
            </path>
          </svg><!-- <span class="fas fa-search search-box-icon"></span> Font Awesome fontawesome.com -->
        </form>
      </div>
    </div>
    <div class="col-auto">

      <div class="d-flex align-items-center">
        <a class="btn btn-link text-900 me-4 px-0" href="/report/ikms/{{ $project->id }}/{{ $project->NamaProjek }}"><svg
            class="svg-inline--fa fa-file-export fs--1 me-2" aria-hidden="true" focusable="false" data-prefix="fas"
            data-icon="file-export" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
            data-fa-i2svg="">
            <path fill="currentColor"
              d="M192 312C192 298.8 202.8 288 216 288H384V160H256c-17.67 0-32-14.33-32-32L224 0H48C21.49 0 0 21.49 0 48v416C0 490.5 21.49 512 48 512h288c26.51 0 48-21.49 48-48v-128H216C202.8 336 192 325.3 192 312zM256 0v128h128L256 0zM568.1 295l-80-80c-9.375-9.375-24.56-9.375-33.94 0s-9.375 24.56 0 33.94L494.1 288H384v48h110.1l-39.03 39.03C450.3 379.7 448 385.8 448 392s2.344 12.28 7.031 16.97c9.375 9.375 24.56 9.375 33.94 0l80-80C578.3 319.6 578.3 304.4 568.1 295z">
            </path>
          </svg>

          <!-- <span class="fa-solid fa-file-export fs--1 me-2"></span> Font Awesome fontawesome.com -->Export</a>
        <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addMember"><svg
            class="svg-inline--fa fa-plus me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus"
            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
            <path fill="currentColor"
              d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z">
            </path>
          </svg><!-- <span class="fas fa-plus me-2"></span> Font Awesome fontawesome.com -->Add member</a>
      </div>
    </div>
  </div>
  @include('partials.pesan')
  <div class="mx-n4 mx-lg-n6 px-4 px-lg-6 mb-9 bg-white border-y border-300 mt-2 position-relative top-1">
    <div class="table-responsive scrollbar ms-n1 ps-1">
      <table class="table table-sm fs--1 mb-0">
        <thead>
          <tr>
            <th class="white-space-nowrap " style="width:2%; min-width:20px;">
              #
            </th>
            <th class="sort align-middle" scope="col" data-sort="customer" style="width:15%; min-width:300px;">NAMA
              KENGKAP</th>
            <th class="sort align-middle" scope="col" data-sort="email" style="width:15%; min-width:100px;">JENIS PRODUK
            </th>
            <th class="sort align-middle" scope="col" data-sort="email" style="width:15%; min-width:100px;">MERK</th>
            <th class="sort align-middle pe-3" scope="col" data-sort="mobile_number"
              style="width:10%; min-width:200px;">TELEPON</th>
        
            <th class="sort align-middle">PERUSAHAAN</th>
           
            <th class="sort align-middle text-end pe-0" scope="col" data-sort="joined"
              style="width:19%;  min-width:100px;">Action</th>
          </tr>
        </thead>
       
        <tbody class="list" id="table-latest-review-body">
          @php $no = 1; @endphp
          @foreach ($dataIkm as $data)
          <tr class="hover-actions-trigger btn-reveal-trigger position-static">
            <td class="fs--1 align-middle ps-0 py-3">
             
             {{ $no++ }}
            </td>
            <td class="customer align-middle white-space-nowrap"><a
                class="d-flex align-items-center text-900 text-hover-1000" href="/project/ikms/{{ encrypt($data->id) }}/{{ $project->id }}">
                <div class="avatar avatar-m">
                  @if ($data->gambar)
                  <img class="rounded-circle" src="{{ asset('storage/'.$data->gambar) }}"alt="">
                  @else
                  <img class="rounded-circle" src="{{ asset('assets/img/default_user.png') }}"alt="">
                  @endif
                 
                </div>
                <h6 class="mb-0 ms-3 fw-semi-bold">{{ $data->nama }}</h6>
              </a></td>
            <td class="email align-middle white-space-nowrap">
              {{ $data->jenisProduk }}
            </td>
            <td class="customer align-middle white-space-nowrap"> {{ $data->merk }}</td>
            <td class="mobile_number align-middle white-space-nowrap"><a class="fw-bold text-1100"
                href="https://wa.me/{{ $data->telp }}" target="_blank">{{ $data->telp }}</a></td>
         
            <td class="city align-middle white-space-nowrap text-900">{{ $data->namaUsaha }}</td>
           
            <td class="joined align-middle white-space-nowrap text-700 text-end">
              <!-- Example split danger button -->
                <button type="button" class="btn  dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  :
                </button>
                <ul class="dropdown-menu" >
                  <li>
                    {{-- <form action="/project/ikms/{{ $data->id }}" method="POST">
                    @csrf
                      <input type="text" value="{{ $project->id}}" name="getId_project" hidden>
                      <input type="text" value="{{ $data->id}}" name="getId_IKM" hidden>
                      <button type="submit" class="dropdown-item"> Detile</button>
                    </form> --}}
                    <a class="dropdown-item" href="/project/ikms/{{ encrypt($data->id) }}/{{ $project->id }}"> Detile</a>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li>
                    <form action="/project/dataikm/{{ $project->id }}/update" method="POST">
                    @csrf
                      <input type="text" value="{{ $data->id_provinsi }}" name="getId_provinsi" hidden>
                      <input type="text" value="{{ $data->id_kota }}" name="getId_kota" hidden>
                      <input type="text" value="{{ $data->id_kecamatan }}" name="getId_kecamatan" hidden>
                      <input type="text" value="{{ $data->id_desa}}" name="getId_desa" hidden>
                      <input type="text" value="{{ $project->id}}" name="getId_project" hidden>
                      <input type="text" value="{{ $data->id}}" name="getId_IKM" hidden>
                      <input type="text" value="{{ $project->NamaProjek}}" name="get_Nmproject" hidden>
                      <button class="dropdown-item">Ubah</button>
                    </form>
                     </li>
                  <li>
                 <form action="/project/dataikm/{{ $project->id }}/delete" method="post">
                      @csrf
                      <input type="text" value="{{ $data->id }}" name="id_ikm" hidden>
                      <input type="text" value="{{ $project->id }}" name="id_Project" hidden>
                      <button class="dropdown-item" onclick="return confirm('Anda Yakin data ini akan dihapus?')">Hapus</button></li>
                    </form>
                   
                </ul>
              
            </td>
          </tr>
          @endforeach

        </tbody>
      </table>
    </div>
    <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
      <div class="col-auto d-flex">
        <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info">1 to 10 <span
            class="text-600"> Items of </span>15</p><a class="fw-semi-bold" href="#!" data-list-view="*">View all<svg
            class="svg-inline--fa fa-angle-right ms-1" data-fa-transform="down-1" aria-hidden="true" focusable="false"
            data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 256 512" data-fa-i2svg="" style="transform-origin: 0.25em 0.5625em;">
            <g transform="translate(128 256)">
              <g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)">
                <path fill="currentColor"
                  d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"
                  transform="translate(-128 -256)"></path>
              </g>
            </g>
          </svg>
          <!-- <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span> Font Awesome fontawesome.com --></a><a
          class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less<svg
            class="svg-inline--fa fa-angle-right ms-1" data-fa-transform="down-1" aria-hidden="true" focusable="false"
            data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 256 512" data-fa-i2svg="" style="transform-origin: 0.25em 0.5625em;">
            <g transform="translate(128 256)">
              <g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)">
                <path fill="currentColor"
                  d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"
                  transform="translate(-128 -256)"></path>
              </g>
            </g>
          </svg>
          <!-- <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span> Font Awesome fontawesome.com --></a>
      </div>
      <div class="col-auto d-flex"><button class="page-link disabled" data-list-pagination="prev" disabled=""><svg
            class="svg-inline--fa fa-chevron-left" aria-hidden="true" focusable="false" data-prefix="fas"
            data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
            data-fa-i2svg="">
            <path fill="currentColor"
              d="M224 480c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25l192-192c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l169.4 169.4c12.5 12.5 12.5 32.75 0 45.25C240.4 476.9 232.2 480 224 480z">
            </path>
          </svg><!-- <span class="fas fa-chevron-left"></span> Font Awesome fontawesome.com --></button>
        <ul class="mb-0 pagination">
          <li class="active"><button class="page" type="button" data-i="1" data-page="10">1</button></li>
          <li><button class="page" type="button" data-i="2" data-page="10">2</button></li>
        </ul><button class="page-link pe-0" data-list-pagination="next"><svg class="svg-inline--fa fa-chevron-right"
            aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
            <path fill="currentColor"
              d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z">
            </path>
          </svg><!-- <span class="fas fa-chevron-right"></span> Font Awesome fontawesome.com --></button>
      </div>
    </div>
  </div>
</div>

{{-- modal add Member --}}
<div class="modal fade" id="addMember" tabindex="-1" aria-labelledby="addMemberModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-center modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addMemberModalLabel">Form Brainstorming</h5><button class="btn p-1" type="button"
          data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs--1"></span></button>
      </div>
      <div class="modal-body">
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif

        <div class="py-1">
          <ul class="nav nav-underline "  id="myTab" role="tablist" >
            
            <li class="nav-item" role="presentation"><a class="nav-link active" id="home-tab" data-bs-toggle="tab"
                href="#tab-info" role="tab" aria-controls="tab-home" aria-selected="false" tabindex="-1"><i
                  data-feather="user"></i> Infomasi
                IKM</a></li>
            <li class="nav-item" role="presentation"><a class="nav-link " id="home-tab" data-bs-toggle="tab"
                href="#tab-home" role="tab" aria-controls="tab-home" aria-selected="false" tabindex="-1"><i
                  data-feather="box"></i> Infomasi
                Produk</a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" id="profile-tab" data-bs-toggle="tab"
                href="#tab-profile" role="tab" aria-controls="tab-profile" aria-selected="false" tabindex="-1"><i
                  data-feather="command"></i> Legalitas
                / Informasi</a></li>
           
          </ul>
          <div class="tab-content mt-3" id="myTabContent">
            <div class="tab-pane fade  active show" id="tab-info" role="tabpanel" aria-labelledby="home-tab">
              <div id="London" class="tabcontent" style="display: block;">
                <form action="/project/dataikm/createIkm" method="post">
                  @csrf
                  <div class="section1">
                    <input type="text" name="gambar" hidden>
                    <div class="row g-3 mb-3">
                      <div class="col-md-6">
                        <label class="form-label" for="provinsi">Nama Lengkap<span style="color:red">*</span></label>
                        <input  class="form-control @error('nama') is-invalid @enderror" id="nama" type="text"
                          placeholder="Nama Lengkap" name="nama" required value="{{ old('nama') }}" />
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
                            placeholder="Nomor Telepon" name="telp" id="telp" value="{{ old('telp') }}" />
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
                          aria-label="Default select example" name="gender" id="gender">
                          <option value="">-Pilih Gender-</option>
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
                        name="alamat" type="text" placeholder="Alamat" value="{{ old('alamat') }}" />
                    </div>
                    <div class="row g-3 mb-3">
                      <div class="col-md-6">
                        <label class="form-label" for="provinsi">Provinsi<span style="color:red">*</span></label>
                        <select required
                          class="form-control  js-example-basic-single @error('provinsi') is-invalid @enderror"
                          id="provinsi" name="id_provinsi">
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
                        <select required
                          class="form-select js-example-basic-single @error('kecamatan') is-invalid @enderror"
                          id="kecamatan" name="id_kecamatan">
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
                        <select required class="form-select js-example-basic-single @error('desa') is-invalid @enderror"
                          id="desa" name="id_desa">
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
                          <input required class="form-control @error('rt') is-invalid @enderror" id="rt" name="rt"
                            type="text" placeholder="RT" value="{{ old('rt') }}" />
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
                            type="text" placeholder="RW" value="{{ old('rw') }}" />
                        </div>
                        @error('rw')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                      </div>
                    </div>
                   
                    <button id="next1" class="btn btn-primary">Tahap Selanjutnya</button>
                  </div>

              </div>
            </div>
          </div>

          {{-- --}}
          <div class="tab-content mt-3" id="myTabContent">
            <div class="tab-pane fade  " id="tab-home" role="tabpanel" aria-labelledby="home-tab">
              <div id="London" class="tabcontent" style="display: block;">

                <div class="row mg-b-30">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-label ">Jenis Produk <span style="color:red">*</span></label>

                      <input class="form-control mb-3 @error('jenisProduk') is-invalid @enderror" type="text" id="jenisProduk" name="jenisProduk"
                        placeholder="Jenis Produk" value="{{ old('jenisProduk') }}">
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-label">Merk<span style="color:red">*</span> </label>
                      <input class="form-control mb-3" type="text" id="merk" name="merk" placeholder="Merk" value="{{ old('merk') }}">
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-label">Tagline<span style="color:red">*</span></label>
                      <input class="form-control mb-3" type="text" id="tagline" name="tagline" placeholder="Tagline Produk" value="{{ old('tagline') }}" required>
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-label">Kelebihan Produk<span style="color:red">*</span></label>
                      <input class="form-control mb-3" type="text" id="kelebihan" name="kelebihan" value="{{ old('kelebihan') }}" placeholder="Ex : Gurih,Renyah,Non MSG">
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-label">Gramasi(g) <span style="color:red">*</span></label>
                      <div class="input-group">
                        <input type="text" class="form-control mb-3" id="gramasi" name="gramasi" value="{{ old('gramasi') }}" placeholder="Gramasi Produk"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" >
                        <div class="input-group-append">
                          <span class="input-group-text">gram</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <label for="jenisKemasan" class="form-label">Jenis Kemasan dan Ukuran</label>
                    <textarea name="jenisKemasan" id="jenisKemasan" placeholder="Jenis Kemasan" class="form-control"></textarea>
                  </div>

                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-label">Segmentasi Produk <span style="color:red">*</span></label>
                      <input class="form-control mb-3" type="text" id="segmentasi" name="segmentasi"
                        placeholder="Masukan Segementasi Produk" value="{{ old('segmentasi') }}">
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-label">Harga Produk <span style="color:red">*</span></label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Rp.</span>
                        </div>
                        <input type="text" class="form-control mb-3" name="harga" id="harga" placeholder="Harga Produk" value="{{ old('harga') }}"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" >
                      </div>
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-6">
                    <div class="form-group  mb-3">
                      <label class="form-label">Varian Produk <span style="color:red">*</span></label>
                      <textarea rows="4" cols="100" name="varian" class="form-control" id="varian"
                        placeholder="Varian Produk" >{{ old('varian') }}</textarea>
                      <small>* Masukan Varian Produk</small>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group mb-3">
                      <label class="form-label">Komposisi Produk <span style="color:red">*</span></label>
                      <textarea rows="4" cols="100" name="komposisi" class="form-control" id="komposisi"
                        placeholder="Komposisi">{{ old('komposisi') }}</textarea>
                      <small>* Masukan Komposisi Produk</small>
                    </div>
                  </div>
                  <div class="row-lg-9">
                    <div class="form-group mb-3">
                      <label class="form-label">Redaksi Produk<span style="color:red">*</span></label>
                      <textarea rows="6" cols="100" name="redaksi" class="form-control " id="redaksi"
                        placeholder="Redaksi Produk">{{ old('redaksi') }}</textarea>
                      <small>* Masukan redaksi Produk</small>
                    </div>
                  </div>
                  <div class="row-lg-9">
                    <div class="form-group mb-3">
                      <label class="form-label">Keterangan Lainnya</label>
                      <textarea rows="6" cols="100" name="other" class="form-control " id="other"
                        placeholder="Keterangan Lainnya">{{ old('other') }}</textarea>
                      <small>* Contoh : cara memasak , Saran Penyajian</small>
                    </div>
                  </div>

                </div>
                <button id="next2" class="btn btn-primary">Tahap Selanjutnya</button>
              </div>
            </div>
            {{-- --}}
            <div class="tab-pane fade" id="tab-profile" role="tabpanel" aria-labelledby="profile-tab">

              <div class="row ">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-label">Nama Perusahaan<span style="color:red">*</span></label>
                    <input class="form-control mb-3 @error('namaUsaha') is-invalid @enderror" type="text"
                      name="namaUsaha" id="namaUsaha"  placeholder="Nama Perusahaan" value="{{ old('namaUsaha') }}"  >
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
                    <input class="form-control mb-3" type="text" name="noNIB" id="noNIB" placeholder="NIB" value="{{ old('noNIB') }}"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" >
                  </div>
                  <div class="form-group">
                    <label class="form-label">Nomor SP - IRT</label>
                    <input class="form-control mb-3" type="text" name="noPIRT" id="noPIRT" placeholder="SP-IRT" value="{{ old('noPIRT') }}"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" >
                  </div>
                  <div class="form-group">
                    <label class="form-label">Layak Sehat</label>
                    <input class="form-control mb-3" type="text" name="noLayakSehat" id="noLayakSehat"
                      placeholder="Layak Sehat" value="{{ old('noLayakSehat') }}"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" >
                  </div>
                  <div class="form-group">
                    <label class="form-label">Halal</label>
                    <input class="form-control mb-3" type="text" name="noHalal" id="noHalal" placeholder="Halal" value="{{ old('noHalal') }}"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" >
                  </div>
                  <div class="form-group">
                    <label class="form-label">CPPOB</label>
                    <input class="form-control mb-3" type="text" name="CPPOB" id="CPPOB" placeholder="CPPOB" value="{{ old('CPPOB') }}"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" >
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-label">ISO</label>
                    <input class="form-control mb-3" type="text" name="noISO" id="noISO" placeholder="ISO" value="{{ old('noISO') }}"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" >
                  </div>
                  <div class="form-group">
                    <label class="form-label">Hak Merek (HAKI)</label>
                    <input class="form-control mb-3" type="text" name="noHAKI" id="noHAKI" placeholder="Hak Merek" value="{{ old('noHAKI') }}"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" >
                  </div>
                  <div class="form-group">
                    <label class="form-label">HACCP</label>
                    <input class="form-control mb-3" type="text" name="HACCP" id="HACCP" placeholder="HACCP" value="{{ old('HACCP') }}"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" >
                  </div>
                  <div class="form-group">
                    <label class="form-label">Legalitas Lainnya</label>
                    <textarea class="form-control mb-3" type="text" name="legalitasLain" id="legalitasLain"
                      placeholder="Legalitas Lainnya"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" >{{ old('legalitasLain') }}</textarea>
                    <small>* Catatan: Kosongkan Jika tidak memiliki legalitas atau sertifikasi</small>
                  </div>
                </div>
                {{-- id_project --}}
                <input type="text" name="id_Project" id="id_Project" value="{{ $project->id }}" hidden>
                {{-- end --}}
              </div>
              <div class="my-3">
                <button class="btn btn-primary" type="submit">Simpan Data</button>

              </div>
              </form>
            </div>
           
          </div>
          {{-- end Content --}}
        </div>

      </div>

      <div class="modal-footer">
        INOPAK Institute 2023
      </div>
    </div>
  </div>

</div>
<script>
  $("#telp").click(function(){
    $("#telp").val("+62");
  });
  // $('.js-example-basic-single').select2();
  $('.js-example-basic-single').select2({
        dropdownParent: $('#addMember')
    });
</script>

<script>
  $(document).ready(function(){
            $('#next1').click(function(e){
              var nama=$("#nama").val();
              var telp=$("#telp").val();
              var gender=$("#gender").val();
              var alamat=$("#alamat").val();
              var id_provinsi=$("#provinsi").val();
              var id_kota=$("#kota").val();
              var id_kecamatan=$("#kecamatan").val();
              var id_desa=$("#desa").val();
              var rt=$("#rt").val();
              var rw=$("#rw").val();
              if(nama=="" || telp=="" || gender =="" || alamat=="" || id_provinsi=="" || id_kota=="" || id_kecamatan=="" || id_desa=="" || rt=="" || rw==""){
              alert("Mohon Isi Form data dengan tanda* dengan Lengkap");
              }else{
                e.preventDefault();
                $('#myTab a[href="#tab-home"]').tab('show');
              }
            });
            $('#next2').click(function(e){
                
                  e.preventDefault();
                  $('#myTab a[href="#tab-profile"]').tab('show');
               
                
            });
        });
</script>

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

@endsection