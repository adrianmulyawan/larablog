@extends('layouts.dashboard-layout')

@section('title', 'LSM KOMPAS - Dashboard')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>

            <!-- Row Card I -->
            <div class="row">
                <div class="col-xl-4 col-sm-6 col-12 my-2">
                    <div class="card p-2">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex justify-content-between">
                                    <div class="align-self-center">
                                        <i class="fa-solid fa-users fa-2xl"></i>
                                    </div>
                                    <div class="media-body text-end">
                                        <h3>10</h3>
                                        <span>Users</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 col-12 my-2">
                    <div class="card p-2">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex justify-content-between">
                                    <div class="align-self-center">
                                        <i class="fa-solid fa-user-tie fa-2xl"></i>
                                    </div>
                                    <div class="media-body text-end">
                                        <h3>2</h3>
                                        <span>Super Admin</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 col-12 my-2">
                    <div class="card p-2">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex justify-content-between">
                                    <div class="align-self-center">
                                        <i class="fa-solid fa-user fa-2xl"></i>
                                    </div>
                                    <div class="media-body text-end">
                                        <h3>10</h3>
                                        <span>Admin</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row Card II -->
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12 my-2">
                    <div class="card p-2">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex justify-content-between">
                                    <div class="align-self-center">
                                        <i class="fa-regular fa-newspaper fa-2xl"></i>
                                    </div>
                                    <div class="media-body text-end">
                                        <h3>278</h3>
                                        <span>Berita</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 my-2">
                    <div class="card p-2">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex justify-content-between">
                                    <div class="align-self-center">
                                        <i class="fa-solid fa-book fa-2xl"></i>
                                    </div>
                                    <div class="media-body text-end">
                                        <h3>16</h3>
                                        <span>Publikasi</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 my-2">
                    <div class="card p-2">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex justify-content-between">
                                    <div class="align-self-center">
                                        <i class="fa-solid fa-list-check fa-2xl"></i>
                                    </div>
                                    <div class="media-body text-end">
                                        <h3>5</h3>
                                        <span>Projek</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 my-2">
                    <div class="card p-2">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex justify-content-between">
                                    <div class="align-self-center">
                                        <i class="fa-solid fa-handshake-angle fa-2xl"></i>
                                    </div>
                                    <div class="media-body text-end">
                                        <h3>200</h3>
                                        <span>Volunteer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row Card III -->
            <div class="row mb-2">
                <div class="col-xl-6 col-sm-6 col-12 my-2">
                    <div class="card p-2">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex justify-content-between">
                                    <div class="align-self-center">
                                        <i class="fa-solid fa-clipboard-list fa-2xl"></i>
                                    </div>
                                    <div class="media-body text-end">
                                        <h3>5</h3>
                                        <span>Kategori Berita</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-sm-6 col-12 my-2">
                    <div class="card p-2">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex justify-content-between">
                                    <div class="align-self-center">
                                        <i class="fa-solid fa-clipboard-list fa-2xl"></i>
                                    </div>
                                    <div class="media-body text-end">
                                        <h3>4</h3>
                                        <span>Kategori Publikasi</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row Recent Project and User -->
            <div class="row recent-project-and-user my-4">
                <div class="col-sm-8 col-md-6 col-lg-8">
                    <h5 class="mb-3 recent-header">
                        Projek Terbaru
                    </h5>
                    <!-- Item I -->
                    <div class="card card-list d-block text-decoration-none mb-3">
                        <div class="card-body card-recent-content">
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <img src="{{ asset('frontend/images/poster-event.png') }}" class="img-card-recent">
                                </div>
                                <div class="col-md-3 text-capitalize">
                                    Satu Hari Menjadi Kuli
                                </div>
                                <div class="col-md-4 text-capitalize">
                                    Parit Berembang
                                </div>
                                <div class="col-md-3">
                                    16 Januari 2024
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item II-->
                    <div class="card card-list d-block text-decoration-none mb-3">
                        <div class="card-body card-recent-content">
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <img src="{{ asset('frontend/images/poster-event.png') }}" class="img-card-recent">
                                </div>
                                <div class="col-md-3 text-capitalize">
                                    Satu Hari Menjadi Kuli
                                </div>
                                <div class="col-md-4 text-capitalize">
                                    Parit Berembang
                                </div>
                                <div class="col-md-3">
                                    16 Januari 2024
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item III -->
                    <div class="card card-list d-block text-decoration-none mb-3">
                        <div class="card-body card-recent-content">
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <img src="{{ asset('frontend/images/poster-event.png') }}" class="img-card-recent">
                                </div>
                                <div class="col-md-3 text-capitalize">
                                    Satu Hari Menjadi Kuli
                                </div>
                                <div class="col-md-4 text-capitalize">
                                    Parit Berembang
                                </div>
                                <div class="col-md-3">
                                    16 Januari 2024
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <h5 class="mb-3 recent-header">
                        User Terbaru
                    </h5>
                    <!-- Item I -->
                    <div class="card card-list d-block text-decoration-none mb-3">
                        <div class="card-body card-recent-content">
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    <i class="fa-solid fa-user fa-lg"></i>
                                </div>
                                <div class="col-md-6 text-capitalize">
                                    Adrian Mulyawan
                                </div>
                                <div class="col-md-5 text-capitalize">
                                    Super Admin
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item II -->
                    <div class="card card-list d-block text-decoration-none mb-3">
                        <div class="card-body card-recent-content">
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    <i class="fa-solid fa-user fa-lg"></i>
                                </div>
                                <div class="col-md-6 text-capitalize">
                                    Idzar Raffi
                                </div>
                                <div class="col-md-5 text-capitalize">
                                    Admin
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item III -->
                    <div class="card card-list d-block text-decoration-none mb-3">
                        <div class="card-body card-recent-content">
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    <i class="fa-solid fa-user fa-lg"></i>
                                </div>
                                <div class="col-md-6 text-capitalize">
                                    Jodi Akbar
                                </div>
                                <div class="col-md-5 text-capitalize">
                                    Admin
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row Recent News -->
            <div class="row recent-news my-4">
                <div class="col-12">
                    <h5 class="mb-3 recent-header">
                        Berita Terbaru
                    </h5>
                    <!-- Item I -->
                    <div class="card card-list d-block text-decoration-none mb-3">
                        <div class="card-body card-recent-content">
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    <img src="{{ asset('frontend/images/news-image.jpg') }}" class="img-card-recent">
                                </div>
                                <div class="col-md-4 text-capitalize">
                                    Pertumbuhan Ekonomi di Kota Pontianak ...
                                </div>
                                <div class="col-md-2">
                                    01 Januari 2024
                                </div>
                                <div class="col-md-2">
                                    Ekonomi
                                </div>
                                <div class="col-md-2">
                                    David Guetta
                                </div>
                                <div class="col-md-1 d-none d-md-block">
                                    <i class="fa-solid fa-arrow-right fa-sm"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item II -->
                    <div class="card card-list d-block text-decoration-none mb-3">
                        <div class="card-body card-recent-content">
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    <img src="{{ asset('frontend/images/news-image.jpg') }}" class="img-card-recent">
                                </div>
                                <div class="col-md-4 text-capitalize">
                                    Lorem ipsum dolor sit amet consectetur...
                                </div>
                                <div class="col-md-2">
                                    25 Desember 2023
                                </div>
                                <div class="col-md-2">
                                    Pembangunan
                                </div>
                                <div class="col-md-2">
                                    David Guetta
                                </div>
                                <div class="col-md-1 d-none d-md-block">
                                    <i class="fa-solid fa-arrow-right fa-sm"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item III -->
                    <div class="card card-list d-block text-decoration-none mb-3">
                        <div class="card-body card-recent-content">
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    <img src="{{ asset('frontend/images/news-image.jpg') }}" class="img-card-recent">
                                </div>
                                <div class="col-md-4 text-capitalize">
                                    Lorem ipsum dolor sit amet consectetur.
                                </div>
                                <div class="col-md-2">
                                    20 Desember 2023
                                </div>
                                <div class="col-md-2">
                                    Teknologi
                                </div>
                                <div class="col-md-2">
                                    David Guetta
                                </div>
                                <div class="col-md-1 d-none d-md-block">
                                    <i class="fa-solid fa-arrow-right fa-sm"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row Recent Publications -->
            <div class="row recent-publications my-4">
                <div class="col-12">
                    <h5 class="mb-3 recent-header">
                        Publikasi Terbaru
                    </h5>
                    <!-- Item I -->
                    <div class="card card-list d-block text-decoration-none mb-3">
                        <div class="card-body card-recent-content">
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    <img src="{{ asset('frontend/images/news-image.jpg') }}" class="img-card-recent">
                                </div>
                                <div class="col-md-4 text-capitalize">
                                    Publikasi Hasil Riset Konsil LSM ...
                                </div>
                                <div class="col-md-2">
                                    08 Januari 2024
                                </div>
                                <div class="col-md-2">
                                    Publikasi Ekonomi
                                </div>
                                <div class="col-md-2">
                                    Ismail bin Mail
                                </div>
                                <div class="col-md-1 d-none d-md-block">
                                    <i class="fa-solid fa-arrow-right fa-sm"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item II -->
                    <div class="card card-list d-block text-decoration-none mb-3">
                        <div class="card-body card-recent-content">
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    <img src="{{ asset('frontend/images/news-image.jpg') }}" class="img-card-recent">
                                </div>
                                <div class="col-md-4 text-capitalize">
                                    Publikasi Hasil Riset Konsil LSM ...
                                </div>
                                <div class="col-md-2">
                                    08 Januari 2024
                                </div>
                                <div class="col-md-2">
                                    Publikasi Ekonomi
                                </div>
                                <div class="col-md-2">
                                    Ismail bin Mail
                                </div>
                                <div class="col-md-1 d-none d-md-block">
                                    <i class="fa-solid fa-arrow-right fa-sm"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item III -->
                    <div class="card card-list d-block text-decoration-none mb-3">
                        <div class="card-body card-recent-content">
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    <img src="{{ asset('frontend/images/news-image.jpg') }}" class="img-card-recent">
                                </div>
                                <div class="col-md-4 text-capitalize">
                                    Publikasi Hasil Riset Konsil LSM ...
                                </div>
                                <div class="col-md-2">
                                    08 Januari 2024
                                </div>
                                <div class="col-md-2">
                                    Publikasi Ekonomi
                                </div>
                                <div class="col-md-2">
                                    Ismail bin Mail
                                </div>
                                <div class="col-md-1 d-none d-md-block">
                                    <i class="fa-solid fa-arrow-right fa-sm"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
