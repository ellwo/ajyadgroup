<x-public-layout>






    <div class="breadcrumbs d-flex align-items-center bg-m_secondary" >
        <div class="container position-relative d-flex flex-column align-items-right mt-4" data-aos="fade">

            <h2>{{ $service->titel }}</h2>
            <ol>
                <li><a href="{{ route('home') }}">الرئيسية</a></li>
                <li><a href="{{ route('service') }}">الخدمات</a></li>
                <li>{{ $service->titel }}</li>
            </ol>

        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- ======= Service Details Section ======= -->
    <section id="service-details" class="service-details">
        <div class="container" data-aos="fade-up" data-aos-delay="100">


            <div class="flex sticky flex-col items-center justify-center mx-auto mb-4 md:w-1/2 md:text-lg">
                <div class="mx-auto mb-2 text-3xl pr-2 font-bold border-r-4 border-r-black">{{ $service->titel }} <i class="{{ $service->img }}"></i></div>
                <p class="p-2  ">{{ $service->note }}</p>
            </div>
            <div class="row gy-4 relative min-h-screen">

                <div class=" nav nav-tabs col-lg-4 sticky">
                    
                    
                    <div class="w-full flex services-list">

                        <div class="w-1/2 navbar ">
                            <a href="">
                                $sdd
                            </a>
                        </div>
                        <div style="border:none;" class="w-1/2 services-list border-none">

                            @php
                                $it=$service_part;
                            @endphp
                           @foreach ($service->service_parts as $ser)
    
                           <a class="cursor-pointer @php
                               if($service_part==$ser->id)
                               echo 'active show';
                            
                           @endphp" data-bs-toggle="tab" data-aos="fade-up" data-bs-target="#tab-{{ $ser->id }}">
                            {{ $ser->titel }}</a>
                           @endforeach
                        </div>
    
                    </div>
                    
                </div>

                <div class="col-lg-8">


                    @php
                        $it=$service_part;
                    @endphp

                <div class="tab-content">

                    @foreach ($service->service_parts as $ser)
                    <div class="tab-pane @php
                    if($service_part==$ser->id)
                    echo 'active show';
                    
                @endphp" id="tab-{{ $ser->id }}" data-aos="fade-up">

                  <x-frontend.service-desc :post="$ser"/>

<br><hr>

                        @foreach ($ser->steps??[] as $s)
                        <div class="pb-0 mt-2 mb-0 text-right section-header">
                            <h5 class="font-bold">
                            {{ $s['title'] }}</h5>
                        </div>
                        <ul>

                        @foreach ($s['steps']??[] as $k=>$hs)

                           <li>
                                @if ($s['type']=="counter")

                                <i class="">{{ $k+1 }}</i>
                                @else
                                <i class="">*</i>
                                @endif
                                <span>
                                  {{ $hs }}
                                </span>
                            </li>
                        @endforeach
                    </ul>
                    <hr class="w-50">
                        @endforeach







                    </div>
                    @endforeach

                </div>
                </div>

            </div>

        </div>
    </section>

</x-public-layout>
