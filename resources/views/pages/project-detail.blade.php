@extends('layouts.main-layout')

@section('title', 'Detail Project : Project 1')

@section('content')
    <div class="container container-project">
        <div class="row justify-content-start my-3" data-aos="fade-down">
            <h2 class="text-title-project">Sehari Menjadi Kuli</h2>
            <p class="text-title-author">Diposting Oleh : Fredrin Sambo</p>
        </div>

        <div class="row justify-content-center align-items-start">
            <div class="col-sm-12 col-md-8 col-lg-8 col-left">
                <div class="card card-left p-2" data-aos="fade-right" data-aos-duration="1000">
                    <img class="img-fluid w-50 mx-auto d-block" src="{{ asset('frontend/images/poster-event.png') }}"
                        alt="poster">
                    <div class="card-body">
                        <div class="project-description my-4">
                            <h5 class="card-title my-3">Deskripsi Projek</h5>
                            <p class="card-text text-muted">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut, porro rerum! Est veniam
                                praesentium exercitationem incidunt quia laboriosam labore aut reiciendis. Repellendus error
                                illo minima ex, voluptatem provident velit maxime, officia consequuntur nostrum dolorem,
                                tenetur id molestias doloremque! Fuga omnis soluta, molestiae nemo, enim adipisci cum aut
                                molestias aliquid sed eum totam, neque itaque ea. Magnam harum ullam ipsa, saepe sit ratione
                                alias, a incidunt facilis quo, rerum debitis impedit pariatur mollitia obcaecati magni
                                reiciendis blanditiis odit ad earum dolores voluptates non sequi. Magnam, natus ipsam.
                                Necessitatibus, laudantium a iure est similique ullam itaque officiis exercitationem labore
                                in culpa aut, consequatur nihil laborum maxime aliquam quos vero quibusdam quo. Dolorum sint
                                quasi sed rem harum libero sit mollitia enim accusantium?
                            </p>
                            <p class="card-text text-muted">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem minus provident saepe nobis!
                                Eius commodi inventore, illum voluptates, cumque minus at vero corporis autem, deleniti
                                facere quae expedita nesciunt ut libero possimus eveniet? In distinctio veniam inventore
                                reiciendis animi minima quam cupiditate sapiente, aperiam pariatur, similique temporibus
                                commodi. Blanditiis natus deleniti perferendis sapiente earum eveniet voluptatem distinctio
                                amet quidem nulla ea maiores delectus soluta debitis harum sequi possimus laboriosam
                                reprehenderit eaque neque, fugiat ipsum deserunt. Aperiam perspiciatis quo sed aspernatur!
                            </p>
                        </div>

                        <hr>

                        <div class="project-loction my-4">
                            <h5 class="card-title my-3">
                                Lokasi
                            </h5>
                            <p class="card-text">
                                <span class="location-project">Sungai Berembang</span> / <span class="date">16 January
                                    2024</span>
                            </p>
                            <p class="card-text">
                                10:00 - Selesai
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
                                Budi Wasweswos - 081345983677
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
                                        Sehari Menjadi Kuli
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Lokasi : </th>
                                    <td width="50%" class="text-end">
                                        Parit Berembang
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Pelaksanaan : </th>
                                    <td width="50%" class="text-end">
                                        16 Januari 2024
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Waktu : </th>
                                    <td width="50%" class="text-end">
                                        10:00 - Selesai
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Batas Pendaftaran : </th>
                                    <td width="50%" class="text-end">
                                        09 Januari 2024
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Status : </th>
                                    <td width="50%" class="text-end">
                                        Dibuka
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="row justify-content-center">
                            <a href="./register-project.html" class="btn btn-regis py-2">
                                Daftar Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
