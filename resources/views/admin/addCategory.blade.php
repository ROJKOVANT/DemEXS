<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/add.css">
    <title>CopyStar</title>
</head>
<body>
@include('admin/headerAdmin')
<div class="container-1">
    <h3>Создать категорию</h3>
    <div class="container-1">
        <div class='wrap'>
            <form>
                <input type='text' placeholder='Введите название категории' required>
                <button class='btn'>Создать категорию</button>
            </form>
        </div>
    </div>
</div>
@include('admin/footerAdmin')
</body>
</html>
