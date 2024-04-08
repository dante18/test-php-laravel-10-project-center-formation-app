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
                                de vous perfectionner ou vous remetre a niveau dans le domaine de votre choix (nouvelle
                                technologie,
                                communication, bureautique, ...)
                            </li>
                            <li class="pt-3">
                                <i class="bi bi-check-circle"></i>
                                d'apprendre de nouvelle competence dans un nouveau domaine d'activite a votre rythme et
                                sans
                                contrainte
                            <li class="pt-3">
                                <i class="bi bi-check-circle"></i>
                                de vous reconvertir dans un nouveau metier qui vous tient a coeur ou qui vous passionne
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
                        <span data-purecounter-start="0" data-purecounter-end="{{ $userRegistrationNumber  }}" data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p>
                            Inscriptions
                        </p>
                    </div>
                    <div class="col-lg-4 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="{{ $courseNumber }}" data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p>
                            Cours
                        </p>
                    </div>
                    <div class="col-lg-4 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="{{ $formationNumber }}" data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p>
                            Formation
                        </p>
                    </div>
                </div>
            </div>
        </section><!-- End Counts Section -->
    </main><!-- End #main -->
@endsection
