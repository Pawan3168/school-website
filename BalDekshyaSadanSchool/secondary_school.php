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
            background-image: url('assets/images/img9.jpg'); /* Replace with your image */
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
    <h1 class="main-title">Secondary School (VI - X)</h1>
    </div>
    <div class="container about-section">
        <div class="row">
            <div class="col-md-12">
                <p>The Lower Secondary school (VI – VIII) is a smooth transition from Primary to Secondary School. The regular syllabus for every subject of standards V to VIII is as prescribed by the Ministry of Education, but additional syllabus is framed by the teachers themselves- embracing overarching vision of all rounded development of the students. The students of IX and X are prepared for SEE (Secondary Education Examinations). Besides English, Nepali, Mathematics, Science, Social Studies, Computer Studies, Moral Science, General Knowledge, the students are introduced to advanced level Mathematics and E. P. H. (Environment Health & Population) and various co-curricular activities like Club activities etc.</p>
                <p>The project work, as an approach aimed at enhancing overall learning outcome is an integral part of the curriculum. It supports and extends the innate curiosity of the child and develops the attitudes and skills necessary to gain an understanding of the world around. The Language-Lab and the Mathematical Lab help in an innovative manner to sustain the interest and to develop the language and mental ability of the child.</p>
                <p>Students learn in a caring environment where freely express their ideas. This creates a stimulating learning environment for all. The education program is constantly modified according to the needs of the students and the changing times. This program not only equips the children to enter colleges but also prepare them with skills that they need to help them shape for the future role as a global citizen.</p>
            </div>
        </div>
    </div>


    <?php
        include 'assets/php/footer.php';
    ?>

</body>
</html>
