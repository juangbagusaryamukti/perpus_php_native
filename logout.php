<?php
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f8f9fa;
        }

        .logout-container {
            max-width: 400px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            text-align: center;
        }

        .btn {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="logout-container">
        <h2 class="mb-4">Logout</h2>
        <p>Anda telah berhasil logout dari Perpus Online.</p>
        <p>Terima kasih atas kunjungan Anda.</p>
        <a href="login.php" class="btn btn-primary mt-4">Logout</a>
    </div>
</body>

</html>