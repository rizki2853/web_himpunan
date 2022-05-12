<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/x-icon" href="assets/logo_hmif.svg">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <title>Beranda - HMIF Unram</title>
</head>
<body>
  <header class="container">
    <div id="nav-left">
      <img class="logo" src="assets/logo_hmif.svg" alt="">
      <!-- Mobile Hamburger -->
      <button class="hamburger" id="hamburger">
        <i class="fas fa-bars" id="fa-bars"></i>
      </button>
      <button class="close-hamburger" id="close-hamburger">
        <i class="fas fa-times" id="fa-bars"></i>
      </button>
    </div>
    <nav class="nav-list" id="nav-list">
      <ul>
        <li><a href="home.html" class="active">Beranda</a></li>
        <li><a href="divisi.html">Divisi</a></li>
        <li><a href="kalender.html">Kalender</a></li>
        <li><a href="kotaksaran.html">Kotak Saran</a></li>
      </ul>
      <button>
        Login
      </button>
    </nav>
  </header>
  
  @yield('body')

  <script src="script.js"></script>
</body>
</html>
