@extends('backend.layouts.backend-layout', ['class' => 'g-sidenav-show bg-gray-100 rtl'])

@section('content')

   <!-- End Navbar -->
   <div class="py-4 container-fluid">
    <div class="my-4 row">
        <div class="mx-auto mb-4 col-lg-8 col-12 mb-md-0">
            <div class="card">
                <div dir="rtl" class="pb-0 card-header">
                    <div class="mb-3 row">
                        <div class="col-6">
                            <h6>تعديل خدمة :- {{ $service->titel }}</h6>
                            <p class="text-sm">

                            </p>
                        </div>
                        <div class="my-auto col-6 text-start">

<a href="{{ route('services') }}" class="btn bg-gradient-info btn-sm">عودة الى القائمة <i class="fa fa-arrow-left"></i></a>
                        </div>
                    </div>
                </div>

                <form dir="rtl" class="p-4" method="POST" action="{{ route('services.update',$service->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                      <label for="exampleFormControlInput1">اسم الخدمة</label>
                      <input type="text" required name="titel" class="form-control" id="exampleFormControlInput1" value="{{ $service->titel }}" placeholder="ادخل اسم الخدمة">
                      <x-input-error :messages="$errors->get('titel')" class="mt-2" />

                    </div>
                    <div class="form-group">

                      <label for="exampleFormControlSelect1">ايقونة الخدمة</label>

                      <input type="hidden" name="img" id="img" value="{{ $service->img }}">

        <div dir="l" class="mb-4 input-group">
                <div class="dropdown ">
                    <a href="#" class="btn dropdown-toggle " data-bs-toggle="dropdown" id="navbarDropdownMenuLink2">
                        <i id="theicon" class="{{ old('img',$service->img) }} "></i> ايقونة الخدمة
                    </a>
                    <ul id="selectison" style="height: 30vh !important; overflow-y: auto !important;" class="dropdown-menu h-24" aria-labelledby="navbarDropdownMenuLink2">
                        <li>
                            <div class="dropdown-item" >
                                <i class=""></i>
                            </div>
                        </li>
                    </ul>
                  </div>
        </div>

                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">وصف الحدمة</label>
                      <textarea name="note" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $service->note }}</textarea>
                    </div>

                    <div   class="form-group" x-data="{'newSubstepsCounter':0,newSubStepID : {{ count($service->service_parts)>0 ?  $service->service_parts()->orderBy('id','desc')->first()->id: 1  }} }">
                        <label for="exampleFormControlTextarea1">الخدمات الفرعية</label>

                        @foreach ($service->service_parts as $serPart)
                  <div class="accordion-1">
                    <div class="container">
                      <div class="row">
                        <div class="mx-auto col-md-10">
                          <div class="accordion" id="accordionRental">
                            <div class="mb-3 accordion-item">
                              <h5 class="accordion-header" id="headingOne{{ $serPart->id }}">
                                <button class="accordion-button border-bottom font-weight-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{ $serPart->id }}" aria-expanded="false" aria-controls="collapseOne{{ $serPart->id }}">

                        <h3 for="">{{ $serPart->titel }}</h3>
                                  <i class="pt-1 text-xs collapse-close fa fa-plus position-absolute start-0 me-3" aria-hidden="true"></i>
                                  <i class="pt-1 text-xs collapse-open fa fa-minus position-absolute start-0 me-3" aria-hidden="true"></i>
                                </button>
                                <input type="hidden" name="servicePartid[]" value="{{ $serPart->id }}" >
                              </h5>
                              <div id="collapseOne{{ $serPart->id }}" class="accordion-collapse collapse" aria-labelledby="headingOne{{ $serPart->id }}" data-bs-parent="#accordionRental" style="">
                                <div class="text-sm accordion-body ">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1"><h5> اسم الخدمة الفرعية</h5></label>
                                        <input type="text" required name="steptitel[]" class="text-lg form-control-lg" id="exampleFormControlInput1" value="{{ $serPart->titel }}" placeholder="ادخل اسم الخدمة">
                                      </div>
                                      <div class="form-group">
                                        <label><h5> وصف الخدمة الفرعية</h5></label>
                                        <textarea type="text" required name="stepnote[]" class="text-lg form-control form-control-lg"  placeholder="ادخل اسم الخدمة">{{ $serPart->note }}</textarea>
                                      </div>
             <div   class="mb-4 ">
                <h4>الخطوات / التعليمات</h4>


                        @php
                        $countstep=0;
                        $count=1;
                            foreach($serPart->steps??[] as $st){

                                $daa= '"{  \'stepsCoun\': '.count($st['steps']).' , \'addstepsCoun\':0}"';
                                echo "<div x-data=".$daa."   class='mb-4 form-control'>";
                                echo ($count++)."-";
            echo "<strong>عنوان الخطوة  :-  </strong> <br/>"." <input type='text' value='".$st['title']."' class='form-control' name='titles".$serPart->id."[]'/> "."<br/>";
            $i=1;
            foreach($st['steps'] as $p=>$k){
                if(gettype($k) === "string"){
                echo
                "<div class='input-group'> <span class='text-white input-group-text bg-secondary'>".($st['type']=="counter"?($i++)."-":"<i class='fa-solid fa-circle'></i>")."</span> <input name='steps".$serPart->id."_".$countstep."[]' class='form-control' value='".$k."' /> </div> ";}
                else if(gettype($k)=="array")
                {
                    echo   ($st['type']=="counter"?$i++:"<i class='fa-solid fa-circle'></i>")." ".$p."<br/>";
                    foreach($k as $v){
                        echo "\t     -$v<br/>   ";
                    }
                }
            }


            echo "<template x-for='i in addstepsCoun'>
                <div class='input-group'> <span class='text-white input-group-text bg-secondary'>".($st['type']=="counter"?"<i x-text='stepsCoun+i'></i>"."-":"<i class='fa-solid fa-circle'></i>")."</span> <input name='steps".$serPart->id."_".$countstep."[]' class='form-control' value='' /> </div>
                </template>";
            echo '<div class="mx-auto mt-2 "><button type="button" @click="addstepsCoun++"  class="mx-auto text-white btn btn-sm bg-success ">اضافة حطوة <i ></i></button></div>';


            echo'<div class="col-4">
                <label for="exampleFormControlInput1">نوع الترتيب</label>

                <div class="mb-3 ">
  <label class="w-full h-4 form-control" for="customRadio'.$countstep.$serPart->id.'">ارقام
    <input class="form-check-input" type="radio"  value="counter" '.($st["type"]=="counter"?"checked":"").'  name="types'.$serPart->id."_".$countstep.'[]" id="customRadio'.$countstep.$serPart->id.'">
  </label>
</div>
<div class="">
  <label class="w-full h-4 form-control " for="customRadio2'.$countstep.$serPart->id.'">نقاط
    <input class="form-check-input" type="radio" value="point" '.($st["type"]=="point"?"checked":"").' name="types'.$serPart->id."_".$countstep.'[]" id="customRadio2'.$countstep.$serPart->id.'">
 </label>
</div></div>';
            echo '</div>';

            $countstep++;

        }
                        @endphp

                        <div x-data='{"sub_stepId":{{ $serPart->id }} , "g_sub_step_count":{{ count($serPart->steps??[])-1 }}, newStep:0 }'>



                            <template x-for='inew in newStep'>

                                <div x-data="{  'stepsCoun': 0 , 'addstepsCoun':0}" class="mb-4 form-control"> <i x-text="(g_sub_step_count+inew+1)"></i>
                                     <strong>عنوان الخطوة :- </strong> <br>
                                    <input type="text" required value="" class="form-control" x-bind:name="'titles'+sub_stepId+'[]'"> <br>
                                    <template x-for="i in addstepsCoun">
                                        <div class="input-group"> <span class="text-white input-group-text bg-secondary"><i
                                                    x-text="stepsCoun+i"></i>-</span> <input x-bind:name="'steps'+sub_stepId+'_'+(g_sub_step_count+inew)+'[]'" class="form-control" value=""> </div>
                                    </template>
                                    <div class="mx-auto mt-2 "><button type="button" @click="addstepsCoun++" class="mx-auto text-white btn btn-sm bg-success ">اضافة حطوة <i></i></button></div>
                                    <div class="col-4">
                                        <label for="exampleFormControlInput1">نوع الترتيب</label>

                                        <div class="mb-3 ">
                                            <label class="w-full h-4 form-control" x-bind:for="'customRadio0'+(g_sub_step_count+inew)+sub_stepId">ارقام
                                                <input class="form-check-input" type="radio" value="counter" checked="" x-bind:name="'types'+sub_stepId+'_'+(g_sub_step_count+inew)+'[]'"
                                                    x-bind:id="'customRadio0'+(g_sub_step_count+inew)+sub_stepId">
                                            </label>
                                        </div>
                                        <div class="">
                                            <label class="w-full h-4 form-control " x-bind:for="'customRadio2'+(g_sub_step_count+inew)+sub_stepId">نقاط
                                                <input class="form-check-input" type="radio" value="point" x-bind:name="'types'+sub_stepId+'_'+(g_sub_step_count+inew)+'[]'"
                                                x-bind:id="'customRadio2'+(g_sub_step_count+inew)+sub_stepId">
                                            </label>
                                        </div>
                                    </div>
                                    <button onclick="$(this).parent().html('');" type="button" class="btn btn-danger">X</button>
                                </div>



                            </template>





                        <button type="button" @click="newStep++; ">Add Step wire:{{ $serPart->id }}</button>
                        </div>


                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
