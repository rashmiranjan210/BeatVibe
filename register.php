<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>REGISTER</title>
    <style>
        .bg-img{
            background-image: url("./Images/wp-studio.jpg");
            height:100vh;
            width:100%;
            background-position:center;
            background-size:cover;
        }
        .card{
            background-image: url("./Images/wp-studio.jpg");
            /* height:100vh; */
            width:100%;
            background-position:center;
            background-size:cover;
            margin-top: 30%;
        }
        input[type=text],input[type=password]{
            background-color:#f1f1f1;
        }
    </style>
</head>
<body>
    <?php
    //include_once "login.php";
    
    if(isset($_POST['register'])){
        require_once "db-connect.php";
        $email = $_POST['email'];
        $pass = $_POST['password'];
        var_dump($_POST);
        $qry = "INSERT INTO register(email, pass) VALUES('$email', '$pass')";
        if($conn->query($qry)){
            $msg="Account Created. Login to continue.";
            header("location:login.php");
        } else {
            echo $conn->error;
        }
        $conn->close();
        
    }
    ?>
    <div class="bg-img">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card text-light bg-transparent shadow-lg border border-1 border-dark">
                    <div class="card-header ">
                        <h2>Create An Account</h2>
                    </div>
                    <div class="card-body">
                        <?php
                        if(isset($msg)){
                            ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <?php echo $msg; ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php
                        }
                        ?>
                        <form action="register.php" method="post">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control mb-2" placeholder="Enter Email">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control mb-2" placeholder="Enter Password">
                        <input type="submit" value="Register" class="btn btn-primary mt-3" name="register">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>

