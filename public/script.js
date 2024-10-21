// script.js

import { analytics } from "./config/firebase-config.js";

document.getElementById("contactForm").addEventListener("submit", function(event){
  event.preventDefault();

  const name = document.getElementById("Nome").value;
  const email = document.getElementById("Email").value;
  const message = document.getElementById("Messagem").value;

  // Salva os dados no Firestore
  db.collection("Contatos").add({
    name: name,
    email: email,
    message: message,
    timestamp: firebase.firestore.FieldValue.serverTimestamp()
  })
  .then(() => {
    alert("Mensagem enviada com sucesso!");
  })
  .catch(error => {
    alert("Erro ao enviar mensagem: " + error.message);
  });
});

