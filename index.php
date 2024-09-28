<?php

include 'config.php';

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Empresa Júnior - Sistemas de Informação</title>
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
        <li><a href="#home">Início</a></li>
        <li><a href="#about">Sobre</a></li>
        <li><a href="#services">Serviços</a></li>
        <li><a href="#team">Equipe</a></li>
        <li><a href="#contact">Contato</a></li>
        <li><a href="team-edit.php">Editar Equipe</a></li>
      </ul>
    </nav>
  </header>

  <section id="home" class="hero-section">
    <h2>Bem-vindo à Empresa Júnior de SI</h2>
    <p>Soluções tecnológicas desenvolvidas por alunos apaixonados por inovação.</p>
    <button onclick="scrollToSection('about')">Saiba Mais</button>
  </section>

  <section id="about" class="about-section">
    <h2>Sobre Nós</h2>
    <p>Somos uma empresa júnior formada por alunos de Sistemas de Informação. Nosso objetivo é desenvolver soluções
      tecnológicas inovadoras para o mercado.</p>
  </section>

  <section id="services" class="services-section">
    <h2>Nossos Serviços</h2>
    <div class="services-container">
      <div class="service-item">
        <h3>Desenvolvimento Web</h3>
        <p>Criamos sites e sistemas web personalizados para empresas.</p>
      </div>
      <!-- <div class="service-item">
        <h3>Aplicativos Mobile</h3>
        <p>Desenvolvemos aplicativos para Android e iOS.</p>
      </div> -->
      <div class="service-item">
        <h3>Consultoria em TI</h3>
        <p>Oferecemos consultoria para otimizar a infraestrutura tecnológica de empresas.</p>
      </div>
    </div>
  </section>

  <section id="team" class="team-section">
    <h2>Nosso Time</h2>
    <div class="team-container">
      <div class="team-member">
        <img src="team1.jpg" alt="Membro 1">
        <h3>João Silva</h3>
        <p>CEO & Desenvolvedor</p>
      </div>
      <div class="team-member">
        <img src="team2.jpg" alt="Membro 2">
        <h3>Ana Souza</h3>
        <p>Desenvolvedora Web</p>
      </div>
      <div class="team-member">
        <img src="team3.jpg" alt="Membro 3">
        <h3>Lucas Lima</h3>
        <p>Designer Gráfico</p>
      </div>
    </div>
  </section>

  <section id="contact" class="contact-section">
    <h2>Contato</h2>
    <p>Entre em contato conosco para mais informações sobre nossos serviços.</p>
    <form>
      <input type="text" placeholder="Seu Nome" required>
      <input type="email" placeholder="Seu Email" required>
      <textarea placeholder="Sua Mensagem" required></textarea>
      <button type="submit">Enviar</button>
    </form>
  </section>

  <footer>
    <p>&copy; 2024 Empresa Júnior de Sistemas de Informação. Todos os direitos reservados.</p>
  </footer>

  <script src="script.js"></script>
</body>

</html>