<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://getbootstrap.com/examples/carousel/carousel.css" rel="stylesheet" type="text/css" />
    <link href="https://getbootstrap.com/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet" type="text/css" />
    <script src="https://getbootstrap.com/dist/js/bootstrap.min.js" charset="utf-8"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" charset="utf-8"></script>
    <script src="https://getbootstrap.com/assets/js/vendor/holder.min.js" charset="utf-8"></script>
    <script src="https://getbootstrap.com/dist/js/bootstrap.min.js" charset="utf-8"></script>
    <script src="https://getbootstrap.com/assets/js/ie-emulation-modes-warning.js" charset="utf-8"></script>
  </head>
  <body>
    <!--load topmenu -->
    <?php $this->load->view('backend/admin_topmenu'); ?>
    <!--end load topmenu -->

    <div class="container">

      <ol class="breadcrumb">
        <li><a href="#">Admin</a></li>
        <li class="active">Dashboard</li>
      </ol>

      <div class="jumbotron">
        <span><h1>Hello, Admin</h1></span>
        <p>Buat hari-harimu dengan penuh kebahagiaan. </p>
      </div>

    </div>

  </body>
</html>
