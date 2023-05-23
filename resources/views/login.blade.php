<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login.css">
    <title>CopyStar</title>
    <style>
        .alert{
            color: red;
        }
    </style>
</head>
<body>
    <div class="container-1">
        <h2 class="link-effect"><a href="/">CopyStar</a></h2>
        <div class='wrap'>
            <p>Авторизация</p>
            <form action="{{ route('login.form') }}" method="post">
                @csrf
                <input type='text' name="login" placeholder='Введите логин' required>
                <input type='password' name="password" placeholder='Введите пароль' required>
                <button class='login' type="submit">Войти</button>
            </form>
            <button class='forgot'><a href="/registr">Есть аккаунт?</a></button>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
</body>
</html>
