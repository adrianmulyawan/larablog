@extends('layouts.dashboard-layout')

@section('title', 'LSM KOMPAS - Aksi')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Testimonial</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active text-capitalize">Tambah Testimonial LSM Kompas</li>
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
                            <form action="{{ route('testi.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-4">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ old('name') }}" placeholder="Masukan Nama">
                                    @error('name')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="photo" class="form-label">Photo</label>
                                    <input type="file" class="form-control" id="photo" name="photo">
                                    @error('photo')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="body" class="form-label">Testimonial</label>
                                    <input type="text" class="form-control" id="body" name="body"
                                        value="{{ old('body') }}" placeholder="Masukan Testimonial">
                                    @error('body')
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
