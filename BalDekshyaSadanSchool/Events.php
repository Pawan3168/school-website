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
/* Activity Container */
.activity-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 20px;
  padding: 50px;
}

/* Activity Card */
.activity-card {
  background-color: white;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  width: 45%;
  overflow: hidden;
  display: flex;
  transition: transform 0.3s ease;
}

.activity-card:hover {
  transform: translateY(-5px);
}

/* Activity Image */
.activity-image {
  width: 30%;
  height: 100%;
  object-fit: cover;
}

/* Activity Content */
.activity-content {
  padding: 20px;
  width: 70%;
}

.activity-content h3 {
  color: #ff6700;
  margin: 0 0 10px;
}

.activity-content p {
  color: #555;
  margin: 5px 0;
}

.read-more {
  text-decoration: none;
  color: #007bff;
  font-weight: bold;
}

.pagination {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 10px;
  padding:50px;
}

.pagination a {
  text-decoration: none;
  font-size: 24px;
  cursor: pointer;
}

.pagination .page-info {
  font-size: 18px;
}
    </style>
</head>

<body>

    <?php
        include 'navbar.php'; // Your navbar here
    ?>
    <!-- Hero Section -->
    <div class="hero-section">
    <h1 class="main-title">Events</h1>
    </div>
 
<div class="activity-container">
  <div class="activity-card">
    <img src="assets/images/img4.jpg" alt="Hotel Management" class="activity-image">
    <div class="activity-content">
      <h3>Hotel Management students of grade XI</h3>
      <p><span class="date">📅 29 March 2024</span> <span class="time">🕒 9:24 AM</span></p>
      <p>Hotel Management students of grade XI presenting their project...</p>
      <a href="#" class="read-more">Read More ➔</a>
    </div>
  </div>

  <div class="activity-card">
    <img src="assets/images/img4.jpg" alt="SEE Exam" class="activity-image">
    <div class="activity-content">
      <h3>Best Wishes to our students for ongoing SEE Exam</h3>
      <p><span class="date">📅 27 March 2024</span> <span class="time">🕒 9:19 AM</span></p>
      <p>Best wishes to all students appearing for SEE this year...</p>
      <a href="#" class="read-more">Read More ➔</a>
    </div>
    
  </div>

  <div class="activity-card">
    <img src="assets/images/img4.jpg" alt="Art Competition" class="activity-image">
    <div class="activity-content">
      <h3>Winners of the Intra-School Art Competition</h3>
      <p><span class="date">📅 26 March 2024</span> <span class="time">🕒 9:17 AM</span></p>
      <p>Celebrating Cultural Creativity: Winners of the Intra-School Art Competition...</p>
      <a href="#" class="read-more">Read More ➔</a>
    </div>
  </div>
  
  <div class="activity-card">
    <img src="assets/images/img4.jpg" alt="Art Competition" class="activity-image">
    <div class="activity-content">
      <h3>Winners of the Intra-School Art Competition</h3>
      <p><span class="date">📅 26 March 2024</span> <span class="time">🕒 9:17 AM</span></p>
      <p>Celebrating Cultural Creativity: Winners of the Intra-School Art Competition...</p>
      <a href="#" class="read-more">Read More ➔</a>
    </div>
  </div>
  
  <div class="activity-card">
    <img src="assets/images/img5.JPG" alt="Art Competition" class="activity-image">
    <div class="activity-content">
      <h3>Winners of the Intra-School Art Competition</h3>
      <p><span class="date">📅 26 March 2024</span> <span class="time">🕒 9:17 AM</span></p>
      <p>Celebrating Cultural Creativity: Winners of the Intra-School Art Competition...</p>
      <a href="#" class="read-more">Read More ➔</a>
    </div>
  </div>
  
  <div class="activity-card">
    <img src="assets/images/img5.JPG" alt="Art Competition" class="activity-image">
    <div class="activity-content">
      <h3>Winners of the Intra-School Art Competition</h3>
      <p><span class="date">📅 26 March 2024</span> <span class="time">🕒 9:17 AM</span></p>
      <p>Celebrating Cultural Creativity: Winners of the Intra-School Art Competition...</p>
      <a href="#" class="read-more">Read More ➔</a>
    </div>
  </div>

  <div class="activity-card">
    <img src="assets/images/img5.JPG" alt="Holi Celebration" class="activity-image">
    <div class="activity-content">
      <h3>Happy Holi</h3>
      <p><span class="date">📅 24 March 2024</span> <span class="time">🕒 9:15 AM</span></p>
      <p>Let the colors of Holi fill your heart with happiness...</p>
      <a href="#" class="read-more">Read More ➔</a>
    </div>
  </div>
  <div class="activity-card">
    <img src="assets/images/img6.jpg" alt="Holi Celebration" class="activity-image">
    <div class="activity-content">
      <h3>Happy Holi</h3>
      <p><span class="date">📅 24 March 2024</span> <span class="time">🕒 9:15 AM</span></p>
      <p>Let the colors of Holi fill your heart with happiness...</p>
      <a href="#" class="read-more">Read More ➔</a>
    </div>
  </div>
  <div class="activity-card">
    <img src="assets/images/img6.jpg" alt="Holi Celebration" class="activity-image">
    <div class="activity-content">
      <h3>Happy Holi</h3>
      <p><span class="date">📅 24 March 2024</span> <span class="time">🕒 9:15 AM</span></p>
      <p>Let the colors of Holi fill your heart with happiness...</p>
      <a href="#" class="read-more">Read More ➔</a>
    </div>
  </div>
  <div class="activity-card">
    <img src="assets/images/img6.jpg" alt="Holi Celebration" class="activity-image">
    <div class="activity-content">
      <h3>Happy Holi</h3>
      <p><span class="date">📅 24 March 2024</span> <span class="time">🕒 9:15 AM</span></p>
      <p>Let the colors of Holi fill your heart with happiness...</p>
      <a href="#" class="read-more">Read More ➔</a>
    </div>
  </div>
  <div class="activity-card">
    <img src="assets/images/img6.jpg" alt="Holi Celebration" class="activity-image">
    <div class="activity-content">
      <h3>Happy Holi</h3>
      <p><span class="date">📅 24 March 2024</span> <span class="time">🕒 9:15 AM</span></p>
      <p>Let the colors of Holi fill your heart with happiness...</p>
      <a href="#" class="read-more">Read More ➔</a>
    </div>
  </div>
  <div class="activity-card">
    <img src="assets/images/img2.jpg" alt="Holi Celebration" class="activity-image">
    <div class="activity-content">
      <h3>Happy Holi</h3>
      <p><span class="date">📅 24 March 2024</span> <span class="time">🕒 9:15 AM</span></p>
      <p>Let the colors of Holi fill your heart with happiness...</p>
      <a href="#" class="read-more">Read More ➔</a>
    </div>
  </div>
  <div class="activity-card">
    <img src="assets/images/img2.jpg" alt="Holi Celebration" class="activity-image">
    <div class="activity-content">
      <h3>Happy Holi</h3>
      <p><span class="date">📅 24 March 2024</span> <span class="time">🕒 9:15 AM</span></p>
      <p>Let the colors of Holi fill your heart with happiness...</p>
      <a href="#" class="read-more">Read More ➔</a>
    </div>
  </div>
  <div class="activity-card">
    <img src="assets/images/img2.jpg" alt="Holi Celebration" class="activity-image">
    <div class="activity-content">
      <h3>Happy Holi</h3>
      <p><span class="date">📅 24 March 2024</span> <span class="time">🕒 9:15 AM</span></p>
      <p>Let the colors of Holi fill your heart with happiness...</p>
      <a href="#" class="read-more">Read More ➔</a>
    </div>
  </div>
</div>

<!-- Pagination Controls -->
<div class="pagination">
  <a href="#" class="prev">&#10094;</a>
  <span class="page-info"></span> <!-- Shows current page status -->
  <a href="#" class="next">&#10095;</a>
</div>
<script src="assets/js/Event.js"></script>

    <?php
        include 'assets/php/footer.php';
    ?>

</body>
</html>
