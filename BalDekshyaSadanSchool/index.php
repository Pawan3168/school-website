<?php
    include 'assets/php/database_config.php';
    // Fetch carousel slides with images
    $sql = "SELECT cs.slide_id, cs.title, cs.subtitle, cs.description, i.filename
    FROM carousel_slides cs
    JOIN images i ON cs.image_id = i.image_id
    ORDER BY cs.order";

    $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Image Slider</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/slider.css">
    <link rel="stylesheet" href="assets/css/introduction_section.css">
    <link rel="stylesheet" href="assets/css/Recent_activities.css">
    <link rel="stylesheet" href="assets/css/vision.css">
    <link rel="stylesheet" href="assets/css/vision_two.css">
    <link rel="stylesheet" href="assets/css/vision_third.css">
    <link rel="stylesheet" href="assets/css/calendar_events.css">
    <link rel="stylesheet" href="assets/css/map.css">
    <link rel="stylesheet" href="assets/css/principal.css">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>
    
    <?php include 'navbar.php'
    ?>

    <div class="carousel">
        <div class="list">
            <?php
            if ($result->num_rows > 0) {
                // Output data for each row
                while($row = $result->fetch_assoc()) {
                    echo '<div class="item" style="background-image: url(' . $row['filename'] . ');">
                            <div class="content">
                                <div class="title">' . htmlspecialchars($row['title']) . '</div>
                                <div class="name">' . htmlspecialchars($row['subtitle']) . '</div>
                                <div class="des">' . htmlspecialchars($row['description']) . '</div>
                            </div>
                        </div>';
                }
            } else {
                echo '<div class="item">No slides available.</div>';
            }
            ?>
        </div>
    </div>

        <!--next prev button-->
        <div class="arrows">
            <button class="prev"><</button>
            <button class="next">></button>
        </div>

    <script src="assets/js/slider.js"></script>

    <section class="introduction-section">
        <div class="introduction-text">
         <h2 class="intro-animate">Introduction</h2>
            <p>
                It is the aim of Bal Deeksha Sadan School to provide K-12 education that every student deserves. We, at Bal Deeksha Sadan School, appreciate diversity and realize that each student is different and should be treated as a unique
                individual. Our constant endeavor is to help each student realize his/her full potential and discover new
                horizons in learning. We believe in bringing out the best in our students so that they can rise to the top ever
                empowered by a belief in unlimited human potential. At Bal Deeksha Sadan School, creativity is nurtured, with learners
                being treated as just learners, imbued with a passion for knowledge and discovery and not as rote machines. In
                terms of overall academic orientation, we place a pronounced emphasis on Science, Technology, English, Arts,
                and Mathematics (STEAM), along with other domains critical to overall academic achievement and sustained
                academic excellence.
            </p>
        </div>
        <!-- Images grid -->
        <div class="image-grid">
            <div class="image-item large left">
                <img src="assets/images/img7.jpg" alt="large image">
            </div>
            <div class="image-item small top">
                <img src="assets/images/img11.jpg" alt="small image">
            </div>
            <div class="image-item small bottom">
                <img src="assets/images/img10.jpg" alt="small image">
            </div>
            <div class="image-item medium left">
                <img src="assets/images/img8.jpg" alt="medium image">
            </div>
        </div>

        <!-- JavaScript for scroll-triggered animations -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const imageItems = document.querySelectorAll('.image-item');

                const observer = new IntersectionObserver((entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('visible'); // Add visible class when in view
                            observer.unobserve(entry.target); // Stop observing once animated
                        }
                    });
                }, { threshold: 0.1 }); // Trigger when 10% of the image is visible

                imageItems.forEach(item => {
                    observer.observe(item);
                });
            });
            document.addEventListener("DOMContentLoaded", function () {
    const introHeading = document.querySelector(".intro-animate");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible'); // Add 'visible' class when in view
                observer.unobserve(entry.target); // Stop observing after it animates
            }
        });
    }, { threshold: 0.1 }); // Trigger when 10% of the heading is visible

    observer.observe(introHeading);
});

        </script>

     </section>

