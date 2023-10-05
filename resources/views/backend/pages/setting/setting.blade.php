@extends('backend.layouts.backend-layout', ['class' => 'g-sidenav-show bg-gray-100 rtl', 'title' => 'الاعدادات'])

@section('content')
    <!-- End Navbar -->
    <div class="py-4 container-fluid">
        <div class="my-4 row">
            <div class="mx-auto mb-4 col-lg-8 col-md-10 mb-md-0">
                <div class="card">
                    <div dir="rtl" class="pb-0 card-header">
                        <div class="mb-3 row">
                            <div class="col-6">
                                <h6>اضافة سعر خدمة جديدة :- </h6>
                                <p class="text-sm">

                                </p>
                            </div>
                            <div class="my-auto col-6 text-start">

                                <a href="{{ route('service_prices') }}" class="btn bg-gradient-info btn-sm">عودة الى القائمة
                                    <i class="fa fa-arrow-left"></i></a>
                            </div>
                        </div>
                    </div>

                    <form dir="rtl" class="p-4" method="POST" action="{{ route('setting.store') }}">
                        @csrf



                        <div class="">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                        aria-selected="true">
                                        المعلومات الاساسية</button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile" type="button" role="tab"
                                        aria-controls="nav-profile" aria-selected="false">
                                        معلومات الاتصال</button>
                                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-contact" type="button" role="tab"
                                        aria-controls="nav-contact" aria-selected="false">
                                        الصور</button>
                                         <button class="nav-link" id="nav-meta-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-meta" type="button" role="tab"
                                        aria-controls="nav-meta" aria-selected="false">
                                        Meta</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">

                                    <div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="exampleFormControlInput1">اسم الموقع</label>
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        value="{{ Config::get('sitesetting.app_name') }}" name="app_name"
                                                        id="exampleFormControlInput1" placeholder="اسم الموقع">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-md-8">

                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">العنوان الاساسي</label>
                                                    <textarea name="address" class="form-control" rows="6">{{ Config::get('sitesetting.address') }}</textarea>
                                                </div>
                                            </div>

                                            <div class="col-12">

                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">من نحن - قصتنا</label>
                                                    <textarea name="about_us" class="form-control" id="about_us" rows="6">@php echo Config::get('sitesetting.about_us') @endphp</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">

                                    <div class="row">
                                        <div dir="" class="col-md-6">
                                            <div dir="" class="form-group">

                                                <label for="exampleFormControlInput1">FaceBook </label>
                                                <div class="input-group">
                                                    <span class="input-group-text fa-brands fa-facebook-f text-blue "
                                                        id="basic-addon1"></span>
                                                    <input dir="ltr" type="text"
                                                        value="{{ Config::get('sitesetting.facebook') }}" name="facebook"
                                                        class="form-control px-2" placeholder="Username"
                                                        aria-label="Username" aria-describedby="basic-addon1">
                                                </div>

                                            </div>
                                        </div>
                                        <div dir="" class="col-md-6">
                                            <div dir="" class="form-group">

                                                <label for="exampleFormControlInput1">Twitter </label>
                                                <div class="input-group">
                                                    <span class="input-group-text fa-brands fa-twitter "
                                                        id="basic-addon1"></span>
                                                    <input dir="ltr" name="twitter"
                                                        value="{{ Config::get('sitesetting.twitter') }}" type="text"
                                                        class="form-control px-2" placeholder="@ajay"
                                                        aria-label="Username" aria-describedby="basic-addon1">
                                                </div>

                                            </div>
                                        </div>
                                        <div dir="" class="col-md-6">
                                            <div dir="" class="form-group">

                                                <label for="exampleFormControlInput1">وتساب </label>
                                                <div class="input-group">
                                                    <span class="input-group-text fa-brands fa-whatsapp text-success-dark "
                                                        id="basic-addon1"></span>
                                                    <input dir="ltr" name="whatsapp"
                                                        value="{{ Config::get('sitesetting.whatsapp') }}" type="text"
                                                        class="form-control px-2" placeholder="+96777777777"
                                                        aria-label="Username" aria-describedby="basic-addon1">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-6">

                                            <div x-data='{"phones_count":0}' class="form-group  ">
                                                <label for="exampleFormControlInput12">ارقام الهاتف</label>

                                                <div class="text-center flex">
                                                  
                                                  @foreach (explode(',',Config::get('sitesetting.phone')??'') as $item)
                                                  <div class="input-group">
                                                    <span class="input-group-text fa fa-phone "
                                                        id="basic-addon1"></span>

                                                    <input type="text" required name="phone[]"
                                                        value="{{$item}}"
                                                        class="form-control" id="exampleFormControlInput12"
                                                        placeholder="">
                                                </div>       
                                                  @endforeach
                                               

                                                    <template x-for="i in phones_count">


                                                        <div dir="l" class="mb-4 input-group">
                                                            <span
                                                                onclick=" $(this).parent().removeClass('mb-4');$(this).parent().html('');"
                                                                class="input-group-text bg-danger"><i
                                                                    class="fa-solid fa-remove "></i></span>
                                                            <input type="text" name="phone[]" class="form-control"
                                                                placeholder="" />
                                                        </div>
                                                    </template>
                                                    <button @click="phones_count++;"
                                                        class="btn btn-success btn-sm mt-1 mx-auto" type="button"> اضافة
                                                        رقم <i class="fa fa-plus"></i> </button>
                                                    <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="">

                                            <div dir="" class="form-group">

                                                <label for="exampleFormControlInput1">ايميل التواصل </label>
                                                <div class="input-group">
                                                    <span class="input-group-text fa-regular fa-envelope "
                                                        id="basic-addon1"></span>
                                                    <input dir="ltr" name="email" value="{{Config::get('sitesetting.email')}}" type="text"
                                                        class="form-control px-2 " placeholder="email@ajay.com"
                                                        aria-label="Username@info.com" aria-describedby="basic-addon1">
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                    aria-labelledby="nav-contact-tab">
                                   <div class="row">

                                    <div class="col-4">
                                      <label for="exampleFormControlSelect1" class="m-4 h-2"> صورة الشعار</label>
                                        <div class=" h-px-img" id="app_logo"></div>
                                    </div>
                                    <div class="col-4">
                                      <label for="exampleFormControlSelect1" class="m-4 h-2"> صورة الايقونة</label>
                                        <div class=" h-px-img" id="app_icon"></div>
                                    </div>

                                   </div>
                                    <div class="">
                                      <label for="exampleFormControlSelect1" class="m-4 h-2"> صورة العرض الاساسية</label>
                                        <div class="col-10 mx-auto h-px-img" id="hero_icon"></div>
                                    </div>
                                                    
                                  </div>

                                  <div class="tab-pane fade " id="nav-meta" role="tabpanel"
                                  aria-labelledby="nav-meta-tab">

                                  <div>

                                    <div x-data='{"phones_count":0}' class="form-group  ">
                                        <label for="exampleFormControlInput12">الكلمات المفتاحية (KeyWords)</label>


                                        <textarea class="form-control" name="keywords" id="" cols="30" rows="10">{{Config::get('sitesetting.keywords')}}</textarea>
                                        <div class="text-center flex">
                                       
                                         <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                                        </div>
                                    </div>


                                  </div>
                                  </div>
                            </div>
                        </div>





                        <div class="d-flex">

                            <button type="submit" class="mx-auto btn bg-gradient-success">حفظ <i
                                    class="mx-2 fa fa-save"></i></button>
                        </div>

                    </form>
                </div>
            </div>
        </div>


    </div>
