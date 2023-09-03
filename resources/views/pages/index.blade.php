<x-public-layout>



    <!-- ======= Hero Section ======= -->






    <section class="hero">


        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="text-center col-lg-6">
                        <h2 class="" data-aos="fade-down">مرحبا بكم في <span>
                                <x-app-name-text />
                            </span></h2>

                        <p data-aos="fade-up">
                            افضل طريقة للحصول على تأشيرة دخول للمملكة العربية السعودية <br>
                            تعتبر مجموعة أجياد من الرواد في تقديم خدمات تخليص التأشيرات ومن ضمن اوائل المكاتب المعتمدة
                            من قنصلية المملكة العربية السعودية منذ العام 2003 بترخيص رقم 17</p>

                        {{-- <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get Started</a>
                                 --}}
                    </div>
                </div>
            </div>
        </div>



        <div class="home-slider owl-carousel owl-loaded owl-drag">



            <div class="relative h-screen bg-dark bg-opacity-5 "
                style="background-image: url(images/bg2-2.jpg); background-size: cover;
                       background-position: center;
                       background-repeat: no-repeat;
                       ">
                <div class="absolute inset-0 bg-dark bg-opacity-5 opacity-70"></div>
            </div>

            <div class="relative h-screen bg-dark bg-opacity-5 "
                style="background-image: url(assets/img/hero-carousel/hero-carousel-44.jpg); background-size: cover;
                       background-position: center;
                       background-repeat: no-repeat;
                       ">
                <div class="absolute inset-0 bg-dark bg-opacity-5 opacity-70"></div>
            </div>

        </div>



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

                    <form onsubmit="ajxaproform(event,this,'{{ route('pass.search') }}')" method="POST" class="w-full text-center php-email-form lg:w-2/3">

                        @csrf

                        <div class="py-0 m-0 section-header">
                            <h4 class="text-lg font-bold md:text-2xl">قم بادخال رقم الجواز</h4>
                        </div>

                        <div class="w-full ">

                            <div class="w-full">
                                <input type="text" name="pass_num"
                                    class="w-full p-2 font-bold border rounded-md md:w-2/3 md:text-2xl focus:border-blue-600"
                                    placeholder="رقم الجواز" required>
                            </div>


                            <div class="mt-2 text-center col-md-12">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your quote request has been sent successfully. Thank you!
                                </div>

                                <button class="relative" id='btnsubmit' type="submit">بحث <i class="fa fa-search"></i></button>
                                <div id="search_con" class="">

                                </div>

                            </div>

                        </div>
                    </form>




                </div>

                <!-- End Quote Form -->

            </div>

        </div>
    </section>



    <section id="alt-services" class="alt-services">
        <div class="container m-4" data-aos="fade-up">


            <div class="py-0 m-0 mb-4 section-header">
                <h2>من نحن ؟</h2>

            </div>
            <div class="row justify-content-around gy-4 md:px-4">
                {{-- <div class="col-lg-12 img-bg" style="background-image: url(assets/img/alt-services.jpg);" data-aos="zoom-in" data-aos-delay="100"></div> --}}

                <div class="col-lg-12 d-flex flex-column justify-content-center">

                    <div class=" md:p-8">


                    <h2 class="text-2xl font-bold">مجموعة اجياد</h2>
                    <p class="w-3/4 text-sm md:text-lg">تأسست مجموعة أجياد في عام 2004م ودشنت نشاطها بتقديم خدمات الحج والعمرة ثم الأيدي العاملة وتخليص التأشيرات المتنوعة وتذاكر السفر..  مجموعة أجياد وفي ظل منافسة كبيرة وصعوبات شهدتها وتشهدها كل من سوق تخليص التأشيرات وخدمات الحج والعمرة في اليمن استطاعت في وقت قياسي أن تحقق حضوراً معتبراً داخل هذه السوق حتى صارت في الصدارة.</p>
                </div>

            <div class="w-2/3 h-1 mx-1 mt-1 rounded-md bg-primary_color md:mx-4 md:mt-0">
            </div>



                    <div class="p-0 m-0 row">

                        <div class="col-lg-6">

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                        <i class="flex-shrink-0 bi bi-easel"></i>
                        <div class="">
                            <h4><a href="" class="flex flex-col text-xl stretched-link">الرؤية<div class="w-1/3 bg-primary_color h-0.5 rounded-md"></div></a></h4>
                            <p class="text-sm md:text-xs">تميزت مجموعة اجياد لتنمية الخدات السياحية بعنايتها وحرصها على تقديم منتجاتها الخدمية بالصورة المثلى، فنالت بذلك ثقة ورضا عملائها.. ساعدها في ذلك الرؤية المستقبلية وامتلاك بنية تحتية متكاملة تنظيمياً وإدارياً يساهم بشكل مباشرفي أداء انشطة وإعمال المجموعة وفق أعلى معايير وأصول ومبادئ العمل المؤسسي.</p>
                        </div>
                    </div>

                        </div>
                        <div class="col-lg-6">

                            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                                <i class="flex-shrink-0 bi bi-patch-check"></i>
                                <div>
                                    <h4><a href="" class="stretched-link">ثقة والتزام <div class="w-1/3 bg-primary_color h-0.5 rounded-md"></div></a></h4>
                                    <p>

