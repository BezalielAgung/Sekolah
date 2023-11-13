@extends('front.app')
@section('content')

 <!-- Carousel Start -->
 <div class="container-fluid px-0 mb-5">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{asset("front/assets")}}/img/carousel-1.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-7 text-start">
                                <p class="fs-4 text-white animated slideInRight">Selamat Datang di
                                    {{-- <strong>PG TK SHARON</strong> --}}
                                </p>
                                <h1 class="display-1 text-white mb-4 animated slideInRight">PG TK
                                    SHARON</h1>
                                {{-- <a href=""
                                    class="btn btn-primary rounded-pill py-3 px-5 animated slideInRight">Explore
                                    More</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{asset("front/assets")}}/img/carousel-2.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-7 text-end">
                                <p class="fs-4 text-white animated slideInLeft">Welcome to <strong>GrowMark</strong>
                                </p>
                                <h1 class="display-1 text-white mb-5 animated slideInLeft">Ready to Grow Your
                                    Business</h1>
                                {{-- <a href=""
                                    class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Explore
                                    More</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->

<!-- Project Start -->
<div class="container-xxl pt-5">
  <div class="container">
      <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s"
          style="max-width: 500px;">
          <p class="fs-5 fw-medium text-primary">Berita Hari ini</p>
          <h1 class="display-5 mb-5">Berita terbaru dari sekolah kita</h1>
      </div>
      <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
        @foreach ($berita as $item)
        <div class="project-item mb-5">
            <div class="position-relative">
                <img class="img-fluid" src="{{asset("storage/berita/".$item->image)}}" alt="">
                <div class="project-overlay">
                    <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset("storage/berita/".$item->image)}}"
                        data-lightbox="project"><i class="fa fa-eye"></i></a>
                    <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i
                            class="fa fa-link"></i></a>
                </div>
            </div>
            <div class="p-4">
                <a class="d-block h5" href="">{{$item->judul}}</a>
                <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem</span>

            </div>
        </div>
            
        @endforeach
      </div>
  </div>
</div>
<!-- Project End -->

<!-- About Start -->
<div class="container-xxl shadow my-5">
<div class="container">
    <div class="row g-0">
        <div class="col-lg-6">
            {{-- <div class="h-100 d-flex align-items-center justify-content-center" style="min-height: 300px;">
                <button type="button" class="btn-play" data-bs-toggle="modal"
                    data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                    <span></span>
                </button>
            </div> --}}
        </div>
    </div>
</div>
</div>
<!-- About End -->

<!-- Features Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s"
      style="max-width: 500px;">
      {{-- <p class="fs-5 fw-medium text-primary">Berita Hari ini</p> --}}
      <h1 class="display-5 mb-5">Visi Dan Misi</h1>
  </div>
  
<!-- About Start -->
<div class="container-xxl shadow my-5">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-12 lg-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="bg-white rounded-top  mt-lg-3">
                    <p class="fs-5 fw-medium text-primary">Visi</p>
                    <h1 class="display-6 mb-4">{{$visi->visi}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            {{-- <p class="fs-5 fw-medium text-primary">Misi</p> --}}
            <h1 class="display-5 mb-5">Misi Sekolah Kita</h1>
        </div>
        <div class="row g-4">
            @foreach ($misi as $key=>$item)
                
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item position-relative h-100">
                    <div class="service-text rounded p-5">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                        style="width: 64px; height: 64px;">
                        <img class="img-fluid" src="{{asset("front/assets")}}/img/icon/icon-5.png" alt="Icon">
                    </div>
                    <h5 class="mb-3">{{$item->misi}}</h4>
                        {{-- <p class="mb-0">{{$item->misi}}</p> --}}
                        </div>
                        {{-- <div class="service-btn rounded-0 rounded-bottom">
                            <a class="text-primary fw-medium" href="">Read More<i
                                class="bi bi-chevron-double-right ms-2"></i></a>
                            </div> --}}
                        </div>
                    </div>
                    @endforeach
        </div>
    </div>
</div>
<!-- Service End -->



<!-- Video Modal Start -->
<div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                        allowscriptaccess="always" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal End -->

<!-- Quote Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="fs-5 fw-medium text-primary">Get A Quote</p>
                <h1 class="display-5 mb-4">Need Our Expert Help? We're Here!</h1>
                <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita
                    erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                    eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                <a class="d-inline-flex align-items-center rounded overflow-hidden border border-primary" href="">
                    <span class="btn-lg-square bg-primary" style="width: 55px; height: 55px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </span>
                    <span class="fs-5 fw-medium mx-4">+012 345 6789</span>
                </a>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <h2 class="mb-4">Get A Free Quote</h2>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                            <label for="name">Your Name</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="mail" placeholder="Your Email">
                            <label for="mail">Your Email</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="mobile" placeholder="Your Mobile">
                            <label for="mobile">Your Mobile</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating">
                            <select class="form-select" id="service">
                                <option selected>Digital Marketing</option>
                                <option value="">Social Marketing</option>
                                <option value="">Content Marketing</option>
                                <option value="">E-mail Marketing</option>
                            </select>
                            <label for="service">Choose A Service</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a message here" id="message"
                                style="height: 130px"></textarea>
                            <label for="message">Message</label>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button class="btn btn-primary w-100 py-3" type="submit">Submit Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection