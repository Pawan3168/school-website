<?php
    require 'assets/php/database_config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us - Bal Deekshya Sadan School</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/slider.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="assets/js/navScript.js"></script>

    <style>
        /* Hero Section Styles */
        .hero-section {
            position: relative;
            background-image: url('assets/images/img16.jpg'); /* Replace with your image */
            background-size: cover;
            background-position: center;
            height: 70vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5); /* Dark overlay for better readability */
        }

        .hero-section h1 {
            position: relative;
            font-size: 3rem;
            z-index: 1;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
        }

        /* About Us Section */
        .about-section {
            padding: 60px 0;
            background-color: #ffffff;
        }

        .about-section h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .about-section p, .about-section ul {
            font-size: 1.1rem;
            line-height: 1.7;
        }

        .about-section ul {
            list-style-type: disc;
            padding-left: 20px;
        }

        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body>

    <?php
        include 'navbar.php'; // Your navbar here
    ?>

    <!-- Hero Section -->
    <div class="hero-section">
    <h1 class="main-title">Pre-School</h1>
    </div>
    <div class="container about-section">
        <div class="row">
            <div class="col-md-12">
                <p>At <strong>Bal Deekshya Sadan School</strong>, early childhood program emphasizes child-centric, self-directed learning and is concerned with the ‘whole child’ its intellectual progress as well as its social, emotional, creative and physical wellbeing. It provides children with a rich and stimulating environment in which proper learning can occur. Concrete experiences in a number of areas are provided for children of this age to learn by doing.</p>

                <ul>
                    <li><strong> Play Group</strong> </li>
                    <li><strong>Nursery</strong> </li>
                    <li><strong>Junior Kindergarten (JKG)</strong> </li>
                    <li><strong>Senior Kindergarten (SKG)</strong> </li>
                </ul>
            </div>
        </div>
    </div>


    <?php
        include 'assets/php/footer.php';
    ?>

</body>
</html>
