<main>
  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Services</h2>
        <h3>Check our <span>Services</span></h3>
        <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae
          autem.</p>
      </div>

      @if($services->isNotEmpty())
      <div class="row">
        @foreach ($services as $service )
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
            <!-- You may want to dynamically assign icons based on your service data -->
            <div class="icon"><i class="bx bxl-dribbble"></i></div>
            <h4><a href="">{{ $service->name }}</a></h4>
            <p>{{ $service->short_desc }}</p>
          </div>
        </div>
        @endforeach
      </div>
      @endif

    </div>
  </section><!-- End Services Section -->
</main>