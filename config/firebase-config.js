// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyArQv8rl_OqSKp6JYydP0wgPpjeIGnpfOU",
  authDomain: "empresajunior-3f75f.firebaseapp.com",
  projectId: "empresajunior-3f75f",
  storageBucket: "empresajunior-3f75f.appspot.com",
  messagingSenderId: "376344923847",
  appId: "1:376344923847:web:292a3e6ad7119005fdf8e2",
  measurementId: "G-EPCG0H4F4M"
};

// Initialize Firebase
export const app = initializeApp(firebaseConfig);
export const analytics = getAnalytics(app);