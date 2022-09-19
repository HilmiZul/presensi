<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
  <div class="sb-sidenav-menu">
    <div class="nav">
      <!-- <div class="sb-sidenav-menu-heading">Core</div> -->
      <a class="nav-link" href="/">
        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
        Dashboard
      </a>

      <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
        <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
        Peserta
        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
      </a>

      <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
        <nav class="sb-sidenav-menu-nested nav">
          <a class="nav-link" href="?nav=tambah-peserta">Tambah Peserta</a>
          <a class="nav-link" href="?nav=peserta">Semua Peserta</a>
          <a class="nav-link" href="?nav=presensi">Isi Presensi</a>
        </nav>
      </div>

      <a class="nav-link" href="report.html">
        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
        Report
      </a>

      <a class="nav-link" href="users.html">
        <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
        Users
      </a>

      <a class="nav-link" href="pengaturan.html">
        <div class="sb-nav-link-icon"><i class="fas fa-cog"></i></div>
        Pengaturan
      </a>
    </div>
  </div>
  <div class="sb-sidenav-footer">
    <div class="small">Logged in as:</div>
    ((admin))
  </div>
</nav>