<?php
$title = "Staging Environment - FuzzLand";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= $title ?></title>
  <link rel="stylesheet" href="/common/style.css">s
</head>
<body>
  <div class="header">
    <h1>Staging Environment</h1>
    <p>This environment is for pre-release testing only.</p>
  </div>

  <div class="container">
    <h2>Current Build: v1.3.9-beta</h2>
    <p>Status: <span style="color: orange;">⚠ Unstable</span></p>

    <h3>Known Issues</h3>
    <ul>
      <li>Session handling fails after 1 hour</li>
      <li>Missing input validation on `/beta-contact.php`</li>
      <li>Slow response on `/api/test-fuzz`</li>
    </ul>

    <p>Please report bugs to: <code>qa@fuzzland.local</code></p>
  </div>

  <div class="footer">
    FuzzLand Test · Pre-release only
  </div>
</body>
</html>