<!-- Recent Activities -->
<section>
    <div class="slider-container">
        <h2 class="intro-animate">Recent Activities</h2>
        <button class="slider-btn prev-btn" onclick="moveSlide(-1)">&#10094;</button>
        <div class="card-slider">
           
            <div class="slider">
                <div class="card">
                    <img src="assets/images/img12.jpg" alt="Primary School">
                    <h3>Primary School (I – V)</h3>
                    <p>Focus on English language, Project-based learning...</p>
                </div>
                <div class="card">
                    <img src="assets/images/img13.jpg" alt="Pre-School">
                    <h3>Pre-School</h3>
                    <p>Bal Deeksha Sadan School Early Childhood Program with Phon...</p>
                </div>
                <div class="card">
                    <img src="assets/images/img14.jpg" alt="Management Stream">
                    <h3>XI/XII Management Stream</h3>
                    <p>Bal Deeksha Sadan School Grade XI/ XII Management Stream p...</p>
                </div>
                <div class="card">
                    <img src="assets/images/img15.jpg" alt="Management Stream">
                    <h3>XI/XII Management Stream</h3>
                    <p>Bal Deeksha Sadan School Grade XI/ XII Management Stream p...</p>
                </div>
                <div class="card">
                    <img src="assets/images/img16.jpg" alt="Management Stream">
                    <h3>XI/XII Management Stream</h3>
                    <p>Bal Deeksha Sadan School Grade XI/ XII Management Stream p...</p>
                </div>
                <div class="card">
                    <img src="assets/images/img15.jpg" alt="Management Stream">
                    <h3>XI/XII Management Stream</h3>
                    <p>Bal Deeksha Sadan School Grade XI/ XII Management Stream p...</p>
                </div>
            </div>
           
        </div>
        <button class="slider-btn next-btn" onclick="moveSlide(1)">&#10095;</button>
    </div>

    <script src="assets/js/Recent_active.js"></script>
        </section>
     


    <!-- vision section -->
<!-- Vision Section -->
<section class="vision-section">
  <div class="text-details">
    <h2 class="vision-animate">Our Vision</h2>
    <p class="vision-animate">We envision Bal Deeksha Sadan School as a dynamic and inspiring educational institution that sets an example for the learning community.</p>
    <p class="vision-animate">We are committed to providing an outstanding learning environment to our students, enabling them to excel and thrive in a complex, constantly changing world, getting more interconnected by the day.</p>
  </div>
  <div class="picture-details">
     <div>
        <div class="blob" style="background-image: url(assets/images/img5.jpg);"    ></div>
      </div>
  <script src="assets/js/vision.js"></script>
</section>

</section>

<section class="vision-section_two">
  <div class="image-content_two">
    <div class="blob-wrapper_two">
      <div class="blob_two" style="background-image: url(assets/images/img5.jpg);"></div>
    </div>
  </div>
  <div class="text-content_two">
    <h2>Our Mission</h2>
    <p>We envision Bal Deeksha Sadan School as a dynamic and inspiring educational institution that sets an example for the learning community.</p>
    <p>We are committed to providing an outstanding learning environment to our students, to enable them to excel and thrive in a complex, constantly changing world, getting more interconnected by the day.</p>
  </div>
</section>

<section class="vision-section_third" >
  <div class="text-content_third">
    <h2>Our Core Values</h2>
    <p>We envision Bal Deeksha Sadan School as a dynamic and inspiring educational institution that sets an example for the learning community.</p>
    <p>We are committed to providing an outstanding learning environment to our students, to enable them to excel and thrive in a complex, constantly changing world, getting more interconnected by the day.</p>
  </div>
  <div class="image-content_third">
    <div class="blob-wrapper_third">
      <div class="blob_third" style="background-image: url(assets/images/img5.jpg);"></div>
    </div>
  </div>
</section>

