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
            background-image: url('assets/images/img15.jpg'); /* Replace with your image */
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
    <h1 class="main-title">Primary School (I - V)</h1>
    </div>
    <div class="container about-section">
        <div class="row">
            <div class="col-md-12">
                <p>The curriculum is planned to develop in the students a respect and love for learning, while equipping them with a foundation of strong basic skills.</p>
                <p>Emphasis is laid on building up language skills in English. Through projects and by learning with head, heart and hand the students will develop all aspects of their personality. Students are taught subjects like English, Nepali, Mathematics, Science, Social Studies, Computer Studies, Moral Science, General Knowledge and Health Education. Variety of sports will be introduced to the students according to their interest and ability. Similarly a wide range of co-curricular activities will also be provided for their overall development.</p>
            </div>
        </div>
    </div>


    <?php
        include 'assets/php/footer.php';
    ?>

</body>
</html>
