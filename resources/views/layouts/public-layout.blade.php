<!DOCTYPE html>
<html lang="en"  dir="rtl">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>مجموعة اجياد - الرئيسية</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons --><link rel="icon" href="{{ asset('images/icon-logo.png') }}" sizes="192x192">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.rtl.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/vendor/owl/css/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->



    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <!-- =======================================================
  * Template Name: UpConstruction - v1.3.0
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body x-data="setup" :class="{dark:isDark}">






    <x-frontend.nav/>

    <main  id="main">
        {{ $slot }}
    </main>























    <footer id="footer" style="background-image: url('{{ asset('images/footter.png') }}')"  class="footer ">

        <div class="footer-content position-relative ">
          <div class="container ">
            <div class="row ">

              <div class="col-lg-4 col-md-6 ">
                <div class="pr-16 text-xl footer-i0nfo ">
                  <h3 class="text-center"><x-application-logo/>
                    <x-app-name-text/></h3>
                  <p class="text-sm md:text-xl">

                    قطاع تخليص التأشيرات أمام السفارة السعودية <br>
                    بجوار هيئة الاستثمار<br>صنعاء-اليمن  <br><br>
                  </p>
                  <div class="mt-3 social-links d-flex ">
                    <a target="_blank" href="http://twitter.com/ajyadgroup17" class="d-flex align-items-center justify-content-center "><i class="bi bi-twitter "></i></a>
                    <a target="_blank" href="http://facebook.com/ajyadgroup17" class="d-flex align-items-center justify-content-center "><i class="bi bi-facebook "></i></a>
                  </div>
                </div>
              </div><!-- End footer info column-->

              <div class="col-lg-2 col-md-3 footer-links ">
                <h4>روابط مهمة</h4>
                <ul>
                  <li><a href="{{ route('home') }}">الرئيسية</a></li>
                  <li><a href="# ">من نحن</a></li>
                  <li><a href="# ">خدماتنا</a></li>
                  <li><a href="{{ route('contact') }}">تواصل معنا</a></li>
                  <li><a href="# ">فروعنا</a></li>
                </ul>
              </div><!-- End footer links column-->

              <div class="col-lg-2 col-md-3 footer-links ">
                <h4>اتصل بنا </h4>

                <ul>
                    <li>
              <strong><i class="fa fa-phone"></i></strong> <a href="callto:01-267440">01-267440 </a> | <a href="callto:01-240800"> 01-240800</a>
                    </li>
                    <li>
              <strong><i class="fa-brands fa-whatsapp"></i></strong><a href="https://wa.me/967712002001"> +967712002001</a>
                    </li>
                    <li>
              <a href="mailto:info@ajyadgroup.net"><strong><i class="fa-regular fa-envelope"></i></strong> info@ajyadgroup.net</a>
                    </li>
                </ul>
              </div>
{{--
              <div class="col-lg-2 col-md-3 footer-links ">
                <h4>Our Services</h4>
                <ul>
                  <li><a href="# ">Web Design</a></li>
                  <li><a href="# ">Web Development</a></li>
                  <li><a href="# ">Product Management</a></li>
                  <li><a href="# ">Marketing</a></li>
                  <li><a href="# ">Graphic Design</a></li>
                </ul>
              </div><!-- End footer links column-->

              <div class="col-lg-2 col-md-3 footer-links ">
                <h4>Hic solutasetp</h4>
                <ul>
                  <li><a href="# ">Molestiae accusamus iure</a></li>
                  <li><a href="# ">Excepturi dignissimos</a></li>
                  <li><a href="# ">Suscipit distinctio</a></li>
                  <li><a href="# ">Dilecta</a></li>
                  <li><a href="# ">Sit quas consectetur</a></li>
                </ul>
              </div><!-- End footer links column-->

              <div class="col-lg-2 col-md-3 footer-links ">
                <h4>Nobis illum</h4>
                <ul>
                  <li><a href="# ">Ipsam</a></li>
                  <li><a href="# ">Laudantium dolorum</a></li>
                  <li><a href="# ">Dinera</a></li>
                  <li><a href="# ">Trodelas</a></li>
                  <li><a href="# ">Flexo</a></li>
                </ul>
              </div><!-- End footer links column--> --}}

            </div>
          </div>
        </div>

        <div class="text-center footer-legal position-relative ">
          <div class="container ">
            <div class="copyright ">
              &copy; Copyright <strong><span><x-app-name-text/></span></strong>. All Rights Reserved
            </div>
            <div class="credits ">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
              Designed by <a href="#"></a> Distributed by <a
                href="#"></a>
            </div>
          </div>
        </div>

      </footer>
      <!-- End Footer -->

      <a href="# " class="scroll-top d-flex align-items-center justify-content-center "><i
          class="bi bi-arrow-up-short "></i></a>

      <div id="preloader"></div>



    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }} "></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }} "></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }} "></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }} "></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }} "></script>
    <script src="{{ asset('assets/vendor/owl/js/jquery.min.js') }} "></script>

    <script src="{{ asset('assets/vendor/owl/js/owl.carousel.min.js') }} "></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }} "></script>

        @isset($script)

        {{ $script }}
        @endisset

</body>

</html>
