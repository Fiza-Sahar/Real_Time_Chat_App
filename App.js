import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.5/firebase-app.js";
import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.12.5/firebase-analytics.js";
import { getDatabase, ref, push, set } from "https://www.gstatic.com/firebasejs/10.12.5/firebase-database.js";

// Your web app's Firebase configuration
const firebaseConfig = {
  apiKey: "AIzaSyAhFEp9cahzDOefpj4QG2W5fD9y2c-XBLE",
  authDomain: "chat-app-f85b1.firebaseapp.com",
  projectId: "chat-app-f85b1",
  storageBucket: "chat-app-f85b1.appspot.com",
  messagingSenderId: "425437440767",
  appId: "1:425437440767:web:16fee19d504e9be29c3aca",
  measurementId: "G-9RC671CQ0M"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);

// Initialize Realtime Database
const database = getDatabase(app);

window.storeData = function storeData() {
  const message = document.getElementById("message").value;
  const userName = document.getElementById("username").value;

  const messagesRef = ref(database, 'messages');
  const newMessageRef = push(messagesRef);

  set(newMessageRef, {
    sender: userName,
    message: message
  }).then(() => {
    console.log('Data stored successfully');
  }).catch((error) => {
    console.error('Error storing data:', error);
  });

  document.getElementById("message").value = '';
  document.getElementById("username").value = '';
}
