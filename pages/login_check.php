<?php
session_start();
if($_SESSION['active_user']=='') {
  header("Location: http://localhost/dashboard/index.php");
} else {
    if($_SERVER['REQUEST_URI']=="/dashboard/pages/login_check.php")
        header("Location: http://localhost/dashboard/index.php");
}

?>