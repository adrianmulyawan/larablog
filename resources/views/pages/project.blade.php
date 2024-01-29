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
        @php
            $duration = 0;
        @endphp
        @forelse ($projects as $project)
            <article class="postcard light green" data-aos="fade-right" data-aos-duration="{{ $duration += 100 }}">
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="{{ Storage::url($project->project_header_image) }}" alt="Image Title" />
                </a>
                <div class="postcard__text t-dark">
                    <h1 class="postcard__title green text-capitalize">{{ $project->project_name }}</h1>
                    <div class="postcard__subtitle small">
                        <time datetime="2020-05-25 12:00:00">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            {{ date('D, d M Y', strtotime($project->project_date)) }}
                        </time>
                    </div>
                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt">
                        {!! Str::limit($project->project_description, 500, '.') !!}
                    </div>
                    <ul class="postcard__tagbox">
                        <li class="tag__item play blue">
                            <a href="{{ route('project-detail', $project->project_slug) }}"
                                class="btn btn success px-3 py-2">
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
        @empty
            <div class="col-sm-12 col-md-12 col-lg-12 mb-4">
                <div class="card p-2">
                    <h5 class="text-center text-danger">Belum ada berita apapun!</h5>
                </div>
            </div>
        @endforelse
    </div>
@endsection
