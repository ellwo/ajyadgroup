
<header dir="ltr" style="direction: ltr !important;" id="header"
class="top-0 transition-transform duration-500 header align-items-center"
:class="{
    'fixed bg-base-30': scrollingDown,
    'fixed hidden translate-y-0': scrollingUp,
    'fixed ':!scrollingDown && !scrollingUp
}"

>
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1
            :class="{
                'hidden ': scrollingDown,
                'block':!scrollingDown && !scrollingUp
            }"
            class="text-center"
            ><x-application-logo class="h-16 lg:h-24"/><span>
            <x-app-name-text/>
            </span></h1>
            <h1
            :class="{
                ' block': scrollingDown,
                'hidden':!scrollingDown && !scrollingUp
            }"
            class="flex items-center justify-center text-center"
            >
           <img src="{{ asset('images/icon-logo.png') }}" class="h-12" alt="" srcset="">
           <x-app-name-text/>
           <span></span></h1>
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar ">
            <ul>
                <li><a href="index.html" class="
                    @if (request()->routeIs('home'))
                    active
                    @else

                    @endif
                    ">الرئسية</a></li>
                <li><a href="about.html">من نحن</a></li>
                <li><a href="services.html">الخدمات</a></li>
                <li><a href="blog.html">اخر الاخبار</a></li>
                {{-- <li class="dropdown"><a href="#"><span>مواقع التواصل الاجتماعي</span> <i
            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="#">Dropdown 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                <li><a href="#">Deep Dropdown 1</a></li>
                                <li><a href="#">Deep Dropdown 2</a></li>
                                <li><a href="#">Deep Dropdown 3</a></li>
                                <li><a href="#">Deep Dropdown 4</a></li>
                                <li><a href="#">Deep Dropdown 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Dropdown 2</a></li>
                        <li><a href="#">Dropdown 3</a></li>
                        <li><a href="#">Dropdown 4</a></li>
                    </ul>
                </li> --}}
                <li><a href="contact.html">تواصل معنا </a></li>
            </ul>
        </nav>
        <!-- .navbar -->

    </div>
</header>
