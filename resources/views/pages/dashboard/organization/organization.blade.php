@extends('layouts.dashboard-layout');

@section('title', 'LSM KOMPAS - Organisasi')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Organisasi</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active text-capitalize">Kelola Organisasi LSM Kompas</li>
            </ol>

            <!-- Row Card I -->
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 my-3">
                    @if ($message = Session::get('message'))
                        <div class="alert alert-success my-3" role="alert">
                            {{ $message }}
                        </div>
                    @endif
                    @if ($message = Session::get('error'))
                        <div class="alert alert-success my-3" role="alert">
                            {{ $message }}
                        </div>
                    @endif
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h5 class="text-start my-2 mx-2">Info Organisasi</h5>
                                @if (!$data)
                                    <a href="{{ route('organization.create') }}" class="btn btn-add text-end mx-2 px-3">
                                        <i class="fa-solid fa-plus fa-sm"></i> Tambah Info
                                    </a>
                                @else
                                    <a href="{{ route('organization.edit', 1) }}" class="btn btn-add text-end mx-2 px-3">
                                        <i class="fa-solid fa-plus fa-sm"></i> Update Data
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center align-items-center my-2">
                                @if (!$data)
                                    <h5 class="text-center text-danger">
                                        Anda Belum Menambahkan Informasi Mengenai Organisasi Anda!
                                    </h5>
                                @else
                                    <form action="#" method="post">
                                        <div class="mb-4">
                                            <label for="organization_name" class="form-label">Nama Organisasi</label>
                                            <input type="text" class="form-control" id="organization_name"
                                                name="organization_name" value="{{ $data->organization_name }}" disabled>
                                        </div>
                                        <div class="mb-4">
                                            <label for="organization_description" class="form-label">Deskripsi
                                                Organisasi</label>
                                            <textarea class="form-control" id="organization_description" name="organization_description" rows="3" disabled>{{ $data->organization_description }}</textarea>
                                        </div>
                                        <div class="mb-4">
                                            <label for="organization_motto" class="form-label">Motto Organisasi</label>
                                            <input type="text" class="form-control" id="organization_motto"
                                                name="organization_motto" value="{{ $data->organization_motto }}" disabled>
                                        </div>
                                        <div class="mb-4">
                                            <label for="organization_logo" class="form-label">Logo Organisasi</label> <br>
                                            <img src="{{ Storage::url($data->organization_logo) }}" alt="logo-organisasi"
                                                class="img-fluid" width="120px">
                                        </div>
                                        <div class="mb-4">
                                            <label for="organization_contact" class="form-label">Kontak Organisasi</label>
                                            <input type="text" class="form-control" id="organization_contact"
                                                name="organization_contact" value="{{ $data->organization_contact }}"
                                                disabled>
                                        </div>
                                        <div class="mb-4">
                                            <label for="organization_adress" class="form-label">Alamat Organisasi</label>
                                            <input type="text" class="form-control" id="organization_adress"
                                                name="organization_adress" value="{{ $data->organization_address }}"
                                                disabled>
                                        </div>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
