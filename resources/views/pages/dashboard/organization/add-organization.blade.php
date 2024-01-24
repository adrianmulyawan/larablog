@extends('layouts.dashboard-layout');

@section('title', 'LSM KOMPAS - Tambah Info Organisasi')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Organisasi</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active text-capitalize">Tambah Info Mengenai Organisasi</li>
            </ol>

            <!-- Row Card I -->
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 my-3">
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h5 class="text-start my-2 mx-2">Form Tambah Data Info Organisasi</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('organization.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-4">
                                    <label for="organization_name" class="form-label">Nama Organisasi</label>
                                    <input type="text" class="form-control" id="organization_name"
                                        name="organization_name" value="{{ old('organization_name') }}"
                                        placeholder="Masukan Nama Organisasi">
                                    @error('organization_name')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="organization_description" class="form-label">Deskripsi Organisasi</label>
                                    <textarea class="form-control" id="organization_description" name="organization_description"
                                        placeholder="Masukan Deskripsi Organisasi" rows="3">{{ old('organization_description') }}</textarea>
                                    @error('organization_description')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="organization_motto" class="form-label">Motto Organisasi</label>
                                    <input type="text" class="form-control" id="organization_motto"
                                        name="organization_motto" value="{{ old('organization_motto') }}"
                                        placeholder="Masukan Motto Organisasi">
                                    @error('organization_motto')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="organization_logo" class="form-label">Logo Organisasi</label>
                                    <input class="form-control" type="file" id="organization_logo"
                                        name="organization_logo">
                                    @error('organization_logo')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="organization_contact" class="form-label">Kontak Organisasi</label>
                                    <input type="text" class="form-control" id="organization_contact"
                                        name="organization_contact" value="{{ old('organization_contact') }}"
                                        placeholder="Masukan Kontak Organisasi">
                                    @error('organization_contact')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="organization_address" class="form-label">Alamat Organisasi</label>
                                    <input type="text" class="form-control" id="organization_address"
                                        name="organization_address" value="{{ old('organization_address') }}"
                                        placeholder="Masukan Alamat Organisasi">
                                    @error('organization_address')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary py-2" type="submit">SIMPAN DATA</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
