<?php

session_start();

if (isset($_SESSION['login'])) {
    header('location: dashboard.php');
    return;
}

include_once('./includes/view/_Head.php');

?>

<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="./assets/draw2.svg"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <h1 class="text-center mb-5">Que tal começarmos?</h1>
        <form action="./includes/controllers/_Register.php" method="post">
            <div class="form-floating mb-3">
                <input 
                    type="text" 
                    class="form-control" id="name"
                    name="name"
                >
                <label for="floatingInput">Nome Completo</label>
            </div>

            <div class="form-floating mb-3">
                <input 
                    type="email" 
                    class="form-control" id="email"
                    name="email"
                >
                <label for="floatingInput">Endereço de Email</label>
            </div>

            <div class="form-floating mb-3">
                <input 
                    type="password" 
                    class="form-control" id="password"
                    name="password"
                >
                <label for="floatingInput">Senha</label>
                <div id="passwordHelpBlock" class="form-text">
                    Sua senha precisa conter 8-20 caracteres, letras, números e não pdoe conter espaços, caracteres especiais ou emojis.
                </div>
            </div>

          <div class="form-check mb-4">
            <input class="form-check-input" type="radio" name="tos-accepted" id="tos-accepted">
            <label class="form-check-label" for="tos-accepted">
                Concordo com os <a href="#">Termos de Serviço</a>.
            </label>
          </div>

          <button type="submit" class="btn btn-primary btn-block">Cadastrar-se</button>
          <a href="index.php" class="btn btn-outline-dark">Retornar a Home</a>
        </form>
      </div>
    </div>
  </div>
</section>