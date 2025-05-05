<?php
$title = "FuzzLand Internal Portal";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= $title ?></title>
  <link rel="stylesheet" href="/common/style.css">
</head>
<body>
  <div class="header">
    <h1>Internal Portal</h1>
    <p>Confidential area. Authorized personnel only.</p>
  </div>

  <div class="container">
    <h2>Employee Resources</h2>
    <ul>
      <li><a href="#">HR Guidelines (PDF)</a></li>
      <li><a href="#">Weekly Reports</a></li>
      <li><a href="#">Access Request Forms</a></li>
    </ul>

    <h2>System Status</h2>
    <p>Internal network: <span style="color: green;">✓ Online</span></p>
    <p>Secure backup: <span style="color: green;">✓ Active</span></p>

    <div class="alert alert-warning">
      Reminder: Do not share internal links outside the organization.
    </div>
  </div>

  <div class="footer">
    FuzzLand Internal · Confidential
  </div>
</body>
</html>
