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
    <title>User Page (ของหวาน)</title>
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
        <a href="logout.php" class="btn btn-danger"><p style="text-align:right">Logout</p></a>
    </div>

    <div class="navbar" style="margin-left: 84.75%;">
        <a href="user_dessert.php"><i class="fa fa-fw fa-home"></i> Home</a>
        <a href="#"><i class="fa fa-fw fa-envelope"></i> Contact</a>
        <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
    </div>
    
    <img src="logo.png" style="margin-left: 4%;" alt="bell" width="150" height="100">
    <br>

    <!-- Load an icon library -->
    <link href="user.css" rel="stylesheet" crossorigin="anonymous">


    <div class="column left">
        <div class="card">
            <div class="container">
                <h1 style="color:#6095ED;">ชนิดอาหาร</h1>
                <p><button><a href="user.php">ข้าว</a></button></p>
                <p><button><a href="user_dessert.php">ของหวาน</a></button></p>
            </div>
        </div>
    </div>
		
    <div class="column middle">
        <div class="card">
            <div class="container">
                <br>
                <img src="ChocolateCake.png" style="width:20%">
                <h1 style="color:#6095ED;">Chocolate Cake</h1>
                <p class="price">130 บาทต่อ 1 ส่วน (เต็มชิ้น 780 บาท)</p>
                <p><button>Buy</button></p>
            </div>
        </div>
        
        <div class="card">
            <div class="container">
                <br>
                <img src="VanillaMacarons.jpg" style="width:20%">
                <h1 style="color:#6095ED;">มาการองรสวานิลลา</h1>
                <p class="Price">30 บาทต่อชิ้น</p>
                <p><button>Buy</button></p>
            </div>
        </div>
    </div>
        
    <div class="column right">
        <div class="card">
            <div class="container">
                <br>   
                <img src="strawberrypudding.jpg" style="width:20%">
                <h1 style="color:#6095ED;">Strawberry Pudding</h1>
                <p class="Price">90 บาท</p>
                <p><button>Buy</button></p>
            </div>
        </div>

        <div class="card">
            <div class="container">
                <br>   
                <img src="ChristmasCake.jpg" style="width:20%">
                <h1 style="color:#6095ED;">เค้กหน้าคริสมาสต์</h1>
                <p class="Price">90 บาท</p>
                <p><button>Buy</button></p>
            </div>
        </div>
    </div>

</body>



</html>