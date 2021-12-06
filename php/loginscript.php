<?php
if ($_POST['type'] == 2) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hash = password_hash($password, PASSWORD_DEFAULT);

    $request = $pdo->prepare("select * from crud where email=:email");
    $request->bindParam(":email", $email, PDO::PARAM_STR, 100);
    $request->execute();
    $users = $request->fetch(PDO::FETCH_ASSOC);
    if (password_verify($password, $users['password'])) {
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $users['name'];
        $_SESSION['id'] = $users['id'];
        echo 200;
    } else {
        echo 201;
    }
    $request = null;
}
