<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/all.css">
    <title>CopyStar</title>
</head>
<body>
@include('admin/headerAdmin')
<div class="container-1">
    <h3>Все категории</h3>
    <table class="table-block">
        <tr class="table-title">
            <th>Название категории</th>
            <th>Действие</th>
        </tr>
        <tr class="table-content">
            <th></th>
            <th>
                <a onclick=" return confirm('Вы действительно хотите удалить данную категорию')" href="">удалить</a>
            </th>
        </tr>
    </table>
</div>
@include('admin/footerAdmin')
</body>
</html>
