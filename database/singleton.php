<?php
  // $host_name = 'db5006054899.hosting-data.io';
  // $database = 'dbs5070577';
  // $user_name = 'dbu1571230';
  // $password = 'EXTELPASS00!';
  // $dbh = 'document_viewer';

  // try {
  //   $dbh = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
  // } catch (PDOException $e) {
  //   echo "Erreur!: " . $e->getMessage() . "<br/>";
  //   die();
  // }
?>

<?php
$user = "root";
$pass = "";
try {
    $pdo = new PDO('mysql:host=localhost;dbname=document_viewer', $user, $pass);
    print_r($pdo);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>
