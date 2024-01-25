<!-- Sidebar -->
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>

                <div class="sb-sidenav-menu-heading">MENU</div>

                @if (Auth::user()->role === 'SUPER_ADMIN')
                    <a class="nav-link" href="{{ route('organization.index') }}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-sitemap"></i></div>
                        Organisasi
                    </a>
                    <a class="nav-link" href="{{ route('action.index') }}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-person-running"></i></div>
                        Aksi
                    </a>
                    <a class="nav-link" href="{{ route('focus.index') }}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-brain"></i></div>
                        Fokus
                    </a>
                    <a class="nav-link" href="{{ route('user.index') }}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-user-tie"></i></div>
                        User
                    </a>
                @endif
                <a class="nav-link" href="{{ route('testi.index') }}">
                    <div class="sb-nav-link-icon"><i class="fa-regular fa-comment"></i></div>
                    Testimonial
                </a>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#news"
                    aria-expanded="false" aria-controls="news">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-newspaper"></i></div>
                    Berita
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="news" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('news.category.index') }}">Kategori Berita</a>
                        <a class="nav-link" href="{{ route('news.index') }}">Daftar Berita</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#publications"
                    aria-expanded="false" aria-controls="publications">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-volume-high"></i></div>
                    Publikasi
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="publications" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('publication.category.index') }}">Kategori Publikasi</a>
                        <a class="nav-link" href="{{ route('publication.index') }}">Daftar Publikasi</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#projects"
                    aria-expanded="false" aria-controls="projects">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-list-check"></i></div>
                    Projek
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="projects" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('project.index') }}">Daftar Project</a>
                        <a class="nav-link" href="{{ route('volunteer.index') }}">Daftar Volunteer</a>
                    </nav>
                </div>

                {{-- <div class="sb-sidenav-menu-heading">Addons</div> --}}

                {{-- <a class="nav-link" href="charts.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Charts
                </a> --}}
                {{-- <a class="nav-link" href="tables.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Tables
                </a> --}}
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Super Admin
        </div>
    </nav>
</div>
