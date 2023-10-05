

<div id="" class="py-1 lg:w-3/4 mx-auto">
    <div class="container">
      <div class="row gy-1">

        <div class="">

            @if($pass!=null)
            <div dir="rtl" id="passportresult" style="" class="relative text-right text-xs sm:text-sm md:text-lg shadow-xl shadow-success-darker  rounded-md portfolio-info">



            <ul dir="rtl" class="text-right">
                <li class="p-2 border rounded-md bg-success text-white"><h3 class="text-center">معلومات الجواز</h3></li>

                <li  class="p-2 border rounded-md flex "><strong class="mx-2 w-1/3">رقم الجواز:</strong> <div class="w-2/3 text-right">{{ $pass->pass_num }}</div></li>
                <li class="p-2 border rounded-md flex" > <strong class="mx-2 w-1/3">الاسم: </strong><div class="w-2/3"> {{ $pass->name }}</div></li>
              
                <li class="p-2 border rounded-md flex"><strong class="mx-2 w-1/3">الحالة:</strong> <div class="w-2/3">{{ $pass->state_info??'غير محدد '}}</div></li>


              <li class="p-2 border rounded-md flex"><strong class="mx-2 w-1/3">اسم المكتب:</strong> <div class="w-2/3"> {{ $pass->office_name??'غير محدد ' }}</div></li>

              <li class="p-2 border rounded-md flex"><strong class="mx-2 w-1/3">تاريخ الاستلام:</strong><div class="w-2/3">{{ $pass->received_date??'غير محدد ' }}</div></li>
              <li class="p-2 border rounded-md flex"><strong class="mx-2 w-1/3">تاريخ الارسال للسفارة:</strong><div class="w-2/3">{{ $pass->sending_embassy_date??'غير محدد ' }}</div></li>

              <li class="p-2 border rounded-md flex"><strong class="mx-2 w-1/3">تاريخ الخروج من السفارة:</strong><div class="w-2/3">{{ $pass->departure_embassy_date??'غير محدد ' }}</div></li>

              <li class="p-2 border rounded-md flex"><strong class="mx-2 w-1/3">تاريخ التسليم:</strong><div class="w-2/3">{{ $pass->delivery_date??'غير محدد ' }}</div></li>
            </ul>

          </div>

          @else
          <div dir="rtl" class="text-right ">
            <div class="alert text-xs md:text-lg sm:text-sm border-danger  alert-dismissible p-4 shadow-xl  shadow-danger-dark fade show">
                <button class="text-lg text-left text-danger" type="button" onclick="$(this).parent().remove()" class="close" data-dismiss="alert">&times;</button>
             
                <div class=" flex flex-col md:flex-wrap">
                  <strong>خطاء !</strong> رقم الجواز غير صحيح او ان المعلومات غير صحيحة
             
                </div>
              </div>
          </div>
          @endif
        </div>

      </div>

    </div>
</div>
