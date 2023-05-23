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
    <h3>Все категории</h3>
        <div class='wrap'>
            <form action="" method="" enctype="multipart/form-data">
                <div>
                    <label for="category_id">Выберите категорию</label><br>
                    <select name="category_id" id="category">
                    </select>
                </div>
                <input type='text' placeholder='Введите название товара' required>
                <div>
                    <label for="picture" class="label-form">Загрузите картинку</label>
                    <br>
                    <input type="file" name="picture" class="input-file">
                </div>
                <input type='text' placeholder='Введите страну' required>
                <input type='text' placeholder='Введите год' required>
                <input type='text' placeholder='Введите модель' required>
                <input type='text' placeholder='Введите цену' required>
                <input type='text' placeholder='Введите кол-во' required>
                <button class='btn'>Создать товар</button>
            </form>
        </div>
    </div>
</div>
@include('admin/footerAdmin')
</body>
</html>
