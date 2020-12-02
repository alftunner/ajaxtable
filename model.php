<?php
require_once ("dbconnect.php");

if (isset($_POST['email']) && isset($_POST['password']))
{
    $query_insert = "insert into table_auth (email, password) VALUES ('{$_POST['email']}', '{$_POST['password']}')";
    $insert = $pdo->exec($query_insert);
    if($insert)
    {
        header('Refresh: 1; url=/addsuccess.php');
    }
    else{
        header('Refresh: 0; url=/addfail.php');
    }
}