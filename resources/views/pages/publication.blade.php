@extends('layouts.main-layout')

@section('title', 'LSM KOMPAS - Publikasi')

@section('content')
    <!-- Header Berita -->
    <div class="header-news py-5" data-aos="fade-down">
        <div class="container">
            <h1 class="text-white">
                Publikasi
            </h1>
            <p class="text-white">
                Daftar Publikasi Terbaru Yang Kami Siapkan Untuk Anda
            </p>
        </div>
    </div>

    <!-- Content -->
    <div class="container mt-2">
        <div class="row justify-content-start align-items-center my-5">
            @php
                $duration = 0;
            @endphp
            @forelse ($items as $item)
                <div class="col-sm-12 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-duration="{{ $duration += 100 }}">
                    <div class="card card-news text-dark card-has-bg click-col"
                        style="background-image:url('{{ Storage::url($item->publication_header_image) }}'); background-size:cover;">
                        <img class="card-img d-none" src="{{ Storage::url($item->publication_header_image) }}"
                            alt="Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?">
                        <div class="card-img-overlay d-flex flex-column">
                            <div class="card-body">
                                <!-- <small class="card-meta mb-2">Thought Leadership</small> -->
                                <h4 class="card-title mt-0 ">
                                    <a class="text-dark text-decoration-none"
                                        href="{{ route('publication-detail', $item->publication_slug) }}">
                                        {{ $item->publication_name }}
                                    </a>
                                </h4>
                                <small><i class="far fa-clock"></i>
                                    {{ $item->created_at->format('M D, Y') }}
                                </small>
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
            @empty
                <div class="col-sm-12 col-md-12 col-lg-12 mb-4">
                    <div class="card p-2">
                        <h5 class="text-center text-danger">Belum ada berita apapun!</h5>
                    </div>
                </div>
            @endforelse
        </div>
        <div class="row my-3">
            {{ $items->links() }}
        </div>
    </div>
@endsection
