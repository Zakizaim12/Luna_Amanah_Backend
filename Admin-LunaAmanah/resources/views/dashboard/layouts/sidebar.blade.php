<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Paket Perjalanan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/dakwahs*') ? 'active' : '' }}" href="/dashboard/dakwahs">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Informasi
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/pembayaran') ? 'active' : '' }}" href="/dashboard/pembayaran">
              <span data-feather="dollar-sign" class="align-text-bottom"></span>
              Pembayaran
            </a>
          </li>
        </ul>
    </div>
</nav>