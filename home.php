<?php
if (isset($_GET["genre"])) {
    $selectedMood = $_GET["genre"];
    header("Location: genre.php?genre=$selectedMood");
    exit();
}
if (isset($_GET["artist"])) {
    $artist = $_GET["artist"];
    header("Location: artist.php?artist=$artist");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<style>
    #main{
        background-image: linear-gradient(rgba(0,0,0,.6),rgba(0,0,0,.6)),url("./components/home.jpeg");
        height:120vh;
        width:100%;
    } 
    .card {
            transition: transform 0.3s, opacity 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: scale(1.1);
            opacity: 0.9;
            box-shadow: 0 4px 8px rgba(255, 0, 0, 0.5);
        }
        a {
            color: inherit;
            text-decoration: none;
        }
        .custom-card .card-body {
            background-color: #f4d58d !important; 
        }
        body {
        background-color: black;
        color: white;
    }

</style>

<body>
    <div >
        <div id="main">
            <nav class="navbar">
                <div class="container-fluid mt-3">
                    <a class="navbar-brand ms-3" style="color:white";>BeatVibe</a>
                    <form class="d-flex">
                        <input type="submit" name="logout" value="logout" class="ps-2 pe-2  me-3 mt-2">
                    </form>
                </div>
            </nav>
            
            <div class="container text-center">
                <h2 class="mx-auto mt-5">Where Words Fail, Music Speaks</h2>
                <form method="GET" action="">
                    <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search" oninput="this.form.submit()">
                </form>
            </div>
            <div data-bs-theme="dark">
                <h1 style="text-align:center; color:white; margin-top:100px;" class="mb-5">Choose Your Current MooD</h1>
                <div class="container " >
                    <div class="row ">
                        <div class="col-lg-2 col-md-4 col-sm-6 mb-3">
                        <div class="card mx-auto" style="width: 12rem;">
                        <a href="?genre=love" class="card-link">
                            <img src="./components/cardinlove.jpeg" class="card-img-top img-fluid" alt="..." style="height: 150px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title">IN LOVE</h5>
                                <p class="card-text">Celebrate romance with heartfelt melodies.</p>
                            </div>
                        </a>
                        </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 mb-3">
                            <div class="card mx-auto"style="width: 12rem;">
                            <a href="?genre=wanderlust" class="card-link">
                            <img src="./components/cardtravel.jpeg" class="card-img-top img-fluid" alt="..."style="height:150px;">
                            <div class="card-body">
                                <h5 class="card-title">Wanderlust</h5>
                                <p class="card-text">Explore with music that takes you places. Click for a journey.</p>
                            </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 mb-3">
                            <div class="card mx-auto"style="width: 12rem;">
                            <a href="?genre=empowered" class="card-link">
                            <img src="./components/cardmotivation.jpg" class="card-img-top img-fluid" alt="..."style="height:150px;">
                            <div class="card-body">
                                <h5 class="card-title">Empowered</h5>
                                <p class="card-text">Empowering beats to drive you forward. Click for motivation!</p>
                            </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 mb-3 ">
                            <div class="card mx-auto"style="width: 12rem;">
                            <a href="?genre=party" class="card-link">
                            <img src="./components/cardparty.jpg" class="card-img-top img-fluid" alt="..."style="height:150px;">
                            <div class="card-body">
                                <h5 class="card-title">PARTY</h5>
                                <p class="card-text">Get the party started with beats that make you move.</p>
                            </div>
                            </div>
                         </a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 mb-3 ">
                            <div class="card mx-auto"style="width: 12rem;"> 
                            <a href="?genre=sad" class="card-link">
                            <img src="./components/cardsad.webp" class="card-img-top img-fluid" alt="..."style="height:150px;">
                            <div class="card-body">
                                <h5 class="card-title">SAD</h5>
                                <p class="card-text">Reflective melodies for those quiet moments.</p>
                            </div>
                            </div>
                             </a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 mb-3 ">
                            <div class="card mx-auto"style="width: 12rem;">
                            <a href="?genre=happy" class="card-link">
                            <img src="./components/cardchill.jpg" class="card-img-top img-fluid" alt="..."style="height:150px;">
                            <div class="card-body">
                                <h5 class="card-title">Happy</h5>
                                <p class="card-text">Feel-good tunes to lift your spirits. Click for pure joy!</p>
                            </div>
                            </div>
                              </a>
                        </div>
                    </div>
                    </div>
                <div style="background-color:black;">
                    <h1 class=" text-center mt-5 mb-5 " style="color:white">The Trending Music</h1>
                        <div class="container">
                            <div class="row">
                                <?php
                                 require_once("db-connect.php");
                                $qry = "SELECT * FROM beatvibe";
                                $res = $conn->query($qry);
                                $count = 0;
                                while ($sng = $res->fetch_assoc()) {
                                    if ($count % 3 === 0) {
                                        echo '</div><div class="row">';
                                    }
                                    ?>
                                    <div class="col-md-4 mb-3">
                                        <div class="card custom-card">
                                        <a href="play.php?id=<?php echo $sng['id']; ?>">
                                        <div class="card-body text-dark">
                                        <img src="<?php echo "image" . "/" . $sng['photo']; ?>" style="height: 50px; width: 50px;">
                                        <?php echo $sng['music']; ?>
                                            </div>
                                    
                                    </a>
                                            
                                        </div>
                                    </div>
                                    <?php
                                    $count++;
                                    if ($count >= 9) {
                                        break;
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        </div>
                        
                        <div>
                            <h1 class="mt-5 mb-5 text-center">Choose Your favourite Artist </h1>
                            <?php
                                    $pi=array(1=>array("url"=>"./components/a3.jpg","name"=>"arijit"),2=>array("url"=>"./components/honey.jpg","name"=>"Honey"),3=>array("url"=>"./components/sid.jpeg","name"=>"Sid Sriram"),4=>array("url"=>"./components/sonunigam.jpg","name"=>"Sonu Nigam"),5=>array("url"=>"./components/sanam.jpg","name"=>"sanam"));?>
                                    <div class="d-flex flex-wrap justify-content-between mt-5 mb-5">
                                    <?php
                                    foreach($pi as $k => $v) {
                                    ?> 
                                         <div class="card border-0 text-center mt-5 mx-auto " style="width: 18rem; background:none;">
                                         <a href="?artist=<?php echo $v['name']; ?>" class="card-link">
                                        <img src="<?php echo $v['url']?>" class="card-img-top rounded-circle mx-auto" style="width:150px; height: 150px; object-fit: cover;">
                                        <div class="card-body">
                                            <p class="card-text"><?php echo $v['name']?></p>
                                        </div>
                                    </a>
                                        </div>
                                      <?php
                                    }
                                    ?>
                            <!-- <div>
                                <div class="card border-0 text-center" style="width: 18rem; background:none;">
                                    <img src="./components/a3.jpg" class="card-img-top rounded-circle mx-auto" alt="..."style="width: 150px; height: 150px; object-fit: cover;">
                                    <div class="card-body">
                                        <p class="card-text">Arijit</p>
                                    </div>
                                </div>
                            </div> -->

                        </div>
                        

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>