@extends('layouts.main-layout')

@section('title', 'LSM KOMPAS - Project')

@push('custom-style')
    <link rel="stylesheet" href="{{ asset('frontend/styles/postcard.css') }}">
@endpush

@section('content')
    <div class="container container-project">
        <!-- Header -->
        <div class="row justify-content-center">
            <div class="project-header" data-aos="fade-down">
                <h1 class="text-center text-capitalize my-2">Daftar Projek</h1>
                <p class="text-center">
                    Daftar Projek Sosial Kami
                </p>
            </div>
        </div>

        <!-- Content -->
        <article class="postcard light red" data-aos="fade-left" data-aos-duration="1000">
            <a class="postcard__img_link" href="#">
                <img class="postcard__img" src="https://picsum.photos/501/500" alt="Image Title" />
            </a>
            <div class="postcard__text t-dark">
                <h1 class="postcard__title red text-capitalize">Dua Hari Menjadi Kuli</h1>
                <div class="postcard__subtitle small">
                    <time datetime="2020-05-25 12:00:00">
                        <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                    </time>
                </div>
                <div class="postcard__bar"></div>
                <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat
                    asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo
                    accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci
                    illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
                <ul class="postcard__tagbox">
                    <li class="tag__item play blue">
                        <a href="./project-detail.html" class="btn btn success px-3 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-play-fill" viewBox="0 0 16 16">
                                <path
                                    d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393" />
                            </svg>
                            <span class="ms-1">Daftar Sekarang</span>
                        </a>
                    </li>
                </ul>
            </div>
        </article>
        <article class="postcard light green" data-aos="fade-right" data-aos-duration="2000">
            <a class="postcard__img_link" href="#">
                <img class="postcard__img" src="https://picsum.photos/500/501" alt="Image Title" />
            </a>
            <div class="postcard__text t-dark">
                <h1 class="postcard__title green text-capitalize">Sehari Menjadi Kuli</h1>
                <div class="postcard__subtitle small">
                    <time datetime="2020-05-25 12:00:00">
                        <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                    </time>
                </div>
                <div class="postcard__bar"></div>
                <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat
                    asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo
                    accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci
                    illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
                <ul class="postcard__tagbox">
                    <li class="tag__item play blue">
                        <a href="./project-detail.html" class="btn btn success px-3 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-play-fill" viewBox="0 0 16 16">
                                <path
                                    d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393" />
                            </svg>
                            <span class="ms-1">Daftar Sekarang</span>
                        </a>
                    </li>
                </ul>
            </div>
        </article>
        <article class="postcard light red" data-aos="fade-left" data-aos-duration="3000">
            <a class="postcard__img_link" href="#">
                <img class="postcard__img" src="https://picsum.photos/501/500" alt="Image Title" />
            </a>
            <div class="postcard__text t-dark">
                <h1 class="postcard__title red text-capitalize">Dua Hari Menjadi Kuli</h1>
                <div class="postcard__subtitle small">
                    <time datetime="2020-05-25 12:00:00">
                        <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                    </time>
                </div>
                <div class="postcard__bar"></div>
                <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat
                    asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo
                    accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci
                    illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
                <ul class="postcard__tagbox">
                    <li class="tag__item play blue">
                        <a href="./project-detail.html" class="btn btn success px-3 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-play-fill" viewBox="0 0 16 16">
                                <path
                                    d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393" />
                            </svg>
                            <span class="ms-1">Daftar Sekarang</span>
                        </a>
                    </li>
                </ul>
            </div>
        </article>
        <article class="postcard light green" data-aos="fade-right" data-aos-duration="4000">
            <a class="postcard__img_link" href="#">
                <img class="postcard__img" src="https://picsum.photos/500/501" alt="Image Title" />
            </a>
            <div class="postcard__text t-dark">
                <h1 class="postcard__title green text-capitalize">Sehari Menjadi Kuli</h1>
                <div class="postcard__subtitle small">
                    <time datetime="2020-05-25 12:00:00">
                        <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                    </time>
                </div>
                <div class="postcard__bar"></div>
                <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi,
                    fugiat
                    asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo
                    accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci
                    illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
                <ul class="postcard__tagbox">
                    <li class="tag__item play blue">
                        <a href="./project-detail.html" class="btn btn success px-3 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-play-fill" viewBox="0 0 16 16">
                                <path
                                    d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393" />
                            </svg>
                            <span class="ms-1">Daftar Sekarang</span>
                        </a>
                    </li>
                </ul>
            </div>
        </article>
        <article class="postcard light red" data-aos="fade-left" data-aos-duration="5000">
            <a class="postcard__img_link" href="#">
                <img class="postcard__img" src="https://picsum.photos/501/500" alt="Image Title" />
            </a>
            <div class="postcard__text t-dark">
                <h1 class="postcard__title red text-capitalize">Dua Hari Menjadi Kuli</h1>
                <div class="postcard__subtitle small">
                    <time datetime="2020-05-25 12:00:00">
                        <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                    </time>
                </div>
                <div class="postcard__bar"></div>
                <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi,
                    fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus
                    nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam
                    adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum
                    quos!</div>
                <ul class="postcard__tagbox">
                    <li class="tag__item play blue">
                        <a href="./project-detail.html" class="btn btn success px-3 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-play-fill" viewBox="0 0 16 16">
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
@endsection
