<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="{{ asset('admin/assets/images/faces/face1.jpg') }}" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">Alfian Nur Usyaid</span>
                    <span class="text-secondary text-small">Mhs. EnEp</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item {{ $title == 'Dashboard' ? 'active' : '' }}">
            <a class="nav-link" href="/">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>

        <li class="nav-item {{ $title == 'Data Pasien' ? 'active' : '' }}">
            <a class="nav-link" href="/pasien">
                <span class="menu-title">Pasien</span>
                <i class="mdi mdi-account-alert menu-icon"></i>
            </a>
        </li>

        <li class="nav-item {{ $title == 'Data Dokter' ? 'active' : '' }}">
            <a class="nav-link" href="/dokter">
                <span class="menu-title">Dokter</span>
                <i class="mdi mdi-account menu-icon"></i>
            </a>
        </li>
    </ul>
</nav>
