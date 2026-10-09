<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'AutoSelect — База даних автосалону')</title>
</head>
<body style="font-family: 'Segoe UI', Arial, sans-serif; margin: 0; padding: 0; background-color: #f1f3f5;">

<!-- Навігаційне меню автосалону -->
<header style="background-color: #1c1e21; border-bottom: 3px solid #d90429;">
    <div style="max-width: 1200px; margin: 0 auto; padding: 15px 20px; display: flex; align-items: center; justify-content: space-between;">
        <div style="font-size: 22px; font-weight: bold; color: #ffffff; letter-spacing: 1px;">
            🚗 <span style="color: #d90429;">AUTO</span>SELECT
        </div>
        <nav>
            <a href="{{ url('/') }}" style="color: #ffffff; margin-right: 20px; text-decoration: none; font-weight: bold;">Головна</a>
            <a href="{{ url('/cars') }}" style="color: #ced4da; margin-right: 20px; text-decoration: none;">Каталог авто</a>
            <a href="{{ url('/brands') }}" style="color: #ced4da; margin-right: 20px; text-decoration: none;">Марки та моделі</a>
            <a href="{{ url('/test-drive') }}" style="color: #ced4da; margin-right: 20px; text-decoration: none;">Запис на тест-драйв</a>
            <a href="{{ url('/contacts') }}" style="color: #ced4da; text-decoration: none;">Контакти</a>
        </nav>
    </div>
</header>

<!-- Основний вміст -->
<main style="padding: 40px 20px; min-height: 420px; max-width: 1100px; margin: 0 auto;">
    @yield('content')
</main>

<!-- Підвал (Footer) автосалону -->
<footer style="background-color: #1c1e21; color: #adb5bd; padding: 30px 20px; border-top: 1px solid #2b3035;">
    <div style="max-width: 1200px; margin: 0 auto; display: flex; justify-content: space-between; flex-wrap: wrap; gap: 20px;">
        <div>
            <h4 style="color: #ffffff; margin-top: 0; margin-bottom: 10px;">AutoSelect Dealership</h4>
            <p style="font-size: 14px; margin: 0; color: #868e96;">База даних та інформаційна система автосалону.</p>
        </div>
        <div>
            <h4 style="color: #ffffff; margin-top: 0; margin-bottom: 10px;">Популярні марки</h4>
            <p style="font-size: 14px; margin: 0; color: #868e96;">Audi | BMW | Mercedes-Benz | Volkswagen | Toyota</p>
        </div>
        <div>
            <h4 style="color: #ffffff; margin-top: 0; margin-bottom: 10px;">Графік роботи</h4>
            <p style="font-size: 14px; margin: 0; color: #868e96;">Пн-Сб: 09:00 - 19:00 | Нд: Вихідний</p>
        </div>
    </div>
    <hr style="border: 0; border-top: 1px solid #2b3035; margin: 20px 0 15px 0;">
    <div style="text-align: center; font-size: 13px; color: #6c757d;">
        &copy; {{ date('Y') }} AutoSelect. Усі права захищено | Розробив: Крикун Сергій (Група РС-42)
    </div>
</footer>

</body>
</html>
