
<div class="collapse navbar-collapse" id="navbarVerticalCollapse">
    <!-- scrollbar removed-->
    <div class="navbar-vertical-content">
        <ul class="navbar-nav flex-column" id="navbarVerticalNav">
            <li class="nav-item">
                <p class="navbar-vertical-label">Pages</p>
                <span class="nav-item-wrapper">
                    <a class="nav-link {{ ($title === "Dashboard") ? 'active' : '' }} label-1" href="/dashboard" role="button" data-bs-toggle=""
                        aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon">
                                <span data-feather="compass"></span></span><span class="nav-link-text-wrapper">
                                <span class="nav-link-text">Beranda</span></span></div>
                    </a>
                </span>
                <p class="navbar-vertical-label">Management Data</p>
                <span class="nav-item-wrapper">
                    <a class="nav-link {{ Request::is('project*') ? 'active' : ''}} label-1" href="/project" role="button" data-bs-toggle=""
                        aria-expanded="false">
                        <div class="d-flex align-items-center "><span class="nav-link-icon">
                                <span data-feather="book-open"></span></span><span class="nav-link-text-wrapper">
                                <span class="nav-link-text">Project</span></span></div>
                    </a>
                </span>
                {{-- <span class="nav-item-wrapper">
                    <a class="nav-link {{ ($title === "Dashboard") ? 'active' : '' }} label-1" href="/dashboard" role="button" data-bs-toggle=""
                        aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon">
                                <span data-feather="user"></span></span><span class="nav-link-text-wrapper">
                                <span class="nav-link-text">Profil</span></span></div>
                    </a>
                </span> --}}
                {{-- <span class="nav-item-wrapper">
                    <a class="nav-link {{ ($title === "Dashboard") ? 'active' : '' }} label-1" href="/dashboard" role="button" data-bs-toggle=""
                        aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon">
                                <span data-feather="list"></span></span><span class="nav-link-text-wrapper">
                                <span class="nav-link-text">Event</span></span></div>
                    </a>
                </span>
                <p class="navbar-vertical-label">Management Data</p>
                <span class="nav-item-wrapper">
                    <a class="nav-link  {{ ($title === "Kurasi IKM") ? 'active' : '' }} label-1" href="/kurasi" role="button" data-bs-toggle=""
                        aria-expanded="false">
                        <div class="d-flex align-items-center "><span class="nav-link-icon">
                                <span data-feather="book-open"></span></span><span class="nav-link-text-wrapper">
                                <span class="nav-link-text">Kurasi</span></span></div>
                    </a>
                </span>
                <span class="nav-item-wrapper">
                    <a class="nav-link  {{ ($title === "Data UKM") ? 'active' : '' }} label-1" href="/dataikm" role="button" data-bs-toggle=""
                        aria-expanded="false">
                        <div class="d-flex align-items-center "><span class="nav-link-icon">
                                <span data-feather="users"></span></span><span class="nav-link-text-wrapper">
                                <span class="nav-link-text">Data UKM</span></span></div>
                    </a>
                </span>
                <span class="nav-item-wrapper">
                    <a class="nav-link  {{ ($title === "Brainstorming") ? 'active' : '' }} label-1" href="/brainstorming" role="button" data-bs-toggle=""
                        aria-expanded="false">
                        <div class="d-flex align-items-center "><span class="nav-link-icon">
                                <span data-feather="book-open"></span></span><span class="nav-link-text-wrapper">
                                <span class="nav-link-text">Brainstorming</span></span></div>
                    </a>
                </span>
                <span class="nav-item-wrapper">
                    <a class="nav-link  {{ ($title === "Project") ? 'active' : '' }} label-1" href="/project" role="button" data-bs-toggle=""
                        aria-expanded="false">
                        <div class="d-flex align-items-center "><span class="nav-link-icon">
                                <span data-feather="book-open"></span></span><span class="nav-link-text-wrapper">
                                <span class="nav-link-text">Project</span></span></div>
                    </a>
                </span>
                <p class="navbar-vertical-label">Data</p>
                <span class="nav-item-wrapper">
                    <a class="nav-link  {{ ($title === "Brainstorming") ? 'active' : '' }} label-1" href="/brainstorming" role="button" data-bs-toggle=""
                        aria-expanded="false">
                        <div class="d-flex align-items-center "><span class="nav-link-icon">
                                <span data-feather="box"></span></span><span class="nav-link-text-wrapper">
                                <span class="nav-link-text">Produk Saya</span></span></div>
                    </a>
                </span>
                <p class="navbar-vertical-label">Laporan</p>
                <span class="nav-item-wrapper">
                    <a class="nav-link  {{ ($title === "Brainstorming") ? 'active' : '' }} label-1" href="/brainstorming" role="button" data-bs-toggle=""
                        aria-expanded="false">
                        <div class="d-flex align-items-center "><span class="nav-link-icon">
                                <span data-feather="box"></span></span><span class="nav-link-text-wrapper">
                                <span class="nav-link-text">Report</span></span></div>
                    </a>
                </span> --}}
            </li>
        </ul>
    </div>
</div>
