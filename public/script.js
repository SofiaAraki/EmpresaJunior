// script.js

import { analytics } from "./config/firebase-config";


// Função para rolar a página até a seção correspondente
function scrollToSection(sectionId) {
  const section = document.getElementById(sectionId);
  section.scrollIntoView({ behavior: 'smooth' });
}

document.getElementById('editTeamForm').addEventListener('submit', function(event) {
  event.preventDefault();

  const name1 = document.getElementById('name1').value;
  const role1 = document.getElementById('role1').value;
  const name2 = document.getElementById('name2').value;
  const role2 = document.getElementById('role2').value;
  const name3 = document.getElementById('name3').value;
  const role3 = document.getElementById('role3').value;

  console.log('Membro 1:', name1, role1);
  console.log('Membro 2:', name2, role2);
  console.log('Membro 3:', name3, role3);

  alert('Alterações salvas com sucesso!');
});
