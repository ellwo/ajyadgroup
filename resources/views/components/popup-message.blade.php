@props(['status','title'=>'ملاحظة !'])

@if ($status)

<div dir="rtl" {{ $attributes->merge(['class'=>"alert alert-info alert-dismissible fade show fixed top-1/3 right-1/2 bg-white text-dark rounded-md p-8 " ])}} role="alert">
    <span class="alert-icon mx-2"><i class="ni ni-like-2"></i></span>
    <span class="alert-text text-white"><strong>
    {{ $title }}
    <br>
    </strong> {{ $status }}</span>
    <button type="button" class="btn-close"  data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
