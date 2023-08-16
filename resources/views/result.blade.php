

<div id="" class="py-1">
    <div class="container">
      <div class="row gy-1">

        <div class="">

            @if($pass!=null)
            <div dir="rtl" id="passportresult" style="" class="relative text-right bg-gray-300 rounded-md portfolio-info">

            <ul dir="rtl" class="text-right">
                <li class="p-2 border rounded-md"><h3 class="text-center">معلومات الجواز</h3></li>
              <li class="p-2 border rounded-md" > <strong class="mx-2">الاسم: </strong> {{ $pass->name }}</li>
              <li class="p-2 border rounded-md"><strong class="mx-2">الحالة:</strong>{{ $pass->state_info}}</li>
              <li class="p-2 border rounded-md"><strong class="mx-2">رقم الجواز:</strong> {{ $pass->pass_num }}</li>
              <li class="p-2 border rounded-md"><strong class="mx-2">تاريخ الاستلام:</strong>{{ $pass->received_date }}</li>
              <li class="p-2 border rounded-md"><strong class="mx-2">ملاحظات:</strong>  {{ $pass->state_info }}</li>
              <li class="p-2 border rounded-md"><strong class="mx-2">اسم المكتب:</strong>  {{ $pass->office_name }}</li>
            </ul>

          </div>

          @else
          <div dir="rtl" class="text-right ">
            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" onclick="$(this).parent().remove()" class="close" data-dismiss="alert">&times;</button>
                <strong>خطاء !</strong> رقم الجواز غير صحيح او ان المعلومات غير صحيحة
              </div>
          </div>
          @endif
        </div>

      </div>

    </div>
</div>
