

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Leila Pães e Salgados</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/aos.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
  <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">

    <img class="logo" src="imagens/logo.png" alt="">

    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <img class="logo2" src="imagens/logo.png" alt="">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contato.php">Contato</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Salgados
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="minis.php">Minis</a></li>
              <li><a class="dropdown-item" href="grandes.php">Grandes</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<main>
  <div class="container2">
    <h2>Formulário de Pedido</h2>
    <form method="POST" action="">
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required />
      </div>

      <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required />
      </div>

      <div class="form-group">
        <label for="numero">Número (somente dígitos):</label>
        <input type="tel" id="numero" name="numero" required pattern="[0-9]{8,15}" maxlength="15" placeholder="Ex: 44998086959" />
      </div>

      <div class="form-group">
        <label for="mensagem">Mensagem (opcional):</label>
        <textarea id="mensagem" name="mensagem"></textarea>
      </div>

      <button class="botao" type="submit">Enviar Pedido</button>
    </form>
  </div>
</main>

<div class="mapa-container">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3621.8175900820747!2d-52.71145578896716!3d-24.801698908237224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f20005cdf2d627%3A0xb2e6e5b04f97fc1f!2sPR-364%2C%20Altamira%20do%20Paran%C3%A1%20-%20PR%2C%2085280-000!5e0!3m2!1spt-BR!2sbr!4v1750964995448!5m2!1spt-BR!2sbr" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<footer class="footer">
    <div class="footer-content">
        <p>&copy; 2025 Meu Site. Todos os direitos reservados.</p>
        <a href="https://wa.me/5544998086959" class="whatsapp-icon" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>
</footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>