<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sekolah</title>
  <link rel="shortcut icon" type="image/png" href="{{asset("admin/assets/images/logos/favicon.png")}}" />
  <link rel="stylesheet" href="{{asset("admin/assets/css/styles.min.css")}}" />
  <script src="{{asset("admin/assets/vendor/libs/jquery/dist/jquery.min.js")}}"></script>
  <script src="{{asset("admin/assets/vendor/libs/bootstrap/dist/js/bootstrap.bundle.min.js")}}"></script>

  {{-- sweetalert  --}}
  <script src="{{asset("admin/assets/vendor/libs/sweetalert2/sweetalert2.min.js")}}"></script>
  <link rel="stylesheet" href="{{asset("admin/assets/vendor/libs/sweetalert2/sweetalert2.min.css")}}">

</head>

<body>
    <section class="vh-100">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6 text-black">
      
              {{-- <div class="px-5 ms-xl-2 mt-0 "> --}}
                {{-- <i class="fas fa-crow fa-2x me-3 pt-8 mt-xl-4" style="color: #709085;"></i> --}}
                {{-- <span class="h1 fw-semibold mb-0 mt-8 pt-8 text-center">Perpustakaan</span> --}}
              {{-- </div> --}}
      
              <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-2 mt-0 pt-0 pt-xl-0 mt-xl-n5">
      
                <form style="width: 20rem;" method="POST" action="{{ route('authenticate') }}">
                    @csrf
                  <h3 class="fw-semibold mb-3  pb-3" style="letter-spacing: 1px;">Sekolah</h3>
                  <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example18">Email</label>
                    <input type="email" id="email"  name="email" class="form-control" value="{{old('email')}}" />
                  </div>
      
                  <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example28">Password</label>
                    <input type="password" id="password" name="password" class="form-control" />
                  </div>
      
                  <div class="pt-1 mb-4">
                    <button type="submit" class="btn btn-info btn-lg btn-block" type="button">Login</button>
                  </div>
                </form>
      
              </div>
      
            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img3.webp"
                alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
            </div>
          </div>
        </div>
      </section>
  
</body>

</html>

<style>
    .bg-image-vertical {
position: relative;
overflow: hidden;
background-repeat: no-repeat;
background-position: right center;
background-size: auto 100%;
}

@media (min-width: 1025px) {
.h-custom-2 {
height: 100%;
}
}
</style>

<script>
   const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3600,
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