<!-- calendar and events -->
<section class="blog-articles">

        <div class="calendar-events">
            <!-- Calendar Section -->
            <div class="calendar-container">
        <h2>Calendar</h2>
        <iframe src="https://calendar.google.com/calendar/embed?src=en.indian%23holiday%40group.v.calendar.google.com&ctz=Asia%2FCalcutta" style="border: 0" width="500" height="400" frameborder="0" scrolling="no"></iframe>
    </div>

            <!-- Events Section -->
    <div class="events-container">
        <h2>Upcoming Events</h2>
        <div class="events-wrapper">

        <div class="event-card">
            <img src="assets/images/img16.jpg" alt="Event Image" class="event-card-image">

            <div class="event-card-content">
                <h3 class="event-title">Best Wishes to our students for ongoing SEE Exam</h3>
                <p class="event-meta">
                <span class="event-date">📅 27 March 2024</span>
                <span class="event-time">🕒 9:19 AM</span>
                </p>
                 <p class="event-description">
                     Best Wishes to our students for ongoing SEE Examination 2080...
                 </p>
              <a href="#" class="read-more-link">Read More →</a>
            </div>
        </div>
        <div class="event-card">
            <img src="assets/images/img12.jpg" alt="Event Image" class="event-card-image">

            <div class="event-card-content">
                <h3 class="event-title">Best Wishes to our students for ongoing SEE Exam</h3>
                <p class="event-meta">
                <span class="event-date">📅 27 March 2024</span>
                <span class="event-time">🕒 9:19 AM</span>
                </p>
                 <p class="event-description">
                     Best Wishes to our students for ongoing SEE Examination 2080...
                 </p>
              <a href="#" class="read-more-link">Read More →</a>
            </div>
        </div>

        <div class="event-card">
            <img  src="assets/images/img14.jpg"  alt="Event Image" class="event-card-image">

            <div class="event-card-content">
                <h3 class="event-title">Best Wishes to our students for ongoing SEE Exam</h3>
                <p class="event-meta">
                <span class="event-date">📅 27 March 2024</span>
                <span class="event-time">🕒 9:19 AM</span>
                </p>
                 <p class="event-description">
                     Best Wishes to our students for ongoing SEE Examination 2080...
                 </p>
              <a href="#" class="read-more-link">Read More →</a>
            </div>
        </div>


        <div class="see-more-container">
            <a href="Events.php" class="see-more-button">See More</a>
         </div>

    </div>
</div>

    </section>

    <!-- Message from Principal --> 
        <section class="principal-container">
    <!-- Left Side: Message from Principal -->
    <section class="message-content">
      <h2>Message from the Principal</h2>
      <p>
        When it comes to our sustained efforts aimed at positioning our institution
        as an educational institution of repute, we start by asking ourselves some 
        fundamental questions – how can we prepare our students for the disruptions 
        that are set to characterize the 21st Century? What specific competencies...
      </p>
      <a href="principal_message.php" class="read-more">Read More &rarr;</a>
      <p class="author-name">Principal Name</p>
      <p >Principal</p>
    </section>

    <!-- Right Side: Principal Photo with Curved Background -->

      <section class="profile-header">
        <img src="assets/images/principal1.jpg" alt="Principal's Photo" class="profile-image">
    </section>
  </section>

    <!--map section-->
    <section class="map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28268.547912289!2d85.29434927431639!3d27.668819300000013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19dd10af9695%3A0x71a0c701397da292!2sBal%20Deeksha%20Sadan%20Secondary%20School!5e0!3m2!1sen!2snp!4v1728150430681!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        
    </section> 

    <script>
    // Wait for the DOM to load before executing the script
    document.addEventListener("DOMContentLoaded", function() {
        const navbar = document.querySelector(".navbar");
        const logo = document.querySelector(".logo");

        window.addEventListener("scroll", function() {
            // Scroll detection: when the scroll position is greater than 100px, change navbar style
            if (window.scrollY > 100) {
            navbar.classList.add("solid");
            navbar.classList.remove("transparent");
            logo.src = "assets/images/Main_Logo_Col.png"; // Change to the colored logo
            } else {
            navbar.classList.add("transparent");
            navbar.classList.remove("solid");
            logo.src = "assets/images/Main_Logo.png"; // Change back to the original logo
            }
        });
        });
    </script>
    <?php include 'assets/php/footer.php'
    ?>
</body>
</html>