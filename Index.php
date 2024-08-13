<!DOCTYPE html>
<html>
<head>
  <title>Firebase Realtime Database Example</title>
</head>
<body>
  <form id="messageForm">
    <input id="username" placeholder="Enter your name" autocomplete="off" required>
    <input id="message" placeholder="Enter message" autocomplete="off" required>
    <button type="button" onclick="storeData()">Send Message</button>
  </form>

  <script type="module" src="App.js"></script>
</body>
</html>
