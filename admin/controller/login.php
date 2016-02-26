<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2016-02-26
 * Time: 5:06 PM
 */
if($_POST && isset($_POST['username'], $_POST['password'])){

    if($_POST['username'] == 'admin' && $_POST['password'] == 'admin'){
        header('Location: ../views/adminHome.php');
    }
}