@extends('layouts.main-layout')

@section('title', 'LSM KOMPAS - Detail Berita')

@section('content')
    <!-- Content -->
    <div class="container container-detail-news" id="container-news">
        <div class="row justify-content-center align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="news-header" data-aos="fade-down" data-aos-duration="1000">
                    <h2 class="text-start news-title text-capitalize text-center">
                        {{ $data->news_name }}
                    </h2>
                    <p class="text-start news-author text-muted text-center my-3">
                        <i>Diposting Oleh : </i> {{ $data->user->name }} - <span class="text-admin">Admin LSM KOMPAS</span>
                    </p>
                    <p class="news-posting text-center">
                        {{ $data->created_at->format('D, d M Y') }}
                    </p>
                </div>

                <div class="news-image-header">
                    <div class="row justify-content-center">
                        <div class="col-sm-12 col-md-8 col-lg-12" data-aos="fade-up" data-aos-duration="2000">
                            <img src="{{ Storage::url($data->news_image) }}" alt="news-header-image"
                                class="img-fluid img-thumbnail mx-auto d-block my-3">
                            <p class="text-center text-muted">Sumber Gambar: {{ $data->news_image_source }}</p>
                        </div>
                    </div>
                </div>

                <div class="news-content my-3" data-aos="fade-down">
                    {!! $data->news_body !!}
                </div>

                <div class="news-source my-4" data-aos="fade-up">
                    <p>Ditulis Oleh : <span class="author-name">{{ $data->news_author }}</span></p>
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
                @php
                    $duration = 0;
                @endphp
                @foreach ($items as $item)
                    <div class="col-sm-12 col-md-6 col-lg-3 mb-4" data-aos="fade-up"
                        data-aos-duration="{{ $duration += 1000 }}">
                        <div class="card card-news text-dark card-has-bg click-col"
                            style="background-image:url('{{ Storage::url($item->news_header_image) }}'); background-size: cover;">
                            <img class="card-img d-none" src="{{ Storage::url($item->news_header_image) }}"
                                alt="header-image">
                            <div class="card-img-overlay d-flex flex-column">
                                <div class="card-body">
                                    <!-- <small class="card-meta mb-2">Thought Leadership</small> -->
                                    <h4 class="card-title mt-0 ">
                                        <a class="text-dark text-decoration-none"
                                            href="{{ route('news-detail', $item->news_slug) }}">
                                            {{ $item->news_name }}
                                        </a>
                                    </h4>
                                    <small><i class="far fa-clock"></i>{{ $item->created_at->format('M D, Y') }}</small>
                                </div>
                                <div class="card-footer">
                                    <div class="media">
                                        <div class="media-body">
                                            <h6 class="my-0 text-dark d-block">
                                                {{ $item->user->name }}
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
