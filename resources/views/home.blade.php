<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    @Vite(['resources/css/app.css', 'resources/js/app.js'])
   
</head>
<body>
    <header>
        <div class="logo">Мой сайт</div>
    <a href="/home" class="logo-link">
        <img src="/img/img1.jpg" alt="Логотип сайта" class="logo">
    </a>
        <nav>
            <a href="/home"> Главная</a>
            <a href="/array"> Массивы</a>
        </nav>
    </header>

    <main>
        <h1>Добро пожаловать!</h1>
        <img src="/img/img2.jpg" alt="">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </main>

    <footer>
         <p>&copy; Шахвалеева София, 2026</p>
    </footer>
</body>
</html>