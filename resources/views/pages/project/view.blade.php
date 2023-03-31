@extends('layout.main')
@section('container')

  <div class="row gx-6 gy-3 mb-4 align-items-center">
    <div class="col-auto">
      <h2 class="mb-0">Management Projek</h2>
    </div>
    <div class="col-auto"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addItem"><svg class="svg-inline--fa fa-plus me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z"></path></svg><!-- <span class="fa-solid fa-plus me-2"></span> Font Awesome fontawesome.com -->Add new project</button></div>
  </div>
  <div class="row justify-content-between align-items-end mb-4 g-3">
   
    <div class="col-12 col-sm-auto">
      
      <div class="d-flex align-items-center">
        <a class="btn btn-phoenix-secondary me-1 " href="/project" type="button">
          <span class="fas fa-align-left me-2" data-fa-transform="shrink-3"></span>All</a>
        <div class="search-box me-3">
          
          <form class="position-relative" data-bs-toggle="search" method="get" data-bs-display="static" action="/project">
            <input class="form-control search-input search" type="search" placeholder="Search projects" value="{{ request('search') }}" aria-label="Search" name="search">
            <svg class="svg-inline--fa fa-magnifying-glass search-box-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z"></path></svg><!-- <span class="fas fa-search search-box-icon"></span> Font Awesome fontawesome.com -->
           
        </div>
      </form>
      </div>
    </div>
  </div>

  @if(session()->has('Berhasil'))
  <div class="alert alert-outline-success d-flex align-items-center" role="alert">
       <span class="fas fa-check-circle text-success fs-3 me-3"></span>
       <p class="mb-0 flex-1">{{session('Berhasil')}}</p>
       <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>
   @endif
  @if(session()->has('HapusBerhasil'))
  <div class="alert alert-outline-success d-flex align-items-center" role="alert">
       <span class="fas fa-check-circle text-success fs-3 me-3"></span>
       <p class="mb-0 flex-1">{{session('HapusBerhasil')}}</p>
       <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>
   @endif
  @if(session()->has('UpdateBerhasil'))
  <div class="alert alert-outline-success d-flex align-items-center" role="alert">
       <span class="fas fa-check-circle text-success fs-3 me-3"></span>
       <p class="mb-0 flex-1">{{session('UpdateBerhasil')}}</p>
       <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>
   @endif
   @if(session()->has('gagalSimpan'))
   <div class="alert alert-outline-danger d-flex align-items-center" role="alert">
        <span class="fas fa-check-circle text-success fs-3 me-3"></span>
        <p class="mb-0 flex-1">{{session('gagalSimpan')}}</p>
        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

  
  <div class="row g-3 mb-9">
    @foreach ($projects as $project )
    <div class="col-12 col-sm-6 col-md-4 col-xxl-3">
      <div class="btn-reveal-trigger position-relative rounded-2 overflow-hidden p-4" style="height: 236px;">
        <div class="bg-holder" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0) 39.41%, rgba(0, 0, 0, 0.4) 100%), url({{ asset('assets/img/generic/26.png') }})"></div>
        <div class="position-relative h-100 d-flex flex-column justify-content-between">
          <div class="d-flex justify-content-between align-items-center"><span class="badge badge-phoenix fs--2 badge-phoenix-primary">Created at : {{ $project->created_at->diffForHumans() }}</span>
            <div class="z-index-2"><button class="btn btn-icon btn-reveal dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis-vertical" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-vertical" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 512" data-fa-i2svg=""><path fill="currentColor" d="M64 360C94.93 360 120 385.1 120 416C120 446.9 94.93 472 64 472C33.07 472 8 446.9 8 416C8 385.1 33.07 360 64 360zM64 200C94.93 200 120 225.1 120 256C120 286.9 94.93 312 64 312C33.07 312 8 286.9 8 256C8 225.1 33.07 200 64 200zM64 152C33.07 152 8 126.9 8 96C8 65.07 33.07 40 64 40C94.93 40 120 65.07 120 96C120 126.9 94.93 152 64 152z"></path></svg><!-- <span class="fas fa-ellipsis-v"></span> Font Awesome fontawesome.com --></button>
              <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations">
                <a class="dropdown-item" href="/project/dataikm/{{ $project->id }}">View</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-primary" data-bs-toggle="modal" data-bs-target="#updateItem-{{ $project->id }}" >Ubah</a>
                <form action="/project/hapus/{{ $project->id }}" method="post">
                  @csrf
                  <input type="text" name="id" id="" hidden value="{{ $project->id }}">
                  <button class="dropdown-item text-danger" type="submit"  onclick="return confirm('Anda Yakin Seluruh Data pada Projek {{ $project->NamaProjek }} beserta Isinya akan dihapus?')">Hapus</button>
              
                </form>
              </div>
            </div>
          </div>
          <h3 class="text-white light fw-bold line-clamp-2">{{ $project->NamaProjek }}</h3>
        </div><a class="stretched-link" href="/project/dataikm/{{ $project->id }}" ></a>
      </div>
    </div>
    
    @endforeach
    
  </div>

  

  <div class="modal fade" id="addItem" tabindex="-1" aria-labelledby="addItemModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addItemModalLabel">+ Tambah Project</h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs--1"></span></button>
        </div>
        <div class="modal-body">
          <form action="/project/create" method="post">
            @csrf
            <div class="row">
              <div class="mb-3">
                <label for="projectName" class="form-label">Nama Projek</label>
                <input type="text" name="NamaProjek" id="" class="form-control @error('NamaProjek') is-invalid @enderror">
              </div>
              <div class="mb-3">
                <label for="keterangan" class="form-label">Deskripsi</label>
              <textarea name="keterangan" id="" cols="30" rows="10" class="form-control @error('keterangan') is-invalid @enderror"></textarea>
              </div>
            </div>
            
          {{-- body content --}}
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" type="submit">Simpan</button>
        </form>
          <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>
  </div>

@foreach ($projects as $project)
  <div class="modal fade" id="updateItem-{{ $project->id }}" tabindex="-1" aria-labelledby="updateItemModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="updateItemModalLabel">+ Tambah Project</h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs--1"></span></button>
        </div>
        <div class="modal-body">
          <form action="/project/update" method="post">
            @csrf
            <input type="text" name="id" id="" hidden value="{{ $project->id }}">
            <div class="row">
              <div class="mb-3">
                <label for="projectName" class="form-label">Nama Projek</label>
                <input type="text" name="NamaProjek" id="" class="form-control" value="{{ $project->NamaProjek }}">
              </div>
              <div class="mb-3">
                <label for="keterangan" class="form-label">Deskripsi</label>
              <textarea name="keterangan" id="" cols="30" rows="10" class="form-control">{{ $project->keterangan }}</textarea>
              </div>
            </div>
           
          {{-- body content --}}
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" type="submit">Update</button>
        </form>
          <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>
  </div>

{{-- @endif --}}
  @endforeach
  
@endsection