<button onClick="$(this).parent().remove(); " type="button" class="btn btn-danger">X</button>

                  </div>



                        @endforeach


<template x-for="si in newSubstepsCounter">


    <div class="accordion-1">
        <div class="container">
            <div class="row">
                <div class="mx-auto col-md-10">
                    <div class="accordion" id="accordionRental">
                        <div class="mb-3 accordion-item">
                            <h5 class="accordion-header" x-bind:id="'headingOne'+(newSubStepID+si)">
                                <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse"
                                 x-bind:data-bs-target="'#collapseOne'+(newSubStepID+si)"
                                  aria-expanded="true" x-bind:aria-controls="'collapseOne'+(newSubStepID+si)">

                           <h3 for=""> </h3>
                      <i class="pt-1 text-xs collapse-close fa fa-plus position-absolute start-0 me-3" aria-hidden="true"></i>
                      <i class="pt-1 text-xs collapse-open fa fa-minus position-absolute start-0 me-3" aria-hidden="true"></i>
                    </button>
                                <input type="hidden" name="servicePartid[]" x-bind:value="(newSubStepID+si)">
                            </h5>
                            <div x-bind:id="'collapseOne'+(newSubStepID+si)" class="accordion-collapse collapse " aria-labelledby="'headingOne'+(newSubStepID+si)" data-bs-parent="#accordionRental" style="">
                                <div class="text-sm accordion-body ">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1"><h5> اسم الخدمة الفرعية</h5></label>
                                        <input type="text" required="" name="steptitel[]" class="text-lg form-control-lg" id="exampleFormControlInput1" value="" placeholder="ادخل اسم الخدمة">
                                    </div>
                                    <div class="form-group">
                                        <label><h5> وصف الخدمة الفرعية</h5></label>
                                        <textarea type="text" required="" name="stepnote[]" class="text-lg form-control form-control-lg" placeholder="ادخل اسم الخدمة"></textarea>
                                    </div>
                                    <div class="mb-4 ">
                                        <h4>الخطوات / التعليمات</h4>



                            <div x-data='{"sub_stepId":(newSubStepID+si) , "g_sub_step_count":0, newStep:0 }'>



                                <template x-for='inew in newStep'>

                                    <div x-data="{  'stepsCoun': 0 , 'addstepsCoun':0}" class="mb-4 form-control">
                                        <i x-text="(g_sub_step_count+inew)"></i> <strong>عنوان الخطوة :- </strong> <br>
                                        <input type="text" required value="" class="form-control" x-bind:name="'titles'+sub_stepId+'[]'"> <br>
                                        <template x-for="i in addstepsCoun">
                                            <div class="input-group"> <span class="text-white input-group-text bg-secondary">
                                                <i
                                                        x-text="i"></i>-</span> <input x-bind:name="'steps'+sub_stepId+'_'+(i-1)+'[]'" class="form-control" value=""> </div>
                                        </template>
