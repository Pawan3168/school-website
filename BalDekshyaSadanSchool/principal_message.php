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

.principal_container {
    width: 80%;
    max-width: 900px;
    margin: 20px auto;
  
    padding: 20px;
    border-radius: 8px;
   
}

.header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
}

.page_intro p {
    font-family: 'Montserrat', san-serif;
    font-size: 1.3em;
    font-weight: 500;
    line-height: 1.7em;
    color: #1f1f1f;

}

.header h1 {
    font-size: 1.8em;
    color: #333;
    margin-bottom: 10px;
}

.header p {
    font-size: 1.5em;
    color: #555;
    margin-top: 20px;
    
}

.image-section {
    flex: 1;
    margin-left: 20px;
}

.image-section img {
    width: 250px;
    height: 300px;
    object-fit: cover;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin: 20px;
}

.content {
    margin-top: 20px;
}

.text-section p {
    margin-bottom: 15px;
}
    </style>
</head>

<body>

    <?php
        include 'navbar.php'; // Your navbar here
    ?>

<div class="hero-section">
    <h1 class="main-title">Principal's Message</h1>
    </div>

    <div class="principal_container ">
        <div class="header">
            <div class="page_intro">
                <p>Welcome to Bal Dekshya Sadan School, Lalitpur, Nepal. </p>
               <p> A school deeply committed to the mission of inspiring each student a passion for learning, 
                   the confidence and competence to pursue their dreams and the commitment to serve as a compassionate 
                   global citizen who is a steward of the environment.</p>
            </div>
            <div class="image-section">
                <img src="assets/images/principal1.jpg" alt="Principal Image">
            </div>
        </div>
        
        <div class="content">
            <div class="text-section">
                <p>Bal Dekshya Sadan School, founded in 1954 is celebrating 67 years, and as you learn about our school you will begin 
                   to develop an understanding of what makes us unique. Lincoln is an independent, not-for-profit U.S. 
                   curriculum, Preschool-Grade 12 international school. As a school, we have a long-established tradition of 
                   student-centered education founded in best practices, offering individualized attention through small 
                   class sizes and outstanding international faculty and support staff.</p>
                
                <p>We opened our learning commons and classroom building five years ago, and although the facilities are 
                   outstanding and represent the best in Nepal and top in the region, it is our commitment to the mission and 
                   core values – Collaboration, Compassion, Learning, Integrity, Respect and Responsibility – that serves as a 
                   foundation for the learning experiences and our commitment to meet the individual needs of each student. 
                   Our student experience offers a community-oriented learning environment that fosters the well-being of the 
                   whole student.</p>
                
                <p>Lincoln enjoys a strong community-centered reputation and is more than simply an academic institution. 
                   We care deeply about the social, emotional, and physical development of each of our students, as well as 
                   the success of our alumni. We also value an open and honest relationship with our parents, where they 
                   are active partners in the growth of their children.</p>

                   <p>I invite you to explore our website to learn more about our engaging, dynamic, and caring community, and reach out to our admissions team for further information.</p>   
                <p>Warm Regards,</p>
                <p>Principal Name</p>
                <p>Principal</p>
             </div>
        </div>
    </div>


    <?php
        include 'assets/php/footer.php';
    ?>

</body>
</html>
