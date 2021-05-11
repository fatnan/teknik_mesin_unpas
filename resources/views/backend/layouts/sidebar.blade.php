<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin/dashboard">
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?= strpos(url()->current(),'admin/dashboard') ? 'active' : '' ?>">
        <a class="nav-link" href="/admin/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link <?= strpos(url()->current(),'admin/profil') ? '' : 'collapsed' ?>" href="#" data-toggle="collapse" data-target="#collapseProfil" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Profil</span>
        </a>
        <div id="collapseProfil" class="collapse <?= strpos(url()->current(),'admin/profil') ? 'show' : '' ?>" aria-labelledby="headingProfil" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
                <a class="collapse-item <?= strpos(url()->current(),'admin/profil/dosen') ? 'active' : '' ?>" href="/admin/profil/dosen">Dosen</a>
                <a class="collapse-item <?= strpos(url()->current(),'admin/profil/lulusan') ? 'active' : '' ?>"" href="/admin/profil/lulusan">Lulusan</a>
                <a class="collapse-item <?= strpos(url()->current(),'admin/profil/mahasiswa') ? 'active' : '' ?>"" href="/admin/profil/mahasiswa">Mahasiswa</a>
                <a class="collapse-item <?= strpos(url()->current(),'admin/profil/organisasi') ? 'active' : '' ?>"" href="/admin/profil/organisasi">Organisasi</a>
                <a class="collapse-item <?= strpos(url()->current(),'admin/profil/sarana') ? 'active' : '' ?>"" href="/admin/profil/sarana">Sarana</a>
                <a class="collapse-item <?= strpos(url()->current(),'admin/profil/sejarah') ? 'active' : '' ?>"" href="/admin/profil/sejarah">Sejarah</a>
                <a class="collapse-item <?= strpos(url()->current(),'admin/profil/visimisi') ? 'active' : '' ?>"" href="/admin/profil/visimisi">Visi Misi</a>
                {{-- <a class="collapse-item" href="cards.html">Cards</a> --}}
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link <?= strpos(url()->current(),'admin/pendaftaran') ? '' : 'collapsed' ?>" href="#" data-toggle="collapse" data-target="#collapsePendaftaran" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Pendaftaran</span>
        </a>
        <div id="collapsePendaftaran" class="collapse <?= strpos(url()->current(),'admin/pendaftaran') ? 'show' : '' ?>" aria-labelledby="headingPendaftaran" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item <?= strpos(url()->current(),'admin/pendaftaran/doctoral') ? 'active' : '' ?>" href="/admin/pendaftaran/doctoral">Doctoral</a>
                <a class="collapse-item <?= strpos(url()->current(),'admin/pendaftaran/magang') ? 'active' : '' ?>" href="/admin/pendaftaran/magang">Magang</a>
                <a class="collapse-item <?= strpos(url()->current(),'admin/pendaftaran/magister') ? 'active' : '' ?>" href="/admin/pendaftaran/magister">Magister</a>
                <a class="collapse-item <?= strpos(url()->current(),'admin/pendaftaran/pelatihan') ? 'active' : '' ?>" href="/admin/pendaftaran/pelatihan">Pelatihan</a>
                <a class="collapse-item <?= strpos(url()->current(),'admin/pendaftaran/postdoctoral') ? 'active' : '' ?>" href="/admin/pendaftaran/postdoctoral">Post Doctoral</a>
                <a class="collapse-item <?= strpos(url()->current(),'admin/pendaftaran/sarjana') ? 'active' : '' ?>" href="/admin/pendaftaran/sarjana">Sarjana</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link <?= strpos(url()->current(),'admin/program') ? '' : 'collapsed' ?>" href="#" data-toggle="collapse" data-target="#collapseProgram" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Program</span>
        </a>
        <div id="collapseProgram" class=" collapse <?= strpos(url()->current(),'admin/program') ? 'show' : '' ?>" aria-labelledby="headingProgram" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item <?= strpos(url()->current(),'admin/program/beasiswa') ? 'active' : '' ?>" href="/admin/program/beasiswa">Beasiswa</a>
                <a class="collapse-item <?= strpos(url()->current(),'admin/program/doctoral') ? 'active' : '' ?>" href="/admin/program/doctoral">Doctoral</a>
                <a class="collapse-item <?= strpos(url()->current(),'admin/program/magang') ? 'active' : '' ?>" href="/admin/program/magang">Magang</a>
                <a class="collapse-item <?= strpos(url()->current(),'admin/program/magister') ? 'active' : '' ?>" href="/admin/program/magister">Magister</a>
                <a class="collapse-item <?= strpos(url()->current(),'admin/program/pelatihan') ? 'active' : '' ?>" href="/admin/program/pelatihan">Pelatihan</a>
                <a class="collapse-item <?= strpos(url()->current(),'admin/program/postdoctoral') ? 'active' : '' ?>" href="/admin/program/postdoctoral">Post Doctoral</a>
                <a class="collapse-item <?= strpos(url()->current(),'admin/program/sarjana') ? 'active' : '' ?>" href="/admin/program/sarjana">Sarjana</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link <?= strpos(url()->current(),'admin/tridharma') ? '' : 'collapsed' ?>" href="#" data-toggle="collapse" data-target="#collapseTridharma" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Tridharma</span>
        </a>
        <div id="collapseTridharma" class="collapse <?= strpos(url()->current(),'admin/tridharma') ? 'show' : '' ?>" aria-labelledby="headingTridharma" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item <?= strpos(url()->current(),'admin/tridharma/layanan') ? 'active' : '' ?>" href="/admin/tridharma/layanan">Layanan</a>
                <a class="collapse-item <?= strpos(url()->current(),'admin/tridharma/pendidikan') ? 'active' : '' ?>" href="/admin/tridharma/pendidikan">Pendidikan</a>
                <a class="collapse-item <?= strpos(url()->current(),'admin/tridharma/penelitian') ? 'active' : '' ?>" href="/admin/tridharma/penelitian">Penelitian</a>
                <a class="collapse-item <?= strpos(url()->current(),'admin/tridharma/pengabdian') ? 'active' : '' ?>" href="/admin/tridharma/pengabdian">Pengabdian</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Berita -->
    <li class="nav-item">
        <a class="nav-link" href="/admin/berita">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Berita</span>
        </a>
    </li>

    {{-- <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-search"></i>
            <span>Pencarian</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-folder"></i>
        <span>Folder</span></a>
    </li> --}}
    <hr class="sidebar-divider">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->