<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма обратной связи</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <div class="logo">МОСПОЛИТЕХ</div>
    <h1>Форма обратной связи</h1>
</header>

<main>
    <form action="https://httpbin.org/post" method="POST" class="form">

        <label for="name">Имя пользователя</label>
        <input
            type="text"
            id="name"
            name="username"
            required
        >

        <label for="email">E-mail пользователя</label>
        <input
            type="email"
            id="email"
            name="email"
            required
        >

        <label for="type">Тип обращения</label>
        <select id="type" name="appeal_type" required>
            <option value="">Выберите тип обращения</option>
            <option value="complaint">Жалоба</option>
            <option value="suggestion">Предложение</option>
            <option value="thanks">Благодарность</option>
        </select>

        <label for="message">Текст обращения</label>
        <textarea
            id="message"
            name="message"
            rows="6"
            required
        ></textarea>

        <fieldset>
            <legend>Вариант ответа</legend>

            <label class="checkbox">
                <input
                    type="checkbox"
                    name="reply_method[]"
                    value="sms"
                >
                СМС
            </label>

            <label class="checkbox">
                <input
                    type="checkbox"
                    name="reply_method[]"
                    value="email"
                >
                E-mail
            </label>
        </fieldset>

        <button type="submit">Отправить</button>

        <a href="headers.php" class="link">
            Перейти на 2 страницу
        </a>

    </form>
</main>

<footer>
    задание для самостоятельно работы
</footer>

</body>
</html>