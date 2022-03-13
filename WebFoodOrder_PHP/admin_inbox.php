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
    <title>Admin Page</title>
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
        <a href="logout.php" class="btn btn-danger"><p style="text-align:right">Logout</p></a>
    </div>
    <br>
    <a href="admin.php"><p style="margin-left: 8%;"><button class="button">Back</button></p></a>
</body>
</html>