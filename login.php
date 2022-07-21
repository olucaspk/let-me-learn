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
        <form action="./includes/controllers/_Login.php" method="post">
          <div class="form-outline mb-4">
              <label class="form-label" for="form1Example13">Endereço de email</label>
              <input 
                type="email" 
                id="email"
                name="email" 
                class="form-control form-control-lg" 
              />
          </div>

          <div class="form-outline mb-4">
              <label class="form-label" for="form1Example23">Senha</label>
              <input 
              type="password" 
              id="password"
              name="password" 
              class="form-control form-control-lg" 
              />
          </div>

          <button type="submit" class="btn btn-primary btn-block">Entrar</button>
          <a href="index.php" class="btn btn-outline-dark">Retornar a Home</a>

        </form>
      </div>
    </div>
  </div>
</section>