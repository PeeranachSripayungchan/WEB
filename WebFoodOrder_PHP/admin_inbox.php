<?php 

    session_start();
    require_once 'config/db.php';
    if (!isset($_SESSION['admin_login'])) {
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
    <title>Inbox Page</title>
</head>
<body bgcolor="D3D3D3">
    <link href="admin.css" rel="stylesheet" crossorigin="anonymous">
    <div class="container">
        <?php 

            if (isset($_SESSION['admin_login'])) {
                $admin_id = $_SESSION['admin_login'];
                $stmt = $conn->query("SELECT * FROM users WHERE id = $admin_id");
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
            }
        ?>
        <h3 class="mt-4"><p style="text-align:right">Welcome Admin, <?php echo $row['firstname'] . ' ' . $row['lastname'] ?></p></h3>
        <div class="navbar" style="margin-left: 96%;">
            <button type="button" style="background-color: #e74c3c; border-radius: 6px;"><a href="logout.php" style="color: #ffffff;"><i class="fa fa-close"></i>Logout</a></button>
        </div>
    </div>
    <br>
    <button type="button" style="background-color: #1e90ff; border-radius: 6px; font-size: 32px"><a href="admin.php" style="color: #ffffff;">Back</a></button>
</body>
</html>