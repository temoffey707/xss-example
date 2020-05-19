<html>
<head>
    <title>XSS-уязвимость на сайте</title>
</head>
<body>

<form action="xss.php" method="post">
    <p>Имя пользователя: <input type="text" name="login" /></p>
    <p>Пароль: <input type="password" name="password" /></p>
    <p><input type="submit" value="Вход" /></p>
</form>
</body>
</html>
