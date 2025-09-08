<?php
// Simula um delay de verificação (3 a 5 segundos)
sleep(rand(3, 5));
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Payment Confirmation</title>
<style>
  body, html {
    height: 100%;
    margin: 0;
    font-family: Inter, system-ui, -apple-system, 'Helvetica Neue', Arial, sans-serif;
    background: linear-gradient(180deg,#070707 0%, #0e0e0f 100%);
    color: #eaeaea;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .message-box {
    background: rgba(20,20,22,0.95);
    padding: 36px;
    border-radius: 16px;
    text-align: center;
    max-width: 500px;
    box-shadow: 0 20px 60px rgba(0,0,0,0.6);
    border: 1px solid rgba(255,255,255,0.03);
  }
  .message-box p {
    color: #ff4d6d; /* vermelho */
    font-size: 1.1rem;
    line-height: 1.5;
  }
</style>
</head>
<body>
  <div class="message-box">
    <p>No payment has been received yet.<br>
    Verification may take a moment — sometimes it takes up to 3–5 seconds.</p>
  </div>
</body>
</html>
