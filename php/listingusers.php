<?php
require '../database/singleton.php';
session_start();

$request = $pdo ->prepare("SELECT login, namecomp, mail, access FROM users");
$request->execute();

$result = $request->fetchAll(PDO::FETCH_ASSOC);

$output = "";

foreach ($result as $row) {
    $output .='
    <tr class=' . $row["login"] . '>
    <td>' . $row["login"] . '</td>
    <td>' . $row["namecomp"] . '</td>
    <td>' . $row["mail"] . '</td>
    <td>' . $row["access"] . '</td>
    <td><button type="button" id="' . $row["login"] . '" class="btnSelect btn btn-danger btn-xs">Select</button></td>
    <td><button type="button" id="' . $row["login"] . '" class="btnDel btn btn-danger btn-xs">Supprimer</button></td>
    </tr>
    ';
}

echo $output;




?>
