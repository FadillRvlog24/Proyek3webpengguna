<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mbahsuh web</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset ('css/progressbar_barfiller.css')}}">
    <link rel="stylesheet" href="{{ asset ('css/gijgo.css')}}">
    <link rel="stylesheet" href="{{ asset ('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('css/animated-headline.css')}}">
    <link rel="stylesheet" href="{{ asset ('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <!-- Logo -->
                <div class="header-left">
                    <div class="logo">
                        <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                    </div>
                    <div class="menu-wrapper  d-flex align-items-center">
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav> 
                                <ul id="navigation">                                                                                          
                                    <li><a href="{{ url('/') }}">Beranda</a></li>
                                    <li class="active"><a href="{{ url('about') }}">Tentang kami</a></li>
                                    <li><a href="{{ url('services') }}">Layanan</a></li>
                                    </li>
                                    <li><a href="{{ url('contact') }}">Kontak kami</a></li>
                                    <li><a href="{{ url('chat') }}">Chat Bot</a></li> 
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div> 
                <div class="header-right d-none d-lg-block">
                <a href="#" class="header-btn1"><img src="" alt=""> +62 821-2902-2786</a>
                <a href="#" class="header-btn2">Hubungi sekarang!</a>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? Hero Start -->
        <div class="slider-area2 section-bg2 hero-overly" data-background="{{ asset('img/hero/mbahsuh.jpg')}}">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2">
                                <h2>Tentang kami</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? About Area  -->
        <section class="about-area2 pb-bottom mt-30">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <!-- about-img -->
                        <div class="about-img ">
                            <img src="{{ asset('img/hero/mbahsuh.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-25">
                                <h2>Tentang Kami</h2>
                            </div>
                            <p class="mb-20">
                            Solusi terbaik untuk sepatu bersih dan
                            terawat. Kami melayani berbagai
                            jenis sepatu dengan ayanan 
                            profesional dan harga terjangkau.                            
                        </p>
                            <a href="about.html" class="btn">Tentang kami</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
        <!--? Services Area Start -->
        <section class="services-area pt-top border-bottom pb-20 mb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Beginilah cara kerja kami</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-icon">
                                <img src={{ asset('img/icon/icon_pickup.png')}} alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Get Delivery/Drop Off</a></h5>
                                <p>Kami menawarkan kemudahan dengan layanan antar-jemput sepatu Anda di lokasi yang Anda tentukan
                                Atau, Anda dapat langsung mengunjungi lokasi kami untuk drop off sepatu</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-icon">
                                <img src={{ asset('img/icon/icon_openbox.png')}} alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Check & cleaning</a></h5>
                                <p>Setiap sepatu yang masuk akan kami periksa secara detail,
                                Dengan menggunakan bahan-bahan pembersih premium dan teknik khusus, kami membersihkan setiap bagian sepatu</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-icon">
                                <img src={{ asset('img/icon/icontruck.png')}} alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Deliver orders</a></h5>
                                <p>Setelah proses pembersihan selesai, sepatu Anda akan dikemas dengan rapi dan aman untuk menjaga kebersihannya selama pengantaran.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services End -->
        <!--? Want To work -->
       
        <!-- Want To work End -->
        <!--? Testimonials_start -->
        <section class="testimonials-area testimonials-overly  position-relative">
            <div class="container">
                <div class="border-bottom section-padding40 ">
                    <div class="row">
                        <div class="col-xl-12 ">
                            <!-- testmonial-image -->
                            <div class="testmonial-nav text-center">
                                <div class="testmonial-thumb">
                                    <img src="assets/img/gallery/testimonila1.png" alt="">
                                </div>
                                <div class="testmonial-thumb">
                                    <img src="assets/img/gallery/testimonila2.png" alt="">
                                </div>
                                <div class="testmonial-thumb">
                                    <img src="assets/img/gallery/testimonila3.png" alt="">
                                </div>
                                <div class="testmonial-thumb">
                                    <img src="assets/img/gallery/testimonila2.png" alt="">
                                </div>
                            </div>
                            <div class="testmonial-item-active text-center">
                                <!-- testimonial-single-items -->
                                <div class="testmonial-item ">
                                    <p class="pera">Harga resneable pengerjaanya juga cepat<br> detail juga & rapih, thanks!</p>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p> Reva</p>
                                </div>
                                <!-- testimonial-single-items -->
                                <div class="testmonial-item ">
                                    <p class="pera">Oke progres nya cepat detail banget pengerjaannya <br> gw suka!</p>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p> Mamat</p>
                                </div>
                                <!-- testimonial-single-items -->
                                <div class="testmonial-item ">
                                    <p class="pera">Bagus sekali pengerjaanya di mbahsuh cleaning ini dan cepat<br> bakal jadi langganan terus deh</p>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p> Mas Sakim jaya</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials_end -->
        <!--? Company achievement Start -->
       
        <!-- Company achievement End -->
        <!--?  Map Area start  -->
        <div class="Map-area">
            <img src="assets/img/gallery/Map.png" alt="" class="w-100">
        </div>
        <!-- Map Area End -->
    </main>
    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                     <div class="single-footer-caption mb-50">
                       <div class="single-footer-caption mb-30">
                        <!-- logo -->
                        <div class="footer-logo mb-35">
                            <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                        </div>
                        <div class="footer-tittle">
                            <div class="footer-pera">
                                <p>Solusi terbaik untuk sepatu bersih dan terawat. Kami melayani berbagai jenis sepatu dengan layanan profesional dan harga terjangkau.</p>
                            </div>
                        </div>
                        <!-- social -->
                        <div class="footer-social">
                            <a href="https://api.whatsapp.com/message/SCECA3U7ACBAE1?autoload=1&app_absent=0"><img src="{{ asset('img/icons8-whatsapp-22.png')}}"></a>
                            <a href=""><img src="{{ asset('img/icons8-instagram-22.png')}}"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                <div class="single-footer-caption mb-50">
                    <div class="footer-tittle">
                        <h4>Layanan kami</h4>
                        <ul>
                            <li>- Shoes treatment</></li>
                            <li>- Aughment</a></li>
                            <li>- Repaint treatment</a></li>
                            <li>- Bags treatment</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                <div class="single-footer-caption mb-50">
                    <div class="footer-tittle">
                        <h4>Hubungi kami</h4>
                        <ul>
                            <li class="number"><a href="#"> +62 821-2902-2786</a></li>
                            <li><a href="#">@mbah.suh</a></li>
                            <li><a href="#">Jl Magasari 37-47, Margadadi, Indramayu,  Indramayu  Regency, Jawa Barat 45211.</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer-bottom area -->
<div class="footer-bottom-area section-bg2" data-background="assets/img/gallery/footer-bg.png">
    <div class="container">
        <div class="footer-border">
           <div class="row d-flex align-items-center">
               <div class="col-xl-12 ">
                   <div class="footer-copy-right text-center">
                       <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <a href="https://colorlib.com" target="_blank"></a>
                          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Footer End-->
</footer>
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->

<!-- JavaScript -->
<script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/slick.min.js') }}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/animated.headline.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>

<!-- Date Picker -->
<script src="{{ asset('js/gijgo.min.js') }}"></script>
<!-- Nice-select, sticky -->
<script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('js/jquery.sticky.js') }}"></script>
<!-- Progress -->
<script src="{{ asset('js/jquery.barfiller.js') }}"></script>

<!-- Counter, Waypoint, Hover Direction -->
<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('js/waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('js/hover-direction-snake.min.js') }}"></script>

<!-- Contact JS -->
<script src="{{ asset('js/contact.js') }}"></script>
<script src="{{ asset('js/jquery.form.js') }}"></script>
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/mail-script.js') }}"></script>
<script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>

<!-- Jquery Plugins, Main Jquery -->	
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>