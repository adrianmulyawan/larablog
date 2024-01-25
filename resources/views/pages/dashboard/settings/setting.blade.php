@extends('layouts.dashboard-layout')

@section('title', 'Pengaturan Akun')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Pengaturan Akun</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Halaman Pengaturan Akun</li>
            </ol>

            <!-- Row Card I -->
            <div class="row">
                <div class="col-xl-12 col-sm-12 col-sm-12 my-2">
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h5 class="text-start my-2 mx-2">Data Personal Info</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('setting.update') }}" method="post">
                                @csrf
                                @method('put')
                                <div class="mb-4">
                                    <label for="name" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ Auth::user()->name }}">
                                </div>
                                <div class="mb-4">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username"
                                        value="{{ Auth::user()->username }}">
                                </div>
                                <div class="mb-4">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        value="{{ Auth::user()->email }}">
                                </div>
                                <div class="mb-4">
                                    <label for="phone_number" class="form-label">Nomor Telpon</label>
                                    <input type="text" class="form-control" id="phone_number" name="phone_number"
                                        value="{{ Auth::user()->phone_number }}">
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary py-2" type="submit"">UPDATE DATA</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
