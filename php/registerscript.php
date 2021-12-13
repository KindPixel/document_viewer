<?php
	require '../database/singleton.php';
    print_r($pdo);
	session_start();

    $login=$_POST['login'];
    $namecomp=$_POST['namecomp'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $acess=$_POST['access'];
    $null = "null";

    $hash = password_hash($password, PASSWORD_DEFAULT);
    
    $requestl = $pdo->prepare("select * from users where login=:login");
    $requestl->bindParam(":login", $login, PDO::PARAM_STR, 100);
    $requestl->execute();
    $rownumberl = count($requestl->fetchAll());

    if ($rownumberl != 0)
    {
        echo 201;
        $requestl=null;
        die();
    }

    $requestm = $pdo->prepare("select * from users where mail=:mail");
    $requestm->bindParam(":mail", $email, PDO::PARAM_STR, 100);
    $requestm->execute();
    $rownumberm = count($requestm->fetchAll());

    if ($rownumberm != 0)
    {
        echo 202;
        $requestm=null;
        die();
    }



    else{
        $request = $pdo->prepare("INSERT INTO `users`( `login`, `namecomp`, `mail`, `password`, `access`, `filesAccess`) 
        VALUES (:login,:namecomp,:mail,:password,:access, :null)");

        $request->bindParam(":login",$login, PDO::PARAM_STR, 100);
        $request->bindParam(":namecomp", $namecomp, PDO::PARAM_STR, 100);
        $request->bindParam(":mail", $email, PDO::PARAM_STR, 100);
        $request->bindParam(":password", $hash, PDO::PARAM_STR, 100);
        $request->bindParam(":access", $acess, PDO::PARAM_STR, 100);
        $request->bindParam(":null", $null, PDO::PARAM_STR, 100);

        if ($request->execute()) {
            echo 200;
            $request=null;
        } 
        else {
            echo 203;
            $request=null;
        }
    }
    
?>
