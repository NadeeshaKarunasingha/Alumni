<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_registration";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch the record to be updated
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Prepared statement to fetch the data
    $sql = $conn->prepare("SELECT * FROM registrations WHERE id=?");
    $sql->bind_param("i", $id);
    $sql->execute();
    $result = $sql->get_result();
    $data = $result->fetch_assoc();
    $sql->close();
}

// Handle the update
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get values from the form
    $id = $_POST['id'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $graduation_year = $_POST['graduation_year'];
    $degree = $_POST['degree'];

    // Prepare and bind the update statement
    $sql = $conn->prepare("UPDATE registrations SET fullname=?, email=?, address=?, contact=?, graduation_year=?, degree=? WHERE id=?");
    $sql->bind_param("ssssisi", $fullname, $email, $address, $contact, $graduation_year, $degree, $id);

    // Execute the update query
    if ($sql->execute()) {
        echo "<p style='color: green;'>Record updated successfully!</p>";
    } else {
        echo "<p style='color: red;'>Error updating record: " . $sql->error . "</p>";
    }

    $sql->close();
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Record</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }
        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Update Record</h1>
    <form method="POST" action="Update.php">
        <input type="hidden" name="id" value="<?= htmlspecialchars($data['id']) ?>">
        <label>Full Name:</label>
        <input type="text" name="fullname" value="<?= htmlspecialchars($data['fullname']) ?>" required>
        <label>Email:</label>
        <input type="email" name="email" value="<?= htmlspecialchars($data['email']) ?>" required>
        <label>Address:</label>
        <input type="text" name="address" value="<?= htmlspecialchars($data['address']) ?>" required>
        <label>Contact:</label>
        <input type="text" name="contact" value="<?= htmlspecialchars($data['contact']) ?>" required>
        <label>Graduation Year:</label>
        <input type="number" name="graduation_year" value="<?= htmlspecialchars($data['graduation_year']) ?>" required>
        <label>Degree:</label>
        <input type="text" name="degree" value="<?= htmlspecialchars($data['degree']) ?>" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>
