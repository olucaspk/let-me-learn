<?php

session_start();

if (!isset($_SESSION['login'])) {
    header('location: ./includes/controllers/_Logout.php');
    return;
}

include_once('./includes/view/_Head.php');

$studentName = $_SESSION['login']['fullname'];

?>

<header class="p-3 mb-3 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.php" class="nav-link px-2 link-dark">Home</a></li>
          <li><a href="#" class="nav-link px-2 link-secondary">Painel do Aluno</a></li>
          <li><a href="courses.php" class="nav-link px-2 link-dark">Cursos</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">Meu perfil</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control" placeholder="Pesquisar..." aria-label="Search">
        </form>

        <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://picsum.photos/400" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small">
            
            <li>
                <li><a class="dropdown-item" href="#">Conectado como <?php echo $studentName; ?></a></li>
                <li><hr class="dropdown-divider"></li>
                <form action="./includes/controllers/_Logout.php" method="post">
                    <input class="dropdown-item" type="submit" value="Desconectar-se" />
                </form>
            </li>
          </ul>
        </div>
      </div>
    </div>
</header>

<main class="container">
  <div class="d-flex align-items-center p-3 my-3 text-white rounded shadow-sm" style="background-color: #0177FB;">
    <div class="lh-1">
      <h1 class="h6 mb-0 text-white lh-1">Olá, <?php echo $studentName; ?></h1>
      <small>Hoje é um ótimo dia para estudar!</small>
    </div>
  </div>

  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">Quadro de Avisos</h6>
    <div class="d-flex text-muted pt-3">
      <img src="https://github.com/eisandromc.png" class="bd-placeholder-img flex-shrink-0 me-2 rounded"  width="32" height="32" alt="">
      <p class="pb-3 mb-0 small lh-sm border-bottom">
        <strong class="d-block text-gray-dark">@Sandro Martins</strong>
        PHP!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! I LOVE PHP!!!
      </p>
    </div>
    <div class="d-flex text-muted pt-3">
    <img src="https://github.com/olucaspk.png" class="bd-placeholder-img flex-shrink-0 me-2 rounded"  width="32" height="32" alt="">

      <p class="pb-3 mb-0 small lh-sm border-bottom">
        <strong class="d-block text-gray-dark">@Lucas Silva</strong>
        O escopo das funções do php é uma 💩
      </p>
    </div>
    <div class="d-flex text-muted pt-3">
    <img src="https://github.com/diego3g.png" class="bd-placeholder-img flex-shrink-0 me-2 rounded"  width="32" height="32" alt="">

      <p class="pb-3 mb-0 small lh-sm border-bottom">
        <strong class="d-block text-gray-dark">@Diego Fernandes</strong>
        Por isso que eu gosto de React.
      </p>
    </div>
  </div>
  </div>
</main>

<div class="container px-4 py-5" id="custom-cards">
    <h2 class="pb-2 fw-light fs-15 border-bottom">Continue da onde parou</h2>

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-1.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-8 lh-1 fw-bold">Introdução ao HTML</h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="https://github.com/eisandromc.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                <small>Sandro Martins</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                <small>97%</small>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-8 lh-1 fw-bold">Introdução ao CSS</h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="https://github.com/eisandromc.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                <small>Sandro Martins</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                <small>11%</small>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-3.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-8 lh-1 fw-bold">PHP para Web</h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="https://github.com/eisandromc.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                <small>Sandro Martins</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                <small>50%</small>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>