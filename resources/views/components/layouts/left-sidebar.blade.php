<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item {{ $title == 'Dashboard' ? 'active' : '' }}">
            <a class="nav-link" href="/dashboard/first-page">
                <i class="fa fa-dashboard menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#data" aria-expanded="false" aria-controls="data">
                <i class="fa fa-id-card menu-icon"></i>
                <span class="menu-title">Data Profil</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="data">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a
                            class="nav-link {{ $title == 'Data Media' ? 'text-dark font-weight-bold' : '' }}"
                            href="/data/media">Data Media</a>
                    </li>
                    <li class="nav-item"> <a
                            class="nav-link {{ $title == 'Data Lengkap Media' ? 'text-dark font-weight-bold' : '' }}"
                            href="/data-lengkap/media">Data Lengkap
                            Media</a></li>
                    <li class="nav-item"> <a
                            class="nav-link {{ $title == 'Data Kru' ? 'text-dark font-weight-bold' : '' }}"
                            href="/dashboard/crew">Data Kru
                            Media</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#user" aria-expanded="false" aria-controls="user">
                <i class="fa fa-database menu-icon"></i>
                <span class="menu-title">Data</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="user">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a
                            class="nav-link {{ $title == 'Data Pesantren' ? 'text-dark font-weight-bold' : '' }}"
                            href="/data/pesantren">Data Pesantren</a>
                    </li>
                    <li class="nav-item"> <a
                            class="nav-link {{ $title == 'Data User' ? 'text-dark font-weight-bold' : '' }}"
                            href="/data/user">Data User</a>
                    </li>
                    <li class="nav-item"> <a
                            class="nav-link {{ $title == 'Data Kru' ? 'text-dark font-weight-bold' : '' }}"
                            href="/data/k">Data Kru</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#artikel" aria-expanded="false" aria-controls="artikel">
                <i class="fa fa-newspaper menu-icon"></i>
                <span class="menu-title">Artikel</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="artikel">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a
                            class="nav-link {{ $title == 'Artikel' ? 'text-dark font-weight-bold' : '' }}"
                            href="/artikel">Artikel</a>
                    </li>
                    <li class="nav-item"> <a
                            class="nav-link {{ $title == 'Kategori' ? 'text-dark font-weight-bold' : '' }}"
                            href="/kategori">Kategori Artikel</a></li>
        </li>
    </ul>
    </div>
    </li>
    <li class="nav-item {{ $title == 'Iuran' ? 'active' : '' }}">
        <a class="nav-link" href="/pay-in">
            <i class="fa fa-money-bill-1-wave menu-icon"></i>
            <span class="menu-title">Bayar Iuran</span>
        </a>
    </li>
    <li class="nav-item {{ $title == 'Lihat iuran' ? 'active' : '' }}">
        <a class="nav-link" href="/pay-out">
            <i class="fa fa-money-bill-1-wave menu-icon"></i>
            <span class="menu-title">Lihat Iuran</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ $title == 'Regional ' ? 'active' : '' }}" href="/dashboard/regional">
            <i class="fa fa-flag menu-icon"></i>
            <span class="menu-title">Tambah Regional</span>
        </a>
    </li>
    </ul>
</nav>
