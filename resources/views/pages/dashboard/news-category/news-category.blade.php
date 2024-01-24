@extends('layouts.dashboard-layout')

@section('title', 'LSM KOMPAS - Kategori Berita')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Kategori Berita</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active text-capitalize">Kelola Kategori Berita</li>
            </ol>

            <!-- Row Card I -->
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 my-3">
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h5 class="text-start my-2 mx-2">Daftar Kategori Berita</h5>
                                <a href="{{ route('news.category.create') }}" class="btn btn-add text-end mx-2 px-3">
                                    <i class="fa-solid fa-plus fa-sm"></i> Tambah Data
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center table-heading">No</th>
                                        <th scope="col" class="text-center table-heading">Nama Kategori</th>
                                        <th scope="col" class="text-center table-heading">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $number = 0;
                                    @endphp
                                    @forelse ($items as $item)
                                        <tr>
                                            <td class="text-center">{{ $number += 1 }}</td>
                                            <td class="text-center">{{ $item->news_category_name }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('news.category.edit', $item->id) }}"
                                                    class="btn btn-info mt-auto mr-2">
                                                    <i class="fa-solid fa-pencil" style="color: #ffffff;"></i>
                                                </a>
                                                <a href="{{ route('news.category.destroy', $item->id) }}"
                                                    class="btn btn-danger" data-confirm-delete="true">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                                {{-- <form action="#" method="post" class="d-inline">
                                                    <button class="btn btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form> --}}
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3">
                                                <p class="text-danger text-center my-3">Anda Belum Memiliki Kategori Berita
                                                    Apapun!</p>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
