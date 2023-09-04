
<x-public-layout>

    <div class="breadcrumbs d-flex align-items-center bg-m_secondary" style=" ">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

          <h2>من نحن ؟</h2>
          <ol>
            <li><a href="{{ route('home') }}">الرئيسية</a></li>
            <li>من نحن </li>
          </ol>

        </div>
      </div>
  <!-- End Breadcrumbs -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">


      <div class="row position-relative">



        <div class="col-lg-7 about-img" >


            <div dir="rtl" id="hero" class="hero">

                <div class="home-slider owl-carousel owl-loaded owl-drag">



                    <div class="relative h-screen "
                        style="
                        height: 660px;
                        background-image: url(images/bg2-2.jpg); background-size: contain;
                               background-position: center;
                               background-repeat: no-repeat;
                               ">
                        <div class="absolute inset-0 opacity-70"></div>
                    </div>

                    <div class="relative h-screen "
                        style="
                        height: 660px;
                        background-image: url(assets/img/hero-carousel/hero-carousel-44.jpg);
                         background-size: contain;
                               background-position: center;
                               background-repeat: no-repeat;
                               ">
                        <div class="absolute inset-0 opacity-70"></div>
                    </div>

                </div>
                </div>
        </div>

        <div class="col-lg-7">
          <h2><x-app-name-text/></h2>
          <div class="our-story">
            <h4>منذ عام 2003</h4>
            <h3>قصتنا</h3>
            <p>تأسست مجموعة أجياد في عام 2004م ودشنت نشاطها بتقديم خدمات الحج والعمرة ثم الأيدي العاملة وتخليص التأشيرات المتنوعة وتذاكر السفر..  مجموعة أجياد وفي ظل منافسة كبيرة وصعوبات شهدتها وتشهدها كل من سوق تخليص التأشيرات وخدمات الحج والعمرة في اليمن استطاعت في وقت قياسي أن تحقق حضوراً معتبراً داخل هذه السوق حتى صارت في الصدارة.</p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commo</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Duis aute irure dolor in reprehenderit in</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span></li>
            </ul>
            <p>Vitae autem velit excepturi fugit. Animi ad non. Eligendi et non nesciunt suscipit repellendus porro in
              quo eveniet. Molestias in maxime doloremque.</p>

            <div class="watch-video d-flex align-items-center position-relative">
              <i class="bi bi-play-circle"></i>
              <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox stretched-link">Watch Video</a>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
  <!-- End About Section -->

  <!-- ======= Stats Counter Section ======= -->

  <x-slot name="script">


    <script src="{{ asset('assets/js/search_pass.js') }}"></script>
          <script type="text/javascript">

             $(document).ready(function () {
                $('.home-slider').owlCarousel({
                  loop:true,
                  autoplay: true,
                  margin: 0,
                  animateOut: 'fadeOut',
                  animateIn: 'fadeIn',
                  autoplayHoverPause: true,
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


             });
              </script>

</x-slot>
</x-public-layout>
