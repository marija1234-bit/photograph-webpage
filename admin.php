<?php
$conn = new mysqli("localhost", "root", "root", "stylens_codes"); // root & root are MAMP default

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel</title>
  <style>
    body {
      font-family: Arial;
      background: #f4f4f4;
      padding: 50px;
      text-align: center;
    }
    form {
      background: white;
      padding: 20px;
      max-width: 400px;
      margin: auto;
      border-radius: 10px;
      box-shadow: 0 0 10px #aaa;
    }
    input, textarea {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
    }
    button {
      padding: 10px 20px;
      background: #4CAF50;
      color: white;
      border: none;
    }
  </style>
</head>
<body>

<h2>Admin Panel: Add Code & Link</h2>
<form method="POST">
  <input type="text" name="code" placeholder="Enter Code" required>
  <textarea name="link" placeholder="Enter Download Link" required></textarea>
  <button type="submit">Save</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $code = $_POST["code"];
  $link = $_POST["link"];

  $stmt = $conn->prepare("INSERT INTO codes (code, download_link) VALUES (?, ?)");
  $stmt->bind_param("ss", $code, $link);
  $stmt->execute();

  echo "<p>Saved!</p>";
}
?>

</body>
</html>
