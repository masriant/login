<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="The most popular HTML, CSS, and JS library in the world.">
  <meta name="author" content="Masrianto and Bootstrap modified">
  <meta name="generator" content="Hugo 0.75.1">

  <meta name="docsearch:language" content="en">
  <meta name="docsearch:version" content="5.0">

  <title>Hello, world!</title>

  <link rel="canonical" href="https://v5.getbootstrap.com/">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
    integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">

  <link rel="stylesheet" href="/assets/css/docs.css">
  <link rel="stylesheet" href="/assets/css/blog.css">
  <link rel="stylesheet" href="/css/main.css">

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
  <link rel="icon" href="/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#7952b3">

</head>

<body>
  <header>
    <!-- Menu -->
    <?= $this->renderSection('menu') ?>
    <!-- end Menu -->
  </header>
  <main class="container">
    <div class="wrapper">
      <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
          <?= $this->renderSection('content') ?>
        </div>
        <!-- end page title end breadcrumb -->

      </div> <!-- end container -->
    </div>
    <!-- end wrapper -->

  </main>


  <!-- Footer -->
  <footer>
    <div class="row my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">&copy; 2017-<?= date('Y'); ?> Masrianto </p>

      <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Privacy</a></li>
        <li class="list-inline-item"><a href="#">Terms</a></li>
        <li class="list-inline-item"><a href="#">Support</a></li>
      </ul>
      <p class="float-right mb-1">
        <a href="#">Back to top</a>
      </p>
    </div>
  </footer>
  <!-- End Footer -->


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper.js -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"
    integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous">
  </script>

  <!-- Option 2: Separate Popper.js and Bootstrap JS
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
    -->

  <script src="/assets/js/docs.min.js"></script>
</body>

</html>