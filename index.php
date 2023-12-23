<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeatVibe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<style>
    #main{
        background-image: linear-gradient(rgba(0,0,0,.6),rgba(0,0,0,.6)),url("./components/bg.jpeg");
        height:90vh;
        width:100%;
    }  
    #font1{
        font-size:50px;
        color:white;
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
        </style>    
<body>
    <div style="background-color:black;" >
        <div id="main">
<!-- navbar -->
            <nav class="navbar">
            <div class="container-fluid mt-3">
                <a class="navbar-brand ms-3" style="color:white";>BeatVibe</a>
                <form class="d-flex">
                    <input type="submit" name="login" value="login" class="ps-2 pe-2  me-3 mt-2">
                </form>
            </div>
            </nav>
<!-- first-div  -->
            <div class="container text-center">
                <div class="row mt-5">
                    <div class="col" id="font1">
                    Infinite Harmony Awaits
                    </div>
                    <div style="color:white" class="mb-5">
                    Your Personal Sound Sanctuary
                    </div>
                    <div class="mt-5">
                        <a href="home.php"><button type="button" class="btn btn-outline-warning">Try Free Trail</button>
</a>
                    </div>
                </div>
            </div>
             </div>
<!-- 2nd -->
        <div>
            <h1 style="font-size:50px; text-align:center; color:white; margin-top: 70px; " >Listen to your favourite artist </h1>
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="./components/a3.jpg" class="d-block w-100" alt="..." style="">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="./components/tailor.jpg" class="d-block w-100 " alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                    </div>
                    <!-- <div class="carousel-item">
                    <img src="./components/un.jpg" class="d-block w-100" style="height:800px" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                    </div> -->
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
         </div>
<!-- 3rd -->
            <div data-bs-theme="dark">
                <h1 style="text-align:center; color:white; margin-top:200px;" class="mb-5">In BeatVibe listen With Your mood</h1>
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
                 </div>
            </div>
            <footer class="bg-dark text-white py-3 ">
                <div class="container d-flex justify-content-between flex-wrap mt-5">
                    <div class="mb-2 ">
                        <p>&copy; 2023 BeatVibe</p>
                    </div>
                    <div class="d-flex flex-wrap">
                        <p class="me-3">Privacy Notice</p>
                        <p class="me-3">Terms and Conditions</p>
                        <p class="me-3">Cookie Settings</p>
                        <p class="me-3">Accessibility Statement</p>
                        <p>Contact</p>
                    </div>
                </div>
            </footer>

           
</div> 
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>