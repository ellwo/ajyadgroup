
  <section>

    <div class="py-0 m-0 mb-4 section-header">
      <h2>الاسئلة الشائعة </h2>

  </div>
<style>
    .collapse {
    visibility: unset !important;
}
</style>

<div class="accordion-1">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto text-center">
        </div>
      </div>
      <div class="row">
        <div class="col-md-10 mx-auto">
          <div class="accordion" id="accordionRental">
           
          
            @foreach ($quns??[] as $q)
                
            <div class="accordion-item mb-3" id="quns{{$q->id}}">
              <h5 class="accordion-header" id="headingOne{{$q->id}}">
                <button class="accordion-button border-bottom font-weight-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{$q->id}}" aria-expanded="false" aria-controls="collapseOne{{$q->id}}">
                  {{$q->qu}}
                  <i class="collapse-close  text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                  <i class="collapse-open  text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                </button>
              </h5>
              <div id="collapseOne{{$q->id}}" class="accordion-collapse collapse" aria-labelledby="headingOne{{$q->id}}" data-bs-parent="#accordionRental" style="">
                <div class="accordion-body text-sm opacity-8">
               <x-frontend.qu :q="$q" />
                </div>
              </div>
            </div>
            @endforeach
          
          </div>
        </div>
      </div>
    </div>
  </div>

  </section>