<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>

    <!-- ! Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- ! Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

    <!-- ! Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
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
    <!-- <div class="forma log-in mx-auto">
        <h2>Log in...</h2>
        <form action="" method="post" name="login">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="pw">
                </div>
                <p id="wrong_id" style="color: red;"></p>
                <button type="submit" class="btn btn-primary" name="submit">Log in</button>
            </div>
        </form>
    </div> -->
    <?php include('server.php') ?>
    <div class="forma log-in mx-auto">
        <div class="header">
            <h2>Login</h2>
        </div>

        <form method="post" action="login.php" name="login">
            <div class="form-row">
                <?php include('errors.php'); ?>
                <div class="form-group col-md-6">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="input-group">
                    <button type="submit" class="btn btn-primary mb-3" name="login_user">Login</button>
                </div>
                <p>
                    Not yet a member? <a href="register.php">Sign up</a>
                </p>
            </div>
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