<section class="page-section">
    <div class="container">
        @foreach ($perfection as $value)
        <div class="product-item">
          <div class="product-item-title d-flex">
            <div class="bg-faded p-5 d-flex ml-auto rounded">
              <h2 class="section-heading mb-0">
                  {{-- @dump($perfection) --}}
                <span class="section-heading-upper">{{ $value->titre }}</span>
                <span class="section-heading-lower">{{ $value->monContenu }}</span>
              </h2>
            </div>
          </div>
          <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{ asset("img/".$value->photo)}}" alt="">
          <div class="product-item-description d-flex mr-auto">
            <div class="bg-faded p-5 rounded">
              <p class="mb-0">{{ $value->descrip }}</p>
            </div>
          </div>
        </div>

        @endforeach
    </div>
  </section>
