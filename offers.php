<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>

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
                    <li class="nav-item active">
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

    <!-- ! Heading -->
    <div class="conteiner-fluid padding header-book">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4">Offers & Reservations</h1>
            </div>
            <hr>
        </div>
    </div>
    <div class='container-fluid padding card-section'>
        <div class='row padding'>
            <!-- ! Cards -->
            <?php
            $connection = new mysqli('localhost', 'root', '', 'travel_website');

            if ($connection->connect_error) {
                die("Servers not responding: " . $connection->connect_error);
            }



            $sql = "SELECT * FROM offers";
            $result = $connection->query($sql);
            if ($result) {
                if (mysqli_num_rows($result) > 0) {

                    while ($row = mysqli_fetch_array($result)) {

                        echo "
                    
                        <div class='col-md-4'>
                            <div class='card'>
                            <div class='img-height'>
                                <img class='card-img-top' src='img/" . $row['img'], ".jpg' alt=''>
                            </div>
                                <div class='card-body'>
                                    <h4 class='card-title'>" . $row['city'] . "</h4>
                                    <p class='card-text'>" . $row['description'] . "</p>
                                    <div class='container-fluid'>
                                        <div class='row card-row'>
                                            <i class='fas fa-male'></i>
                                            <p>" . $row['person'] . "</p>
                                            <i class='fas fa-route'></i>
                                            <p>" . $row['transport'] . "</p>
                                        </div>
                                    </div>
                                    <div class='row price'>
                                        <i class='fas fa-euro-sign'></i>
                                        <p>" . $row['price'] . "</p>
                                    </div>
                                    <a href='#' class='btn btn-outline-secondary'>Book now</a>
                                </div>
                            </div>
                        </div>
            
                    
                        ";
                    }
                } else {
                    echo "NO Data Exist";
                }
            } else {
                echo "Cannot connect to server" . $result;
            }

            ?>
        </div>
    </div>
    <!-- <div class="container-fluid padding card-section">
        <div class="row padding">
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="img/belgrade.jpg" alt="belgrade">
                    <div class="card-body">
                        <h4 class="card-title">Belgrade</h4>
                        <p class="card-text">Best night-life and lots of historical places.</p>
                        <div class="container-fluid">
                            <div class="row card-row">
                                <i class="fas fa-male"></i>
                                <p>2</p>
                                <i class="fas fa-route"></i>
                                <p>plane</p>
                            </div>
                        </div>
                        <div class="row price">
                            <i class="fas fa-euro-sign"></i>
                            <p>200</p>
                        </div>
                        <a href="#" class="btn btn-outline-secondary">Book now</a>
                    </div>
                </div>
            </div>

        </div>
    </div> -->

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