<?php

session_start();

if (!isset($_SESSION['login'])) {
    header('location: ./includes/controllers/_Logout.php');
    return;
}

include_once('./includes/view/_Head.php');

$studentName = $_SESSION['login']['fullname'];

function getPercent($hoursWatched, $totalHours) {
    return ($hoursWatched / 100) * $totalHours;
}

?>

<header class="p-3 mb-3 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.php" class="nav-link px-2 link-dark">Home</a></li>
          <li><a href="dashboard.php" class="nav-link px-2 link-secondary">Painel do Aluno</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">Cursos</a></li>
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

<main>
    <div class="container mt-5">
        <h4>
            <i class="fa-solid fa-paintbrush"></i>
            Desenvolvimento Front End
        </h4>
        <div class="row mt-3">
            <div class="card m-4 p-0" style="width: 20rem; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">
                <img src='https://img.youtube.com/vi/majZmpZY8y8/0.jpg' class='card-img-top' alt='' height=300 style="with: 100%">
                <div class='card-body'>
                    <h4 class='card-title'>Svg do inicio ao avançado</h4>
                    <p class='card-text'>Aprenda como manipular Svgs de forma avançada, não é necessário conhecimento anterior.</p>
                    <div class="progress mb-1">
                        <div class="progress-bar" role="progressbar" style="width: <?php echo getPercent(rand(1, 100), 100); ?>%;" aria-valuenow=<?php echo getPercent(rand(1, 100), 100); ?> aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="mb-4" style="font-size: 0.9rem;"><?php echo getPercent(rand(1, 100), 100); ?>% concluido</p>
                    <p>
                        <i class="fa-solid fa-star" style="color: gold"></i>
                        <i class="fa-solid fa-star" style="color: gold"></i>
                        <i class="fa-solid fa-star" style="color: gold"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </p>
                    <a href='#' class='btn btn-primary'>Acessar</a>
                </div>

                <div class="card-footer">
                    <small class="text-muted"><i class="fa-solid fa-chalkboard-user"></i> Professor Show </small>
                </div>
            </div>
            
        </div>
        
    </div>
</main>
