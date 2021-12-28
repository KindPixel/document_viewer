<?php
	session_start();
	require '../database/singleton.php';


    $login=$_POST['login'];
    $namecomp=$_POST['namecomp'];
    $allName=$_POST['allName'];
    $email=$_POST['email'];
    $id = $_POST['id'];
    $null = "null";

    $requestl = $pdo->prepare("select * from users WHERE login=:login AND id != :id");
    $requestl->bindParam(":login", $login, PDO::PARAM_STR, 100);
    $requestl->bindParam(":id", $id, PDO::PARAM_STR, 100);
    $requestl->execute();
    $rownumberl = count($requestl->fetchAll());

    if ($rownumberl != 0)
    {
        echo 201;
        $requestl=null;
        die();
    }


    $requestm = $pdo->prepare("select * from users WHERE mail=:mail AND id != :id");
    $requestm->bindParam(":mail", $email, PDO::PARAM_STR, 100);
    $requestm->bindParam(":id", $id, PDO::PARAM_STR, 100);
    $requestm->execute();
    $rownumberm = count($requestm->fetchAll());

    if ($rownumberm != 0)
    {
        echo 202;
        $requestm=null;
        die();
    }

    $request = $pdo->prepare("UPDATE users SET login = :login , namecomp = :namecomp, allName = :allName , mail = :mail WHERE id = :id");

    $request->bindParam(":login",$login, PDO::PARAM_STR, 100);
    $request->bindParam(":namecomp", $namecomp, PDO::PARAM_STR, 100);
    $request->bindParam(":allName", $allName, PDO::PARAM_STR, 100);
    $request->bindParam(":mail", $email, PDO::PARAM_STR, 100);
    $request->bindParam(":id",$id, PDO::PARAM_STR, 100);


    if ($request->execute()) {
        echo 200;
        $request=null;
    }
    else {
        echo 203;
        $request=null;
    }
