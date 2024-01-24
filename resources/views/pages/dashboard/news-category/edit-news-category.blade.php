@extends('layouts.dashboard-layout')

@section('title', 'LSM KOMPAS - Tambah Kategori Berita')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Kategori Berita</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active text-capitalize">Edit Kategori Berita</li>
            </ol>

            <!-- Row Card I -->
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 my-3">
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h5 class="text-start my-2 mx-2">Form Edit Data Kategori</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('news.category.update', $category->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="mb-4">
                                    <label for="news_category_name" class="form-label">Nama Kategori</label>
                                    <input type="text" class="form-control" id="news_category_name"
                                        name="news_category_name"
                                        value="{{ old('news_category_name', $category->news_category_name) }}"
                                        placeholder="Masukan Nama Kategori Berita">
                                    @error('news_category_name')
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
