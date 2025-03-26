<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Аутентификация</title>
    <link rel="stylesheet" href="styles.css?v=1">
</head>
<body>
<div class="container">
    <h1>Регистрация</h1>
    <form action="register.php" method="post">
        <div class="form-group">
            <input type="email" id="email" name="email" placeholder="email" required>
        </div>
        <div class="form-group">
            <input type="password" id="password" name="password" placeholder="password" required>
        </div>
        <button type="submit">Зарегестрироваться</button>
    </form>
</div>
</body>
</html>
