<?php
include('restrito/conection.php');

if (isset($_POST['login'])) {
  $login = $_POST['login'];
  $password = $_POST['password'];


  //$sql = "SELECT * FROM usuario WHERE login = $login AND password = $password";
  $sql = "SELECT * FROM usuario WHERE login = '$login' AND password = md5('$password')";

  echo "sql: ", print_r($sql, 1);

  $result = mysqli_query($conn, $sql);

  echo "123", print_r($result, 1);

  $num_registros = mysqli_num_rows($result);

  $linha = mysqli_fetch_assoc($result);

  echo "num_registros", print_r($num_registros, 1);

  if ($num_registros == 1) {
    if (($login == $linha['login']) && (md5($password) == $linha['password'])) {
      $linha = mysqli_fetch_assoc($result);
      session_start();
      $_SESSION['login'] = "jhonathan";
      header("Location: restrito/pesquisar.php");
      echo "Login válido!";
    } else {
      echo "Login inválido!";
    }
  } else {
    echo "Login ou senha inválido!";
  }
}
