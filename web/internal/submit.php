<?php
$flag = 'FLAG{param_fuzzing_success}';
$secret_keys = [
    'key' => 'admin',
    'password' => 'letmein',
    'pass' => '123456',
    'token' => 'secret',
    'access_key' => 'internal123',
    'debug' => 'true'
];

$found = false;
$match_key = '';
$match_value = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($_POST as $key => $value) {
        if (isset($secret_keys[$key]) && $secret_keys[$key] === $value) {
            $found = true;
            $match_key = $key;
            $match_value = $value;
            break;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Secure Submission Panel</title>
    <link rel="stylesheet" type="text/css" href="/common/style-submit-params.css">
</head>
<body>
    <div class="container">
        <h1>🛡️ Secure Parameter Fuzzing Challenge</h1>
        <p>Submit the correct key-value combination to unlock the flag.</p>

        <form method="POST">
            <label for="custom_key">Custom Key:</label>
            <input type="text" name="custom_key" id="custom_key">
            <label for="custom_value">Value:</label>
            <input type="text" name="custom_value" id="custom_value">
            <button type="submit">Submit</button>
        </form>

        <div class="card">
            <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
                <?php if ($found): ?>
                    <p><strong>✅ Match Found: <code><?= htmlspecialchars($match_key) ?>=<?= htmlspecialchars($match_value) ?></code></strong></p>
                    <pre><?php echo $flag; ?></pre>
                <?php else: ?>
                    <p>❌ No matching parameters found.</p>
                <?php endif; ?>
            <?php else: ?>
                <p>💡 Hint: Try fuzzing common param keys and values!</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
