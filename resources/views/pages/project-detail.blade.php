@extends('layouts.main-layout')

@section('title', 'Detail Project : Project 1')

@section('content')
    <div class="container container-project">
        <div class="row justify-content-start my-3" data-aos="fade-down">
            <h2 class="text-title-project">{{ $project->project_name }}</h2>
            <p class="text-title-author">Diposting Oleh : {{ $project->user->name }}</p>
        </div>

        <div class="row justify-content-center align-items-start">
            <div class="col-sm-12 col-md-8 col-lg-8 col-left">
                <div class="card card-left p-2" data-aos="fade-right" data-aos-duration="1000">
                    <img class="img-fluid w-50 mx-auto d-block" src="{{ Storage::url($project->project_image) }}"
                        alt="poster">
                    <div class="card-body">
                        <div class="project-description my-4">
                            <h5 class="card-title my-3">Deskripsi Projek</h5>
                            <p class="card-text text-muted">
                                {{ $project->project_description }}
                            </p>
                        </div>

                        <hr>

                        <div class="project-loction my-4">
                            <h5 class="card-title my-3">
                                Lokasi
                            </h5>
                            <p class="card-text">
                                <span class="location-project">{{ $project->project_location }}</span> /
                                <span class="date">{{ date('D M Y', strtotime($project->project_date)) }}</span>
                            </p>
                            <p class="card-text">
                                {{ $project->project_start_time }}
                            </p>
                        </div>

                        <hr>

                        <div class="project-contact-person my-4">
                            <h5 class="card-title my-3">
                                Kontak Person
                            </h5>
                            <p class="card-text">
                                Untuk Informasi Lebih Lanjut Anda Dapat Menghubungi Narahubung Dibawah Ini:
                            </p>
                            <p class="card-text">
                                {{ $project->contact_person_name }} - {{ $project->contact_person_phone }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-8 col-lg-4 col-right">
                <div class="card card-right p-2" data-aos="fade-left" data-aos-duration="2000">
                    <div class="card-body">
                        <h5 class="card-title text-detail-project">Detail Projek</h5>
                        <hr>
                        <div class="detail-information my-3">
                            <table class="table table-borderless table-responsive">
                                <tr>
                                    <th width="50%">Nama Project : </th>
                                    <td width="50%" class="text-end">
                                        {{ $project->project_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Lokasi : </th>
                                    <td width="50%" class="text-end">
                                        {{ $project->project_location }}
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Pelaksanaan : </th>
                                    <td width="50%" class="text-end">
                                        {{ date('D M Y', strtotime($project->project_date)) }}
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Waktu : </th>
                                    <td width="50%" class="text-end">
                                        {{ $project->project_start_time }}
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Batas Pendaftaran : </th>
                                    <td width="50%" class="text-end">
                                        {{ date('D M Y', strtotime($project->project_registration_deadline)) }}
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Status : </th>
                                    <td width="50%" class="text-end">
                                        {{ $project->is_done === 0 ? 'Dibuka' : 'Ditutup' }}
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="row justify-content-center">
                            @if ($project->is_done === 0)
                                <a href="{{ route('register-project', $project->project_slug) }}"
                                    class="btn btn-regis py-2">
                                    Daftar Sekarang
                                </a>
                            @else
                                <button disabled class="btn btn-danger py-2">
                                    Pendaftaran Volunteer Ditutup
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
