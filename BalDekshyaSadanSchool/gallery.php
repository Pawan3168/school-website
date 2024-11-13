<?php
require 'assets/php/database_config.php';

// Fetch image data from the database along with album titles
$query = "SELECT i.image_id, i.filename, p.caption, a.album_id, a.title AS album_title
          FROM images AS i 
          JOIN photos AS p ON i.image_id = p.image_id 
          JOIN albums AS a ON p.album_id = a.album_id";
$result = mysqli_query($conn, $query);

$eventPhotos = [];
while ($row = mysqli_fetch_assoc($result)) {
    $eventPhotos[$row['album_id']][] = [
        'filename' => $row['filename'],
        'caption' => $row['caption'],
        'album_title' => $row['album_title'] // Get the album title
    ];
}

// Convert the PHP array to a JSON object for JavaScript
$eventPhotosJson = json_encode($eventPhotos);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/gallery.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="assets/js/navScript.js"></script>
    <script>
        // Pass the PHP array to JavaScript
        const eventPhotos = <?php echo $eventPhotosJson; ?>;
    </script>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="gallery-wrapper">
        <h1 class="gallery-title">Event Gallery</h1>

        <div class="gallery-container">
            <!-- Dynamically generate cards -->
            <?php foreach ($eventPhotos as $albumId => $photos): ?>
                <div class="card" data-event="<?php echo $albumId; ?>" data-album-title="<?php echo htmlspecialchars($photos[0]['album_title']); ?>">
                    <img src="<?php echo $photos[0]['filename']; ?>" alt="Event <?php echo $albumId; ?>" loading="lazy">
                    <h2><?php echo htmlspecialchars($photos[0]['album_title']); ?></h2>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Modal for Images -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h2 class="modal-event-title"></h2>
            <div class="modal-images"></div>
        </div>
    </div>

    <!-- Lightbox for Individual Image -->
    <div id="lightbox" class="lightbox">
        <span class="close-btns" onclick="closeLightbox()">&times;</span>
        <img class="lightbox-content" id="lightboxImg" alt="Lightbox Image">
        <div class="nav-buttons">
            <button class="prev" onclick="changeImage(-1)">&#10094;</button>
            <button class="next" onclick="changeImage(1)">&#10095;</button>
        </div>
    </div>

    <script src="assets/js/gallery.js"></script>
    <?php include 'assets/php/footer.php'; ?>
</body>
</html>
