<?php
require '../database/singleton.php';
session_start();
$request = $pdo ->prepare("SELECT login, namecomp, mail, access FROM users");

$request->execute();
$result = $request->fetchAll();
$result = json_encode($result);

echo $result;
?>

<pre>
    <?php
        print_r($result);
    ?>
</pre>