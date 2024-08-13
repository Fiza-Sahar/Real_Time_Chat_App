<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.5/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.12.5/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
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
</script>