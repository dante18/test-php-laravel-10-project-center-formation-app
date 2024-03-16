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
@endsection
