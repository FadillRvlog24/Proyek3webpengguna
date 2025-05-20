<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
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
    <link rel="stylesheet" href="{{ asset ('css/styles.css')}}">

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
                    <a href="index.html"><img src="{{ asset('img/logo.png')}}" alt="" width="100"></a>
                    </div>
                    <div class="menu-wrapper  d-flex align-items-center">
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav> 
                                <ul id="navigation">                                                                                          
                                <li><a href="{{ url('/') }}">Beranda</a></li>
                                    <li><a href="{{ url('about') }}">Tentang kami</a></li>
                                    <li class="active"><a href="{{ url('services') }}">Layanan</a></li>
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
    
        <!--? Hero Start -->
        <div class="slider-area2 section-bg2 hero-overly" data-background="{{ asset('img/hero/mbahsuh.jpg')}}">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2">
                                <h2>Layanan kami</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-servis">
    <h1 class="title">Layanan Kami</h1>
    <h2 class="title">Aughment</h2>
    <div class="layanan-list">
        <div class="layanan-item">
            <img src="{{ asset('img/capcleaning.jpg') }}" alt="Quick Clean">
            <div class="text">
                <h4>Cap cleaning <span class="price">20k/2 hari</span></h4>
                <p>Pencucian pada seluruh bagian topi</p>
            </div>
        </div>

        <div class="layanan-item">
            <img src="{{ asset('img/sandalclean.jpg') }}" alt="Deep Clean">
            <div class="text">
                <h4>Sandals cleaning<span class="price">23k/2 Hari</span></h4>
                <p>Pembersihan menyeluruh bagian luar dan dalam sepatu, termasuk sol dan tali sepatu</p>
            </div>
        </div>

        <div class="layanan-item">
            <img src="{{ asset('img/reglueminor.jpg') }}" alt="Leather Care">
            <div class="text">
                <h4>Reglue minor<span class="price">40k/2 Hari</span></h4>
                <p>Pengeleman ulang pada beberapa bagian yang
                terkelupas</p>
            </div>
        </div>

        <div class="layanan-item">
            <img src="{{ asset('img/reglueshoes.jpg') }}" alt="Kids Shoes Cleaning">
            <div class="text">
                <h4>Reglue full<span class="price">80k/3 Hari</span></h4>
                <p>Melakukan pengeleman ulang pada seluruh
                bagian yang terkelupas</p>
            </div>
        </div>

        <div class="layanan-item">
            <img src="{{ asset('img/waterproofingshoes.jpg') }}" alt="Women Shoes">
            <div class="text">
                <h4>Waterproofing <span class="price">45k</span></h4>
                <p>Pemberian cairan waterproof agar sepatu tidak 
                mudah kotor (efek daun talas)</p>
            </div>
        </div>

        <div class="layanan-item">
            <img src="{{ asset('img/cleaning.jpeg') }}" alt="Unyellowing Midsole">
            <div class="text">
                <h4>Next day <span class="price">40k 5jam</span></h4>
                <p>Percepat hari treatment jadi 1 hari pengerjaan
                (khusus treatment pencucian)</p>
            </div>
        </div>
        
        <div class="layanan-item">
            <img src="{{ asset('img/reparationshoes.jpg') }}" alt="Unyellowing Midsole">
            <div class="text">
                <h4>Reparation <span class="price">Start from
                125k</span></h4>
                <p>Mereparasi ulang bagian tertentu pada sepatu</p>
            </div>
    </div>
    <div class="container-ini">
    <!-- Tombol Kembali ke Halaman Sebelumnya -->
    <a href="{{ url('services') }}" class="back-btn">
        <img src="{{ asset('img/icons8back26.png') }}" alt="Forward" class="back-icon">
    </a>

    <!-- Tombol Kembali ke Halaman Lain -->
    <a href="{{ url('services2') }}" class="back-btn">
        <img src="{{ asset('img/icons8forward26.png') }}" alt="Back" class="back-icon">
    </a>
</div>

    
    
           
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
                            <a href="https://www.instagram.com/mbah.suh/"><img src="{{ asset('img/icons8-instagram-22.png')}}"></a>
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
                            <li class="number"><a href="https://api.whatsapp.com/message/SCECA3U7ACBAE1?autoload=1&app_absent=0"> +62 821-2902-2786</a></li>
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