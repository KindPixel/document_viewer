<?php
	require '../database/singleton.php';
    print_r($pdo);
	session_start();

    $login=$_POST['login'];
    $namecomp=$_POST['namecomp'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $acess=$_POST['access'];

    $hash = password_hash($password, PASSWORD_DEFAULT);
    
    $request = $pdo->prepare("select * from users where mail=:login");
    $request->bindParam(":login", $email, PDO::PARAM_STR, 100);
    $request->execute();
    $rownumber = count($request->fetchAll());

    if ($rownumber != 0)
    {
        echo 201;
        $request=null;
    }
    else{
        $request = $pdo->prepare("INSERT INTO `users`( `login`, `namecomp`, `mail`, `password`, `access`) 
        VALUES (:login,:namecomp,:mail,:password,:access)");

        $request->bindParam(":login",$login, PDO::PARAM_STR, 100);
        $request->bindParam(":namecomp", $namecomp, PDO::PARAM_STR, 100);
        $request->bindParam(":mail", $email, PDO::PARAM_STR, 100);
        $request->bindParam(":password", $hash, PDO::PARAM_STR, 100);
        $request->bindParam(":access", $acess, PDO::PARAM_STR, 100);

        if ($request->execute()) {
            echo 200;
            $request=null;
        } 
        else {
            echo 202;
            $request=null;
        }
    }
?>