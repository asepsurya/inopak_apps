@extends('layout.main')
@section('container')
<h2 class="text-bold text-1100 mb-5">KURASI IKM</h2>
<div id="members"
    data-list="{&quot;valueNames&quot;:[&quot;customer&quot;,&quot;email&quot;,&quot;mobile_number&quot;,&quot;city&quot;,&quot;last_active&quot;,&quot;joined&quot;],&quot;page&quot;:10,&quot;pagination&quot;:true}">
    <div class="row align-items-center justify-content-between g-3 mb-3">
        <div class="col col-auto">
            <div class="search-box">
                <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                        class="form-control search-input search" type="search" placeholder="Search members"
                        aria-label="Search">
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
            <div class="d-flex align-items-center"><button class="btn btn-link text-900 me-4 px-0"><svg
                        class="svg-inline--fa fa-file-export fs--1 me-2" aria-hidden="true" focusable="false"
                        data-prefix="fas" data-icon="file-export" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 576 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M192 312C192 298.8 202.8 288 216 288H384V160H256c-17.67 0-32-14.33-32-32L224 0H48C21.49 0 0 21.49 0 48v416C0 490.5 21.49 512 48 512h288c26.51 0 48-21.49 48-48v-128H216C202.8 336 192 325.3 192 312zM256 0v128h128L256 0zM568.1 295l-80-80c-9.375-9.375-24.56-9.375-33.94 0s-9.375 24.56 0 33.94L494.1 288H384v48h110.1l-39.03 39.03C450.3 379.7 448 385.8 448 392s2.344 12.28 7.031 16.97c9.375 9.375 24.56 9.375 33.94 0l80-80C578.3 319.6 578.3 304.4 568.1 295z">
                        </path>
                    </svg>
                    <!-- <span class="fa-solid fa-file-export fs--1 me-2"></span> Font Awesome fontawesome.com -->Export</button><button
                    class="btn btn-primary"><svg class="svg-inline--fa fa-plus me-2" aria-hidden="true"
                        focusable="false" data-prefix="fas" data-icon="plus" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z">
                        </path>
                    </svg><!-- <span class="fas fa-plus me-2"></span> Font Awesome fontawesome.com -->Add
                    member</button></div>
        </div>
    </div>
    <div class="mx-n4 mx-lg-n6 px-4 px-lg-6 mb-9 bg-white border-y border-300 mt-2 position-relative top-1">
        <div class="table-responsive scrollbar ms-n1 ps-1">
            <table class="table table-sm fs--1 mb-0">
                <thead>
                    <tr>
                        <th class="white-space-nowrap fs--1 align-middle ps-0">
                            <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox"></div>
                        </th>
                        <th class="sort align-middle" scope="col" data-sort="customer"
                            style="width:15%; min-width:200px;">NAMA KENGKAP</th>
                        <th class="sort align-middle" scope="col" data-sort="email" style="width:15%; min-width:200px;">
                            EMAIL</th>
                        <th class="sort align-middle pe-3" scope="col" data-sort="mobile_number"
                            style="width:20%; min-width:200px;">TELEPON</th>
                        <th class="sort align-middle" scope="col" data-sort="city" style="width:10%;">CITY</th>
                        <th class="sort align-middle text-end" scope="col" data-sort="last_active"
                            style="width:21%;  min-width:200px;">JENIS PRODUK</th>
                        <th class="sort align-middle text-end pe-0" scope="col" data-sort="joined"
                            style="width:19%;  min-width:200px;">JOINED</th>
                    </tr>
                </thead>
                <tbody class="list" id="table-latest-review-body">
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                        <td class="fs--1 align-middle ps-0 py-3">
                            <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox"></div>
                        </td>
                        <td class="customer align-middle white-space-nowrap"><a
                                class="d-flex align-items-center text-900 text-hover-1000" href="#!">
                                <div class="avatar avatar-m"><img class="rounded-circle"
                                        src="../../assets/img/team/32.png" alt=""></div>
                                <h6 class="mb-0 ms-3 fw-semi-bold">Carry Anna</h6>
                            </a></td>
                        <td class="email align-middle white-space-nowrap"><a class="fw-semi-bold"
                                href="mailto:annac34@gmail.com">annac34@gmail.com</a></td>
                        <td class="mobile_number align-middle white-space-nowrap"><a class="fw-bold text-1100"
                                href="tel:+912346578">+912346578</a></td>
                        <td class="city align-middle white-space-nowrap text-900">Budapest</td>
                        <td class="last_active align-middle text-end white-space-nowrap text-700">34 min ago</td>
                        <td class="joined align-middle white-space-nowrap text-700 text-end"><button
                                class="btn btn-primary" type="button" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">Kurasi</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
            <div class="col-auto d-flex">
                <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info">1 to 10
                    <span class="text-600"> Items of </span>15</p><a class="fw-semi-bold" href="#!"
                    data-list-view="*">View all<svg class="svg-inline--fa fa-angle-right ms-1"
                        data-fa-transform="down-1" aria-hidden="true" focusable="false" data-prefix="fas"
                        data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                        data-fa-i2svg="" style="transform-origin: 0.25em 0.5625em;">
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
                        class="svg-inline--fa fa-angle-right ms-1" data-fa-transform="down-1" aria-hidden="true"
                        focusable="false" data-prefix="fas" data-icon="angle-right" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""
                        style="transform-origin: 0.25em 0.5625em;">
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
                </ul><button class="page-link pe-0" data-list-pagination="next"><svg
                        class="svg-inline--fa fa-chevron-right" aria-hidden="true" focusable="false" data-prefix="fas"
                        data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                        data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z">
                        </path>
                    </svg><!-- <span class="fas fa-chevron-right"></span> Font Awesome fontawesome.com --></button>
            </div>
        </div>
    </div>
