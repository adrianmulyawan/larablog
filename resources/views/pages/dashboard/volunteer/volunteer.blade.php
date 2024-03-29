@extends('layouts.dashboard-layout')

@section('title', 'LSM KOMPAS - Daftar Volunteer')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Projek</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active text-capitalize">Kelola Projek LSM Kompas</li>
            </ol>

            <!-- Row Card I -->
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 my-3">
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h5 class="text-start my-2 mx-2">Daftar Seluruh Projek</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center table-heading">No</th>
                                        <th scope="col" class="text-center table-heading">Nama Projek</th>
                                        <th scope="col" class="text-center table-heading">Lokasi Project</th>
                                        <th scope="col" class="text-center table-heading">Tanggal Projek</th>
                                        <th scope="col" class="text-center table-heading">Status</th>
                                        <th scope="col" class="text-center table-heading">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $number = 0;
                                    @endphp
                                    @forelse ($items as $item)
                                        <tr>
                                            <td class="text-center">{{ $number += 1 }}</td>
                                            <td class="text-center">
                                                {{ Str::limit($item->project_name, 15, '...') }}
                                            </td>
                                            <td class="text-center">{{ Str::limit($item->project_location, 10, '...') }}
                                            </td>
                                            <td class="text-center">
                                                {{ $item->formatted_project_date }}
                                            </td>
                                            <td class="text-center">{{ $item->is_done === 0 ? 'Buka' : 'Tutup' }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('volunteer.show', $item->id) }}"
                                                    class="btn btn-primary mt-auto mr-2">
                                                    <i class="fa-solid fa-eye" style="color: #fff;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6">
                                                <p class="text-danger text-center my-3">Anda Belum Memiliki Berita Apapun!
                                                </p>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
