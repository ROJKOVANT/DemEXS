<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/registr.css">
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
        <form action="{{ route('registration.form') }}" method="POST">
            @csrf
        <p>Регистрация</p>
            <input type='text' name="surname" placeholder='Введите фамилию' required>
            <input type='text' name="name" placeholder='Введите имя' required>
            <input type='text' name="patronymic" placeholder='Введите отчество'>
            <input type='text' name="login" placeholder='Введите логин' required>
            <input type='email' name="email" placeholder='Введите почту' required>
            <input type='password' name="password" placeholder='Введите пароль' required>
            <input type='password' name="password_repeat" placeholder='Введите пароль еще раз' required>
            <div class="block">
                <input type="checkbox" name="rules" class="check" required>
                <p class="check-p">Вы соглашаетесь на обработку данных</p>
            </div>
            <button class='login' type="submit">Войти</button>
        </form>
        <button class='forgot'><a href="/login">Есть аккаунт?</a></button>
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
