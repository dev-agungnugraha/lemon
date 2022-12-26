<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">LEMON</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('logout') }}"
             onclick="event.preventDefault();
             document.getElementById('logout-form').submit();" 
             class="d-block">{{ auth()->user()->name }}</a>
        </div>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">MAIN NAVIGATION</li>
          <li class="nav-item">
            <a href="{{ route('admin.author.index') }}" class="nav-link"><i class="nav-icon fas fa-user"></i><p>Penulis</p></a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.book.index') }}" class="nav-link"><i class="nav-icon fas fa-file"></i><p>Buku</p></a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="nav-icon fas fa-users"></i><p>User</p></a>
          </li>
          <li class="nav-header">MASTER</li>
          <li class="nav-item">
            <a href="{{ route('admin.pegawai.index') }}" class="nav-link"><i class="nav-icon fas fa-user"></i><p>Pegawai</p></a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.paket.index') }}" class="nav-link"><i class="nav-icon fas fa-book"></i><p>Paket Kegiatan</p></a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.kontrak.index') }}" class="nav-link"><i class="nav-icon fas fa-book"></i><p>Kontrak Kegiatan</p></a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.progreskegiatan.index') }}" class="nav-link"><i class="nav-icon fas fa-book"></i><p>Progres Kegiatan</p></a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>