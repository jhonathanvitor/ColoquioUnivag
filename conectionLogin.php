<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "userLogin";

if ($conn = mysqli_connect($server, $user, $password, $db)) {
  // echo "Conectado!";
} else
  echo "Erro!";
