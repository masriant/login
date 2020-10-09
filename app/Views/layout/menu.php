<?= $this->extend('layout/main') ?>
<?= $this->section('menu') ?>

<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- <nav class="navbar sticky-top navbar-light bg-light"> -->
    <div class="container-fluid">
      <a class="navbar-brand" href="#">LAKIP</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" hreZf="<?= site_url('/') ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('layout') ?>">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('layout/blog') ?>">Blog</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
              data-toggle="dropdown" aria-expanded="false">
              Dropdown link
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
<?= $this->endSection('') ?>