@extends('layouts.dashboard-layout')

@section('title', 'LSM KOMPAS - Tambah Fokus')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Fokus</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active text-capitalize">Tambah Fokus LSM Kompas</li>
            </ol>

            <!-- Row Card I -->
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 my-3">
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h5 class="text-start my-2 mx-2">Form Tambah Data Fokus</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('focus.store') }}" method="post">
                                @csrf
                                <div class="mb-4">
                                    <label for="target_name" class="form-label">Nama Fokus</label>
                                    <input type="text" class="form-control" id="target_name" name="target_name"
                                        value="{{ old('target_name') }}" placeholder="Masukan Nama Fokus">
                                    @error('target_name')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="target_description" class="form-label">Deskripsi</label>
                                    <input type="text" class="form-control" id="target_description"
                                        name="target_description" value="{{ old('target_description') }}"
                                        placeholder="Masukan Deskripsi Fokus">
                                    @error('target_description')
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
