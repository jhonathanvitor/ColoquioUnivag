<?php
include "../validar.php";
?>
<!doctype html>
<html lang="pt-BR">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <title>Pequisar</title>
</head>

<body>

  <?php

  $pesquisar = $_POST['search'] ?? '';

  include "conection.php";

  $sql = "SELECT * FROM pessoas WHERE name LIKE '%$pesquisar%'";

  $dados = mysqli_query($conn, $sql);

  ?>


  <div class="container-sm text-center position-absolute top-50 start-50 translate-middle">
    <div class="card">
      <div class="card-body">
        <img class="navbar-brand-dark rotate-logo" src="./img/logoUnivag.png" height="100" alt="Logo light">
        <br /><br />
        <nav class="navbar navbar-light bg-light">
          <div class="container-fluid ">
            <form class="d-flex " action="pesquisar.php" method="POST">
              <input class="form-control me-2 " type="search" placeholder="Pesquisa" aria-label="Search" name="search" autofocus>
              <button class="btn btn-outline-success" type="submit">Pesquisar</button>
            </form>
          </div>
        </nav>
        <div class="bd-example">
          <table class="table table-hover">
            <thead>
              <tr>
                <th class="bg-primary text-white" scope="col">Nome</th>
                <th class="bg-primary text-white" scope="col">Endereço</th>
                <th class="bg-primary text-white" scope="col">Telefone</th>
                <th class="bg-primary text-white" scope="col">E-mail</th>
                <!--                 <th scope="col">Data de nascimento</th> -->
                <th class="bg-primary text-white" scope="col">Resumo</th>
                <th class="bg-primary text-white" scope="col">Funções</th>
              </tr>
            </thead>
            <tbody>
              <?php

              while ($linha = mysqli_fetch_assoc($dados)) {
                $id = $linha['id'];
                $name = $linha['name'];
                $address = $linha['address'];
                $phone = $linha['phone'];
                $email = $linha['email'];
                /*                 $birthDate = $linha['birthDate'];
                $birthDate = show_data($birthDate); */
                $file = $linha['file'];

                echo "<tr>
                        <th scope='row'>$name</th>
                        <td>$address</td>
                        <td>$phone</td>
                        <td>$email</td>
                        <td><a href='txt/$file'>$file</a></td>
                        <td width='150px'>
                        <a href='cadastro_edit.php?id=$id' class='btn btn-success btn-sm'>Editar</a>
                        <a href='#' class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#modalConfirm' onclick=" . '"' . "getData($id, '$name')" . '"' . ">Excluir</a>
                        </td>
                </tr>";
              }

              ?>
            </tbody>

          </table>
        </div>
        <div class="container-fluid py-5 gap-2">
          <a href="../logout.php" class="btn btn-info">Sair</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="modalConfirm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Confirmação de Exclusão</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="excluir_script.php" method="post">
            <p>Deseja realmente excluir <b id="namePeople">nome pessoa</b>?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
          <input type="hidden" name="name" id="idName" value="">
          <input type="hidden" name="id" id="id" value="">
          <input type="submit" class="btn btn-primary" value="Sim">
          </form>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    function getData(id, name) {
      document.getElementById('namePeople').innerHTML = name;
      document.getElementById('id').value = id;
      document.getElementById('idName').value = name;
    }
  </script>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>