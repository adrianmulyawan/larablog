@extends('layouts.main-layout')
@section('title', 'LSM KOMPAS - HOME')

@push('custom-style')
    <link rel="stylesheet" href="{{ asset('frontend/styles/postcard.css') }}">
@endpush

@section('content')
    <x-header></x-header>

    <main>
        <!-- Focus -->
        <section class="section-focus" id="section-focus-id">
            <div class="container">
                <div class="row row-focus-header justify-content-center my-3" data-aos="fade-down" data-aos-duration="1000">
                    <h1 class="text-center text-uppercase">Aktivitas Utama</h1>
                </div>
                <div class="row row-focus-body justify-content-center align-items-center my-4">
                    @php
                        $duration = 1000;
                    @endphp
                    @foreach ($actions as $action)
                        <div class="col-lg-3 col-md-4 col-sm-12 col-focus" data-aos="fade-up"
                            data-aos-duration="{{ $duration += 100 }}">
                            <div class="card card-focus p-2 h-100">
                                <div class="card-body">
                                    <img src="{{ Storage::url($action->action_icon) }}" width="50" alt="img-icon"
                                        class="img-fluid">
                                    <h3 class="my-3 text-start text-capitalize text-focus my-3">{{ $action->action_name }}
                                    </h3>
                                    <div class="text-description-focus my-2">
                                        <p class="text-start desc-focus">
                                            {{ $action->action_description }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- About and Focus -->
        <section class="section-about-and-action" id="section-about-and-action-id">
            <div class="container">
                <div class="row row-about justify-content-center align-items-center">
                    <div class="col-lg-5 col-sm-12 col-md-6  col-about" data-aos="fade-right" data-aos-duration="1000">
                        <h5 class="about-lsm">Tentang LSM Kompas</h5>
                        <h2 class="for-lsm my-3">Untuk <b>Masa Depan</b> Kita</h2>
                        <p class="lsm-description">
                            <b>LSM Kompas</b> percaya untuk mewujudkan kota yang inklusif dan memberikan kepastian masa
                            depan memerlukan partisipasi warga kota.
                            <br>
                            Kami mengajak kamu ikut mengambil aksi mewujudkan kota yang inklusif dan berkelanjutan untuk
                            masa depan kita.
                        </p>
                        <a href="https://google.com" class="btn btn-lsm-description btn-success px-4 py-2">Lebih Lanjut</a>
                    </div>
                    <div class="col-lg-7 col-sm-12 col-md-6 col-action" data-aos="fade-left" data-aos-duration="1000">
                        <div class="row row-action justify-content-between align-items-center">
                            @foreach ($targets as $target)
                                <div class="col-sm-12 col-md-12 col-lg-6">
                                    <div class="card card-action-container my-2 p-3 h-100">
                                        <div class="card-body">
                                            <h3 class="card-title text-capitalize">{{ $target->target_name }}</h3>
                                            <p class="card-text">
                                                {{ $target->target_description }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- News -->
        <section class="section-news" id="section-news-id">
            <div class="container">
                <div class="row justify-content-center" data-aos="fade-down">
                    <div class="news-heading">
                        <h1 class="text-uppercase text-center">Berita Terbaru</h1>
                        <p class="text-center text-capitalize">Update Berita Terbaru Dari LSM Kompas</p>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center my-3">
                    @php
                        $duration = 0;
                    @endphp
                    @foreach ($recentNews as $news)
                        <div class="col-sm-12 col-md-6 col-lg-4 mb-4" data-aos="fade-up"
                            data-aos-duration="{{ $duration += 100 }}">
                            <div class="card card-news text-dark card-has-bg click-col"
                                style="background-image:url('{{ Storage::url($news->news_header_image) }}'); background-size: cover;">
                                <img class="card-img d-none" src="{{ Storage::url($news->news_header_image) }}"
                                    alt="header-image">
                                <div class="card-img-overlay d-flex flex-column">
                                    <div class="card-body">
                                        <!-- <small class="card-meta mb-2">Thought Leadership</small> -->
                                        <h4 class="card-title mt-0 ">
                                            <a class="text-dark text-decoration-none"
                                                href="{{ route('news-detail', $news->news_slug) }}">
                                                {{ $news->news_name }}
                                            </a>
                                        </h4>
                                        <small><i
                                                class="far fa-clock"></i>{{ $news->created_at->format('M D, Y') }}</small>
                                    </div>
                                    <div class="card-footer">
                                        <div class="media">
                                            <div class="media-body">
                                                <h6 class="my-0 text-dark d-block">
                                                    {{ $news->user->name }}
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="text-center">
                    <a href="{{ route('news') }}" class="btn btn-load-more text-center">Lihat Berita Lainnya</a>
                </div>
            </div>
        </section>

        <!-- Upcoming Event -->
        <section class="section-upcoming-event" id="section-upcoming-event-id">
            <div class="container">
                <div class="row justify-content-center" data-aos="fade-down">
                    <h1 class="text-uppercase upcoming-event-header">Project yang akan datang</h1>
                </div>
                <div class="row justify-content-start" data-aos="fade-up">
                    @foreach ($newEvent as $event)
                        <section class="section-event-card">
                            <div class="container py-4">
                                <article class="postcard dark blue">
                                    <div class="postcard__img_link">
                                        <img class="postcard__img" src="{{ Storage::url($event->project_header_image) }}"
                                            alt="Image Title" />
                                    </div>
                                    <div class="postcard__text">
                                        <h1 class="postcard__title blue">{{ $event->project_name }}</h1>
                                        <div class="postcard__subtitle small">
                                            <time datetime="2020-05-25 12:00:00">
                                                <i class="fas fa-calendar-alt mr-2"></i>
                                                {{ date('D, d M Y', strtotime($event->project_date)) }}
                                            </time>
                                        </div>
                                        <div class="postcard__bar"></div>
                                        <div class="postcard__preview-txt">
                                            {!! Str::limit($event->project_description, 500, '...') !!}
                                        </div>
                                        <ul class="postcard__tagbox">
                                            <li class="tag__item play blue">
                                                <a href="{{ route('project-detail', $event->project_slug) }}"
                                                    class="btn btn success px-3 py-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393" />
                                                    </svg>
                                                    <span class="ms-1">Daftar Sekarang</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                        </section>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Publications -->
        <section class="section-publication" id="secion-publication-id">
            <div class="container">
                <div class="row justify-content-center align-items-center" data-aos="fade-down">
                    <div class="news-heading">
                        <h1 class="text-uppercase text-center">Publikasi Terbaru</h1>
                        <p class="text-center text-capitalize">Update Publikasi Terbaru Dari LSM Kompas</p>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center my-3">
                    @php
                        $duration = 0;
                    @endphp
                    @foreach ($recentPublication as $publication)
                        <div class="col-sm-12 col-md-6 col-lg-4 mb-4" data-aos="fade-up"
                            data-aos-duration="{{ $duration += 100 }}">
                            <div class="card card-news text-dark card-has-bg click-col"
                                style="background-image:url('{{ Storage::url($publication->publication_header_image) }}'); background-size:cover;">
                                <img class="card-img d-none"
                                    src="{{ Storage::url($publication->publication_header_image) }}"
                                    alt="Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?">
                                <div class="card-img-overlay d-flex flex-column">
                                    <div class="card-body">
                                        <!-- <small class="card-meta mb-2">Thought Leadership</small> -->
                                        <h4 class="card-title mt-0 ">
                                            <a class="text-dark text-decoration-none"
                                                href="{{ route('publication-detail', $publication->publication_slug) }}">
                                                {{ $publication->publication_name }}
                                            </a>
                                        </h4>
                                        <small><i class="far fa-clock"></i>
                                            {{ $publication->created_at->format('M D, Y') }}
                                        </small>
                                    </div>
                                    <div class="card-footer">
                                        <div class="media">
                                            <div class="media-body">
                                                <h6 class="my-0 text-dark d-block">
                                                    {{ $publication->user->name }}
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="text-center">
                    <a href="{{ route('publication') }}" class="btn btn-load-more text-center">
                        Lihat Publikasi Lainnya
                    </a>
                </div>
            </div>
        </section>

        <!-- Kata Mereka -->
        <section class="section-said" id="section-said-id">
            <div class="container">
                <div class="row justify-content-start align-items-center">
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="said-heading" data-aos="fade-right">
                            <h1 class="text-uppercase">Kata Mereka</h1>
                            <p>Apa Kata Orang Tentang Kami</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-8">
                        <div class="row justify-content-center align-items-center">
                            @foreach ($testimonials as $testi)
                                <div class="col-sm-12 col-md-4 col-lg-4 mt-4" data-aos="flip-up"
                                    data-aos-duration="1000">
                                    <div class="card profile-card-5">
                                        <div class="card-img-block">
                                            <img class="card-img-top"
                                                src="https://images.unsplash.com/photo-1517832207067-4db24a2ae47c"
                                                style="background-size: cover;" alt="Card image cap">
                                        </div>
                                        <div class="card-body pt-0">
                                            <h5 class="card-title">{{ $testi->name }}</h5>
                                            <p class="card-text">{{ $testi->body }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('custom-script')
    <script src="{{ asset('frontend/scripts/type-text.js') }}"></script>
    <script>
        var typed1 = new Typed('#motto', {
            strings: ['Merencanakan <br> <span style="color: #FF9902;">Kota Inklusif</span> <br> Untuk Semua.'],
            typeSpeed: 80
        });
    </script>
@endpush
