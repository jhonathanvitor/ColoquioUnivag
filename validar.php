<?php
session_start();
if (isset($_SESSION['login'])) {
  $user = $_SESSION['login'];
} else {
  session_destroy();
  header("location: ./login.php?msg=Tentativa invalida!");
}
/* session_start();
if ($_SESSION['user']) {
  header("Location: ./login.php?msg=usuarioinvalido");
  exit();
} */
