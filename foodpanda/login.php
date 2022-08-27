<?php
    include("../Database/dbase_connect.php");
    if(!isset($_SESSION["login"]))
    {
        if(isset($_POST['submit']) && $_POST['submit']=="Login"){
            if(($_POST["email"]=="")||($_POST["password"]=="")){
                header("location:../foodpanda/login.php");
            }
            else{
                $password=$_POST["password"];
                $email=$_POST["email"];
                if($email=="admin09@foodpanda.pk" && $password=="09876"){
                    $_SESSION['login']=2;
                    header("location:../admin/dashboard.php");
                }
                else{
                    $sql="SELECT * FROM users where Pass='".$password."' AND Email='".$email."'";
                    $result = mysqli_query($con, $sql);
                    if($result->num_rows==1){
                        $_SESSION['login']=1;
                        header('Location: main_page.php');
                    }                   
                }
            }
        }
    }
    else if($_SESSION['login']==1){
        header("location:main_page.php");
    }
    else{
        header("location:../admin/dashboard.php");
    }
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <title>Login</title>
    <style>
        body{
            background-color: #E21B70;
            color: white;
        }
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
    </style>
</head>

<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="../assets/images/loginlog.jpg" width="75%"
                        class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="" method="post">
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <p class="lead fw-normal mb-0 me-3">Sign in with</p>
                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="fab fa-facebook-f"></i>
                            </button>

                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="fab fa-twitter"></i>
                            </button>

                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="fab fa-linkedin-in"></i>
                            </button>
                        </div>

                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0">Or</p>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="form3Example3" name="email" class="form-control form-control-lg"
                                placeholder="Enter a valid email address" />
                            <label class="form-label" for="form3Example3">Email address</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
                                placeholder="Enter password" />
                            <label class="form-label" for="form3Example4">Password</label>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">
                                    Remember me
                                </label>
                            </div>
                            <a href="#!" class="text-light ">Forgot password?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <input type="submit" name="submit" value="Login" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;"></input>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="register.php">Register</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>        
    </section>
    <script src="https://kit.fontawesome.com/69ee489e1c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</body>

</html>