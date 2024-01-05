<?php
    require_once("db-connect.php");
    if (isset($_GET['id'])) {
        $songId = $_GET['id'];
        $qry = "SELECT * FROM beatvibe WHERE id = $songId";
        $res = $conn->query($qry);
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Player</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    *{
       margin:0;
       padding:0;
       box-sizing: border-box;
    }
    body{
        width:100%;
        height:100vh;
        display:flex;
        justify-content:center;
        align-items:center;
        background: #012a4a;
    }
    .music-player{
        width:350px;
        height:550px;
        border-radius:20px;
        background:rgba(255, 255, 255, 0.08);
        box-shadow: 0 40px 100px rgba(255,255,255,0.1);
        padding:30px;
        color:#d5eebb;
    }
    .music-name,
    .artist-name{
        text-align:center;
        text-transform:capitalize;
    }
    .disk img{
        position:relative;
        display:block;
        margin:40px auto;
        width:180px;
        height:180px;
        border-radius:50%;
        border:2px solid #d5eebb;
        background-size:cover;
        box-shadow:0 0 0 10px rgba(255, 255, 255, 0.08);
        background-image: url("<?php echo "image/" . $sng['photo']; ?>");
    }
    /* .song-slider{
        width:100%;
        position:relative;
    }
    .seek-bar{
        -webkit-appearance:none;
        width:100%;
        height:5px;
        border-radius:10px;
        background:#7fc8a9;
        cursor: pointer;
        overflow:hidden;
    }
    .seek-bar::-webkit-slider-thumb{
        -webkit-appearance: none;
        width: 1px;
        height: 20px;
        box-shadow:-400px 0 0 400px #d5eebb ;

    }
    .current-time,
    .song-duration{
        font-size:14px;
    }
    .song-duration{
        position:absolute;
        right: 0;
    } */
    .controls{
        width: 100%;
        display:flex;
        justify-content:center;
        align-items: center;
        margin:auto;
        margin-top:20px;
    }
    /* .play-btn{
        position:relative;
        width:60px;
        height:60px;
        border-radius:50%;
        background:white;
        cursor: pointer; 
        border:none; */
/* 
    }
    .play-btn span{
        position: absolute;
        top:50%;
        left:25%;
        transform:translateY(-50%);
        width:10px;
        height:30px;
        border-radius: 2px;
        background: #5f7a61;
        transition: .5s;
    }
    .play-btn span:nth-child(2){
        left:55%;
        transform-origin:center;
    } */
    /* .play-btn.pause span:nth-child(2){
        transform:translateY(-50%) scaleY(0);
    } */
</style>
<body>
    <audio src="" id="songs"></audio>
     <?php
    // require_once("db-connect.php");
    // if (isset($_GET['id'])) {
    //     $songId = $_GET['id'];
    //     $qry = "SELECT * FROM beatvibe WHERE id = $songId";
    //     $res = $conn->query($qry);

        if ($res->num_rows > 0) {
            $sng = $res->fetch_assoc();
            ?>
                <div class="music-player">
        <h1 class="music-name"><?php echo $sng['music']; ?></h1>
        <p class="artist-name"><?php echo $sng['artist']; ?></p>

        <div class="disk"><img src="<?php echo "image/" . $sng['photo']; ?>" > </div>
        <!-- <div class="song-slider">
            <input type="range" value="0" class="seek-bar">
            <span class="current-time">00:00</span>
            <span class="song-duration">00:00</span>
        </div> -->
        <audio autoplay controls class="audio-player" style="width:100%">
                        <source src="<?php echo "audio/" . $sng['music']; ?>" type="audio/mp3">
        </audio>
        <!-- <div class="controls">
            <button class="play-btn">
                <span></span>
                <span></span>
            </button>
        </div> -->
    </div>
                    
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
<!-- 
    <div class="music-player">
        <h1 class="music-name"><?php echo $sng['music']; ?></h1>
        <p class="artist-name"><?php echo $sng['artist']; ?></p>

        <div class="disk"><img src="<?php echo "image/" . $sng['photo']; ?>" > </div>
        <div class="song-slider">
            <input type="range" value="0" class="seek-bar">
            <span class="current-time">00:00</span>
            <span class="song-duration">00:00</span>
        </div>
        <div class="controls">
            <button class="play-btn">
                <span></span>
                <span></span>
            </button>
        </div>
    </div> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
