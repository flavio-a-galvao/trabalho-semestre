<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Salgados Grandes</title>
</head>
<body>
  <div class="card-container">
   <?php foreach ($salgadosPequenos as $salgado): ?>
            <div class="card" data-aos="flip-left">
                <img src="<?php echo $salgado['imagem']; ?>" class="card-img-top" alt="<?php echo $salgado['nome']; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $salgado['nome']; ?></h5>
                    <p class="card-text"><?php echo $salgado['descricao']; ?></p>
                    <p class="card-price">R$ <?php echo number_format($salgado['preco'], 2, ',', '.'); ?></p>
                    <div class="container">
                        <a href="https://wa.me/5544998086959" class="whatsapp-button" target="_blank">
                            <i class="fab fa-whatsapp"></i> Entre em Contato
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
  </div>
</body>
</html>
