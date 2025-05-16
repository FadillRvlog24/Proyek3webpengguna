<!doctype html>
<html class="no-js" lang="zxx">
<head>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>mbahsuh</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">
    
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/progressbar_barfiller.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
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
                    <img src="" alt="">
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
                        <a href=""><img src="{{ asset('img/logo.png')}}" alt="" width="100"></a>
                    </div>
                    <div class="menu-wrapper  d-flex align-items-center">
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav> 
                                <ul id="navigation">                                                                     
                                    <li class="active">
                                    <a href="{{ url('/') }}">Beranda</a></li>
                                    <li><a href="{{ url('about') }}">Tentang kami</a></li>
                                    <li><a href="{{ url('services') }}">Layanan</a></li>   
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
        <!--? slider Area Start-->
        <section class="slider-area hero-overly">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-9 col-md-10 col-sm-9">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay="0.2s">Beranda</h1>
                                    <p data-animation="fadeInLeft" data-delay="0.4s">Kami menyediakan layanan cuci sepatu profesional dengan hasil yang bersih dan memuaskan</p>
                                    <a href="{{ url('services') }}" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.7s">Jelajahi layanan kami</a>
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </section>
        <!-- slider Area End-->
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
        <!--? Offer-services Start  -->
        <section class="offer-services pb-bottom2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Layanan yang kami tawarkan</h2>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-offers">
                            <img src="{{ asset ('img/treatment_repaint.jpg') }}" alt="" class=" w-100">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-offers">
                            <img src="{{ asset('img/bghitam.jpg')}}" alt="" class=" w-100">
                            <div class="offers-caption text-center">
                                
                                <div class="cat-cap">
                                    <h5><a href="">Repaint treatment</a></h5>
                                    <p>repaint atau Recolouring sepatu adalah proses mengubah warna sepatu, dengan menggunakan cat khusus.
                                         Ini bisa dilakukan untuk memperbaiki warna yang pudar, mengikuti tren baru, atau memberikan tampilan yang lebih personal.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-offers">
                            <img src="{{ asset('img/bghitam.jpg')}}" alt="" class=" w-100">
                            <div class="offers-caption text-center">
                                <div class="cat-icon">
                                    <img src="assets/img/icon/offers-icon1.png" alt="">
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="services.html">Deep cleaning</a></h5>
                                    <p>Membersihkan seluruh bagian sepatu mulai dari outsole,midsole,upper dan laces</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-offers">
                            <img src="{{ asset ('img/treatment_deepcleaning.jpg')}}" alt="" class=" w-100">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-offers">
                            <img src="{{ asset ('img/treatment_whitteningupper.jpg')}}" alt="" class=" w-100">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-offers">
                            <img src="{{ asset('img/bghitam.jpg')}}" alt="" class=" w-100">
                            <div class="offers-caption text-center">
                                <div class="cat-icon">  
                                    <img src="assets/img/icon/offers-icon1.png" alt="">
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="services.html">Treatment Whitening upper</a></h5>
                                    <p>Mengembalikan warna putih pada upper yang dikarenakan oksidasi/sisa sisa detergent</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Offer-services End  -->
        <!--? Want To work -->
        <section class="container">
            <section class="wantToWork-area" data-background="assets/img/gallery/section_bg01.png">
                <div class="wants-wrapper w-padding2">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-8 col-lg-9 col-md-7">
                            <div class="wantToWork-caption wantToWork-caption2">
                                <h2 style="color: black !important;">Selengkapnya tentang layanan kami!</h2>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-5">
                            <a href="{{ url('services') }}" class="btn wantToWork-btn"> pelajari lebih lanjut</a>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <!-- Want To work End -->
        <!-- Testimonials_start -->
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
                            <a href="{{ url('about') }}" class="btn">Tentang kami</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
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
                            <a href=""><img src="{{ asset('img/icons8-whatsapp-22.png')}}"></a>
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
                          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </a>
                          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Footer End-->
</footer>


<!-- JS here -->

<!-- JS here -->
<script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/slick.min.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/animated.headline.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('js/gijgo.min.js') }}"></script>
<script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('js/jquery.sticky.js') }}"></script>
<script src="{{ asset('/jquery.barfiller.js') }}"></script>
<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('js/waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('js/hover-direction-snake.min.js') }}"></script>
<script src="{{ asset('js/contact.js') }}"></script>
<script src="{{ asset('js/jquery.form.js') }}"></script>
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/mail-script.js') }}"></script>
<script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>