<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>JWT Token Viewer - FuzzLand</title>
  <link rel="stylesheet" href="../common/style.css">
</head>
<body>
  <div class="page-wrapper">
    <div class="header">
      <h1>JWT Token Viewer</h1>
      <p>Inspect encoded JSON Web Tokens used across services</p>
    </div>

    <div class="container">
      <h2>Current JWT</h2>
      <pre>
<?php
echo 'Here is a JWT: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9... <!-- FLAG{jwt-decoded} -->';
?>
      </pre>
      <div class="alert alert-warning">
        This token may expose internal authentication logic.
      </div>
    </div>

    <div class="footer">
      FuzzLand Internal · Token Handling Zone
    </div>
  </div>
</body>
</html>
