@extends('layouts.dashboard-layout')

@section('title', 'LSM KOMPAS - Tambah Publikasi')

@push('styles-dashboard')
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
@endpush

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Publikasi</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active text-capitalize">Edit Publikasi</li>
            </ol>

            <!-- Row Card I -->
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 my-3">
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h5 class="text-start my-2 mx-2">Form Edit Data Publikasi</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('publication.update', $publication->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-4">
                                    <label for="publication_name" class="form-label">Judul Publikasi</label>
                                    <input type="text" class="form-control" id="publication_name" name="publication_name"
                                        value="{{ old('publication_name', $publication->publication_name) }}"
                                        placeholder="Masukan Judul Berita">
                                    @error('publication_name')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="publication_category_id" class="form-label">Kategori Publikasi</label>
                                    <select class="form-select" id="publication_category_id" name="publication_category_id">
                                        <option selected disabled value="{{ $publication->publicationCategory->id }}">
                                            {{ $publication->publicationCategory->publication_category_name }} (Kategori
                                            Sebelumnya)
                                        </option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">
                                                {{ $category->publication_category_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('publication_category_id')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="publication_header_image" class="form-label">Gambar Header Publikasi</label>
                                    <input type="file" class="form-control" id="publication_header_image"
                                        name="publication_header_image">
                                    <small class="text-muted">Jika Tidak Ingin Update Data Gambar Kosongkan Saja</small>
                                    @error('publication_header_image')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="publication_image" class="form-label">Gambar Publikasi</label>
                                    <input type="file" class="form-control" id="publication_image"
                                        name="publication_image">
                                    <small class="text-muted">Jika Tidak Ingin Update Data Gambar Kosongkan Saja</small>
                                    @error('publication_image')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="publication_body" class="form-label">Isi Publikasi</label>
                                    <textarea class="form-control" id="publication_body" name="publication_body" rows="10" placeholder="Isi Berita">{{ old('publication_body', $publication->publication_body) }}</textarea>
                                    @error('publication_body')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="publication_author" class="form-label">Pembuat Publikasi</label>
                                    <input type="text" class="form-control" id="publication_author"
                                        name="publication_author"
                                        value="{{ old('publication_author', $publication->publication_author) }}"
                                        placeholder="Masukan Nama Pembuat Berita">
                                    @error('publication_author')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="publication_url_download" class="form-label">URL Download Publikasi</label>
                                    <input type="text" class="form-control" id="publication_url_download"
                                        name="publication_url_download"
                                        value="{{ old('publication_url_download', $publication->publication_url_download) }}"
                                        placeholder="Masukan Nama Pembuat Berita">
                                    @error('publication_url_download')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary py-2" type="submit">UPDATE DATA</button>
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
        ClassicEditor.create(document.querySelector('#publication_body'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
