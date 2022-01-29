@extends('layouts.master')
@section('content')
  {{-- Banner --}}
<div class="slider-area slider-style-1">
    <div class="preview-2">
      <div id="nivoslider" class="slides">
        <img src="{{ asset('Landingpage/Assets/intro-bg.jpg') }}" alt="" title="#slider-1-caption1" />
        <img src="{{ asset('Landingpage/Assets/presiden.jpg') }}" alt="" title="#slider-1-caption2" />
        <img src="{{ asset('Landingpage/Assets/siswa.jpg') }}" alt="" title="#slider-1-caption2" />
      </div>
      <div id="slider-1-caption1" class="nivo-html-caption nivo-caption">
        <div class="banner-content slider-1">
          <div class="container">
            <div class="row">
              <div class="col-lg-7 col-md-7">
                <div class="text-content">
                  <h1 class="title1 text-dark">
                    SMPN 6 UNGGULAN SEKAYU <br />
                    AKREDITASI A
                  </h1>
                  <p class="sub-title text-dark fw-bold">
                    SMPN 6 unggulan sekayu merupakan <br />
                    salah satu smp terfavorit di Musi Banyuasin <br />
                    dan terakreditasi A
                  </p>
                  <div class="banner-readmore">
                    <a title="Read more" href="#">Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="slider-1-caption2" class="nivo-html-caption nivo-caption">
        <div class="banner-content slider-1">
          <div class="container">
            <div class="row">
              <div class="col-lg-7 col-md-7">
                <div class="text-content slide-2 hidden-xs">
                  <h1 class="title1 text-dark">
                    SMPN 6 UNGGULAN SEKAYU <br />
                    AKREDITASI A
                  </h1>
                  <p class="sub-title text-dark fw-bold">
                    SMPN 6 unggulan sekayu merupakan <br />
                    salah satu smp terfavorit di Musi Banyuasin <br />
                    dan terakreditasi A
                  </p>
                  <div class="banner-readmore">
                    <a title="Read more" href="#">Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="slider-1-caption1" class="nivo-html-caption nivo-caption">
        <div class="banner-content slider-1">
          <div class="container">
            <div class="row">
              <div class="col-lg-7 col-md-7">
                <div class="text-content">
                  <h1 class="title1 text-dark">
                    SMPN 6 UNGGULAN SEKAYU <br />
                    AKREDITASI A
                  </h1>
                  <p class="sub-title text-dark fw-bold">
                    SMPN 6 unggulan sekayu merupakan <br />
                    salah satu smp terfavorit di Musi Banyuasin <br />
                    dan terakreditasi A
                  </p>
                  <div class="banner-readmore">
                    <a title="Read more" href="#">Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- End Banner --}}  




<!--Google Map Area Start -->
<div class="google-map-area">
    <!--  Map Section -->
    <div id="contacts" class="map-area">
      <div id="googleMap" style="width: 100%; height: 451px"></div>
    </div>
  </div>
  <!--End of Google Map Area-->
  <!--Footer Area Start-->
  <div class="footer-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="footer-info-container text-center section-padding">
            <div class="footer-logo">
              <a href="#"><img src="img/logo/footer-logo.png" alt="" /></a>
            </div>
            <div class="footer-info">
              <span><i class="fa fa-map-marker"></i>Kolonel Wahid Udin Lingkungan I Kelurahan Kayuara Kecamatan Sekayu Kabupaten Musi Banyuasin 30711
                Sumatera Selatan</span>
              <span><i class="fa fa-envelope"></i>smpn6unggulsekayu@yahoo.co.id</span>
              <span><i class="fa fa-phone"></i>(0714) 321 745</span>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-widget-container section-padding">
        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-4">
            <div class="single-footer-widget">
              <h4>Our School</h4>
              <ul class="footer-widget-list">
                <li><a href="#">Kata Pengantar</a></li>
                <li><a href="#">Tentang Kami</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Lokasi</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-4">
            <div class="single-footer-widget">
              <h4>Links</h4>
              <ul class="footer-widget-list">
                <li><a href="#">Fasilitas</a></li>
                <li><a href="#">Berita</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Unduh</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-4">
            <div class="single-footer-widget">
              <h4>Support</h4>
              <ul class="footer-widget-list">
                <li><a href="#">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Informasi</a></li>
                <li><a href="#">Gallery</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="subscribe-container">
              <p>Subscribe now and receive weekly newsletter with educational materials, new courses, interesting posts, popular books and much more!</p>
              <form action="#">
                <div class="subscribe-form">
                  <input type="email" name="email" placeholder="Your email here" />
                  <button type="submit"><i class="fa fa-send"></i></button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="footer-container">
            <div class="row">
              <div class="col-lg-6">
                <span>&copy; 2022 <a href="https://www.smpn6sekayu.sch.id/">SMP Negeri 6 Sekayu</a>. All rights reserved</span>
              </div>
              <div class="col-lg-6">
                <div class="social-links">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-pinterest-p"></i></a>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--End of Footer Area-->
@endsection