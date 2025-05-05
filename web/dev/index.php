<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dev Portal - FuzzLand</title>
  <link rel="stylesheet" href="../common/style.css">
  <style>
    body {
      background-color: #0d1117;
      color: #c9d1d9;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
    }

    .header {
      background-color: #161b22;
      padding: 20px;
      text-align: center;
      border-bottom: 1px solid #30363d;
    }

    .header h1 {
      margin: 0;
      color: #58a6ff;
    }

    .header p {
      margin-top: 8px;
      font-style: italic;
      color: #8b949e;
    }

    .intro {
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
      background-color: #21262d;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    .container {
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
    }

    h2 {
      color: #58a6ff;
    }

    ul {
      list-style: none;
      padding: 0;
    }

    li {
      margin: 10px 0;
    }

    a {
      color: #58a6ff;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }

    .footer {
      text-align: center;
      padding: 15px;
      font-size: 14px;
      color: #8b949e;
      border-top: 1px solid #30363d;
      background-color: #161b22;
      margin-top: 40px;
    }
  </style>
</head>
<body>
  <div class="header">
    <h1>Welcome to Dev Portal</h1>
    <p>Only developers allowed. Proceed with caution.</p>
  </div>

  <div class="intro">
    <h2>🔧 About This Portal</h2>
    <p>
      This internal developer portal is designed for use by the FuzzLand dev team. It provides access to essential tools,
      debug environments, and documentation intended to support feature development, troubleshooting, and maintenance.
    </p>
    <p>
      <strong>Note:</strong> Access is restricted to authorized developers only. Misuse may expose sensitive endpoints or lead to system instability.
    </p>
  </div>

  <div class="container">
    <h2>🛠️ Tools</h2>
    <ul>
      <li><a href="debug.php">Debug Console</a></li>
      <li><a href="dev_note.php">Dev Notes</a></li>
    </ul>
  </div>

</body>
</html>
