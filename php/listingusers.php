<?php
require '../database/singleton.php';
session_start();

$request = $pdo ->prepare("SELECT login, namecomp, mail, access FROM users");
$request->execute();

$result = $request->fetchAll(PDO::FETCH_ASSOC);

$output = "";

foreach ($result as $row) {
    if($row['access'] == 999) {$access = "Admin";}else {$access = "User";}
    $output .='
    <tr class=' . $row["login"] . '>
    <td>' . $row["namecomp"] . '</td>
    <td>' . $row["login"] . '</td>
    <td>' . $row["mail"] . '</td>
    <td>' . $access . '</td>
    <td><button type="button" id="' . $row["login"] . '" class="btnSelect btn btn-danger btn-xs">Select</button></td>
    <td><button type="button" id="' . $row["login"] . '" class="btnDel btn btn-danger btn-xs">Supprimer</button></td>
    </tr>
    ';
}

echo $output;




?>
