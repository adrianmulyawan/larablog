@extends('layouts.dashboard-layout')

@section('title', 'Pengaturan Password')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Pengaturan Password</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Halaman Pengaturan Password</li>
            </ol>

            <div class="row">
                <div class="col-xl-12 col-sm-12 col-sm-12 my-2">
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h5 class="text-start my-2 mx-2">Form Penggantian Password</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="#" method="post">
                                <div class="mb-4">
                                    <label for="current_password" class="form-label">Password Lama</label>
                                    <input type="password" class="form-control" id="current_password"
                                        name="current_password">
                                </div>
                                <div class="mb-4">
                                    <label for="password" class="form-label">Password Baru</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="mb-4">
                                    <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                                    <input type="password" class="form-control" id="password_confirmation"
                                        name="password_confirmation">
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary py-2" type="button">UPDATE PASSWORD</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
