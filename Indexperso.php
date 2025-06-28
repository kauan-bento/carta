<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Criação de Personagem</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Fonte estilo pixelado -->
  <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

  <style>
    body {
      margin: 0;
      padding: 0;
      background: url('https://i.imgur.com/5Z5B8Ju.png') repeat; /* fundo pixelado */
      font-family: 'Press Start 2P', cursive;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .card {
      background: #222;
      border: 8px solid #fff;
      padding: 30px;
      width: 90%;
      max-width: 500px;
      box-shadow: 0 0 0 5px #000, inset 0 0 0 5px #000;
      text-align: center;
    }

    h1 {
      font-size: 14px;
      margin-bottom: 20px;
    }

    input[type="text"], input[type="number"] {
      width: 80%;
      padding: 10px;
      margin: 10px 0;
      font-family: inherit;
      font-size: 10px;
      background: #333;
      color: white;
      border: 4px solid #999;
      box-shadow: inset 0 0 8px #000;
    }

    input[type="submit"] {
      padding: 10px 20px;
      font-family: inherit;
      background: crimson;
      color: white;
      border: 4px solid #fff;
      cursor: pointer;
      transition: 0.2s;
      margin-top: 15px;
    }

    input[type="submit"]:hover {
      background: #ff0055;
      box-shadow: 0 0 5px white;
    }

    label {
      display: block;
      margin-top: 15px;
      font-size: 10px;
    }

    .result {
      margin-top: 30px;
      background: #111;
      padding: 20px;
      border: 4px solid #999;
      box-shadow: 0 0 10px #000;
    }

    .result p {
      margin: 8px 0;
      font-size: 10px;
    }
  </style>
</head>
<body>

  <div class="card">
    <h1>🧱 Criação de Personagem 🧱</h1>
    <form method="POST">
      <label>Nome:</label>
      <input type="text" name="nome" required>

      <label>Idade:</label>
      <input type="number" name="idade" required>

      <label>Raça:</label>
      <input type="text" name="raca" required>

      <label>História:</label>
      <input type="text" name="historia" required>

      <br>
      <input type="submit" value="Criar Personagem" name="button_enviar">
    </form>

    <?php if (isset($_POST['button_enviar'])): 
      $nome = htmlspecialchars($_POST["nome"]);
      $idade = htmlspecialchars($_POST["idade"]);
      $raca = htmlspecialchars($_POST["raca"]);
      $historia = htmlspecialchars($_POST["historia"]);
    ?>
      <div class="result">
        <h1>🎮 Personagem Criado</h1>
        <p>🧍 Nome: <?= $nome ?></p>
        <p>⏳ Idade: <?= $idade ?></p>
        <p>🧬 Raça: <?= $raca ?></p>
        <p>📖 História: <?= $historia ?></p>
      </div>
    <?php endif; ?>
  </div>

</body>
</html>