<div class="mx-auto mt-2 "><button type="button" @click="addstepsCoun++" class="mx-auto text-white btn btn-sm bg-success ">اضافة حطوة <i></i></button></div>
<div class="col-4">
    <label for="exampleFormControlInput1">نوع الترتيب</label>

    <div class="mb-3 ">
        <label class="w-full h-4 form-control" x-bind:for="'customRadio0'+(g_sub_step_count+inew)+sub_stepId">ارقام
                                                    <input class="form-check-input" type="radio" value="counter" checked="" x-bind:name="'types'+sub_stepId+'_'+(g_sub_step_count+inew)+'[]'"
                                                        x-bind:id="'customRadio0'+(g_sub_step_count+inew)+sub_stepId">
                                                </label>
    </div>
    <div class="">
        <label class="w-full h-4 form-control " x-bind:for="'customRadio2'+(g_sub_step_count+inew)+sub_stepId">نقاط
                                                    <input class="form-check-input" type="radio" value="point" x-bind:name="'types'+sub_stepId+'_'+(g_sub_step_count+inew)+'[]'"
                                                    x-bind:id="'customRadio2'+(g_sub_step_count+inew)+sub_stepId">
                                                </label>
    </div>
</div>
</div>



</template>





<button type="button" @click="newStep++; ">اضافة سلسة تعليمات </button>
</div>


</div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>

<button onclick="$(this).parent().remove(); " type="button" class="btn btn-danger">X</button>
</div>

</template>

<div class="d-flex">

    <button type="button"
    @click="newSubstepsCounter++"  class="mx-auto text-white btn btn-sm bg-success ">اضافة خدمة فرعية جديدة  <i class="mx-2 fa fa-save"></i></button>
</div>
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
   <script src="{{ asset('assets/js/icons_select.js')}}"></script>


   @endpush
