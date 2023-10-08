@extends('backend.layouts.backend-layout', ['class' => 'g-sidenav-show bg-gray-100 rtl',
'title'=>'تعديل سؤال '])

@section('content')

   <!-- End Navbar -->
   <div class="py-4 container-fluid">
    <div class="my-4 row">
        <div class="mx-auto mb-4 col-lg-8 col-md-6 mb-md-0">
            <div class="card">
                <div dir="rtl" class="pb-0 card-header">
                    <div class="mb-3 row">
                        <div class="col-6">
                            <h6>تعديل  سؤال   :- </h6>
                            <p class="text-sm">

                            </p>
                        </div>
                        <div class="my-auto col-6 text-start">

<a href="{{ route('question') }}" class="btn bg-gradient-info btn-sm">عودة الى القائمة <i class="fa fa-arrow-left"></i></a>
                        </div>
                    </div>
                </div>

                <form dir="rtl" class="p-4" method="POST" action="{{ route('question.update',$p) }}">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                      <label for="exampleFormControlInput1">عنوان السؤال</label>
                      <input type="text" required name="qu"
                      class="form-control" id="exampleFormControlInput1" value="{{old('qu',$p->qu) }}" placeholder="ادخل عنوان السؤال">
                      <x-input-error :messages="$errors->get('qu')" class="mt-2" />

                    </div>


                    <div class="form-group">
                        <label for="an">تفاصيل السؤال</label>
                        <textarea name="an" class="form-control" id="an" rows="3">@php
                            echo $p->an;
                        @endphp</textarea>
                      </div>

                    <div class="d-flex">

                        <button type="submit" class="mx-auto btn bg-gradient-success">حفظ <i class="mx-2 fa fa-save"></i></button>
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


<script>

ClassicEditor
    .create( document.querySelector( '#an' ), {
        language: {
            // The UI will be English.
            ui: 'ar',

            // But the an will be edited in Arabic.
            an: 'ar'
        }  ,
         removePlugins: [],
         ckfinder: {
                    uploadUrl: "{{route('image.upload').'?_token='.csrf_token()}}",
        }

    } )
    .then( editor => {
        window.editor = editor;
    } )
    .catch( err => {
        console.error( err.stack );
    } );
</script>

   <script src="{{ asset('assets/js/uploadeimage.js') }}"></script>
   <script>
      newimage=new ImagetoServer(
                {
                    url:"{{route('uploade')}}",
                    id:"img",
                    w:1000,
                    h:1000,
                    mx_h:600,
                    mx_w:600,
                   //vh:1000,
                   // vw:1000,
                    color:'#FFFFFF',
                   // withmask:true,
                   // with_w_h:true,
                    //maskUrl:'{{ config("mysetting.logo") }}',

                    src:"{{ old('img',$p->img) }}"
        });
   </script>

   @endpush
