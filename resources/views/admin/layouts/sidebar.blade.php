 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/admin/dashboard') }}" class="brand-link text-center py-4">
      <img src="{{ asset('/img/logobikinnagih.png') }}" alt="bikinnagih" class="brand-image img-circle elevation-2" style="opacity: .8; max-height: 40px; margin-left: 10px;">
      <span class="brand-text font-weight-bold ml-2">Bikin Nagih</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
   
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="/admin/dashboard" class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('products.index') }}" class="nav-link {{ Request::is('admin/products*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-list"></i>
              <p>Katalog Produk</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.reviews.index') }}" class="nav-link {{ Request::is('admin/reviews*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-star"></i>
              <p>Kritik & Saran</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/admin/settings" class="nav-link {{ Request::is('admin/settings*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-cog"></i>
              <p>Pengaturan Tampilan</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/admin/user" class="nav-link {{ Request::is('admin/user*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-users"></i>
              <p>User Admin</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
