<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Player</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php
    require_once("db-connect.php");

    // Check if the 'id' parameter is set in the URL
    if (isset($_GET['id'])) {
        $songId = $_GET['id'];

        // Fetch the song details from the database based on the ID
        $qry = "SELECT * FROM beatvibe WHERE id = $songId";
        $res = $conn->query($qry);

        if ($res->num_rows > 0) {
            $sng = $res->fetch_assoc();
            ?>
            <div class="container mx-auto ">
                <div class="card text-center mx-auto" style="width:20rem;">
                    <img src="<?php echo "image/" . $sng['photo']; ?>" class="card-img-top" alt="Artist Image" style="width:100%">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $sng['artist']; ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $sng['music']; ?></h6>
                    </div>
                    <audio autoplay controls class="audio-player" style="width:100%">
                        <source src="<?php echo "audio/" . $sng['music']; ?>" type="audio/mp3">
                    </audio>
                </div>
            </div>
            <?php
        } else {
            echo "<p>Song not found!</p>";
        }
    } else {
        echo "<p>Invalid request. Song ID not provided.</p>";
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
