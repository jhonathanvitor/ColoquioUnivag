<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "empresa";

if ($conn = mysqli_connect($server, $user, $password, $db)) {
  // echo "Conectado!";
} else
  echo "Erro!";


function mensagem($texto, $tipo)
{
  echo "<div class='alert alert-$tipo' role='alert'>
        $texto
      </div>";
}


function moveFile($vectorFile)
{
  if (!$vectorFile['error']) {
    $newNameFile = date('Ymdhms') . ".docx";
    move_uploaded_file($vectorFile['tmp_name'], "txt/" . $newNameFile);
    return $newNameFile;
  } else {
    return 0;
  }
}
