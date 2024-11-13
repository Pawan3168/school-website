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
            background-image: url('assets/images/img1.jpg'); /* Replace with your image */
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
        <h1>About Us</h1>
    </div>

    <!-- About Us Content -->
    <div class="container about-section">
        <div class="row">
            <div class="col-md-12">
                <p>At <strong>Bal Deekshya Sadan School</strong>, we are dedicated to providing a holistic and inclusive educational experience for children from diverse backgrounds. Founded with a mission to nurture young minds and shape future leaders, we have grown to become one of the leading schools in the region, offering top-notch facilities and an innovative curriculum that meets global standards.</p>

                <h3>Our Vision</h3>
                <p>Our vision is to create a learning environment where students are empowered to realize their full potential, both academically and personally. We strive to be a school that fosters creativity, critical thinking, and a lifelong love for learning. Our goal is to inspire our students to become responsible, compassionate citizens who will contribute positively to society.</p>

                <h3>Our Mission</h3>
                <p>Our mission is to offer quality education that is accessible and affordable to all. We are committed to developing well-rounded individuals by promoting academic excellence, personal integrity, and social responsibility. Through our innovative teaching methods and dedication to student success, we aim to prepare our students for the challenges of the future.</p>

                <h3>Core Values</h3>
                <ul>
                    <li><strong>Excellence</strong> - We believe in setting high standards in everything we do and continuously striving to achieve them.</li>
                    <li><strong>Integrity</strong> - We uphold honesty, fairness, and respect for others in all our interactions.</li>
                    <li><strong>Innovation</strong> - We encourage creativity and new ways of thinking to provide a dynamic and engaging learning environment.</li>
                    <li><strong>Inclusivity</strong> - We celebrate diversity and ensure that all students, regardless of background, feel welcomed and valued in our community.</li>
                    <li><strong>Community</strong> - We foster a sense of belonging and partnership among students, teachers, parents, and the wider community.</li>
                </ul>

                <h3>Why Choose Us?</h3>
                <p>Bal Deekshya Sadan School stands out for its commitment to academic excellence and the holistic development of each student. Our experienced and dedicated teachers are passionate about helping every child reach their full potential. We offer a variety of programs designed to meet the individual needs of our students, from early childhood education to secondary school. Our extracurricular activities, including sports, arts, and community service projects, provide opportunities for students to explore their interests and develop new skills.</p>

                <h3>Contact Us</h3>
                <p>If you would like to learn more about our school or schedule a visit, please don't hesitate to get in touch with us. We look forward to welcoming you and your child to the Bal Deekshya Sadan School family!</p>

                <p><strong>Address:</strong> Gwarko Chowk, Lalitpur, Nepal</p>
                <p><strong>Email:</strong> <a href="mailto:info@bdsschool.edu.np">info@bdsschool.edu.np</a></p>
                <p><strong>Phone:</strong> 01-5446744</p>
            </div>
        </div>
    </div>

    <?php
        include 'assets/php/footer.php';
    ?>

</body>
</html>
