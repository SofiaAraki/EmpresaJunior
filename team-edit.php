<?php

include 'config.php'

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Equipe - Empresa Júnior</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <div class="logo">
      <h1>Empresa Júnior</h1>
      <p>Sistemas de Informação</p>
    </div>
    <nav>
      <ul>
        <li><a href="index.php">Início</a></li>
      </ul>
    </nav>
  </header>

  <section id="edit-team" class="team-section">
    <h2>Editar Equipe</h2>
    <div class="edit-team-container">
      <form id="editTeamForm">
        <h3>Membro 1</h3>
        <label for="name1">Nome:</label>
        <input type="text" id="name1" placeholder="Nome do Membro 1" value="João Silva" required>
        <label for="role1">Cargo:</label>
        <input type="text" id="role1" placeholder="Cargo do Membro 1" value="CEO & Desenvolvedor" required>
        <label for="image1">Imagem:</label>
        <input type="file" id="image1" accept="image/*">

        <h3>Membro 2</h3>
        <label for="name2">Nome:</label>
        <input type="text" id="name2" placeholder="Nome do Membro 2" value="Ana Souza" required>
        <label for="role2">Cargo:</label>
        <input type="text" id="role2" placeholder="Cargo do Membro 2" value="Desenvolvedora Web" required>
        <label for="image2">Imagem:</label>
        <input type="file" id="image2" accept="image/*">

        <h3>Membro 3</h3>
        <label for="name3">Nome:</label>
        <input type="text" id="name3" placeholder="Nome do Membro 3" value="Lucas Lima" required>
        <label for="role3">Cargo:</label>
        <input type="text" id="role3" placeholder="Cargo do Membro 3" value="Designer Gráfico" required>
        <label for="image3">Imagem:</label>
        <input type="file" id="image3" accept="image/*">

        <button type="submit">Salvar Alterações</button>
      </form>
    </div>
  </section>

  <footer>
    <p>&copy; 2024 Empresa Júnior de Sistemas de Informação. Todos os direitos reservados.</p>
  </footer>

  <script src="script.js"></script>
</body>

</html>