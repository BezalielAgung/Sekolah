<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <link rel="shortcut icon" type="image/png" href="{{asset("admin/assets/images/logos/favicon.png")}}" />
  <link rel="stylesheet" href="{{asset("admin/assets/css/styles.min.css")}}" />
</head>
{{-- {{dd($user)}} --}}
<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <h1 class="card-title fw-semibold">Cafe </h1>
            <h1 class="card-title fw-semibold" id="pentilss" > </h1>
            {{-- <img src="../admin/assets/images/logos/dark-logo.svg" width="180" alt="" /> --}}
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item {{  explode('.', Route::current()->getName())[0]  == 'dashboard' ? 'active' : '' }}">
              <a class="sidebar-link {{  explode('.', Route::current()->getName())[0]  == 'dashboard' ? 'active' : '' }}" href="{{route("dashboard")}}" >
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Halaman Depan</span>
            </li>
            <li class="sidebar-item {{  explode('.', Route::current()->getName())[0]  == 'jenis_produk' ? 'active' : '' }}">
                <a class="sidebar-link {{  explode('.', Route::current()->getName())[0]  == 'jenis_produk' ? 'active' : '' }}" href="{{route("jenis_produk.index")}}" >
                  <span>
                    <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Contact</span>
                </a>
              </li>
            <li class="sidebar-item {{  explode('.', Route::current()->getName())[0]  == 'produk' ? 'active' : '' }}">
                <a class="sidebar-link {{  explode('.', Route::current()->getName())[0]  == 'produk' ? 'active' : '' }}" href="{{route("produk.index")}}" >
                  <span>
                    <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Visi & Misi</span>
                </a>
              </li>
              
            <li class="sidebar-item {{  explode('.', Route::current()->getName())[0]  == 'produk' ? 'active' : '' }}">
                <a class="sidebar-link {{  explode('.', Route::current()->getName())[0]  == 'produk' ? 'active' : '' }}" href="{{route("produk.index")}}" >
                  <span>
                    <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Profile</span>
                </a>
              </li>
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Data</span>
              </li>
              <li class="sidebar-item {{  explode('.', Route::current()->getName())[0]  == 'produk' ? 'active' : '' }}">
                <a class="sidebar-link {{  explode('.', Route::current()->getName())[0]  == 'produk' ? 'active' : '' }}" href="{{route("produk.index")}}" >
                  <span>
                    <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Siswa</span>
                </a>
              </li>
              <li class="sidebar-item {{  explode('.', Route::current()->getName())[0]  == 'produk' ? 'active' : '' }}">
                <a class="sidebar-link {{  explode('.', Route::current()->getName())[0]  == 'produk' ? 'active' : '' }}" href="{{route("produk.index")}}" >
                  <span>
                    <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Guru </span>
                </a>
              </li>
              

              <li class="sidebar-item">
                <a class="sidebar-link has-arrow sidebar-toggle" href="#" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-layout"></i>
                  </span>
                  <span class="hide-menu">Widgets</span>
                </a>
                <ul aria-expanded="false" class="sidebar-sub ">
                  <li class="sidebar-item">
                    <a href="./widgets-cards.html" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Cards</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="./widgets-banners.html" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Banner</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="./widgets-charts.html" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Charts</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="./widgets-feeds.html" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Feed Widgets</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="./widgets-apps.html" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Apps Widgets</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="./widgets-data.html" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Data Widgets</span>
                    </a>
                  </li>
                </ul>
              </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
        <header class="app-header">
          <nav class="navbar navbar-expand-lg navbar-light">
            <ul class="navbar-nav">
              <li class="nav-item d-block d-xl-none">
                <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                  <i class="ti ti-menu-2"></i>
                </a>
              </li>
              {{-- <li class="nav-item dropdown dropleft">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <i class="ti ti-bell-ringing"></i>
                  <div class="notification bg-primary rounded-circle"></div>
                </a>
                <div class="dropdown-menu dropdown-menu-start dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                  </div>
                </div>
              </li> --}}
            </ul>
            <div class="navbar-collapse justify-content-end px-0 " id="navbarNav">
              <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                <li class="nav-item dropdown">
                  <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img src="{{asset("User.png")}}" name="image-user" alt="image user" width="35" height="35" class="rounded-circle">
                  </a>
                  <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                    <div class="message-body">
                      {{-- <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                        <i class="ti ti-user fs-6"></i>
                        <p class="mb-0 fs-3">My Profile</p>
                      </a> --}}
                      <a href="{{route("logout")}}" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </header>
      <!--  Header End -->
      <div class="container-fluid">


        @yield('content')
      </div>
    </div>
  </div>
  <script src="{{asset("admin/assets/libs/jquery/dist/jquery.min.js")}}"></script>
  <script src="{{asset("admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js")}}"></script>
  <script src="{{asset("admin/assets/js/sidebarmenu.js")}}"></script>
  {{-- <script src="{{asset("admin/assets/js/menu.js")}}"></script> --}}
  <script src="{{asset("admin/assets/js/app.min.js")}}"></script>
  {{-- Toast --}}
  {{-- <script src="{{asset("admin/assets/libs/toastr/build/toastr.min.js")}}"></script>
  <link rel="stylesheet" href="{{asset("admin/assets/libs/toastr/build/toastr.min.css")}}"> --}}

   {{-- sweetalert  --}}
   <script src="{{asset("admin/assets/libs/sweetalert2/sweetalert2.min.js")}}"></script>
  <link rel="stylesheet" href="{{asset("admin/assets/libs/sweetalert2/sweetalert2.min.css")}}">
  
  {{-- DataTables --}}
  <script src="{{asset("admin/assets/libs/DataTables/datatables.min.js")}}"></script>
 <link rel="stylesheet" href="{{asset("admin/assets/libs/DataTables/datatables.min.css")}}">
 
 {{-- Flatpickr --}}
 <script src="{{asset("admin/assets/libs/flatpickr/flatpickr.min.js")}}"></script>
