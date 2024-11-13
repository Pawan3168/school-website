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
            background-image: url('assets/images/img8.jpg'); /* Replace with your image */
            background-size: cover;
            background-position: center;
            height: 70vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }

        /* Centered Header */
.contact-header {
  text-align: center;
  margin-top: 30px;
  margin-bottom: 20px;
}

.contact-header h1 {
  font-size: 32px;
  color: #333;
  margin: 50px;
}
.contact-container {
  display: flex;
  justify-content: space-between;
  max-width: 1200px;
  margin: 50px auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 15px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

/* Contact Info Styles */
.contact-info {
  width: 45%;
}

.info-item {
  display: flex;
  align-items: center;
  margin-bottom: 15px;
}

.icon {
  font-size: 24px;
  margin-right: 15px;
}

.label {
  font-weight: bold;
  color: #ff5722;
  margin-bottom: 5px;
}

.map {
  margin-top: 20px;
  border-radius: 10px;
  overflow: hidden;
}

/* Contact Form Styles */
.contact-form {
  width: 50%;
}

form {
  display: flex;
  flex-direction: column;
}

input, textarea {
  margin-bottom: 15px;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 5px;
  font-size: 16px;
}

button {
  background-color: #ff5722;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 30px;
  font-size: 16px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
}

button span {
  margin-left: 8px;
}

button:hover {
  background-color: #e64a19;
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
        <h1>Contact Us</h1>
    </div>

    <div class="contact-header">
    <h1>Contact Form</h1>
  </div>
    <div class="contact-container">
    <div class="contact-info">
      <div class="info-item">
        <span class="icon">📍</span>
        <div>
          <p class="label">Location</p>
          <p>Gwarko Chowk, Lalitpur, Nepal</p>
        </div>
      </div>
      <div class="info-item">
        <span class="icon">📧</span>
        <div>
          <p class="label">Email</p>
          <p>info@bdsschool.edu.np</p>
        </div>
      </div>
      <div class="info-item">
        <span class="icon">📞</span>
        <div>
          <p class="label">Phone</p>
          <p>01-5446744, 4970591</p>
        </div>
      </div>
      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.5684898055893!2d85.3298831755392!3d27.66881927620461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19dd10af9695%3A0x71a0c701397da292!2sBal%20Deeksha%20Sadan%20Secondary%20School!5e0!3m2!1sen!2snp!4v1729835912500!5m2!1sen!2snp" width=100% height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>

    <div class="contact-form">
      <form action="#">
        <input type="text" placeholder="Full Name" required>
        <input type="email" placeholder="Email" required>
        <input type="tel" placeholder="Phone">
        <input type="text" placeholder="Subject">
        <textarea placeholder="Message" rows="5" required></textarea>
        <button type="submit">
          Send Message 
        </button>
      </form>
    </div>
  </div>

    <?php
        include 'assets/php/footer.php';
    ?>

</body>
</html>