</div>

{{-- modal Kurasi --}}
<div class="modal fade" id="staticBackdrop" tabindex="-1" data-bs-backdrop="static"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="staticBackdropLabel"><a
                        class="d-flex align-items-center text-900 text-hover-1000" href="#!">
                        <div class="avatar avatar-m"><img class="rounded-circle" src="../../assets/img/team/32.png"
                                alt=""></div>
                        <h6 class="mb-0 ms-3 fw-semi-bold text-black">Asep Surya Somantri | Keripik Pisang</h6><br>

                    </a> </h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span
                        class="fas fa-times fs--1 text-white"></span></button>
            </div>
            <div class="modal-body">
                {{-- --}}

                <ul class="nav nav-underline" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation"><a class="nav-link active" id="produksi-tab"
                            data-bs-toggle="tab" href="#tab-produksi" role="tab" aria-controls="tab-produksi"
                            aria-selected="true">Produksi</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" id="inovasi-tab" data-bs-toggle="tab"
                            href="#tab-inovasi" role="tab" aria-controls="tab-inovasi" aria-selected="false"
                            tabindex="-1">Inovasi & Orisinilitas</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" id="sertifikasi-tab"
                            data-bs-toggle="tab" href="#tab-sertifikasi" role="tab" aria-controls="tab-sertifikasi"
                            aria-selected="false" tabindex="-1">Legalitas & Sertifikasi</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" id="kemasan-tab" data-bs-toggle="tab"
                            href="#tab-kemasan" role="tab" aria-controls="tab-kemasan" aria-selected="false"
                            tabindex="-1">Kemasan</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" id="manajemenUsaha-tab"
                            data-bs-toggle="tab" href="#tab-manajemenUsaha" role="tab"
                            aria-controls="tab-manajemenUsaha" aria-selected="false" tabindex="-1">Manajemen Usaha</a>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link" id="pemasaran-tab" data-bs-toggle="tab"
                            href="#tab-pemasaran" role="tab" aria-controls="tab-pemasaran" aria-selected="false"
                            tabindex="-1">Pemasaran</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" id="digital-tab" data-bs-toggle="tab"
                            href="#tab-digital" role="tab" aria-controls="tab-digital" aria-selected="false"
                            tabindex="-1">Digital Marketing</a></li>
                </ul>
                <div class="tab-content mt-3" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-produksi" role="tabpanel"
                        aria-labelledby="produksi-tab">

                        <div class="form-group">
                            <label class="form-label my-3">Supply Bahan Baku <span class="tx-danger">*</span></label>
                            <textarea name="text1" class="form-control" cols="4" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label my-3">Proses Pengolahan Bahan Baku <span
                                    class="tx-danger">*</span></label>
                            <textarea name="text2" class="form-control" cols="4" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label my-3">Kapasitas Produksi <span class="tx-danger">*</span></label>
                            <textarea name="text3" class="form-control" cols="4" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label my-3">Konsistensi Produksi <span class="tx-danger">*</span></label>
                            <textarea name="text4" class="form-control" cols="4" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label my-3">Tempat Produksi <span class="tx-danger">*</span></label>
                            <textarea name="text5" class="form-control" cols="4" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label my-3">Keterlibatan Teknologi <span
                                    class="tx-danger">*</span></label>
                            <textarea name="text6" class="form-control" cols="4" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label my-3">Dampak sosial dan Lingkungan <span
                                    class="tx-danger">*</span></label>
                            <textarea name="text7" class="form-control" cols="4" rows="10"></textarea>
                        </div>

                    </div>
                    {{-- end Tab One --}}
                    <div class="tab-pane fade" id="tab-inovasi" role="tabpanel" aria-labelledby="inovasi-tab">

                        <div class="form-group">
                            <label class="form-label my-3">Kearifan Lokal <span class="tx-danger">*</span></label>
                            <textarea name="text8" class="form-control" cols="4" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label my-3">Kreativitas <span class="tx-danger">*</span></label>
                            <textarea name="text9" class="form-control" cols="4" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label my-3">Cita Rasa <span class="tx-danger">*</span></label>
                            <textarea name="text10" class="form-control" cols="4" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label my-3">Varian Produk <span class="tx-danger">*</span></label>
                            <textarea name="text11" class="form-control" cols="4" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label my-3">Keunikan <span class="tx-danger">*</span></label>
                            <textarea name="text12" class="form-control" cols="4" rows="10"></textarea>
                        </div>



                    </div>
                    {{-- rnd tab Two --}}
                    <div class="tab-pane fade" id="tab-sertifikasi" role="tabpanel" aria-labelledby="sertifikasi-tab">
                        <div class="form-group">
                            <label class="form-label my-3">Perijinan Dasar UMKM<span class="tx-danger">*</span></label>
                            <textarea name="text32" class="form-control" cols="4" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label my-3">Perijinan Tingkat Lanjut<span
                                    class="tx-danger">*</span></label>
                            <textarea name="text33" class="form-control" cols="4" rows="10"></textarea>
                        </div>
                    </div>
                    {{-- tab three --}}
                    <div class="tab-pane fade" id="tab-kemasan" role="tabpanel" aria-labelledby="kemasan-tab">

                        <div class="form-group">
                            <label class="form-label my-3">Jenis Kemasan <span class="tx-danger">*</span></label>
                            <textarea name="text13" class="form-control" cols="4" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label my-3">Visual/Desain Kemasan <span
                                    class="tx-danger">*</span></label>
                            <textarea name="text14" class="form-control" cols="4" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label my-3">Atribut Kemasan <span class="tx-danger">*</span></label>
                            <textarea name="text18" class="form-control" cols="4" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label my-3">Daya tahan Kemasan<span class="tx-danger">*</span></label>
                            <textarea name="text19" class="form-control" cols="4" rows="10"></textarea>
                        </div>


                    </div>
                    {{-- end four --}}
                    <div class="tab-pane fade " id="tab-manajemenUsaha" role="tabpanel"
                        aria-labelledby="manajemenUsaha-tab">

                        <div class="form-group">
                            <label class="form-label my-3">Struktur Organisasi<span class="tx-danger">*</span></label>
                            <textarea name="text20" class="form-control" cols="4" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label my-3">Adminitrasi <span class="tx-danger">*</span></label>
                            <textarea name="text21" class="form-control" cols="4" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label my-3">Keuangan <span class="tx-danger">*</span></label>
                            <textarea name="text22" class="form-control" cols="4" rows="10"></textarea>
                        </div>

                    </div>
                    {{-- end Five --}}
                    <div class="tab-pane fade " id="tab-pemasaran" role="tabpanel" aria-labelledby="pemasaran-tab">
                        <div class="form-group">
                            <label class="form-label my-3">Struktur Organisasi<span class="tx-danger">*</span></label>
                            <textarea name="text20" class="form-control" cols="4" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label my-3">Adminitrasi <span class="tx-danger">*</span></label>
                            <textarea name="text21" class="form-control" cols="4" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label my-3">Keuangan <span class="tx-danger">*</span></label>
                            <textarea name="text22" class="form-control" cols="4" rows="10"></textarea>
                        </div>

                    </div>

                    {{-- end six --}}
               
                <div class="tab-pane fade" id="tab-digital" role="tabpanel" aria-labelledby="digital-tab">

                    <div class="form-group">
                        <label class="form-label my-3">Media Sosial dan Konten <span class="tx-danger">*</span></label>
                        <textarea name="text28" class="form-control" cols="4" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label my-3">Marketplace<span class="tx-danger">*</span></label>
                        <textarea name="text29" class="form-control" cols="4" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label my-3">website <span class="tx-danger">*</span></label>
                        <textarea name="text30" class="form-control" cols="4" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label my-3">e-Payment<span class="tx-danger">*</span></label>
                        <textarea name="text31" class="form-control" cols="4" rows="10"></textarea>
                    </div>


                    {{-- end Seven --}}
                    </div>
                    {{-- end tab--}}
                </div>
            </div>
            <div class="modal-footer"><button class="btn btn-primary" type="button">Okay</button><button
                    class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</button></div>
        </div>
    </div>
</div>
@endsection