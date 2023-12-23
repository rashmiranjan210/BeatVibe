<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Playlist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php
    require_once("db-connect.php");
    if (isset($_GET['genre'])) {
        $selectedGenre = $_GET['genre'];
    }
    $qry = "SELECT * FROM beatvibe WHERE genre = '$selectedGenre'";
    $res = $conn->query($qry);
?>
    <table class="table ms-5">
        <tbody>
            <?php while ($sng = $res->fetch_assoc()){ ?>
                <tr>
                    <td><img src="<?php echo "image" . "/" . $sng['photo']; ?>" style="height: 50px; width: 50px;"></td>
                    <td><?php echo $sng['artist']; ?></td>
                    <td><?php echo $sng['genre'];?></td>
                    <td>
                        <a href="play.php?id=<?php echo $sng['id']; ?>" class="btn btn-primary">Play</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>