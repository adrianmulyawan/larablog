@extends('layouts.dashboard-layout')

@section('title', 'LSM KOMPAS - Tambah Berita')

@push('styles-dashboard')
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
@endpush

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Berita</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active text-capitalize">Tambah Berita Baru</li>
            </ol>

            <!-- Row Card I -->
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 my-3">
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h5 class="text-start my-2 mx-2">Form Tambah Data Berita</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-4">
                                    <label for="news_name" class="form-label">Judul Berita</label>
                                    <input type="text" class="form-control" id="news_name" name="news_name"
                                        value="{{ old('news_name') }}" placeholder="Masukan Judul Berita">
                                    @error('news_name')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="news_category_id" class="form-label">Kategori Berita</label>
                                    <select class="form-select" id="news_category_id" name="news_category_id">
                                        <option selected disabled>Pilih Kategori Berita</option>
                                        @foreach ($newsCategories as $category)
                                            <option value="{{ $category->id }}">{{ $category->news_category_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('news_category_id')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="news_header_image" class="form-label">Header Berita</label>
                                    <input type="file" class="form-control" id="news_header_image"
                                        name="news_header_image">
                                    @error('news_header_image')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="news_image" class="form-label">Gambar Berita</label>
                                    <input type="file" class="form-control" id="news_image" name="news_image">
                                    @error('news_image')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="news_image_source" class="form-label">Link Gambar (Bila Mengambil Gambar
                                        Dari Internet)</label>
                                    <input type="text" class="form-control" id="news_image_source"
                                        name="news_image_source" value="{{ old('news_image_source') }}"
                                        placeholder="Masukan Link Gambar">
                                    @error('news_image_source')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="news_body" class="form-label">Isi Berita</label>
                                    <textarea class="form-control" id="news_body" name="news_body" rows="10" placeholder="Isi Berita">{{ old('news_body') }}</textarea>
                                    @error('news_body')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="news_author" class="form-label">Pembuat Berita</label>
                                    <input type="text" class="form-control" id="news_author" name="news_author"
                                        value="{{ old('news_author') }}" placeholder="Masukan Nama Pembuat Berita">
                                    @error('news_author')
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

@push('script-dashboard')
    <script>
        ClassicEditor.create(document.querySelector('#news_body'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