@endsection
@push('js')
    <script src="{{ asset('assets/js/ar.js') }}"></script>
    <script src="{{ asset('assets/js/ckeditor.js') }}"></script>

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.25.1/ui/trumbowyg.min.css"> --}}
    <script>
        ClassicEditor
            .create(document.querySelector('#about_us'), {
                language: {
                    // The UI will be English.
                    ui: 'ar',

                    // But the content will be edited in Arabic.
                    content: 'ar'
                },
                ckfinder: {
                    uploadUrl: "{{ route('image.upload') . '?_token=' . csrf_token() }}",
                },
                fontSize: {
                    options: [
                        9,
                        11,
                        13,
                        'default',
                        17,
                        19,
                        21
                    ]
                },

            })
            .then(editor => {
                window.editor = editor;
            })
            .catch(err => {
                console.error(err.stack);
            });
    </script>

    <script src="{{ asset('assets/js/uploadeimage.js') }}"></script>
    <script>
      newimage = new ImagetoServer({
          url: "{{ route('uploade') }}",
          id: "app_logo",
          w: 1000,
          h: 1000,
         color: '#FFFFFF',
           with_w_h:true,
          src: "{{ old('img',Config::get('sitesetting.app_logo')) }}"
      });
        newimage = new ImagetoServer({
            url: "{{ route('uploade') }}",
            id: "app_icon",
            w: 1000,
            h: 1000,
           color: '#FFFFFF',
             with_w_h:true,
            src: "{{ old('img',Config::get('sitesetting.app_icon')) }}"
        });
        newimage = new ImagetoServer({
            url: "{{ route('uploade') }}",
            id: "hero_icon",
            w: 1000,
            h: 1000,
           color: '#FFFFFF',
             with_w_h:true,
            src: "{{ old('hero_icon',Config::get('sitesetting.hero_icon')) }}"
        });
        
    </script>
@endpush
