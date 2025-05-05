<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Admin Panel - FuzzLand</title>
  <link rel="stylesheet" href="../../common/style.css">
</head>
<body>
  <div class="page-wrapper">
    <div class="header">
      <h1>Admin Control Panel</h1>
      <p>Restricted access — authorized users only</p>
    </div>

    <div class="container">
      <h2>Leak Detected</h2>
      <pre>
<?php echo 'Admin Panel - FLAG{admin-panel-leak}'; ?>
      </pre>
    </div>

    <div class="footer">
      FuzzLand Admin · Sensitive Area
    </div>
  </div>
</body>
</html>
