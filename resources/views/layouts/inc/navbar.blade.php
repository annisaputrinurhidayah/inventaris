<nav class="main-header navbar navbar-expand-lg navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button">
            <i class="fas fa-bars"></i>
          </a>
        </li> 
      </ul>
      @auth('admin')
      <?php
      $name = Auth::user()->nama_petugas;
      $logout = route('admin.logout');
      $profile = route('admin.profile');
      ?>
      @else
      <?php
      $name = Auth::user()->nama_pegawai;
      $logout = route('logout');
      $profile = route('profile');
      ?>
      @endauth
      <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown">
              {{ $name }} <i class="fas fa-caret-down ml-1"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
              <a class="dropdown-item" href="{{ $profile }}">
                <i class="fas fa-user mr-2"></i> Profile
              </a>
              <a class="dropdown-item" href="{{ $logout }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt mr-2"></i>Keluar</a>
                <form id="logout-form" action="{{ $logout }}" method="POST">
                    @csrf
                </form>
            </div>
          </li>
      </ul>
  </nav>
