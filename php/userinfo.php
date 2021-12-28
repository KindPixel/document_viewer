<?php
	session_start();
    require '../database/singleton.php';

    $login=$_POST['login'];

    $hash = password_hash($password, PASSWORD_DEFAULT);
    
    $request = $pdo->prepare("select * from users where id=:login");
    $request->bindParam(":login", $login, PDO::PARAM_STR, 100);

        if ($request->execute()) {
            $data = $request -> fetch();
            echo json_encode($data);
            $request=null;
        } 
        else {
            echo 201;
            $request=null;
        }
?>