@extends('index-admin')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Tableau de bord</h1>
        </div><!-- End Page Title -->
        <section class="section dashboard mt-4">
            <div class="row">
                <!-- Sales Card -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">
                                Inscription <span>| {{ $previousYear }}</span>
                            </h5>
                            <div class="d-flex align-items-center">
                                <div
                                    class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $numberSubscriptionPreviousYear }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Sales Card -->
                <!-- Revenue Card -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card revenue-card">
                        <div class="card-body">
                            <h5 class="card-title">Inscription <span>| {{ $currentYear }}</span></h5>
                            <div class="d-flex align-items-center">
                                <div
                                    class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $numberSubscriptionCurrentYear  }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Revenue Card -->
                <!-- Customers Card -->
                <div class="col-xxl-4 col-xl-12">
                    <div class="card info-card customers-card">
                        <div class="card-body">
                            <h5 class="card-title">Utilisateur</h5>
                            <div class="d-flex align-items-center">
                                <div
                                    class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $numberTotalCustomer  }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Customers Card -->
            </div>
            <div class="row">
                <!-- Reports -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Suivi des inscriptions</h5>
                            <!-- Line Chart -->
                            <div id="reportsChart"></div>
                            <!-- End Line Chart -->
                        </div>
                    </div>
                </div><!-- End Reports -->
            </div>
        </section>
    </main>
@endsection