تعتبر مجموعة أجياد من الرواد في تقديم خدمات تخليص التأشيرات ومن ضمن اوائل المكاتب المعتمدة من قنصلية المملكة العربية السعودية منذ العام 2003 بترخيص رقم 17</p>
                                </div>
                            </div>
                        </div>



                    </div>


                    <!-- End Icon Box -->

                    <!-- End Icon Box -->

                    <!-- End Icon Box -->

                    <!-- End Icon Box -->

                </div>
            </div>

        </div>
    </section>


    <section id="stats-counter" class="stats-counter section-bg">
        <div class="container">


            <div class="py-0 m-0 mb-4 section-header">
                <h2>نعتز بأرقامنا </h2>

            </div>
          <div class="flex justify-center text-center row gy-4">

            <div class="col-lg-3 col-md-6">
              <div class="stats-item d-flex align-items-center w-100 h-100">
                <i class="flex-shrink-0 bi bi-emoji-smile color-blue"></i>
                <div>
                  <span data-purecounter-start="0" data-purecounter-end="23200" data-purecounter-duration="1"
                    class="purecounter"></span>
                  <p>عميل سعيد</p>
                </div>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
              <div class="stats-item d-flex align-items-center w-100 h-100">
                <i class="flex-shrink-0 bi bi-journal-richtext color-orange"></i>
                <div>
                  <span data-purecounter-start="0" data-purecounter-end="52100" data-purecounter-duration="1"
                    class="purecounter"></span>
                  <p>معاملة منجزة</p>
                </div>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
              <div class="stats-item d-flex align-items-center w-100 h-100">
                <i class="flex-shrink-0 fa fa-hands-helping color-green"></i>
                <div>
                  <span data-purecounter-start="0" data-purecounter-end="14" data-purecounter-duration="1"
                    class="purecounter"></span>
                  <p>عام من الخبرة</p>
                </div>
              </div>
            </div><!-- End Stats Item -->

            <!-- End Stats Item -->

          </div>

        </div>
      </section>
      <!-- End Stats Counter Section -->









    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>خدماتنا</h2>
                <p>نحن نقدم العديد من الخدمات في مجال السفريات بشكل عام
                </p>
            </div>

            <div class="row gy-4">



                @foreach ($services as $service)

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="{{ $service->img }}"></i>

                        </div>
                        <h3>{{ $service->titel }}</h3>
                        <p>
                            {{ $service->note }}</p>
                        <a href="{{ route('service.show', $service) }}" class="readmore stretched-link">اقراء المزيد <i
                                class="bi bi-arrow-left"></i></a>
                    </div>
                </div>
                @endforeach
                <!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fa-solid fa-mosque"></i>
                        </div>
                        <h3>خدمات الحج والعمرة</h3>
                        <p>
                            نوفر لكم امكانية الحصول على تأشيرة حج او عمرة الى الاراضي المقدسة بافضل الوسائل المتاحة بأقل
                            اسعار ممكنة.</p>
                        <a href="{{ route('service.show', 1) }}" class="readmore stretched-link">اقراء المزيد <i
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
                        <a href="{{ route('service.show', 1) }}" class="readmore stretched-link">اقراء المزيد <i
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
                        <a href="{{ route('service.show', 1) }}" class="readmore stretched-link">اقراء المزيد <i
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
                        <a href="{{ route('service.show', 1) }}" class="readmore stretched-link">اقراء المزيد <i
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
                    <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid"
                            alt=""></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
        <section id="recent-blog-posts" class="recent-blog-posts">
            <div class="container" data-aos="fade-up" ">



  <div class=" section-header">
        <h2>اخر الاخبار</h2>
        <p></p>
      </div>

      <div class="row gy-5 ">



        @foreach ($posts as $p)
        <div class="col-xl-4 col-md-6 " data-aos="fade-up " data-aos-delay="100 ">
            <div class="post-item position-relative h-100 ">

              <div class="overflow-hidden post-img position-relative ">
                <img src="{{ $p->img }}" class="img-fluid " alt=" ">
                <span class="post-date ">{{ $p->created_at }}</span>
              </div>

              <div class="post-content d-flex flex-column ">

                <h3 class="post-title ">{{ $p->titel }}</h3>

                <div class="meta d-flex align-items-center ">
                  <div class="d-flex align-items-center ">
                    <i class="bi bi-person "></i> <span class="ps-2 ">{{ $p->user?->name }}</span>
                  </div>
                  <span class="px-3 text-black-50 ">/</span>

                </div>

                <hr>

                <a href="{{ route('post.show',$p) }}" class="readmore stretched-link "><span>اقراء المزيد</span><i
                    class="bi bi-arrow-right "></i></a>

              </div>

            </div>
          </div><!-- End post item -->

        @endforeach

      </div>

      </div>
    </section>




    <x-slot name="script">


  <script src="{{ asset('assets/js/search_pass.js') }}"></script>
        <script type="text/javascript">
            $('.home-slider').owlCarousel({
                loop: true,
                autoplay: true,
                margin: 0,
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
                autoplayHoverPause: false,
                items: 1,
                responsive: {
                    0: {
                        items: 1,
                        nav: false,
                        dots: false
                    },
                    600: {
                        items: 1,
                        nav: false,
                        dots: false
                    },
                    1000: {
                        items: 1,
                        nav: false,
                        dots: false
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
            });
        </script>

    </x-slot>
    <!-- End Hero Section -->

</x-public-layout>
