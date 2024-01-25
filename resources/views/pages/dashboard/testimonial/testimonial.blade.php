@extends('layouts.dashboard-layout')

@section('title', 'LSM KOMPAS - Aksi')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Testimonial</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active text-capitalize">Kelola Testimonial LSM Kompas</li>
            </ol>

            <!-- Row Card I -->
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 my-3">
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h5 class="text-start my-2 mx-2">Daftar Testimonial LSM Kompas</h5>
                                <a href="{{ route('testi.create') }}" class="btn btn-add text-end mx-2 px-3">
                                    <i class="fa-solid fa-plus fa-sm"></i> Tambah Data
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center table-heading">No</th>
                                        <th scope="col" class="text-center table-heading">Photo</th>
                                        <th scope="col" class="text-center table-heading">Nama</th>
                                        <th scope="col" class="text-center table-heading">Testi</th>
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
                                            <td class="text-center">
                                                <img src="{{ Storage::url($item->photo) }}" alt="icon" width="50px">
                                            </td>
                                            <td class="text-center">{{ $item->name }}</td>
                                            <td class="text-center">{{ Str::limit($item->body, 10, '...') }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('testi.edit', $item->id) }}"
                                                    class="btn btn-info mt-auto mr-2">
                                                    <i class="fa-solid fa-pencil" style="color: #ffffff;"></i>
                                                </a>
                                                <a href="{{ route('testi.destroy', $item->id) }}" class="btn btn-danger"
                                                    data-confirm-delete="true">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                                {{-- <form action="{{ route('action.destroy', $item->id) }}" method="post"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger delete-btn" data-id="{{ $item->id }}">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form> --}}
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5">
                                                <p class="text-danger text-center my-3">Anda Belum Memiliki Aksi Apapun!</p>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <div class="row justify-content-end float-end">
                                {{ $items->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('script-dashboard')
@endpush
