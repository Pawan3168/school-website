<?php
    require '../php/database_config.php';
?>
<?php
$data = $conn->query("SELECT * FROM admin WHERE username='$username'");
$user_first_name = $data->fetch_assoc();
$first_name=$user_first_name['user_first_name'];
$last_name=$user_last_name['user_last_name'];

if (isset($_POST["submit"])){
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, md5($_POST["password"]));
    
    $select = mysqli_query($conn, "SELECT * FROM `admin` WHERE (username = '$email') AND password = '$password'") or die('query failed');
    $verification_data = mysqli_query($conn, "SELECT * FROM `users` WHERE (username = '$username' AND password = '$password'") or die('query failed');
    $verification_status = mysqli_fetch_assoc($verification_data);
    $verification_status_data = $verification_status['verification_status'];
    $username = $verification_status['username'];
    if($verification_status_data == 'verified'){
        if(mysqli_num_rows($select) > 0){
            $row = mysqli_fetch_assoc($select);
            $_SESSION['username'] = $row['bds_admin'];
            // echo "";
            $_SESSION['successMessage'] = 'Loged in as '.$username.'.';
            header('location:bds_admin.php');
        }else{
            $message[] = 'Incorrect Email/Password!';
        }
    }else{
        $message[] = 'Incorrect Email/Password!';
    }
    
    if($verification_status_data == 'unverified'){
        $_SESSION['user_email'] = $email;
        header('location:account_verification.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <style>
        /* Ensure full page styling */
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f0f0f0;
        }

        /* Container for the background image */
        .background-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            overflow: hidden;
        }

        /* Apply blur effect to the background image */
        .background-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: blur(8px);
            transform: scale(1.05); /* Slight zoom to avoid edge blur issues */
        }

        .login-label{
            color: rgba(9, 115, 183, 1);
        }

        /* Login container styling with semi-transparent background */
        .login-container {
            position: relative;
            z-index: 2; /* Ensures the form is in front of the blurred background */
            background-color: rgba(255, 255, 255, 0.85); /* Semi-transparent white */
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            max-width: 400px;
            width: 100%;
            text-align: center;
            backdrop-filter: blur(5px); /* Adds a frosted glass effect */
        }

        /* Styling for the school logo */
        .login-container img.school-logo {
            max-width: 150px;
            margin-bottom: 20px; /* Add space between logo and the login title */
        }

        /* Form input styling */
        .login-container input[type="text"], 
        .login-container input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            transition: all 0.3s ease; /* Smooth transitions */
            font-size: 16px;
        }

        /* Input field hover and focus effects */
        .login-container input[type="text"]:focus,
        .login-container input[type="password"]:focus {
            border-color: steelblue;
            box-shadow: 0 0 8px rgba(70, 130, 180, 0.7); /* Blue glowing effect */
            outline: none; /* Remove default outline */
            background-color: #f9f9f9;
        }

        /* Submit button styling */
        .login-container input[type="submit"] {
            background-color: steelblue;
            width: 100%;
            color: white;
            border: none;
            cursor: pointer;
            padding: 12px;
            margin: 10px 0;
            font-size: 16px;
            border-radius: 5px;
            transition: all 0.3s ease; /* Smooth transitions */
        }

        /* Submit button hover effect */
        .login-container input[type="submit"]:hover {
            background-color: darkblue;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Button shadow on hover */
        }

        /* Input fields and submit button animations on page load */
        .login-container input[type="text"], 
        .login-container input[type="password"], 
        .login-container input[type="submit"] {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.8s forwards ease-in-out;
        }

        /* Delay animations for each input */
        .login-container input[type="text"] {
            animation-delay: 0.3s;
        }

        .login-container input[type="password"] {
            animation-delay: 0.5s;
        }

        .login-container input[type="submit"] {
            animation-delay: 0.7s;
        }

        /* Keyframe animation for input fields */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive container margin for small screens */
        @media (max-width: 768px) {
            .login-container {
                margin: 0 20px; /* Add margin on smaller screens */
            }
        }

        /* Further adjustments for very small screens (mobile) */
        @media (max-width: 600px) {
            .login-container {
                padding: 20px; /* Decrease padding on smaller screens */
                margin: 0 15px; /* Add extra margin for mobile devices */
            }
        }
    </style>
</head>
<body>

    <!-- Background image container -->
    <div class="background-image">
        <img src="../images/img1.jpg" alt="School Background">
    </div>

    <!-- Login form container -->
    <div class="login-container">
        <!-- Add the logo here -->
        <img src="../images/Main_Logo_Col.png" alt="School Logo" class="school-logo">
        <h2 class="login-label">LOGIN</h2>
        <form action="admin_dashboard.php" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
        </form>
    </div>

</body>
</html>
