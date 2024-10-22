// script.js

import { analytics } from "./config/firebase-config.js";

// Inicialize o Firebase Realtime Database
const database = firebase.database();

// Adicionar dados ao Realtime Database
database.ref('Contatos').push({
  name: Nome,
  email: Email,
  message: Menssagem,
  timestamp: Date.now()
});
