<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>LOGIN</title>
    <style>
        input[type=submit]{
            width:100%;
        }
        input[type=text],input[type=password]{
            background-color:#f1f1f1;
        }
        #log{
            background-color:royalblue;
        }
        body{
            background-image: linear-gradient(rgba(0,0,0,.6),rgba(0,0,0,.6)),url("./components/bg.jpeg");            
            height:100vh;
            width:100%;
            /* background-position:center; */
            /* background-size:cover; */
        }
        .card{
            width:100%;
            /* background-position:center;
            background-size:cover; */
            margin-top:30%;
            backdrop-filter:blur(5px);
        }
        .side{
            background-image: url("./components/bg.jpeg");
            background-position:center;
            background-size:cover;
        }
    </style>
</head>
<body class="bg-img">
    <?php
    // include_once"head.php";
    if(isset($_POST['login'])){
        require_once "db-connect.php";
        $email = $_POST['email'];
        $password = $_POST['password'];
        $qry = "SELECT * FROM register WHERE email='$email' AND pass='$password'";
        $res = $conn->query($qry);
        if($res->num_rows>0){
            header("location:home.php");
        } else {
            // echo $conn->error;
            $msg="Invalid Email or Password.";
        }
    }
    if(isset($_POST["register"])){
        header("location:register.php");
    }
    ?>
    <!-- <img src="./Images/music-icon.jpg"> -->
    
    <div >
        <div class="row">
            <div class="col-md-6 mx-auto d-flex">
                <div class="card bg-transparent shadow-lg border border-1 border-dark ">
                    <div class="card-header">
                        <h2 class="text-light mt-5">Login Here</h2>
                    </div>
                    <div class="card-body text-light">
                        <?php
                        if(isset($msg)){
                            ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?php echo $msg; ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php
                        }
                        if(isset($sc)){
                            ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <?php echo $sc; ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php
                        }
                        ?>
                        <form action="login.php" method="post" class="formin ">
                        <label for="email">Email:</label>
                        <input type="text" name="email" class="form-control mb-2" placeholder="Enter Email">
                        <label for="password">Password:</label>
                        <input type="password" name="password" class="form-control mb-2" placeholder="Enter Password">
                        <input type="checkbox" name="remember" >  Remember me<br>
                        <input type="submit" value="Login" class="btn btn-primary mt-3"  name="login" id="log"><br>
                        <label>Don't have an account?
                            <a href="register.php" value="signup now"name="register" >SignUp Now</a>
                        <!-- <input type="submit" value="SignUp now" class="btn btn-light mt-3" name="register"> -->
                        </label>
                        </form>
                    </div>
                </div>
                <div class=" side card shadow-lg border border-1 border-dark ">
                    
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>