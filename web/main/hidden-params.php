<?php
$flag = 'FLAG{get_param_found}';
$is_debug = isset($_GET['debug']) && $_GET['debug'] === 'true';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Internal Debug Panel</title>
    <link rel="stylesheet" type="text/css" href="/common/style-hidden-params.css">
</head>
<body>
    <div class="container">
        <h1>📄 Internal Debug Interface</h1>
        <p>This page is part of internal testing and diagnostics.</p>

        <div class="card">
            <?php if ($is_debug): ?>
                <p><strong>✅ Debug Mode Active!</strong></p>
                <pre><?php echo $flag; ?></pre>
            <?php else: ?>
                <p>🔒 Debug mode not enabled. Nothing to display.</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
