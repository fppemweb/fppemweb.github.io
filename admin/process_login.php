<?php
require_once('connection.php');
date_default_timezone_set('Asia/Jakarta');

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $adminname = $_POST['adminname'];
    $password = $_POST['password'];

    $query = "SELECT `admin_id`, `last_login` FROM admin WHERE (adminname='$adminname' AND password='$password') OR (`email`='$adminname' AND `password`='$password')";
    $res = mysqli_query(connect(), $query);
    $row = mysqli_num_rows($res);

    $_SESSION['last_login'] = null;
    $admin_id = -1;
    if ($row > 0)
    {
        $arr = mysqli_fetch_array($res);
        $admin_id = $arr['admin_id'];
        $_SESSION['last_login'] = new DateTime($arr['last_login']);
        // Update last_login time
        $query = "UPDATE admin SET `last_login`=current_timestamp() WHERE `admin_id`='$admin_id';";
        $res = mysqli_query(connect(), $query);
        if (!$res)
        {
            echo 'Failed to query data';
            return;
        }

        $_SESSION['admin_id'] = $admin_id;
        $_SESSION["logged"] = true;
        $_SESSION["adminname"] = $adminname;  


        header('Location: dashboard/index.php');
    }
    else
    {
        header('Location: login.php?res=1');    // No match adminname or email with password
    }
}