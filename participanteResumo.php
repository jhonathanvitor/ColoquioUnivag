<!doctype html>
<html lang="pt-BR">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./restrito/css/bootstrap.min.css">
  <title>Cadastro</title>
</head>

<body>
  <div class="container-sm text-center position-absolute top-50 start-50 translate-middle">
    <div class="card">
      <div class="card-body">
        <img class="navbar-brand-dark rotate-logo" src="restrito/img/logoUnivag.png" height="100" alt="Logo light">
        <br /><br />
        <h1 class="text-primary d-grid gap-2 col-6 mx-auto fw-bold font-monospace">Cadastro</h1>
        <br />
        <form action="restrito/cadastro_script.php" method="POST" enctype="multipart/form-data">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="name" name="name" required>
            <label for="name">Nome completo</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="address" name="address">
            <label for="address">Endereço</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="phone" name="phone">
            <label for="phone">Telefone</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
            <label for="floatingInput">Email</label>
          </div>
          <div class="form-label">
            <label for="formFile" class="form-label">Resumo</label>
            <input class="form-control" type="file" id="formFile" name="file" accept=".txt, .doc, .docx, .pdf">
          </div>
          <div class="container-fluid py-5 gap-2 ">
            <button class="btn btn-primary btn-lg" type="submit">Enviar</button>
            <a href="./inscrever.php" class="btn btn-info btn-lg">Voltar</a>
          </div>
        </form>
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