<section class="buy-icons">
    <div class="container w-75 py-4">
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 align-items-center g-4">
            @foreach($buy_icons as $icon)
          <div class="col d-flex flex-row align-items-center px-2">
            <img src="{{$icon['thumb']}}" alt="">
            <div class="text-uppercase ps-2">
                {{$icon['text']}}
            </div>
          </div>
          @endforeach
        </div>
    </div>
</section>