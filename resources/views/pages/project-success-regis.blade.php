@extends('layouts.main-layout')

@section('title', 'Success')

@section('content')
    <div class="container container-project align-items-center">
        <div class="row d-flex align-items-center" data-aos="fade-up" data-aos-duration="1000" width="220">
            <div class="col text-center">
                <img src="{{ asset('frontend/images/svg/Emoji.svg') }}" alt="success-regis" class="img-fluid my-4">
                <div class="message my-3">
                    <h1>Yay! Berhasil</h1>
                    <p>
                        Anda Telah Berhasil Mendaftar Sebagai Volunteer <br>
                        Tunggu Informasi Yang Akan Kami Sampaikan Yaa...
                    </p>
                </div>
                <a href="/" class="btn btn btn-regis px-5 py-2 my-3">Kehalaman Utama</a>
            </div>
        </div>
    </div>
@endsection
