@extends('layouts.dashboard-layout')

@section('title', 'LSM KOMPAS - Daftar Volunteer')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Projek</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active text-capitalize">Kelola Projek LSM Kompas</li>
            </ol>

            <!-- Row Card I -->
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 my-3">
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h5 class="text-start my-2 mx-2">Daftar Seluruh Projek</h5>
                                <a href="add-project.html" class="btn btn-add text-end mx-2 px-3">
                                    <i class="fa-solid fa-plus fa-sm"></i> Tambah Data
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center table-heading">No</th>
                                        <th scope="col" class="text-center table-heading">Nama Projek</th>
                                        <th scope="col" class="text-center table-heading">Lokasi Project</th>
                                        <th scope="col" class="text-center table-heading">Tanggal Projek</th>
                                        <th scope="col" class="text-center table-heading">Status</th>
                                        <th scope="col" class="text-center table-heading">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">
                                            Bersih Tepi Sungai Itik
                                        </td>
                                        <td class="text-center">Sungai Itik, Kubu Raya</td>
                                        <td class="text-center">21 Januari 2024</td>
                                        <td class="text-center">Buka</td>
                                        <td class="text-center">
                                            <a href="../super-admin/dashboardEditKawasan.html"
                                                class="btn btn-info mt-auto mr-2">
                                                <i class="fa-solid fa-pencil" style="color: #ffffff;"></i>
                                            </a>
                                            <form action="#" method="post" class="d-inline">
                                                <button class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
