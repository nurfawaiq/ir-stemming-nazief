<?php require_once ('stemming.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stemming Nazief</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <header class="header">
    <h1>IR Stemming Nazief</h1>
    <p>Stemming Algoritma Nazief di PHP & MySQL</p>
  </header>

  <nav class="navbar">
    <ul>
      <li class="utama"><a href="">Beranda</a></li>
      <li class="utama"><a href="https://yukcoding.id" target="_blank">Tutorial</a></li>
    </ul>
  </nav>

  <main class="main">

    <div class="content">
      <?php
      if (isset($_GET['/'])) {
        $pageload = $_GET['/'];
      }else{
        $pageload = "/";
      }
      switch ($pageload) {
        case 'view':
          include "view.php";
          break;
        default:
          include "home.php";
          break;
        }
      ?>
    </div>
    
  </main>

  <footer class="footer">
    <p>Copyright &copy 202x - Stemming Nazief</p>
  </footer>

</body>
</html>