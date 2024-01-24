@extends('layouts.dashboard-layout')

@section('title', 'LSM KOMPAS - Aksi')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Aksi</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active text-capitalize">Tambah Aksi LSM Kompas</li>
            </ol>

            <!-- Row Card I -->
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 my-3">
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h5 class="text-start my-2 mx-2">Form Tambah Data Aksi</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('action.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-4">
                                    <label for="action_name" class="form-label">Nama Aksi</label>
                                    <input type="text" class="form-control" id="action_name" name="action_name"
                                        value="{{ old('action_name') }}" placeholder="Masukan Nama Aksi">
                                    @error('action_name')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="action_icon" class="form-label">Icon Aksi</label>
                                    <input type="file" class="form-control" id="action_icon" name="action_icon">
                                    @error('action_icon')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="action_description" class="form-label">Deskripsi</label>
                                    <input type="text" class="form-control" id="action_description"
                                        name="action_description" value="{{ old('action_description') }}"
                                        placeholder="Masukan Deskripsi Aksi">
                                    @error('action_description')
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
