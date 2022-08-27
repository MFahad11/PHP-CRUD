<?php
    include("../Database/dbase_connect.php");
    $fname=$lname=$email=$number=$password=$province=$city=$address=$zip=" ";
    if(!isset($_SESSION["login"])){
        if(isset($_POST['submit']) && $_POST['submit']=="Submit"){
            if(($_POST["fname"]=="")||($_POST["lname"]=="")
            ||($_POST["email"]=="")||($_POST["number"]=="")||($_POST["password"]=="")||($_POST["province"]=="")||($_POST["city"]=="")||($_POST["address"]=="")||($_POST["zip"]=="")){
                header('Location: register.php');
            }
            else{
                $fname=$_POST["fname"];
                $lname=$_POST["lname"];
                $email=$_POST["email"];
                $number=$_POST["number"];
                $password=$_POST["password"];
                $province=$_POST["province"];
                $city=$_POST["city"];
                $address=$_POST["address"];
                $zip=$_POST["zip"];
                $sql="INSERT INTO users (First_name, Last_name, Email, Number, Pass, Province,City,Address,Zip)
                VALUE ('$fname', '$lname', '$email', '$number', '$password','$province','$city','$address','$zip')";
                mysqli_query($con, $sql);
                header('Location: login.php');
            }
        }
    }
    elseif(isset($_SESSION["login"])&& $_SESSION['login']==2){
        header("location:../admin/dashboard.php");
    }
    else{
        header("location:main_page.php");
    }
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <title>Registration</title>
    <style>
        body{
            background-color: #E21B70;
        }
    </style>
</head>

<body>
    <div class="mb-5">
        <img src="../assets/images/a1.PNG" style="margin-left:40%;margin-top: 20px; width: 20vw;" alt="">
    </div>
    <div class="container w-50">
        <form action="register.php" method="post" class="row g-3 needs-validation text-light fs-5 fw-bold" novalidate>
            <div class="col-md-6 mb-2">
              <label for="validationCustom01" class="form-label">First name</label>
              <input type="text" class="form-control" name="fname" id="validationCustom01" placeholder="Fahad">
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-6">
              <label for="validationCustom02" class="form-label">Last name</label>
              <input type="text" class="form-control" name="lname" id="validationCustom02" placeholder="Abdul Ahad">
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-6 mb-2">
                <label for="Email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="Email" placeholder="abcd@gmail.com">
            </div>
            <div class="col-md-6">
                <label for="Phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" name="number" id="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="03******">
            </div>
            <div class="col-md-6 mb-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            <div class="col-md-6">
                <label for="confirmpass" class="form-label">Confirm password</label>
                <input type="password" class="form-control" id="confirmpass">
            </div>
            <div class="col-md-4">
                <label for="province" class="form-label">Province</label>
                <select class="form-select" name="province" id="province" required>
                  <option selected disabled value="">-- Select Province --</option>
                  <option value="sindh">Sindh</option>
                  <option value="punjab">Punjab</option>
                  <option value="balochistan">Balochistan</option>
                  <option value="kpk">KPK</option>
                </select>
                <div class="invalid-feedback">
                  Please select a Province.
                </div>
            </div>
            <div class="col-md-4">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Karachi, Lahore, .......">
                <div class="invalid-feedback">
                  Please provide a valid city.
                </div>
            </div>
            <div class="col-md-2">
                <label for="zip" class="form-label">Zip</label>
                <input type="text" class="form-control" name="zip" id="zip" required>
                <div class="invalid-feedback">
                  Please provide a valid zip.
                </div>
            </div>
            <div class="col-12 mb-2">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" name="address" id="inputAddress" placeholder="Apartment, studio, or floor">
            </div>
            <div class="col-12 mb-2">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Agree to the Terms
                    </label>
                </div>
            </div>
            <div>
                <input type="submit" name="submit" value="Submit" class="btn btn-dark w-50" style="margin-left: 25%;"></input>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</body>

</html>