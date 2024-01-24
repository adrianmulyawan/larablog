@extends('layouts.main-layout')

@section('title', 'Daftar Volunteer')

@section('content')
    <div class="container container-project">
        <div class="row justify-content-center">
            <div class="regis-form-header my-3" data-aos="fade-up">
                <h3 class="text-center">Form Pendaftaran</h3>
                <p class="text-center">
                    Form Pendaftaran Project LSM Kompas
                </p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="card card-form-register p-3" data-aos="fade-up">
                    <form>
                        <div class="mb-3">
                            <label for="fullname" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="fullname" name="fullname"
                                placeholder="Masukan Nama Lengkap Anda">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Alamat Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Masukan Email Anda">
                        </div>
                        <div class="mb-3">
                            <label for="phone_number" class="form-label">Nomor Handphone / Contact WhatsApp</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number"
                                placeholder="Masukan Nomor Ponsel Anda">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="address" name="address"
                                placeholder="Masukan Alamat Anda">
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-regis py-2 my-3">Daftar Sekarang</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
