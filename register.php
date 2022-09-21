<?php
    session_start();
    if(isset($_SESSION['id'])){
    header("location:index.php");
    die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><center>สมัครสมาชิก</center></h1>
    <hr>
    <center>
    <table style="border:2px solid black;width:20%">
        <tr><td style="background-color: #6cd2fe;"colspan="2">เข้าสู่ระบบ</td></tr>
        <tr><td>ชื่อบัญชี :</td><td><input type="user"name="user" size ="25"></td></tr>
        <tr><td>รหัสผ่าน :</td><td><input type="password"name="pass" size ="25"></td></tr>
        <tr><td>ชื่อ-นามสกุล :</td><td><input type="name"name="name" size ="25"></td></tr>
        <tr>
            <td rowspan="4">เพศ</td>
            <tr><td><input type="radio"name="gender"value="man">ชาย</td></tr>
            <tr><td><input type="radio"name="gender"value="woman">หญิง</td></tr>
            <tr><td><input type="radio"name="gender"value="more">อื่นๆ</td></tr>
        </tr>
        <tr><td>อีเมล :</td><td><input type="email"name="email" size ="25"></td></tr><br>
        <tr><td colspan ="2" align="center"><input type="submit" value="สมัครสมาชิก"></td></tr>
    </table><br>
    <center><a href="index.php">กลับไปหน้าหลัก</a></center>
</body>
</html>