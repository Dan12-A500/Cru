<?php
if (!isset($_GET["id"])){
 $id = $_GET["id"];

  $servername = "localhost";
 $username = "root";
 $password = "";
$database = "myshop";

  $connection = new mysqli( $servername, $username, $password, $database);

  $sql = "DELECT FROM customers WHERE id = $id";
              $connection->query($sql);
}

 header("location: /myshop/index.php");
            exit;
?>