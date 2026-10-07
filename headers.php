<?php

$url = 'https://httpbin.org/get';

$headers = get_headers($url);

if ($headers === false) {
    $result = 'Не удалось получить заголовки.';
} else {
    $result = print_r($headers, true);
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результат get_headers</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <div class="logo">МОСПОЛИТЕХ</div>
    <h1>Результат работы get_headers</h1>
</header>

<main>
    <div class="headers-container">
        <textarea readonly><?= htmlspecialchars($result) ?></textarea>

        <a href="index.php" class="link">
            Вернуться на 1 страницу
        </a>
    </div>
</main>

<footer>
    задание для самостоятельно работы
</footer>

</body>
</html>