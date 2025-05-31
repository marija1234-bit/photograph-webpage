<?php
// Show all errors (for debugging)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// MAMP connection settings
$host = "localhost";
$user = "	root";
$pass = "root"; // default MAMP password
$db   = "stylens_codes"; // database name
$port = 3306;

// Connect
$conn = new mysqli($host, $user, $pass, $db, $port);
if ($conn->connect_error) {
    die("DB connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="mk">
<head>
  <meta charset="UTF-8">
  <title>Клиентска Зона</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg, #1a1a1a, #2d2d2d);
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
    }
    .container {
      background: #333;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 0 20px rgba(255, 255, 255, 0.1);
      max-width: 600px;
      text-align: center;
    }
    h1 {
      font-size: 28px;
      margin-bottom: 20px;
      color: #ffd700;
    }
    p {
      font-size: 18px;
      margin: 15px 0;
    }
    a {
      display: inline-block;
      margin-top: 15px;
      padding: 12px 25px;
      background-color: #ffd700;
      color: #000;
      text-decoration: none;
      border-radius: 10px;
      font-weight: bold;
      transition: all 0.3s ease;
    }
    a:hover {
      background-color: #fff;
      color: #111;
    }
    .error {
      color: #ff4d4d;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Клиентска Зона</h1>

    <?php
    // Handle the form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $code = $conn->real_escape_string($_POST["client_code"]);
        
        $sql = "SELECT download_link FROM codes WHERE code = '$code'";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo "<p>🎉 Кликнете подолу за симнување на вашите фотографии:</p>";
            echo "<a href='" . $row["download_link"] . "' target='_blank'>📸 Превземи</a>";
        } else {
            echo "<p class='error'>❌ Невалиден код. Обидете се повторно.</p>";
        }
    }
    ?>

  </div>
</body>
</html>




