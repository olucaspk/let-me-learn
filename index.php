<?php

include_once("./includes/view/_Head.php");

?>

<header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="#pricing" class="nav-link px-2 text-white">Preços</a></li>
          <li><a href="#courses" class="nav-link px-2 text-white">Cursos</a></li>
          <li><a href="#testimonials" class="nav-link px-2 text-white">Depoimentos</a></li>
          <li><a href="dashboard.php" class="nav-link px-2 text-white">Painel do Aluno</a></li>
        </ul>

        <div class="text-end">
          <a href="login.php" class="btn btn-outline-light me-2">Login</a>
          <a href="register.php" class="btn bg-primary text-light me-2">Cadastrar-se</a>
        </div>
      </div>
    </div>
</header>

<div class="px-4 pt-5 my-5 text-center border-bottom">
    <h1 class="display-4 fw-bold">A melhor escola online de técnologia</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae risus a tellus gravida semper vel vitae dolor. Sed est neque, imperdiet et aliquet sed, blandit id arcu. Aenean at rhoncus nulla. Suspendisse potenti. Duis sollicitudin, mauris non tempor rutrum, massa libero porttitor lectus, a eleifend orci massa dignissim orci. Mauris at porttitor nisi.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
        <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">VEJA COMO FUNCIONA</button>
      </div>
    </div>
    <div class="overflow-hidden" style="max-height: 30vh;">
      <div class="container px-5">
        <img src="https://getbootstrap.com/docs/5.2/examples/heroes/bootstrap-docs.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
      </div>
    </div>
</div>

<div class="container col-xxl-8 px-4 py-5" id="courses">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="https://getbootstrap.com/docs/5.2/examples/heroes/bootstrap-themes.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Aprofunde seus conhecimentos</h1>
        <p class="lead">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae risus a tellus gravida semper vel vitae dolor. Sed est neque, imperdiet et aliquet sed, blandit id arcu. Aenean at rhoncus nulla. Suspendisse potenti. Duis sollicitudin, mauris non tempor rutrum, massa libero porttitor lectus, a eleifend orci massa dignissim orci. Mauris at porttitor nisi.
        </p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">MATRICULE-SE</button>
        </div>
      </div>
    </div>
</div>

<div class="bg-dark text-secondary px-4 py-5 text-center">
    <div class="py-5">
      <h1 class="display-5 fw-bold text-white">Como as pessoas constroem Software</h1>
      <div class="col-lg-6 mx-auto">
        <p class="fs-5 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae risus a tellus gravida semper vel vitae dolor. Sed est neque, imperdiet et aliquet sed, blandit id arcu. Aenean at rhoncus nulla. Suspendisse potenti. Duis sollicitudin, mauris non tempor rutrum, massa libero porttitor lectus, a eleifend orci massa dignissim orci. Mauris at porttitor nisi.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">VER DEPOIMENTOS</button>
        </div>
      </div>
    </div>
</div>

<div class="album py-5 bg-light" id="testimonials">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        <div class="col">
          <div class="card shadow-sm">
            <img src="https://img.youtube.com/vi/3W-8TQJwuWY/0.jpg" alt="">

            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img src="https://img.youtube.com/vi/3W-8TQJwuWY/0.jpg" alt="">

            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img src="https://img.youtube.com/vi/3W-8TQJwuWY/0.jpg" alt="">

            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
</div>

<div class="container py-3" id="pricing">
  <header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <span class="fs-4 text-center">Confira nossos planos</span>
      </a>
    </div>
  </header>

  <main>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">

      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Gratis</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">R$0<small class="text-muted fw-light">/mês</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
                <li>Acesso aos cursos base</li>
                <li>Suporte em nossa comunidade</li>
                <li>Certificação de conclusão</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Começe gratuitamente</button>
          </div>
        </div>
      </div>


      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Plus</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$29<small class="text-muted fw-light">/mês</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
                <li>Acesso aos cursos Plus</li>
                <li>Suporte em nossa comunidade</li>
                <li>Certificação de conclusão</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Matricule-se</button>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Pro</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">R$49<small class="text-muted fw-light">/mês</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
                <li>Acesso a TODOS os cursos</li>
                <li>Suporte em nossa comunidade</li>
                <li>Certificação de conclusão</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Matricule-se</button>
          </div>
        </div>
      </div>
    </div>
</div>

<div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="#pricing" class="nav-link px-2 text-muted">Preços</a></li>
      <li class="nav-item"><a href="#courses" class="nav-link px-2 text-muted">Cursos</a></li>
      <li class="nav-item"><a href="#testmonials" class="nav-link px-2 text-muted">Depoimentos</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Subir ao topo</a></li>
    </ul>
    <p class="text-center text-muted">&copy; 2022 Let Me Learn Serviços Online LTDA</p>
  </footer>
</div>