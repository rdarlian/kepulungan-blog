@extends('layouts.main')
@section('container')
<main id="main">

    <section>
        <div class="container">

            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                @if ($post->count())
                <div class="carousel-inner">
                  <div class="carousel-item active" >
                    <div style="max-height: 400px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post[0]->image) }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                      <h5>{{ $post[0]->title }}</h5>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div style="max-height: 400px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post[1]->image) }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                      <h5>{{ $post[1]->title }}</h5>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div style="max-height: 400px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post[2]->image) }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                      <h5>{{ $post[2]->title }}</h5>
                    </div>
                  </div>
                </div>
                @endif
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </section>


    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Berita</h2>
          <h2>Seputar Desa <span>Kepulungan</span></h2>

        </div>

        <div class="row">
            @foreach ($post as $post)


            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <a href="/blogs?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a>
              @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
              @else
                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">

              @endif

              <h4><a href="/blogs/{{ $post->slug }}">{{ $post->title }}</a></h4>
              <p>{{ $post->excerpt }}</p>
            </div>
          </div>
          @endforeach

          <p><a href="/blogs">View All</a></p>
        </div>

      </div>
    </section><!-- End Services Section -->


    <!-- ======= About Section ======= -->


    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row skills-content">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">Laki - Laki <i class="val">4997</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Perempuan <i class="val">4923</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>



          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">Total <i class="val">9920</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="45" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <span data-toggle="counter-up">232</span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="icofont-document-folder"></i>
              <span data-toggle="counter-up">521</span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-live-support"></i>
              <span data-toggle="counter-up">1,463</span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <span data-toggle="counter-up">15</span>
              <p>Hard Workers</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->


    {{-- <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <h3>Check our <span>Portfolio</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item">

            <img src="/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section --> --}}

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Perangkat Desa</h2>
          <h3>Perangkat Desa <span>Kepulungan</span></h3>
          <p>Desa Kepulungan sendiri memiliki beberapa perangkat desa antara lain</p>
        </div>

        <div class="row justify-content-center">

            <div id="carouselExampleInterval" class="carousel slide col-lg-3 col-md-6 d-flex align-items-stretch" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <div class= data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="/img/team/team-1.jpg" class="img-fluid" alt="">
                            </div>

                            <div class="member-info">
                                <h4>Walter White</h4>
                                <span>Chief Executive Officer</span>
                            </div>
                        </div>
                    </div>

                  </div>

                  <div class="carousel-item" data-bs-interval="2000">
                    <div class="member">
                        <div class="member-img">
                          <img src="/img/team/team-3.jpg" class="img-fluid" alt="">
                        </div>

                        <div class="member-info">
                            <h4>William Anderson</h4>
                            <span>CTO</span>
                        </div>
                    </div>
                  </div>

                  <div class="carousel-item">
                    <div class="member">
                        <div class="member-img">
                            <img src="/img/team/team-1.jpg" class="img-fluid" alt="">
                        </div>

                        <div class="member-info">
                            <h4>Walter White</h4>
                            <span>Chief Executive Officer</span>
                        </div>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>


            </div>

        </div>


    </section><!-- End Team Section -->

  </main><!-- End #main -->

@endsection

