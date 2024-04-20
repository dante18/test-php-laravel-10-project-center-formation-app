@extends('index')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-content-center align-items-center">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
            <h1>
                {{ $heroTitle  }}
            </h1>
            <h2>
                {{ $heroSubTitle  }}
            </h2>
            <a href="#" class="btn-get-started">
                Démarrer mon inscription
            </a>
        </div>
    </section><!-- End Hero -->
    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <img src="{{ Vite::asset('resources/assets/frontend/img/about.jpg') }}" class="img-fluid"
                             alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h3 class="mb-4">
                            Academic vous propose des formations pour permettre
                        </h3>
                        <ul>
                            <li class="pt-3">
                                <i class="bi bi-check-circle"></i>
                                de vous perfectionner ou vous remetre à niveau dans le domaine de votre choix (nouvelles
                                technologies, communication, bureautique, ...)
                            </li>
                            <li class="pt-3">
                                <i class="bi bi-check-circle"></i>
                                d'apprendre de nouvelles compétences dans un nouveau domaine d'activité à votre rythme et
                                sans contrainte
                            <li class="pt-3">
                                <i class="bi bi-check-circle"></i>
                                de vous reconvertir dans un nouveau métier qui vous tient à coeur ou qui vous passionne
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts section-bg">
            <div class="container">
                <div class="row counters">
                    <div class="col-lg-4 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="{{ $userRegistrationNumber  }}"
                              data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p>
                            Inscriptions
                        </p>
                    </div>
                    <div class="col-lg-4 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="{{ $courseNumber }}"
                              data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p>
                            Cours
                        </p>
                    </div>
                    <div class="col-lg-4 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="{{ $formationNumber }}"
                              data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p>
                            Formations
                        </p>
                    </div>
                </div>
            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features pt-5">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>
                        Grace un large choix
                    </h2>
                    <p>
                        de cours et de formation couvrant une multitude de domain
                    </p>
                </div>
                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    @foreach ($categories as $categorie)
                        <div class="col-lg-3 col-md-4 mt-4">
                            <div class="icon-box">
                                <i class="{{ $categorie->icon }}" style="color: #ffbb2c;"></i>
                                <h3>
                                    <a href="#">
                                        {{ $categorie->name }}
                                    </a>
                                </h3>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Features Section -->

        <!-- ======= Popular Courses Section ======= -->
        <section id="popular-courses" class="courses">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>
                        Ainsi qu'un large choix de cours et de formations
                    </h2>
                    <p>
                        populaire auprès d'un grand nombre d'etudiants anciens et nouveaux
                    </p>
                </div>
                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    @foreach($heightLightedCourses as $course)
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                            <div class="course-item">
                                <img src="{{ Vite::asset('resources/assets/frontend/img/' . $course->thumbnail) }}"
                                     class="img-fluid"
                                     alt="...">
                                <div class="course-content">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h4>
                                            {{ $course->category?->name }}
                                        </h4>
                                    </div>
                                    <h3>
                                        <a href="#">
                                            {{ $course->name }}
                                        </a>
                                    </h3>
                                    <p>
                                        {{ $course->short_description }}
                                    </p>
                                </div>
                            </div>
                        </div> <!-- End Course Item-->
                    @endforeach
                    @foreach($heightLightedFormations as $formation)
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                            <div class="course-item">
                                <img src="{{ Vite::asset('resources/assets/frontend/img/' . $formation->thumbnail) }}"
                                     class="img-fluid"
                                     alt="...">
                                <div class="course-content">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h4>
                                            {{ $formation->category?->name }}
                                        </h4>
                                    </div>
                                    <h3>
                                        <a href="#">
                                            {{ $formation->name }}
                                        </a>
                                    </h3>
                                    <p>
                                        {{ $formation->short_description }}
                                    </p>
                                </div>
                            </div>
                        </div> <!-- End Course Item-->
                    @endforeach
                </div>
            </div>
        </section><!-- End Popular Courses Section -->

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Comme le</h2>
                <p class="">prouve les nombreux témoignages de nos étudiants</p>
            </div><!-- End Section Title -->
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        @foreach($lastTestimonials as $testimonial)
                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img
                                        src="{{ Vite::asset('resources/assets/frontend/img/testimonials/testimonials-1.jpg') }}"
                                        class="testimonial-img" alt="">
                                    <h3>{{ $testimonial->user?->name }}</h3>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>{{ $testimonial->content }}</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </section><!-- /Testimonials Section -->
    </main><!-- End #main -->
@endsection
