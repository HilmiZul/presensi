<?php include('./components/top-nav.php') ?>
<div id="layoutSidenav">
  <div id="layoutSidenav_nav">
    <!-- sidenav -->
    <?php include('./components/left-nav.php') ?>
    <!-- tutup sidenav -->
  </div>
  <div id="layoutSidenav_content">
    <main>
      <div class="container-fluid px-4">

        <!-- PAGE CONTENT (.row) -->
        <?php include('./atur_pages.php') ?>
        <!-- TUTUP PAGE CONTENT (.row) -->

      </div>
    </main>

    <?php include('./components/footer.html') ?>
  </div>
</div>