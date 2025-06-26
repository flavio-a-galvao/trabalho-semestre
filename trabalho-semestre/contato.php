<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $numero = $_POST['numero'] ?? '';
    $mensagem = $_POST['mensagem'] ?? '';

    $destino = "flavioaugusto.galvao@gmail.com";
    $assunto = "Novo pedido do site - Leila Pães e Salgados";

    $corpo = "Você recebeu um novo pedido:\n\n";
    $corpo .= "Nome: $nome\n";
    $corpo .= "E-mail: $email\n";
    $corpo .= "Número: $numero\n";
    $corpo .= "Mensagem: $mensagem\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    if (mail($destino, $assunto, $corpo, $headers)) {
        echo "<script>alert('Pedido enviado com sucesso!'); window.location.href = 'index.php';</script>";
        exit;
    } else {
        echo "<script>alert('Erro ao enviar. Tente novamente.'); window.history.back();</script>";
        exit;
    }
}
?>

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