<?php
require '../database/singleton.php';
session_start();
$request = $pdo ->prepare("SELECT login, namecomp, mail, access FROM users");

$request->execute();
$result = $request->fetchAll(PDO::FETCH_ASSOC);
$result = json_encode($result);

echo $result;
?>

<pre>
    <?php
        print_r($result);
    ?>
</pre>