<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Food Order - Log In</title>
    
    <link rel="stylesheet" href="index.css">
</head>
<body>
<p align="center"><img src="logo.png" heigth="200" width="250" /></p>
    <div class="container">
        <h3 class="mt-4" style="font-size:40px"><p align="center">เข้าสู่ระบบ</p></h3>
        <hr>
        <form action="signin_db.php" method="post">
            <?php if(isset($_SESSION['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php 
                        echo "<center>";
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                        echo "</center>";
                    ?>
                </div>
            <?php } ?>
            <?php if(isset($_SESSION['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?php 
                        echo "<center>";
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                        echo "</center>";
                    ?>
                </div>
            <?php } ?>

            <table border = 1 align = "center"> 
                <tr>
                    <div class="mb-3">
                        <td><label for="email" class="form-label" style="font-size:24px">Email</label></td>
                        <td><input type="email" class="form-control" name="email" aria-describedby="email" style="height:24px; width:500px"></td>
                    </div>
                </tr> 
                <tr>
                    <div class="mb-3">
                        <td><label for="password" class="form-label" style="font-size:24px">Password</label></td>
                        <td><input type="password" class="form-control" name="password" style="height:24px; width:500px"></td>
                    </div>
                </tr> 
                <tr>
                    <td colspan = 2 align = right><button type="submit" name="signin" class="btn btn-primary" style="font-size:24px">Sign In</button><td>
                </tr> 
            </table> 
        </form>
        <hr>
        <p align="center" style="font-size:24px">ยังไม่เป็นสมาชิกใช่ไหม คลิ๊กที่นี่เพื่อ <a href="index.php">สมัครสมาชิก</a></p>
    </div>
    
</body>
</html>