<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f6f9;
        }
        .sidebar {
            height: 100vh;
            background-color: #0973B7;
            padding-top: 20px;
            position: fixed;
            left: 0;
            top: 0;
            width: 220px;
            display: flex;
            flex-direction: column;
            align-items: center; /* Center items horizontally */
        }
        .sidebar .logo {
            text-align: center;
            padding: 10px; /* Adjusted padding */
        }
        .sidebar .logo img {
            max-width: 50%; /* Set max width for a smaller logo */
            margin-bottom: 15px;
            height: auto;
            border-radius: 10%; /* Rounded corners for a softer look */
        }
        .sidebar a {
            color: white;
            padding: 15px;
            text-decoration: none;
            display: block;
            transition: all 0.3s ease;
            width: 100%; /* Ensure links occupy full width */
        }
        .sidebar a:hover {
            background-color: #495057;
            text-decoration: none;
        }
        .sidebar a i {
            margin-right: 10px;
        }
        .sidebar .sidebar-links {
            flex-grow: 1;
            width: 100%; /* Ensure full width */
        }
        .sidebar .logout {
            margin-top: auto;
            padding: 15px;
            width: 100%; /* Ensure full width */
        }
        .content {
            margin-left: 220px;
            padding: 20px;
        }
        .content h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .card {
            margin-bottom: 20px;
            border: none;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .upload-section {
            padding: 20px;
        }
        .btn-custom {
            background-color: #343a40;
            color: white;
        }
        .section {
            display: none;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- School Logo -->
        <div class="logo">
            <img src="assets/images/Main_Logo.png" alt="School Logo">
        </div>

        <!-- Sidebar Links -->
        <div class="sidebar-links">
            <a href="#" onclick="showSection('photoUpload')"><i class="fas fa-image"></i> Photo Upload</a>
            <a href="#" onclick="showSection('noticeUpload')"><i class="fas fa-bullhorn"></i> Notice Upload</a>
            <a href="#" onclick="showSection('eventUpload')"><i class="fas fa-calendar-alt"></i> Event Upload</a>
        </div>

        <!-- Logout Button at the Bottom -->
        <a href="#logout" class="logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

    <!-- Content Area -->
    <div class="content">
        <h1>Admin Dashboard</h1>

        <!-- Photo Upload Section -->
        <div id="photoUpload" class="card section">
            <div class="card-header">
                <h5>Photo Upload</h5>
            </div>
            <div class="card-body">
                <div class="upload-section">
                    <form action="/upload_photo" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="photoTitle">Photo Title:</label>
                            <input type="text" class="form-control" id="photoTitle" name="photoTitle" required>
                        </div>
                        <div class="form-group">
                            <label for="photoDescription">Description:</label>
                            <textarea class="form-control" id="photoDescription" name="photoDescription" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="photoFile">Upload Photo:</label>
                            <input type="file" class="form-control-file" id="photoFile" name="photoFile" required>
                        </div>
                        <button type="submit" class="btn btn-custom">Upload Photo</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Notice Upload Section -->
        <div id="noticeUpload" class="card section">
            <div class="card-header">
                <h5>Notice Upload</h5>
            </div>
            <div class="card-body">
                <div class="upload-section">
                    <form action="/upload_notice" method="POST">
                        <div class="form-group">
                            <label for="noticeTitle">Notice Title:</label>
                            <input type="text" class="form-control" id="noticeTitle" name="noticeTitle" required>
                        </div>
                        <div class="form-group">
                            <label for="noticeContent">Notice Content:</label>
                            <textarea class="form-control" id="noticeContent" name="noticeContent" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-custom">Upload Notice</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Event Upload Section -->
        <div id="eventUpload" class="card section">
            <div class="card-header">
                <h5>Event Upload</h5>
            </div>
            <div class="card-body">
                <div class="upload-section">
                    <form action="/upload_event" method="POST">
                        <div class="form-group">
                            <label for="eventName">Event Name:</label>
                            <input type="text" class="form-control" id="eventName" name="eventName" required>
                        </div>
                        <div class="form-group">
                            <label for="eventDate">Event Date:</label>
                            <input type="date" class="form-control" id="eventDate" name="eventDate" required>
                        </div>
                        <div class="form-group">
                            <label for="eventDescription">Description:</label>
                            <textarea class="form-control" id="eventDescription" name="eventDescription" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-custom">Upload Event</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- JavaScript to toggle sections -->
    <script>
        function showSection(sectionId) {
            // Hide all sections
            document.querySelectorAll('.section').forEach(function(section) {
                section.style.display = 'none';
            });
            // Show the selected section
            document.getElementById(sectionId).style.display = 'block';
        }

        // Show the Photo Upload section by default when the page loads
        showSection('photoUpload');
    </script>
</body>
</html>
