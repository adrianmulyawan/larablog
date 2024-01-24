@extends('layouts.main-layout')

@section('title', 'Detail Publikasi : Publikasi 1')

@section('content')
    <div class="container container-detail-publication" id="container-publication">
        <div class="row justify-content-center align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="news-header" data-aos="fade-down" data-aos-duration="1000">
                    <h2 class="text-start news-title text-capitalize text-center">
                        Publikasi Hasil Riset Konsil LSM Indonesia bersama Kemen PPPA
                    </h2>
                    <p class="text-start news-author text-muted text-center my-3">
                        <i>Diposting Oleh : </i> Budi Purwanto - <span class="text-admin">Admin LSM KOMPAS</span>
                    </p>
                    <p class="news-posting text-center">
                        Minggu, 14 Januari 2024 | 12:30:05
                    </p>
                </div>

                <div class="news-image-header">
                    <div class="row justify-content-center">
                        <div class="col-sm-12 col-md-8 col-lg-12" data-aos="fade-up" data-aos-duration="2000">
                            <img src="{{ asset('frontend/images/news-image.jpg') }}" alt="publication-image"
                                class="img-fluid img-thumbnail mx-auto d-block my-3">
                        </div>
                    </div>
                </div>

                <div class="news-content my-3" data-aos="fade-down">
                    <h1>Kata Pengantar</h1>
                    <p>
                        Terwujudnya kesetaraan gender ditandai dengan tidak adanya diskriminasi baik terhadap laki-laki
                        maupun perempuan. Namun hal tersebut belum sepenuhnya terlaksana di Indonesia. Diskriminasi dan
                        ketidaksetaraan gender itu masih saja terjadi. Dalam Gender Development Index (GDI) menunjukkan
                        bahwa kesetaraan gender di Indonesia masih belum mencapai posisi terbaiknya. Pada Tahun 2022,
                        Indonesia masih berada pada peringkat ke-92 dari 146 negara dan peringkat ke-6 dari 10 negara ASEAN.
                    </p>
                    <p>
                        Dalam mewujudkan kesetaraan gender, Indonesia masih memiliki tantangan yang sangat kompleks, baik
                        secara tradisi, budaya, pemahaman keagamaan, serta kondisi sosial masyarakat setempat. Pemerintah
                        pusat dan daerah telah menunjukkan komitmennya pada penyelenggaraan strategi pengarusutamaan gender
                        (PUG) dalam 7 (tujuh) proses pembangunan, mulai dari perencanaan, penganggaran, pelaksanaan,
                        pemantauan, evaluasi, pengawasan (audit), dan pelaporan. Namun tentunya pemerintah tidak dapat
                        bekerja sendiri, dibutuhkan dukungan dan kolaborasi multipihak (pentahelix), salah satunya peran
                        penting lembaga masyarakat.
                    </p>
                    <p>
                        Partisipasi dan peran serta lembaga masyarakat sangat membantu upaya mewujudkan kesetaraan gender,
                        kehadiran dan manfaatnya dapat dirasakan oleh pemerintah dan juga masyarakat. Namun banyak diantara
                        lembaga masyarakat yang selama ini bekerja di tingkat akar rumput (grassroot), sehingga keberadaan
                        maupun kerja nyatanya tidak diketahui oleh pemerintah. Oleh karena itu, Kementerian Pemberdayaan
                        Perempuan dan Perlindungan Anak (Kemen PPPA) memandang perlu untuk melakukan pemetaan dan
                        mengidentifikasi sejauhmana peran, praktik baik, strategi dan tantangan yang ada di lembaga
                        masyarakat dalam mendorong kesetaraan gender dan pemberdayaan Perempuan.
                    </p>
                </div>

                <div class="news-source my-4" data-aos="fade-up">
                    <a href="https://drive.google.com" class="btn btn-primary btn-download px-3 py-2">Download Publikasi</a>
                </div>
            </div>

        </div>

        <div class="row justify-content-center my-3">
            <hr>
        </div>

        <div class="related-post">
            <div class="row justify-content-center">
                <h5 class="text-start text-capitalize" data-aos="fade-right">Publikasi Lainnya</h5>
            </div>
            <div class="row justify-content-center my-3">
                <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
                    <div class="card card-news text-dark card-has-bg click-col" data-aos="fade-up" data-aos-duration="100"
                        style="background-image:url('https://source.unsplash.com/600x900/?tech,street');">
                        <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tech,street"
                            alt="Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?">
                        <div class="card-img-overlay d-flex flex-column">
                            <div class="card-body">
                                <!-- <small class="card-meta mb-2">Thought Leadership</small> -->
                                <h4 class="card-title mt-0 "><a class="text-dark text-decoration-none"
                                        href="./detail-news.html" target="_blank">Web Developmet Lorem Ipsum Sit Amet
                                        Consectetur dipisi?</a></h4>
                                <small><i class="far fa-clock"></i> October 15, 2020</small>
                            </div>
                            <div class="card-footer">
                                <div class="media">
                                    <div class="media-body">
                                        <h6 class="my-0 text-dark d-block">Oz Coruhlu</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
                    <div class="card card-news text-dark card-has-bg click-col" data-aos="fade-up" data-aos-duration="200"
                        style="background-image:url('https://source.unsplash.com/600x900/?tech,street');">
                        <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tech,street"
                            alt="Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?">
                        <div class="card-img-overlay d-flex flex-column">
                            <div class="card-body">
                                <!-- <small class="card-meta mb-2">Thought Leadership</small> -->
                                <h4 class="card-title mt-0 "><a class="text-dark text-decoration-none"
                                        href="./detail-news.html" target="_blank">Web Developmet Lorem Ipsum Sit Amet
                                        Consectetur dipisi?</a></h4>
                                <small><i class="far fa-clock"></i> October 15, 2020</small>
                            </div>
                            <div class="card-footer">
                                <div class="media">
                                    <div class="media-body">
                                        <h6 class="my-0 text-dark d-block">Oz Coruhlu</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
                    <div class="card card-news text-dark card-has-bg click-col" data-aos="fade-up" data-aos-duration="300"
                        style="background-image:url('https://source.unsplash.com/600x900/?tech,street');">
                        <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tech,street"
                            alt="Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?">
                        <div class="card-img-overlay d-flex flex-column">
                            <div class="card-body">
                                <!-- <small class="card-meta mb-2">Thought Leadership</small> -->
                                <h4 class="card-title mt-0 "><a class="text-dark text-decoration-none"
                                        href="./detail-news.html" target="_blank">Web Developmet Lorem Ipsum Sit Amet
                                        Consectetur dipisi?</a></h4>
                                <small><i class="far fa-clock"></i> October 15, 2020</small>
                            </div>
                            <div class="card-footer">
                                <div class="media">
                                    <div class="media-body">
                                        <h6 class="my-0 text-dark d-block">Oz Coruhlu</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
                    <div class="card card-news text-dark card-has-bg click-col" data-aos="fade-up" data-aos-duration="400"
                        style="background-image:url('https://source.unsplash.com/600x900/?tech,street');">
                        <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tech,street"
                            alt="Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?">
                        <div class="card-img-overlay d-flex flex-column">
                            <div class="card-body">
                                <!-- <small class="card-meta mb-2">Thought Leadership</small> -->
                                <h4 class="card-title mt-0 "><a class="text-dark text-decoration-none"
                                        href="./detail-news.html" target="_blank">Web Developmet Lorem Ipsum Sit Amet
                                        Consectetur dipisi?</a></h4>
                                <small><i class="far fa-clock"></i> October 15, 2020</small>
                            </div>
                            <div class="card-footer">
                                <div class="media">
                                    <div class="media-body">
                                        <h6 class="my-0 text-dark d-block">Oz Coruhlu</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
