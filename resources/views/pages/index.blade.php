<x-public-layout>



                 <!-- ======= Hero Section ======= -->






                 <section class="hero">


                    <div class="info d-flex align-items-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="text-center col-lg-6">
                                    <h2 class="" data-aos="fade-down">مرحبا بكم في  <span><x-app-name-text/></span></h2>

                                    <p data-aos="fade-up">
                                        افضل طريقة للحصول على تأشيرة دخول للمملكة العربية السعودية <br>
                                        تعتبر مجموعة أجياد من الرواد في تقديم خدمات تخليص التأشيرات ومن ضمن اوائل المكاتب المعتمدة من قنصلية المملكة العربية السعودية منذ العام 2003 بترخيص رقم 17</p>

                                        {{-- <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get Started</a>
                                 --}}
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="home-slider owl-carousel owl-loaded owl-drag">



                       <div class="relative h-screen bg-dark bg-opacity-5 " style="background-image: url(images/bg2-2.jpg); background-size: cover;
                       background-position: center;
                       background-repeat: no-repeat;
                       ">
                       <div class="absolute inset-0 bg-dark bg-opacity-5 opacity-70"></div>
                       </div>

                       <div class="relative h-screen bg-dark bg-opacity-5 " style="background-image: url(assets/img/hero-carousel/hero-carousel-44.jpg); background-size: cover;
                       background-position: center;
                       background-repeat: no-repeat;
                       ">
                       <div class="absolute inset-0 bg-dark bg-opacity-5 opacity-70"></div>
                       </div>

                    </div>
{{--

                    <section class="home-slider owl-carousel owl-loaded owl-drag">

                        <div class="">


                        </div>

                                    <div class="">

                                        <div class="relative h-screen bg-dark bg-opacity-5 " style="background-image: url('images/'); background-size: cover;
                                        background-position: center;
                                        background-repeat: no-repeat;
                                        ">
                                        <div class="absolute inset-0 bg-dark bg-opacity-5 opacity-40"></div>
                                        </div>

                                                </div>

                    </section> --}}



                 </section>



                 <section id="get-started" class="get-started section-bg">
                    <div class="container">

                        <div class="row justify-content-between gy-4">

                            <div class="flex flex-col d-flex align-items-center" data-aos="fade-up">


                        <div class="py-0 m-0 mb-0 section-header">
                            <h2>الاستعلام على حالة الجواز</h2>

                        </div>
                        <div class="content">
                            <p>
                                يمكنك ويسهولة متابعة حالة معاملة جوازك من اي مكان فقط ب ادخال رقم الجواز
                            </p>
                        </div>
                                <form action="forms/quote.php" method="post" class="w-full text-center php-email-form lg:w-2/3">

                                    <div class="py-0 m-0 section-header">
                                        <h4 class="text-lg font-bold md:text-2xl">قم بادخال رقم الجواز</h4>
                                    </div>

                                    <div class="w-full ">

                                        <div class="w-full">
                                            <input type="text" name="name"
                                            class="w-full p-2 font-bold border rounded-md md:w-2/3 md:text-2xl focus:border-blue-600" placeholder="رقم الجواز" required>
                                        </div>


                                        <div class="mt-2 text-center col-md-12">
                                            <div class="loading">Loading</div>
                                            <div class="error-message"></div>
                                            <div class="sent-message">Your quote request has been sent successfully. Thank you!</div>

                                            <button type="submit">بحث  <i class="fa fa-search"></i></button>
                                        </div>

                                    </div>
                                </form>

                            </div>

                            <!-- End Quote Form -->

                        </div>

                    </div>
                </section>














                <section id="services" class="services section-bg">
                    <div class="container" data-aos="fade-up">

                        <div class="section-header">
                            <h2>خدماتنا</h2>
                            <p>نحن نقدم العديد من الخدمات في مجال السفريات بشكل عام
                            </p>
                        </div>

                        <div class="row gy-4">

                            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                <div class="service-item position-relative">
                                    <div class="icon">
                                        <i class="fa fa-tasks"></i>

                                    </div>
                                    <h3>خدمات تخليص التأشيرات</h3>
                                    <p>
                                        يقوم قطاع تخليص التأشيرات في المجموعة بتخليص جميع انواع التأشيرات والمعاملات للمملكة العربية السعودية</p>
                                    <a href="{{ route('service.show',1) }}" class="readmore stretched-link">اقراء المزيد <i
                          class="bi bi-arrow-left"></i></a>
                                </div>
                            </div>
                            <!-- End Service Item -->

                            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <div class="service-item position-relative">
                                    <div class="icon">
                                        <i class="fa-solid fa-mosque"></i>
                                    </div>
                                    <h3>خدمات الحج والعمرة</h3>
                                    <p>
                                        نوفر لكم امكانية الحصول على تأشيرة حج او عمرة الى الاراضي المقدسة بافضل الوسائل المتاحة بأقل اسعار ممكنة.</p>
                                        <a href="service-details.html" class="readmore stretched-link">اقراء المزيد <i
                                            class="bi bi-arrow-left"></i></a>
                                </div>
                            </div>
                            <!-- End Service Item -->

                            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                                <div class="service-item position-relative">
                                    <div class="icon">
                                        <i class="fa fa-hands-helping"></i>
                                    </div>
                                    <h3>توظيف الايدي العاملة</h3>
                                    <p>
                                        </p>
                                    <a href="service-details.html" class="readmore stretched-link">اقراء المزيد <i
                                        class="bi bi-arrow-left"></i></a>
                                </div>
                            </div>
                            <!-- End Service Item -->

                            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                                <div class="service-item position-relative">
                                    <div class="icon">

                                        <i class="fa-solid fa-bus"></i>
                                    </div>
                                    <h3>النقل الدولي والمحلي</h3>
                                    <p>
                                        </p>
                                    <a href="service-details.html" class="readmore stretched-link">اقراء المزيد <i
                                        class="bi bi-arrow-left"></i></a>
                                </div>
                            </div>
                            <!-- End Service Item -->

                            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                                <div class="service-item position-relative">
                                    <div class="icon">

                                        <i class="fa fa-plane-circle-check"></i>
                                    </div>
                                    <h3>حجز تذاكر الطيران</h3>
                                    <p>
                                        </p>
                                    <a href="service-details.html" class="readmore stretched-link">اقراء المزيد <i
                                        class="bi bi-arrow-left"></i></a>
                                </div>
                            </div>
                            <!-- End Service Item -->

                            <!-- End Service Item -->

                        </div>

                    </div>
                </section>



                <section id="constructions" class="constructions">



                    <div class="container" data-aos="fade-up">

                        <header class="section-header">
                            <h2>شركاؤنا</h2>
                        </header>

                        <div class="clients-slider swiper">
                            <div class="swiper-wrapper align-items-center">
                                <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </section>




                 <x-slot name="script">
                    <script type="text/javascript">
                        $('.home-slider').owlCarousel({
	    loop:true,
	    autoplay: true,
	    margin:0,
	    animateOut: 'fadeOut',
	    animateIn: 'fadeIn',
	    autoplayHoverPause: false,
	    items: 1,
	    responsive:{
	      0:{
	        items:1,
	        nav:false,
	        dots: false
	      },
	      600:{
	        items:1,
	        nav:false,
	        dots: false
	      },
	      1000:{
	        items:1,
	        nav:false,
            dots:false
	      }
	    }
	   });
       new Swiper('.clients-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 2,
        spaceBetween: 40
      },
      480: {
        slidesPerView: 3,
        spaceBetween: 60
      },
      640: {
        slidesPerView: 4,
        spaceBetween: 80
      },
      992: {
        slidesPerView: 6,
        spaceBetween: 120
      }
    }
  });      </script>

                 </x-slot>
    <!-- End Hero Section -->

</x-public-layout>
