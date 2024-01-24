@extends('layouts.dashboard-layout')

@section('title', 'LSM KOMPAS - Aksi')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Aksi</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active text-capitalize">Kelola Aksi LSM Kompas</li>
            </ol>

            <!-- Row Card I -->
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 my-3">
                    @if ($message = Session::get('message'))
                        <div class="alert alert-success my-3" role="alert">
                            {{ $message }}
                        </div>
                    @endif
                    @if ($message = Session::get('error'))
                        <div class="alert alert-success my-3" role="alert">
                            {{ $message }}
                        </div>
                    @endif
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center py-2">
                                <h5 class="text-start my-2 mx-2">Daftar Aksi LSM Kompas</h5>
                                <a href="{{ route('action.create') }}" class="btn btn-add text-end mx-2 px-3">
                                    <i class="fa-solid fa-plus fa-sm"></i> Tambah Data
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center table-heading">No</th>
                                        <th scope="col" class="text-center table-heading">Icon</th>
                                        <th scope="col" class="text-center table-heading">Nama Aksi</th>
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
                                                <img src="{{ Storage::url($item->action_icon) }}" alt="icon"
                                                    width="25px">
                                            </td>
                                            <td class="text-center">{{ $item->action_name }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('action.edit', $item->id) }}"
                                                    class="btn btn-info mt-auto mr-2">
                                                    <i class="fa-solid fa-pencil" style="color: #ffffff;"></i>
                                                </a>
                                                <a href="{{ route('action.destroy', $item->id) }}" class="btn btn-danger"
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
                                            <td colspan="4">
                                                <p class="text-danger text-center my-3">Anda Belum Memiliki Aksi Apapun!</p>
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

@push('script-dashboard')
@endpush
