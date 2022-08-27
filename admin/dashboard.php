<?php
include('../Database/dbase_connect.php');
if(!isset($_SESSION["login"])){
    header("location:../foodpanda/login.php");
}
elseif(isset($_SESSION["login"])&& $_SESSION['login']==1){
    header("location:../foodpanda/main_page.php");
}
$query="SELECT * from users;";
$result=mysqli_query($con,$query);
$query1="SELECT * from users;";
$total=mysqli_query($con,$query1);
if(isset($_GET['pass']) && $_GET['pass'] <>''){
    $User_pass = $_GET['pass'];
    $query = "DELETE FROM users WHERE Pass= '$User_pass';";
    $del = mysqli_query($con, $query);
    header("location:dashboard.php");
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Admin Panel</title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name" style="margin-bottom:10px ;">
            <img src="a1.PNG" alt="">
        </div>
        <ul>
            <li><img src="dashboard (2).png" alt="">&nbsp; <span>Dashboard</span> </li>
            <li><i class="fa-solid fa-users" style="font-size: 2.5rem;"></i>&nbsp;<span>Users</span> </li>
            <li><i class="fas fa-shopping-bag" style="font-size: 2.5rem;"></i>&nbsp;<span>Total Orders</span> </li>
            <li><i class="fa-solid fa-truck-fast" style="font-size: 2.5rem;"></i>&nbsp;<span>Pending Orders</span> </li>
            <li><i class="fa-solid fa-sack-dollar" style="font-size: 2.5rem;"></i>&nbsp;<span>Income</span> </li>
            <li><img src="help-web-button.png" alt="">&nbsp; <span>Help</span></li>
            <li><img src="settings.png" alt="">&nbsp;<span>Settings</span> </li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="search.png" alt=""></button>
                </div>
                <div class="user">
                    <a href="../session/session_destroy.php" class="btn" disabled>Logout</a>
                    <img src="notifications.png" alt="">
                    <div class="img-case">
                        <img src="user.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1><?php echo(mysqli_num_rows($total)); ?></h1>
                        <h3>Users</h3>
                    </div>
                    <i class="fa-solid fa-users" style="font-size: 2.5rem;"></i>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>12000</h1>
                        <h3>Total Orders</h3>
                    </div>
                    <i class="fas fa-shopping-bag" style="font-size: 2.5rem;"></i>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>150</h1>
                        <h3>Pending Orders</h3>
                    </div>
                    <i class="fa-solid fa-truck-fast" style="font-size: 2.5rem;"></i>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>350000</h1>
                        <h3>Income</h3>
                    </div>
                    <i class="fa-solid fa-sack-dollar" style="font-size: 2.5rem;"></i>
                </div>
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Registered Users</h2>
                    </div>
                    <table>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th style="width:25%;">Email</th>
                            <th>Province</th>
                            <th>City</th>
                            <th>Phone No.</th>
                        </tr>
                        <?php
                        $count=0;
                        while($row=mysqli_fetch_assoc($result)){
                            $count+=1;
                        ?>
                        <tr>
                            <td><?php echo($count);?></td>
                            <td><?php echo($row["First_name"]." ".$row["Last_name"]);?></td>
                            <td><?php echo($row["Email"]); ?></td>
                            <td><?php echo(ucfirst(($row["Province"]))); ?></td>
                            <td><?php echo($row["City"]); ?></td>
                            <td><?php echo($row["Number"]); ?></td>
                            <td><a href="update_stu.php?pass=<?php echo($row["Pass"]);?> & check=u & fname=<?php echo($row['First_name']);?> & lname=<?php echo($row['Last_name']);?> & address=<?php echo($row['Address']);?> & zip=<?php echo($row['Zip']);?> & email=<?php echo($row['Email']);?> & province=<?php echo($row['Province']);?> & city=<?php echo($row['City']);?> & number=<?php echo($row['Number']);?>" class="btn">Update</a><a href="dashboard.php?pass=<?php echo($row["Pass"]);?>" class="btn">Delete</a></td>
                        </tr>
                        <?php
                        }?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/69ee489e1c.js" crossorigin="anonymous"></script>
</body>
</html>