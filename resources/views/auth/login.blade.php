@extends('layouts.main-layout')

@section('title', 'LSM KOMPAS - LOGIN')

@section('content')
    <div class="container container-project align-items-center">
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-white" style="border-radius: 1rem; border: '1px solid yellow'">
                            <div class="card-body p-5">
                                <div class="mb-md-5 mt-md-4 pb-3">
                                    <h2 class="fw-bold mb-2 text-uppercase text-black">Login</h2>
                                    <p class="text-black-50 mb-3">Please enter your email and password!</p>
                                    @if ($message = Session::get('error'))
                                        <div class="alert alert-danger my-3" role="alert">
                                            {{ $message }}
                                        </div>
                                    @endif
                                    <form action="{{ route('login.process') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email address</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Email Address" value="{{ old('email') }}">
                                            @error('email')
                                                <div id="emailError" class="form-text">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="password" name="password"
                                                placeholder="Password">
                                            @error('passwors')
                                                <div id="passwordError" class="form-text">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="d-grid gap-2">
                                            <button type="submit"
                                                class="btn btn-primary text-bold py-2 my-4">LOGIN</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
