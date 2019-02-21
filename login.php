<html>
<head>
  <meta charset="utf-8">
  <title>Bacon Bits</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <link rel="stylesheet" href ="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>
  <!---NavigationBar--->
  <section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img src="imgs/logo.PNG"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.html">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="data.php">DATA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="education.html">EDUCATION</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about-us.html">ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.html">CONTACT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">LOG IN</a>
      </li>
    </ul>
  </div>
  </section>
  <!--login header --->
  <section id="header">
    <div class="container">
      <h1>Log In</h1>
    </div>
  </section>

<?php include('server.php');
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 'true') {
  ?>
  <a class="nav-link" href = "logOut.php">LOG IN</a>
  <?php
} else { ?>
  <html>
  <head>
    <title>Registration system</title>
    <link rel="stylesheet" type="text/css" href="loginstyle.css">
  </head>
  <body>
    <div class="header">
    </div>

    <form method="post" action="login.php">
      <?php include('errors.php'); ?>
      <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" >
      </div>
      <div class="input-group">
        <label>Password</label>
        <input type="password" name="password">
      </div>
      <div class="input-group">
        <button type="submit" class="btn" name="login_user">Login</button>
      </div>
      <p>
        Not yet a member? <a href="register.php">Sign up</a>
      </p>
    </form>
  <section id="footer">
    <div class="container text-center">
      <p> Made with <span style="color:#f4c3d4"><i class="far fa-heart"></i></span> by SSS</p>
    </div>
  </section>

  </body>
  </html>

  <?php
}
 ?>
