<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Товары</title>
    @Vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <nav>
            <a href="/home">Главная</a>
            <a href="/array">Массивы</a>
        </nav>
    </header>

    <main>

        <div class="product-grid">
            @foreach($array as $item)
                <div class="product-card">
                    <img src="{{ $item['path'] }}" alt="{{ $item['title'] }}">
                    <h3>{{ $item['title'] }}</h3>
                    <p>Цена: {{ $item['price'] }} руб.</p>
                </div>
            @endforeach
        </div>
    </main>

    <footer>
          <p>&copy; Шахвалеева София, 2026</p>
    </footer>
</body>
</html>