<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>№3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Этапы выполнения:</h1>

    <section class="task">
        <h2>1. Создание рабочего каталога на сервере</h2>
        <div class="description">
            <p>Создаём каталог <code>~/www/hw3</code> для размещения файлов работы.</p>
        </div>
        <div class="screenshot">
            <img src="0.1.png" alt="mkdir hw3">
            <div class="caption">Скриншот 0.1: Создание каталога hw3</div>
        </div>
    </section>

    <section class="task">
        <h2>2. Создание базы данных и таблиц</h2>
        <div class="description">
            <p>Подключаемся к MySQL, создаём таблицы <code>application</code>, <code>language</code>, <code>application_language</code> и заполняем справочник языков.</p>
        </div>
        <div class="screenshot">
            <img src="0.2.png" alt="Вход в MySQL">
            <div class="caption">Скриншот 0.2: Подключение к MySQL</div>
        </div>
        <div class="screenshot">
            <img src="0.3.png" alt="Создание таблиц">
            <div class="caption">Скриншот 0.3: SQL-запросы создания таблиц и вставка языков</div>
        </div>
    </section>

    <section class="task">
        <h2>3. Инициализация Git и отправка на GitHub</h2>
        <div class="description">
            <p>Локальный репозиторий создан, добавлены файлы <code>index.php</code>, <code>form.php</code>, <code>style.css</code>, <code>view.php</code>, а также скриншоты 0.1–0.3. Выполнен push на GitHub.</p>
        </div>
        <div class="screenshot">
            <img src="0.4.png" alt="Git push">
            <div class="caption">Скриншот 0.4: Отправка на GitHub</div>
        </div>
    </section>

    <section class="task">
        <h2>4. Проверка сохранённых данных</h2>
        <div class="description">
            <p>После отправки нескольких анкет проверяем, что данные корректно записаны в таблицу <code>application</code>.</p>
        </div>
        <div class="screenshot">
            <img src="0.5.png" alt="SELECT из application">
            <div class="caption">Скриншот 0.5: Просмотр записей в БД</div>
        </div>
    </section>

    <div class="footer-links">
        <a href="form.php">← Вернуться к форме</a>
    </div>
</div>
</body>
</html>