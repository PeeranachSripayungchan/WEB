<?php 

    session_start();
    require_once 'config/db.php';
    if (!isset($_SESSION['user_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: signin.php');
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>


<body bgcolor="D3D3D3">
    <div class="container">
        <?php 

            if (isset($_SESSION['user_login'])) {
                $user_id = $_SESSION['user_login'];
                $stmt = $conn->query("SELECT * FROM users WHERE id = $user_id");
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
            }
        ?>
        <h3 class="mt-4"><p style="text-align:right">Welcome, <?php echo $row['firstname'] . ' ' . $row['lastname'] ?></p></h3>
    </div>

    <div class="navbar" style="margin-left: 79.4%;">
        <button type="button" style="background-color: #1e90ff; border-radius: 6px;"><a href="user.php" style="color: #ffffff;"><i class="fa fa-fw fa-home"></i> Home</a></button>
        <button type="button" style="background-color: #1e90ff; border-radius: 6px;"><a href="contact.php" style="color: #ffffff;"><i class="fa fa-fw fa-envelope"></i> Contact</a></button>
        <button type="button" style="background-color: #1e90ff; border-radius: 6px;"><a href="profile.php" style="color: #ffffff;"><i class="fa fa-fw fa-user"></i> Profile</a></button>
        <button type="button" style="background-color: #e74c3c; border-radius: 6px;"><a href="logout.php" style="color: #ffffff;"><i class="fa fa-close"></i>Logout</a></button>
    </div>
    
    <img src="logo.png" style="margin-left: 4%;" alt="bell" width="150" height="100">
    <br>

    <div style="background-color:#ECF0F1;margin-left: 20%;border-radius: 6px;height: 850px;width: 750px">
    <h1><p style="color:#0DA9BA" align="center">Contact</p></h1>
    <body bgcolor = "D3D3D3">
    <img src="Map.jpg" width="750" height="550">
    <h2><p align="center" style="color:#0DA9BA">Telephone Number: 080-000-0000</p></h2>
    <h2><p align="center" style="color:#0DA9BA">Address: 99/999 ถ.เอกชัย เขตสยาม แขวงสยาม กรุงเทพฯ </p></h2>




</body>



</html>