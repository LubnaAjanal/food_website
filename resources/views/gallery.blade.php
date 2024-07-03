 <!-- Gallery Section -->
 <section id="gallery" class="gallery section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Gallery</h2>
        <p><span>Check</span> <span class="description-title">Our Gallery</span></p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
    {
      "loop": true,
      "speed": 600,
      "autoplay": {
        "delay": 5000
      },
      "slidesPerView": "auto",
      "centeredSlides": true,
      "pagination": {
        "el": ".swiper-pagination",
        "type": "bullets",
        "clickable": true
      },
      "breakpoints": {
        "320": {
          "slidesPerView": 1,
          "spaceBetween": 0
        },
        "768": {
          "slidesPerView": 3,
          "spaceBetween": 20
        },
        "1200": {
          "slidesPerView": 5,
          "spaceBetween": 20
        }
      }
    }
  </script>
            <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                        href="img/gallery/gallery1.jpg"><img src="{{ asset('img/gallery/gallery1.jpg') }}"
                            class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                        href="img/gallery/gallery2.jpg"><img src="{{ asset('img/gallery/gallery2.jpg') }}"
                            class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                        href="img/gallery/gallery3.jpg"><img src="{{ asset('img/gallery/gallery3.jpg') }}"
                            class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                        href="img/gallery/gallery4.png"><img src="{{ asset('img/gallery/gallery4.png') }}"
                            class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                        href="img/gallery/gallery5.jpg"><img src="{{ asset('img/gallery/gallery5.jpg') }}"
                            class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                        href="img/gallery/gallery6.jpg"><img src="{{ asset('img/gallery/gallery6.jpg') }}"
                            class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                        href="img/gallery/gallery7.jpg"><img src="{{ asset('img/gallery/gallery7.jpg') }}"
                            class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                        href="img/gallery/gallery8.jpg"><img src="{{ asset('img/gallery/gallery8.jpg') }}"
                            class="img-fluid" alt=""></a></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>

</section><!-- /Gallery Section -->