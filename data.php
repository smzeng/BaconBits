<?php
include('server.php');
if(isset($_SESSION['username'])){ ?>
  <!DOCTYPE html>
  <html>
  <head>
  <title> Bacon Bits </title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet"
  href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <link rel="stylesheet"
    href ="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <script
   src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
   <script
   src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
   <script
   src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
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
          <?php if (isset($_SESSION['username'])) { ?>
            <a class="nav-link" href="login.php">LOG OUT</a>
          <?php } else { ?>
            <a class="nav-link" href = "logOut.php">LOG IN</a>
            <?php } ?>
        </li>
      </ul>
    </div>
    </section>
    <!--data header --->
    <section id="header">
      <div class="container">
        <h1>Data</h1>
      </div>
    </section>
    <title>Registration system</title>
    <link rel="stylesheet" type="text/css" href="loginstyle.css">
  </head>
  <body>
    <div class="header">
    </div>

    <form method="post" action="login.php">
      <?php include('errors.php'); ?>
      <div class="input-group">
        <label>Pig Name</label>
        <input type="text" name="pigname" >
      </div>
      <div class="input-group">
        <label>Weight in Kilograms</label>
        <input type="number" name="weight">
      </div>
      <div class="input-group">
        <label>Descrption of Eyes</label>
        <input type="text" name="eyes">
      </div>
      <div class="input-group">
        <label>Birth State</label>
        <input type="text" name="birth">
      </div>
      <div class="input-group">
        <label>Eating habits</label>
        <input type="text" name="eating">
      </div>
      <div class="input-group">
        <label>Overall Health</label>
        <input type="text" name="health">
      </div>
      <div class="input-group">
        <button type="submit" class="btn" name="login_user">Submit</button>
    </form>

  </body>
  </html>
<?php
} else {
  // not logged in
  header('Location: login.php');
  exit();
}
?>
