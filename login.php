<?php
require_once('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($email) || empty($password)) {
        echo "Пожалуйста, заполните все поля.";
    } else {
        $stmt = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "Добро пожаловать, " . htmlspecialchars($row['email']) . "<br>";
            }
        } else {
            echo "Неверный логин или пароль.";
        }

        $stmt->close();
    }
}

$conn->close();
?>