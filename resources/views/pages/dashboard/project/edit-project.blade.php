@extends('layouts.dashboard-layout')

@section('title', 'LSM KOMPAS - Tambah Projek')

@push('styles-dashboard')
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
@endpush

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Projek</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active text-capitalize">Tambah Project Baru</li>
            </ol>

            <!-- Row Card I -->
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 my-3">
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h5 class="text-start my-2 mx-2">Form Tambah Data Project</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('project.update', $project->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-4">
                                    <label for="project_name" class="form-label">Judul Projek</label>
                                    <input type="text" class="form-control" id="project_name" name="project_name"
                                        value="{{ old('project_name', $project->project_name) }}"
                                        placeholder="Masukan Judul Projek">
                                    @error('project_name')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="project_header_image" class="form-label">Gambar Header Projek</label>
                                    <input type="file" class="form-control" id="project_header_image"
                                        name="project_header_image">
                                    <small class="text-muted">Jika Tidak Ingin Update Data Gambar Kosongkan Saja</small>
                                    @error('project_header_image')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="project_image" class="form-label">Gambar Projek</label>
                                    <input type="file" class="form-control" id="project_image" name="project_image">
                                    <small class="text-muted">Jika Tidak Ingin Update Data Gambar Kosongkan Saja</small>
                                    @error('project_image')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="project_description" class="form-label">Deskripsi Project</label>
                                    <textarea class="form-control" id="project_description" name="project_description" rows="10"
                                        placeholder="Deskripsi Project">{{ old('project_description', $project->project_description) }}</textarea>
                                    @error('project_description')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="project_location" class="form-label">Lokasi Projek</label>
                                    <input type="text" class="form-control" id="project_location" name="project_location"
                                        value="{{ old('project_location', $project->project_location) }}"
                                        placeholder="Masukan Lokasi Projek">
                                    @error('project_location')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="project_date" class="form-label">Tanggal Projek</label>
                                    <input type="date" class="form-control" id="project_date" name="project_date"
                                        value="{{ old('project_date', $project->project_date) }}">
                                    @error('project_date')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="project_start_time" class="form-label">Waktu Projek</label>
                                    <input type="text" class="form-control" id="project_start_time"
                                        name="project_start_time"
                                        value="{{ old('project_start_time', $project->project_start_time) }}"
                                        placeholder="Masukan Waktu Projek">
                                    @error('project_start_time')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="project_registration_deadline" class="form-label">Batas Waktu
                                        Pendaftaran</label>
                                    <input type="date" class="form-control" id="project_registration_deadline"
                                        name="project_registration_deadline"
                                        value="{{ old('project_deadline', $project->project_registration_deadline) }}">
                                    @error('project_registration_deadline')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="contact_person_name" class="form-label">Nama Contact Person</label>
                                    <input type="text" class="form-control" id="contact_person_name"
                                        name="contact_person_name"
                                        value="{{ old('contact_person_name', $project->contact_person_name) }}"
                                        placeholder="Masukan Nama Contact Person Projek">
                                    @error('contact_person_name')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="contact_person_phone" class="form-label">Nomor Contact Person</label>
                                    <input type="text" class="form-control" id="contact_person_phone"
                                        name="contact_person_phone"
                                        value="{{ old('contact_person_phone', $project->contact_person_phone) }}"
                                        placeholder="Masukan Nomor Contact Person Projek">
                                    @error('contact_person_phone')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="is_done" class="form-label">Status Projek</label>
                                    <select class="form-select" id="is_done" name="is_done">
                                        <option value="false" {{ $project->is_done === 0 ? 'selected' : '' }}>
                                            Buka
                                        </option>
                                        <option value="true" {{ $project->is_done === 1 ? 'selected' : '' }}>
                                            Tutup
                                        </option>
                                    </select>
                                    @error('is_done')
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
        ClassicEditor.create(document.querySelector('#project_description'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
