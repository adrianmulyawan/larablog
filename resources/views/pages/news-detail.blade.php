@extends('layouts.main-layout')

@section('title', 'Detail Berita : Berita 1')

@section('content')
    <!-- Content -->
    <div class="container container-detail-news" id="container-news">
        <div class="row justify-content-center align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="news-header" data-aos="fade-down" data-aos-duration="1000">
                    <h2 class="text-start news-title text-capitalize text-center">
                        Pertumbuhan ekonomi Kota Pontianak mulai membaik
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
                            <img src="{{ asset('frontend/images/news-image.jpg') }}" alt="news-header-image"
                                class="img-fluid img-thumbnail mx-auto d-block my-3">
                            <p class="text-center text-muted">Sumber Gambar: unsplash.com</p>
                        </div>
                    </div>
                </div>

                <div class="news-content my-3" data-aos="fade-down">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi tempore, at eaque similique adipisci
                        possimus dicta nostrum in commodi? Numquam perspiciatis, dolorum libero eius assumenda pariatur,
                        velit minus eligendi voluptas, ab ipsa corrupti laboriosam consectetur. Aut exercitationem amet quam
                        fugit perspiciatis. Voluptates qui assumenda ipsam at consequuntur eum tempora quidem!
                    </p>

                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit soluta saepe sit facilis similique
                        officia aliquid, molestiae illum dolores fugiat. Omnis autem, quo deserunt a saepe pariatur impedit
                        error, quas harum doloremque, provident excepturi eos quibusdam nihil nemo soluta dicta totam ex
                        perspiciatis eius qui sint porro. Inventore sit laudantium eaque distinctio veritatis, vitae
                        corrupti aut cumque harum minima labore placeat aliquam quas id earum aspernatur aliquid ut tenetur
                        deleniti illum assumenda esse perspiciatis reprehenderit beatae. Vero ipsam molestiae eos ab quidem
                        expedita, modi nemo voluptates perspiciatis mollitia alias odit, sit culpa labore non provident
                        aperiam minima! Illum voluptatum rerum nisi totam veniam quo, vitae reiciendis, reprehenderit
                        voluptates odit, voluptatibus facilis maxime pariatur ipsum. Est hic sunt doloremque dolores
                        molestias!
                    </p>

                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus dolores, architecto eum dicta
                        cum commodi porro incidunt placeat facere, optio veritatis quo quibusdam repellendus quasi animi! In
                        doloribus, exercitationem, illum inventore excepturi at sequi quae, odio rem corporis ut voluptatem
                        optio. Et ipsum impedit asperiores voluptatibus deleniti vero a, corrupti perferendis soluta qui
                        minima pariatur voluptas dolorem nulla ratione. Quia rem iste ut nostrum quidem earum ipsum adipisci
                        nesciunt, voluptas repellendus accusantium, animi sapiente praesentium aperiam consequatur quisquam
                        numquam quod.</p>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, quos ab nemo a velit optio
                        maiores id rerum officia assumenda fuga? Maiores accusantium ab eos possimus eligendi recusandae
                        omnis perspiciatis placeat, aut quod qui, fugiat maxime harum corporis nobis aperiam ipsa vitae
                        commodi reprehenderit. Sit enim iusto id beatae voluptas nemo obcaecati, facere, excepturi molestiae
                        odit dolore rerum expedita quis nam rem delectus sunt, quo natus est quidem cupiditate illo
                        incidunt. Mollitia modi architecto illo qui. Debitis commodi nihil non molestias iste fugit. Neque
                        autem similique atque asperiores, voluptas pariatur molestias tempora minus ex cumque nesciunt quis,
                        modi vero, quam corporis consequuntur! Vitae perferendis aut cupiditate blanditiis tempore sed odio,
                        ab aliquam ipsa beatae ea sint aperiam pariatur libero hic! Sapiente voluptatem quas fuga sequi,
                        inventore aspernatur incidunt? Eaque tempore mollitia ut expedita vel dolorum assumenda quisquam
                        eveniet. Maiores, velit necessitatibus labore voluptate dicta distinctio natus sit ratione tempore a
                        consectetur repellendus accusamus, iusto ut illo repudiandae! Ratione optio voluptatibus saepe,
                        voluptatum exercitationem, ut mollitia laborum facere alias recusandae incidunt quam, fugiat
                        deleniti enim sunt fugit! Repudiandae unde beatae aperiam a eligendi dolore minus. Magni animi
                        provident ipsum ex labore.</p>
                </div>

                <div class="news-source my-4" data-aos="fade-up">
                    <p>Ditulis Oleh : <span class="author-name">Kukuh Hariyanto</span></p>
                    <p>Sumber : http://loremipsumgenerator.com, http://kompas.com</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center my-4">
            <hr>
        </div>

        <div class="related-post">
            <div class="row justify-content-center">
                <h5 class="text-start text-capitalize" data-aos="fade-right">Berita Lainnya</h5>
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
