@extends('layout.main')
@section('container')
<div class="row align-items-center justify-content-between g-3 mb-4">
  <div class="col-auto">
    <h2 class="mb-0">My Profile</h2>
  </div>
  <div class="col-auto">
    <div class="row g-2 g-sm-3">
      <div class="col-auto"><button class="btn btn-phoenix-danger"><svg class="svg-inline--fa fa-trash-can me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash-can" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM31.1 128H416V448C416 483.3 387.3 512 352 512H95.1C60.65 512 31.1 483.3 31.1 448V128zM111.1 208V432C111.1 440.8 119.2 448 127.1 448C136.8 448 143.1 440.8 143.1 432V208C143.1 199.2 136.8 192 127.1 192C119.2 192 111.1 199.2 111.1 208zM207.1 208V432C207.1 440.8 215.2 448 223.1 448C232.8 448 240 440.8 240 432V208C240 199.2 232.8 192 223.1 192C215.2 192 207.1 199.2 207.1 208zM304 208V432C304 440.8 311.2 448 320 448C328.8 448 336 440.8 336 432V208C336 199.2 328.8 192 320 192C311.2 192 304 199.2 304 208z"></path></svg><!-- <span class="fas fa-trash-alt me-2"></span> Font Awesome fontawesome.com -->Delete customer</button></div>
      <div class="col-auto"><button class="btn btn-phoenix-secondary"><svg class="svg-inline--fa fa-key me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="key" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M282.3 343.7L248.1 376.1C244.5 381.5 238.4 384 232 384H192V424C192 437.3 181.3 448 168 448H128V488C128 501.3 117.3 512 104 512H24C10.75 512 0 501.3 0 488V408C0 401.6 2.529 395.5 7.029 391L168.3 229.7C162.9 212.8 160 194.7 160 176C160 78.8 238.8 0 336 0C433.2 0 512 78.8 512 176C512 273.2 433.2 352 336 352C317.3 352 299.2 349.1 282.3 343.7zM376 176C398.1 176 416 158.1 416 136C416 113.9 398.1 96 376 96C353.9 96 336 113.9 336 136C336 158.1 353.9 176 376 176z"></path></svg><!-- <span class="fas fa-key me-2"></span> Font Awesome fontawesome.com -->Reset password</button></div>
    </div>
  </div>
</div>
<div class="row g-3 mb-6">
  <div class="col-12 col-lg-8">
    <div class="card h-100">
      <div class="card-body">
        <div class="border-bottom border-dashed border-300 pb-4">
          <div class="row align-items-center g-3 g-sm-5 text-center text-sm-start">
            <div class="col-12 col-sm-auto">
              <div class="avatar avatar-5xl"><img class="rounded-circle" src="../../../assets/img/team/15.png" alt=""></div>
            </div>
            <div class="col-12 col-sm-auto flex-1">
              <h3>{{ auth()->user()->nama }}</h3>
              <p class="text-800">Joined 4 days ago</p>
              <div><a class="me-2" href="#!"><svg class="svg-inline--fa fa-linkedin-in text-400 hover-primary" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M100.3 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.6 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.3 61.9 111.3 142.3V448z"></path></svg><!-- <span class="fab fa-linkedin-in text-400 hover-primary"></span> Font Awesome fontawesome.com --></a><a class="me-2" href="#!"><svg class="svg-inline--fa fa-facebook text-400 hover-primary" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.8 90.69 226.4 209.3 245V327.7h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.3 482.4 504 379.8 504 256z"></path></svg><!-- <span class="fab fa-facebook text-400 hover-primary"></span> Font Awesome fontawesome.com --></a><a href="#!"><svg class="svg-inline--fa fa-twitter text-400 hover-primary" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M459.4 151.7c.325 4.548 .325 9.097 .325 13.65 0 138.7-105.6 298.6-298.6 298.6-59.45 0-114.7-17.22-161.1-47.11 8.447 .974 16.57 1.299 25.34 1.299 49.06 0 94.21-16.57 130.3-44.83-46.13-.975-84.79-31.19-98.11-72.77 6.498 .974 12.99 1.624 19.82 1.624 9.421 0 18.84-1.3 27.61-3.573-48.08-9.747-84.14-51.98-84.14-102.1v-1.299c13.97 7.797 30.21 12.67 47.43 13.32-28.26-18.84-46.78-51.01-46.78-87.39 0-19.49 5.197-37.36 14.29-52.95 51.65 63.67 129.3 105.3 216.4 109.8-1.624-7.797-2.599-15.92-2.599-24.04 0-57.83 46.78-104.9 104.9-104.9 30.21 0 57.5 12.67 76.67 33.14 23.72-4.548 46.46-13.32 66.6-25.34-7.798 24.37-24.37 44.83-46.13 57.83 21.12-2.273 41.58-8.122 60.43-16.24-14.29 20.79-32.16 39.31-52.63 54.25z"></path></svg><!-- <span class="fab fa-twitter text-400 hover-primary"></span> Font Awesome fontawesome.com --></a></div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-4">
    <div class="card h-100">
      <div class="card-body">
        <div class="border-bottom border-dashed border-300">
          <h4 class="mb-3 lh-sm lh-xl-1">Address<button class="btn btn-link p-0" type="button"> <svg class="svg-inline--fa fa-pen-to-square fs--1 ms-3 text-500" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen-to-square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M490.3 40.4C512.2 62.27 512.2 97.73 490.3 119.6L460.3 149.7L362.3 51.72L392.4 21.66C414.3-.2135 449.7-.2135 471.6 21.66L490.3 40.4zM172.4 241.7L339.7 74.34L437.7 172.3L270.3 339.6C264.2 345.8 256.7 350.4 248.4 353.2L159.6 382.8C150.1 385.6 141.5 383.4 135 376.1C128.6 370.5 126.4 361 129.2 352.4L158.8 263.6C161.6 255.3 166.2 247.8 172.4 241.7V241.7zM192 63.1C209.7 63.1 224 78.33 224 95.1C224 113.7 209.7 127.1 192 127.1H96C78.33 127.1 64 142.3 64 159.1V416C64 433.7 78.33 448 96 448H352C369.7 448 384 433.7 384 416V319.1C384 302.3 398.3 287.1 416 287.1C433.7 287.1 448 302.3 448 319.1V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V159.1C0 106.1 42.98 63.1 96 63.1H192z"></path></svg><!-- <span class="fas fa-edit fs--1 ms-3 text-500"></span> Font Awesome fontawesome.com --></button></h4>
        </div>
        <div class="pt-4 mb-7 mb-lg-4 mb-xl-7">
          <div class="row justify-content-between">
            <div class="col-auto">
              <h5 class="text-1000">Address</h5>
            </div>
            <div class="col-auto">
              <p class="text-800">{{auth()->user()->alamat}}
                             
              </p>
            </div>
          </div>
        </div>
        <div class="border-top border-dashed border-300 pt-4">
          <div class="row flex-between-center mb-2">
            <div class="col-auto">
              <h5 class="text-1000 mb-0">Email</h5>
            </div>
            <div class="col-auto"><a class="lh-1" href="mailto:shatinon@jeemail.com">{{ auth()->user()->email }}</a></div>
          </div>
          <div class="row flex-between-center">
            <div class="col-auto">
              <h5 class="text-1000 mb-0">Phone</h5>
            </div>
            <div class="col-auto"><a class="text-800" href="tel:+1234567890">{{ auth()->user()->telp }}</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection