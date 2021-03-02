<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>

  <!-- ! Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <!-- ! Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

  <!-- ! Custom CSS -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <script language="javascript" type="text/javascript">
    function submitreg() {
      var form = document.reg;
      if (form.email.value == "") {
        alert("Enter email.");
        return false;
      } else if (form.pw.value == "") {
        alert("Enter password.");
        return false;
      } else if (form.address.value == "") {
        alert("Enter address.");
        return false;
      } else if (form.city.value == "") {
        alert("Enter city.");
        return false;
      } else if (form.state.value == "") {
        alert("Enter state.");
        return false;
      }
    }
  </script>
  <!-- ! Navigation -->
  <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container-fluid d-flex justify-content-between">
      <a href="index.php" class="navbar-brand"><span>Book</span> & <span>Look</span></a>
      <div class="" id="navbarResponsive">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="booking.php">Booking</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#travel">Travel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#contact">Contact</a>
          </li>
        </ul>
      </div>
      <div>
        <a href="register.php"><button class="btn btn-outline-primary">Register</button></a>
        <a href="login.php"><button class="btn btn-outline-secondary">Log in</button></a>
      </div>
    </div>
  </nav>
  <!-- ! Form -->
  <!-- <div class="forma">
    <h2>Fill your info here...</h2>
    <form method="post" action="register.php" name="reg">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Email</label>
          <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Password</label>
          <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="pw">
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">City</label>
          <input type="text" class="form-control" id="inputCity" name="city">
        </div>
        <div class="form-group col-md-6">
          <label for="inputState">State</label>
          <input type="text" class="form-control" id="inputState" name="state">
        </div>
      </div>
      <button type="submit" class="btn btn-primary" name="register" onclick="return(submitreg());">Register</button>
    </form>
  </div> -->
  <div class="forma">
    <h2>Fill your info here...</h2>
    <form method="post" action="register.php">
      <?php include('errors.php'); ?>
      <div class="form-row">
        <div class="form-group col-md-6"">
      <label>Username</label>
      <input type=" text" name="username" class="form-control">
        </div>
        <div class="form-group col-md-6"">
      <label>Email</label>
      <input type=" email" name="email" class="form-control">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Password</label>
          <input type="password" name="password_1" class="form-control">
        </div>
        <div class="form-group col-md-6">
          <label>Confirm password</label>
          <input type="password" name="password_2" class="form-control">
        </div>
      </div>
      <div class="input-group">
        <button type="submit" class="btn btn-primary mb-3" name="reg_user">Register</button>
      </div>
      <p>
        Already a member? <a href="login.php">Sign in</a>
      </p>
    </form>
  </div>

  <!-- ! Contact -->
  <footer id="contact">
    <div class="container-fluid padding">
      <div class="row text-center">
        <div class="col-md-4">
          <h3>Contact</h3>
          <hr class="light">
          <p>(+381)64 3652 452</p>
          <p>kristijan.radicevic.kv@gmail.com</p>
          <p>Dositejeva st.</p>
          <p>Cacak, Serbia, 32000</p>
        </div>
        <div class="col-md-4">
          <hr class="light">
          <h5>Our Hours</h5>
          <hr class="light">
          <p>Monday: 9am - 5pm</p>
          <p>Saturday: 10am - 4pm</p>
          <p>Sunday: closed</p>
        </div>
        <div class="col-md-4">
          <hr class="light">
          <h5>Service Area</h5>
          <hr class="light">
          <p>Kraljevo, Serbia, 36000</p>
          <p>Barcelona, Spain, 08001</p>
          <p>Las Vegas, Nevada, 88901</p>
        </div>
        <div class="col-12">
          <hr class="light-100">
          <h5>&copy; kristijan radicevic</h5>
        </div>
      </div>
    </div>
  </footer>






</body>

</html>