  <!--Header Area Start-->
  <header>
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-8">
            <div class="header-top-info">
              <span>Melayani: 7.00-17.00 Senin-Sabtu</span>
              <div class="social-links">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-4">
            <div class="header-login-register">
              <ul class="login">
                <li>
                  <a href="#"><i class="fa fa-key"></i>Login</a>
                  <div class="login-form">
                    <h4>Login</h4>
                    <form action="#" method="post">
                      <div class="form-box">
                        <i class="fa fa-user"></i>
                        <input type="text" name="user-name" placeholder="Username" />
                      </div>
                      <div class="form-box">
                        <i class="fa fa-lock"></i>
                        <input type="password" name="user-password" placeholder="Password" />
                      </div>
                      <div class="button-box">
                        <button type="submit" class="login-btn">Login</button>
                      </div>
                    </form>
                  </div>
                </li>
              </ul>
              <ul class="register">
                <li>
                  <a href="#"><i class="fa fa-lock"></i>Sign Up</a>
                  <div class="register-form">
                    <h4>Sign Up</h4>
                    <span>Please sign up using account detail bellow.</span>
                    <form action="#" method="post">
                      <div class="form-box">
                        <i class="fa fa-user"></i>
                        <input type="text" name="user-name" placeholder="Username" />
                      </div>
                      <div class="form-box">
                        <i class="fa fa-lock"></i>
                        <input type="password" name="user-password" placeholder="Password" />
                      </div>
                      <div class="form-box">
                        <i class="fa fa-envelope"></i>
                        <input type="email" name="user-email" placeholder="Email" />
                      </div>
                      <div class="button-box">
                        <input checked data-toggle="toggle" type="checkbox" />
                        <span>Remember me</span>
                        <button type="submit" class="register-btn">Register</button>
                      </div>
                    </form>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Logo Mainmenu Start-->
    <div class="header-logo-menu sticker">
      <div class="container">
        <div class="logo-menu-bg">
          <div class="row">
            <div class="col-lg-3 col-md-12">
              <div class="logo">
                <a href="index.html"><img src="{{ asset('Landingpage/Assets/logo.png') }}" alt="Smp Negeri 6 Unggulan Sekayu" /></a>
              </div>
            </div>
            <div class="col-lg-9 d-none d-lg-block">
              <div class="mainmenu-area">
                <div class="mainmenu">
                  <nav>
                    <ul id="nav">
                      <li class="current">
                        <a href="{{ route('/') }}">Home</a>
                      </li>
                      <li class="current">
                        <a href="{{ route('/') }}">Profil<i class="fa fa-angle-down"></i></a>
                        <ul class="sub-menu">
                          <li><a href="{{ route('sejarah') }}">Sejarah</a></li>
                          <li><a href="{{ route('struktur-organisasi') }}">Struktur Organisasi</a></li>
                          <li><a href="{{ route('visi-misi') }}">Visi Misi</a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="class-grid.html">Informasi <i class="fa fa-angle-down"></i></a>
                        <ul class="sub-menu">
                          <li><a href="{{ route('beasiswa') }}">Beasiswa</a></li>
                          <li><a href="{{ route('kurikulum') }}">Kurikulum</a></li>
                          <li><a href="{{ route('kesiswaan') }}">Kesiswaan</a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="gallery.html">Gallery<i class="fa fa-angle-down"></i></a>
                        <ul class="sub-menu">
                          <li><a href="{{ route('foto') }}">Foto</a></li>
                          <li><a href="{{ route('video') }}">Video</a></li>
                        </ul>
                      </li>
                      <li><a href="{{ route('fasilitas') }}">Fasilitas</a></li>
                      <li>
                        <a href="{{ route('berita') }}">Berita</a>
                      </li>
                      <li><a href="{{ route('contact') }}">Contact</a></li>
                      <li>
                        <a href="{{ route('unduh') }}">Unduh</a>
                      </li>
                    </ul>
                  </nav>
                </div>
                <ul class="header-search">
                  <li class="search-menu">
                    <i id="toggle-search" class="fa fa-search"></i>
                  </li>
                </ul>
                <!--Search Form-->
                <div class="search">
                  <div class="search-form">
                    <form id="search-form" action="#">
                      <input type="search" placeholder="Search here..." name="search" />
                      <button type="submit">
                        <span><i class="fa fa-search"></i></span>
                      </button>
                    </form>
                  </div>
                </div>
                <!--End of Search Form-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--End of Logo Mainmenu-->
    <!-- Mobile Menu Area start -->
    <div class="mobile-menu-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="mobile-menu">
              <nav id="dropdown">
                <ul>
                  <li>
                    <a href="index.html">HOME</a>
                    <ul>
                      <li><a href="index-2.html">Homepage Version 2</a></li>
                      <li><a href="index-3.html">Homepage Version 3</a></li>
                      <li><a href="index-4.html">Homepage Version 4</a></li>
                      <li><a href="index-5.html">Homepage Version 5</a></li>
                    </ul>
                  </li>
                  <li><a href="about.html">About Us</a></li>
                  <li>
                    <a href="class-grid.html">Classes</a>
                    <ul>
                      <li><a href="class-grid.html">Classes Grid</a></li>
                      <li><a href="class-list.html">Classes List</a></li>
                      <li><a href="class-details.html">Class Details</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="teacher.html">Teachers Page</a>
                    <ul>
                      <li><a href="teacher-info.html">Teachers Info</a></li>
                    </ul>
                  </li>
                  <li><a href="gallery.html">Gallery</a></li>
                  <li>
                    <a href="blog.html">Blog Page</a>
                    <ul>
                      <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                  </li>
                  <li><a href="contact.html">CONTACT</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Mobile Menu Area end -->
  </header>
  <!--End of Header Area-->