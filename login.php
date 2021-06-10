<!doctype html>
<html lang="pt-BR">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./restrito/css/bootstrap.min.css">
  <title>Coloquio Univag</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-3"></div>
      <div class="col-6">
        <div class="jumbotron">
          <div class="container-fluid py-5">
            <img class="navbar-brand-dark rotate-logo" src="restrito/img/logoUnivag.png" height="100" alt="Logo light">
            <br />
            <br />
            <form action="loginScript.php" method="POST">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Login</label>
                <input type="text" class="form-control" name="login" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Entre com os seus dados de acesso</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input type="password" class="form-control" name="password">
              </div>
              <button type="submit" class="btn btn-primary">Acessar</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-3"></div>
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