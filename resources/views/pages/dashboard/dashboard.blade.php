@extends('layouts.dashboard-layout')

@section('title', 'LSM KOMPAS - Dashboard')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>

            <!-- Row Card I -->
            <div class="row">
                <div class="col-xl-4 col-sm-6 col-12 my-2">
                    <div class="card p-2">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex justify-content-between">
                                    <div class="align-self-center">
                                        <i class="fa-solid fa-users fa-2xl"></i>
                                    </div>
                                    <div class="media-body text-end">
                                        <h3>{{ $totalUsers }}</h3>
                                        <span>Users</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 col-12 my-2">
                    <div class="card p-2">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex justify-content-between">
                                    <div class="align-self-center">
                                        <i class="fa-solid fa-user-tie fa-2xl"></i>
                                    </div>
                                    <div class="media-body text-end">
                                        <h3>{{ $totalUserSuperAdmin }}</h3>
                                        <span>Super Admin</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 col-12 my-2">
                    <div class="card p-2">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex justify-content-between">
                                    <div class="align-self-center">
                                        <i class="fa-solid fa-user fa-2xl"></i>
                                    </div>
                                    <div class="media-body text-end">
                                        <h3>{{ $totalUserAdmin }}</h3>
                                        <span>Admin</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row Card II -->
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12 my-2">
                    <div class="card p-2">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex justify-content-between">
                                    <div class="align-self-center">
                                        <i class="fa-regular fa-newspaper fa-2xl"></i>
                                    </div>
                                    <div class="media-body text-end">
                                        <h3>{{ $totalNews }}</h3>
                                        <span>Berita</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 my-2">
                    <div class="card p-2">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex justify-content-between">
                                    <div class="align-self-center">
                                        <i class="fa-solid fa-book fa-2xl"></i>
                                    </div>
                                    <div class="media-body text-end">
                                        <h3>{{ $totalPublication }}</h3>
                                        <span>Publikasi</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 my-2">
                    <div class="card p-2">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex justify-content-between">
                                    <div class="align-self-center">
                                        <i class="fa-solid fa-list-check fa-2xl"></i>
                                    </div>
                                    <div class="media-body text-end">
                                        <h3>{{ $totalProject }}</h3>
                                        <span>Projek</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 my-2">
                    <div class="card p-2">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex justify-content-between">
                                    <div class="align-self-center">
                                        <i class="fa-solid fa-handshake-angle fa-2xl"></i>
                                    </div>
                                    <div class="media-body text-end">
                                        <h3>{{ $totalVolunteer }}</h3>
                                        <span>Volunteer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row Card III -->
            <div class="row mb-2">
                <div class="col-xl-6 col-sm-6 col-12 my-2">
                    <div class="card p-2">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex justify-content-between">
                                    <div class="align-self-center">
                                        <i class="fa-solid fa-clipboard-list fa-2xl"></i>
                                    </div>
                                    <div class="media-body text-end">
                                        <h3>{{ $totalCategoryNews }}</h3>
                                        <span>Kategori Berita</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-sm-6 col-12 my-2">
                    <div class="card p-2">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex justify-content-between">
                                    <div class="align-self-center">
                                        <i class="fa-solid fa-clipboard-list fa-2xl"></i>
                                    </div>
                                    <div class="media-body text-end">
                                        <h3>{{ $totalCategoryPublication }}</h3>
                                        <span>Kategori Publikasi</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row Recent Project and User -->
            <div class="row recent-project-and-user my-4">
                <div class="col-sm-8 col-md-6 col-lg-8">
                    <h5 class="mb-3 recent-header">
                        Projek Terbaru
                    </h5>
                    @forelse ($latestProjects as $project)
                        <div class="card card-list d-block text-decoration-none mb-3">
                            <div class="card-body card-recent-content">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <img src="{{ Storage::url($project->project_image) }}" class="img-card-recent">
                                    </div>
                                    <div class="col-md-3 text-capitalize">
                                        {{ Str::limit($project->project_name, 13, '...') }}
                                    </div>
                                    <div class="col-md-4 text-capitalize">
                                        {{ Str::limit($project->project_location, 15, '...') }}
                                    </div>
                                    <div class="col-md-3">
                                        {{ $project->formatted_project_date }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="card card-list d-block text-decoration-none mb-3">
                            <div class="card-body card-recent-content">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <p class="text-center text-danger">Anda Belum Memiliki Projek Apapun!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforelse
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <h5 class="mb-3 recent-header">
                        User Terbaru
                    </h5>
                    @forelse ($latestUsers as $user)
                        <div class="card card-list d-block text-decoration-none mb-3">
                            <div class="card-body card-recent-content">
                                <div class="row align-items-center">
                                    <div class="col-md-1">
                                        <i class="fa-solid fa-user fa-lg"></i>
                                    </div>
                                    <div class="col-md-6 text-capitalize">
                                        {{ $user->name }}
                                    </div>
                                    <div class="col-md-5 text-capitalize">
                                        {{ $user->role }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="card card-list d-block text-decoration-none mb-3">
                            <div class="card-body card-recent-content">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <p class="text-center text-danger">Anda Belum Memiliki User</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>

            <!-- Row Recent News -->
            <div class="row recent-news my-4">
                <div class="col-12">
                    <h5 class="mb-3 recent-header">
                        Berita Terbaru
                    </h5>
                    @forelse ($latestNews as $news)
                        <div class="card card-list d-block text-decoration-none mb-3">
                            <div class="card-body card-recent-content">
                                <div class="row align-items-center">
                                    <div class="col-md-1">
                                        <img src="{{ Storage::url($news->news_image) }}" class="img-card-recent">
                                    </div>
                                    <div class="col-md-4 text-capitalize">
                                        {{ Str::limit($news->news_name, 40, '...') }}
                                    </div>
                                    <div class="col-md-2">
                                        {{ $news->created_at->format('d M Y') }}
                                    </div>
                                    <div class="col-md-2">
                                        {{ $news->newsCategory->news_category_name }}
                                    </div>
                                    <div class="col-md-2">
                                        {{ $news->user->name }}
                                    </div>
                                    <div class="col-md-1 d-none d-md-block">
                                        <i class="fa-solid fa-arrow-right fa-sm"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="card card-list d-block text-decoration-none mb-3">
                            <div class="card-body card-recent-content">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <p class="text-center text-danger">Anda Belum Memiliki Berita</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>

            <!-- Row Recent Publications -->
            <div class="row recent-publications my-4">
                <div class="col-12">
                    <h5 class="mb-3 recent-header">
                        Publikasi Terbaru
                    </h5>
                    @forelse ($latestPublications as $publication)
                        <div class="card card-list d-block text-decoration-none mb-3">
                            <div class="card-body card-recent-content">
                                <div class="row align-items-center">
                                    <div class="col-md-1">
                                        <img src="{{ Storage::url($publication->publication_image) }}"
                                            class="img-card-recent">
                                    </div>
                                    <div class="col-md-4 text-capitalize">
                                        {{ Str::limit($publication->publication_name, 40, '...') }}
                                    </div>
                                    <div class="col-md-2">
                                        {{ $publication->created_at->format('d M Y') }}
                                    </div>
                                    <div class="col-md-2">
                                        {{ $publication->publicationCategory->publication_category_name }}
                                    </div>
                                    <div class="col-md-2">
                                        {{ $publication->user->name }}
                                    </div>
                                    <div class="col-md-1 d-none d-md-block">
                                        <i class="fa-solid fa-arrow-right fa-sm"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="card card-list d-block text-decoration-none mb-3">
                            <div class="card-body card-recent-content">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <p class="text-center text-danger">Anda Belum Memiliki Berita</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </main>
@endsection
