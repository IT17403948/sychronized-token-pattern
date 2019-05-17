<?php
/**
 * Created by PhpStorm.
 * User: Kavi
 * Date: 5/17/2019
 * Time: 2:15 PM
 */
require_once 'token1.php';
$val = $_POST["token"];
if(isset($_POST['updatepost'])){
    if(token::checkToken($val,$_COOKIE['SesT'])){
        echo "<h2> Valid request:  ".$_POST['updatepost']."</h2>";
    }
    else{
        echo "<h2> Invalid request(csrf token does not match) :  ".$_POST['updatepost']."</h2>";
    }
}
?>