@extends('layouts.dashboard-layout')

@section('title', 'LSM KOMPAS - Detail Daftar Volunteer')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Volunteer Projek</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active text-capitalize">Daftar Volunteer Projek</li>
            </ol>

            <!-- Row Card I -->
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 my-3">
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h5 class="text-start my-2 mx-2">Daftar Volunteer Projek : {{ $project->project_name }}</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center table-heading">No</th>
                                        <th scope="col" class="text-center table-heading">Nama</th>
                                        <th scope="col" class="text-center table-heading">Email</th>
                                        <th scope="col" class="text-center table-heading">No Handphone / Whatsapp</th>
                                </thead>
                                <tbody>
                                    @php
                                        $number = 0;
                                    @endphp
                                    @forelse ($volunteers as $volunteer)
                                        <tr>
                                            <td class="text-center">{{ $number += 1 }}</td>
                                            <td class="text-center">
                                                {{ $volunteer->name }}
                                            </td>
                                            <td class="text-center">
                                                {{ $volunteer->email }}
                                            </td>
                                            <td class="text-center">
                                                {{ $volunteer->phone_number }}
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4">
                                                <p class="text-danger text-center my-3">Project Ini Belum Memiliki
                                                    Volunteer!
                                                </p>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <div class="row justify-content-end float-end">
                                {{ $volunteers->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
