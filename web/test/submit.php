<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Submit Tester - FuzzLand</title>
  <link rel="stylesheet" href="../common/style.css">
</head>
<body>
  <div class="page-wrapper">
    <div class="header">
      <h1>Submit Test Form</h1>
      <p>Submit your test username for processing</p>
    </div>

    <div class="container">
      <h2>Input</h2>
      <form method="POST">
        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username" required>
        <br><br>
        <button type="submit">Submit</button>
      </form>

      <?php if ($_POST): ?>
        <div class="alert alert-warning">
          <?php
            echo 'User: ' . htmlspecialchars($_POST['username']) . ' <!-- FLAG{post-bypass-injection} -->';
          ?>
        </div>
      <?php endif; ?>
    </div>

    <div class="footer">
      FuzzLand QA · Form Simulation Zone
    </div>
  </div>
</body>
</html>
