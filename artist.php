<?php
require_once("db-connect.php");

if (isset($_GET['artist'])) {
    $artist = $_GET['artist'];

    // Query to get artist details
    $qry1 = "SELECT * FROM artist WHERE artist = '$artist'";
    $res1 = $conn->query($qry1);

    if ($res1->num_rows > 0) {
        $sng1 = $res1->fetch_assoc();
        $qry2 = "SELECT * FROM beatvibe WHERE artist = '$artist'";
        $res2 = $conn->query($qry2);
        ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Music Playlist</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
            <style>
                body {
                    background-image: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)),
                        url("atimage/<?php echo $sng1['image']; ?>");
                    height: 80vh;
                    width: 100%;
                    background-size: cover;
                    background-position: center;
                    background-repeat: no-repeat;
                }

                .custom-card {
                    background: none;
                    border: none;
                }

                .card-body {
                    background: none;
                    border: none;
                }

                a {
                    color: inherit;
                    text-decoration: none;
                }
                .card {
            transition: transform 0.3s, opacity 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: scale(1.1);
            opacity: 0.9;
            box-shadow: 0 4px 8px rgba(255, 0, 0, 0.5);
        }
            </style>
        </head>
        <body>
            <div>
            <div id="main" style="">
                <div class="container mt-5">
                    <?php
                     $count = 0; 
                    while ($sng = $res2->fetch_assoc()) { 
                        
                        if ($count % 3 === 0) {
                                        echo '</div><div class="row">';
                                    }
                                    ?>
                                    <div class="col-md-3 mb-3">
                                        <div class="card custom-card mb-5" style="width: 100%;">
                                            <a href="play.php?id=<?php echo $sng['id']; ?>">
                                                <div class="card-body text-light">
                                                    <img src="<?php echo "image" . "/" . $sng['photo']; ?>" style="height: 50px; width: 50px;">
                                                    <?php echo $sng['music']; ?>
                                                    <?php echo $sng['genre']; ?>
                                                </div>
                                            </a>
                                        </div>
                                     </div>
                     <?php
                     $count++;
                 } ?>
                </div>
            </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        </body>
        </html>
    <?php
    } else {
        echo "No artist found.";
    }
}
?>
