<!doctype html>
<html lang="pt-BR">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <title>Alteração de Cadastro</title>
</head>

<body>
  <?php
  include "conection.php";
  $id = $_GET["id"] ?? '';
  $sql = "SELECT * FROM pessoas WHERE id = $id";

  $dados = mysqli_query($conn, $sql);

  $linha = mysqli_fetch_assoc($dados)
  ?>

  <div class="container-sm text-center position-absolute top-50 start-50 translate-middle">
    <div class="card">
      <div class="card-body">
        <img class="navbar-brand-dark rotate-logo" src="./img/logoUnivag.png" height="100" alt="Logo light">
        <br /><br />
        <h1 class="text-primary d-grid gap-2 col-6 mx-auto fw-bold font-monospace">Editar Cadastro</h1>
        <br />
        <form action="edit_script.php" method="POST">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="name" name="name" required value="<?php echo $linha['name']; ?>">
            <label for="name">Nome completo</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="address" name="address" value="<?php echo $linha['address']; ?>">
            <label for="address">Endereço</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="phone" name="phone" value="<?php echo $linha['phone']; ?>">
            <label for="phone">Telefone</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" value="<?php echo $linha['email']; ?>">
            <label for="floatingInput">Email</label>
          </div>
          <div class="form-floating mb-3">
            <input type="date" class="form-control" id="floatingInput" placeholder="birthDate" name="birthDate" value="<?php echo $linha['birthDate']; ?>">
            <label for="data">Data de nascimento</label>
          </div>
          <div class="d-grid gap-2 col-6 mx-auto">
            <input class="btn btn-primary" type="submit" value="Salvar Ateração">
            <input type="hidden" name="id" value="<?php echo $linha['id'] ?>">
          </div>
        </form>
        <div class="d-grid gap-2 col-6 mx-auto">
          <a href="./pesquisar.php" class="btn btn-info">Voltar</a>
        </div>
      </div>
    </div>
  </div>

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