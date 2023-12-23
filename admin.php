<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="admin.php" method="post" enctype="multipart/form-data" class="row g-3 align-items-center">
        <h1>Upload Music</h1>
        Genre <input type="text" name="genre"><br>
        Artist <input type="text" name="artist"><br><br>
        Image <input type="file" name="image"><br><br>
    
        Song <input type="file" name="song"><br><br>
        <input type="submit" name="submit">
    </form>

    <?php
        if(isset($_POST['submit'])){
            $genre = $_POST['genre'];
            $artist = $_POST['artist'];
            $image = $_FILES['image'];
            $song = $_FILES['song'];

            $songname = $song['name'];
            $songpath = "audio" . "/" . $songname;
            $imagename = $image['name'];
            $imagepath = "image" . "/" . $imagename;

            if(move_uploaded_file($song['tmp_name'], $songpath) && move_uploaded_file($image['tmp_name'], $imagepath)) {
                echo "Upload Successfully!";

                require_once "db-connect.php";
                $qry = "INSERT INTO beatvibe VALUES(0, '$genre', '$artist', '$songname', '$imagename')";

                if($conn->query($qry)){
                    echo "Data Inserted Successfully!";
                } else {
                    echo $conn->error;
                }

                $conn->close();
            } else {
                echo "Error";
            }
        }
    ?>
</body>
</html>
