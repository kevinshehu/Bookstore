<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Bookstore - <?php echo $title ?></title>
  </head>
  <body>
  <div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">CEN-Bookstore</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Books</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="authors.php">Authors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="book_stats.php">Book Stats</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="register.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="login.php">Login</a>
        </li>
        <!-- <li class="nav-item"><a class="nav-link" aria-current="page" href="logout.php">Logut</a></li> -->

        <?php
        session_start();
        if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true)
          echo '<li class="nav-item"><a class="nav-link" aria-current="page" href="logout.php">Logut</a></li>';
        
        ?>
      </ul>
    </div>
  </div>
</nav>
  <!-- Content here -->

    
