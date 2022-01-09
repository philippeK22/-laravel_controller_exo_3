<section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-5">
              <span class="section-heading-upper">Come On In</span>
              <span class="section-heading-lower">We're Open</span>
            </h2>
            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                @foreach ($store1 as $key=>$value)

                <li class="list-unstyled-item list-hours-item d-flex">
                    {{ $key }}
                    <span class="ml-auto">{{ $value }}</span>
                </li>
                @endforeach
            </ul>
            <p class="address mb-5">
              <em>
                <strong>1116 Orchard Street</strong>
                <br>
                Golden Valley, Minnesota
              </em>
            </p>
            <p class="mb-0">
              <small>
                <em>Call Anytime</em>
              </small>
              <br>
              (317) 585-8468
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
