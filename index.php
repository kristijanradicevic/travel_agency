<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book & Look</title>

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
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="offers.php">Booking</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#travel">Travel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <div>

                <?php
                include('server.php');
                if (isset($_SESSION['login'])) {
                    echo "<a href='logout.php'><button class='btn btn-outline-primary'>Log out</button></a>";
                } else {
                    echo "<a href='register.php'><button class='btn btn-outline-primary'>Register</button></a>
                    <a href='login.php'><button class='btn btn-outline-secondary'>Log in</button></a>";
                }
                ?>
            </div>
        </div>
    </nav>


    <!-- ! Home -->
    <section class="home">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Welcome to Book & Look</h1>
                </div>
                <div class="col-12 text-center">
                    <p class="p-home-1">We are Travel Agency from Serbia and we're so far in top 5 world's best travel companies. We provide safe and secure traveling with a nice place to stay.</p>
                </div>
                <div class="col-12 text-center">
                    <p class="p-home-2">Book us now &#8595;</p>
                </div>
                <div class="col-12 text-center">
                    <a href="offers.php"><button class="btn btn-primary btn-lg btn-book">See our offers</button></a>
                </div>
            </div>
        </div>
    </section>

    <!-- ! Travel -->
    <section class="travel" id="travel">
        <div class="container-fluid padding">
            <div class="row welcome text-center">
                <div class="col-12">
                    <h1 class="display-4">Travel safe.</h1>
                </div>
                <hr>
                <div class="col-12">
                    <p class="lead">In 1st place is always safety. Our agency consider all factors that impact your jurney.</p>
                </div>
            </div>
        </div>


        <!--  Three Column Section -->
        <div class="container-fluid padding icons">
            <div class="row text-center padding">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <i class="fas fa-plane-departure"></i>
                    <h3>Flight</h3>
                    <p>Travel by airplane with our safest choices of air-traffic companies.</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <i class="fas fa-train"></i>
                    <h3>by Train</h3>
                    <p>If you looking for cheaper solution for traveling to your destination.</p>
                </div>
                <div class="col-sm-6 col-md-4">
                    <i class="fas fa-car"></i>
                    <h3>Drive</h3>
                    <p>We also have experienced drivers who can make travel very comphy.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ! About -->
    <section class="about" id="about">
        <div class="container-fluid text-center">
            <div class="row">
                <div class="col-12">
                    <h1>About Us</h1>
                </div>
                <div class="col-12">
                    <p>“Travel is the main thing you purchase that makes you more extravagant”.<br> We, at ‘Book & Look’, swear by this and put stock in satisfying travel dreams that make you perpetually rich constantly. We have been moving excellent encounters for a considerable length of time through our cutting edge planned occasion bundles and other fundamental travel administrations. We rouse our clients to carry on with a rich life, brimming with extraordinary travel encounters. Through our exceptionally curated occasion bundles, we need to take you on an adventure where you personally enjoy with the stunning magnificence of America and far off terrains. We need you to observe sensational scenes that are a long ways past your creative ability.</p>
                </div>
            </div>
        </div>
    </section>

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

    <?php
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: login.php");
    }
    ?>
</body>

</html>