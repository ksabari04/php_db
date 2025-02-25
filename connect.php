<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Connection</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #00c6ff, #0072ff);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-family: Arial, sans-serif;
        }
        .container {
            background: rgba(0, 0, 0, 0.7);
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
        }
        .success {
            color: #28a745;
            font-size: 20px;
            font-weight: bold;
        }
        .error {
            color: #dc3545;
            font-size: 20px;
            font-weight: bold;
        }
        .btn-home {
            margin-top: 20px;
            background: #ffcc00;
            color: #000;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
        }
        .btn-home:hover {
            background: #ffa500;
            color: white;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Database Connection Status</h2>
    <?php
    // Enable error reporting
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    // Enable detailed MySQLi error reporting
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    $servername = "localhost"; // Replace with your database server name
    $username = "root"; // Replace with your database username
    $password = "UserRoot!"; // Replace with your database password
    $dbname = "mydb"; // Replace with your database name

    try {
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        echo '<p class="success">✅ Connection successful!</p>';
    } catch (Exception $e) {
        echo '<p class="error">❌ Connection failed: ' . $e->getMessage() . '</p>';
    }

    // Close connection
    if (isset($conn)) {
        $conn->close();
    }
    ?>

    <a href="index.html" class="btn-home">Go Back to Home</a>
</div>

</body>
</html>
