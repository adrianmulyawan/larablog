@extends('layouts.dashboard-layout')

@section('title', 'LSM KOMPAS - Tambah Fokus')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">USER</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active text-capitalize">Tambah User LSM Kompas</li>
            </ol>

            <!-- Row Card I -->
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 my-3">
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h5 class="text-start my-2 mx-2">Form Tambah Data User</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('user.store') }}" method="post">
                                @csrf
                                <div class="mb-4">
                                    <label for="name" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ old('name') }}" placeholder="Masukan Nama Lengkap">
                                    @error('name')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        value="{{ old('email') }}" placeholder="Masukan Email Anda">
                                    @error('email')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username"
                                        value="{{ old('username') }}" placeholder="Masukan Username">
                                    @error('username')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="phone_number" class="form-label">Nomor Telpon</label>
                                    <input type="text" class="form-control" id="phone_number" name="phone_number"
                                        value="{{ old('phone_number') }}" placeholder="Masukan Nomor Telpon">
                                    @error('phone_number')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        value="{{ old('password') }}" placeholder="Masukan Password">
                                    @error('password')
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
