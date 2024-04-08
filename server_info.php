<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Information</title>
</head>
<body>
    <h1>Server Information</h1>
    <p><strong>Hostname:</strong> <?php echo gethostname(); ?></p>
    <p><strong>IP Address:</strong> <?php echo $_SERVER['SERVER_ADDR']; ?></p>
</body>
</html>