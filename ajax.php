<?php
require_once ("dbconnect.php");

if($_POST['flag'] == "flag")
{
    $query = "select id, email, password from table_auth";
    $result = $pdo->query($query);
    $arResult = [];
    while($auth = $result->fetch())
    {
        $arResult[$auth['id']]=array('email'=>$auth['email'],'password'=>$auth['password']);
    }
    echo json_encode($arResult);
}