<link rel="stylesheet" href="{{asset("admin/assets/libs/flatpickr/flatpickr.min.css")}}">

 {{-- Dropify --}}
 <script src="{{asset("admin/assets/libs/dropify/dist/js/dropify.min.js")}}"></script>
 <script src="{{asset("admin/assets/libs/dropify/dist/js/dropify.js")}}"></script>
<link rel="stylesheet" href="{{asset("admin/assets/libs/dropify/dist/css/dropify.min.css")}}">
<link rel="stylesheet" href="{{asset("admin/assets/libs/dropify/dist/css/dropify.css")}}">

 
 {{-- Select2 --}}
 <!-- Styles -->
 {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script> --}}
 {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" /> --}}


 <script src="{{asset("admin/assets/libs/select2/dist/js/select2.min.js")}}"></script>
<link rel="stylesheet" href="{{asset("admin/assets/libs/select2/dist/css/select2.min.css")}}">
 <link rel="stylesheet" href="{{asset("admin/assets/libs/select2/dist/css/select2-bootstrap-5-theme.min.css")}}">
<link rel="stylesheet" href="{{asset("admin/assets/libs/select2/dist/css/select2-bootstrap-5-theme.rtl.min.css")}}"> 

 
 <script>
  $(document).ready(function() {
      $('#myTable').DataTable();
  });
</script>

<Script>
  $(document).ready(function(){
    // getUser();
  });
//   function getUser() {
//     // setTimeout(() => {
//       $.ajaxSetup({
//         headers: {
//           "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
//         },
//       });
//       $.ajax({
//           type: "POST",
//           url: ``,
//           data: {
//             _token: "{{ csrf_token() }}", 
//           },
//           function (data,response) {
//               },
//               success: function(data) {
//                 $users = {};
//                 // console.log(data.datas);
//                 $users = data.datas;
//                 // document.getElementById('pentilss').innerHTML = data.datas.id;
//                 // document.getElementById('image-user').innerHTML = data.datas.imagedir
//                 // $(".image-user").attr('src', data.datas.imagedir);
//                 document.querySelector('img[name="image-user"]').src = data.datas.imagedir;
//                 // document.querySelector('img[name="image-user"]').src = data.datas.imagedir;


//                 // document.getElementsByClassName("image-user").src=data.datas.imagedir;
// ;
//           return $users; 
//         }
//     });
//   // },100);
// }
</Script>


  {{-- <script src="{{asset("admin/assets/libs/apexcharts/dist/apexcharts.min.js")}}"></script> --}}
  <script src="{{asset("admin/assets/libs/simplebar/dist/simplebar.js")}}"></script>
  <script src="{{asset("admin/assets/js/dashboard.js")}}"></script>


  <script>
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
      }
    });

@if(Session::has('success'))
Toast.fire({
        background:'#d0f8f1',
        icon: 'success',
        color: '#0fb294',
        iconColor:'#0fb294',
        title: '{{ Session::get('success') }}'
    })
    @elseif(Session::has('error'))
     Toast.fire({
      background:'#fee7e1',
      icon: 'error',
      color: '#c86e56',
      iconColor:'#c86e56',
      title: '{{ Session::get('error') }}'
    })
      @elseif(Session::has('warning'))
        Toast.fire({
            background:'#ffefd2',
            icon: 'warning',
            color: '#996813',
            iconColor:'#996813',
            title: '{{ Session::get('warning') }}'
        })  
        
    @endif
</script>

@yield('scripts')
</body>



</html>