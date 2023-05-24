<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/ordersAdmin.css">
    <title>CopyStar</title>
</head>
<body>
@include('admin/headerAdmin')
<div class="container-1">
    <h3>Все заказы</h3>
    <table class="table-block">
        <tr class="table-title">
            <th>ФИО</th>
            <th>Название товара</th>
            <th>Дата</th>
            <th>Кол-во</th>
            <th>Цена</th>
            <th>Статус</th>
            <th>Изменить статус</th>
        </tr>
        <tr class="table-content">
            <th>Рожков Антон Александрович</th>
            <th>XM-200Q</th>
            <th>2022-02-22</th>
            <th>5 шт.</th>
            <th>50000 ₽</th>
            <th>Новый</th>
            <th>
                <form action="" method="">
                    <div>
                        <input type="text" name="delivery_status" list="delivery_statuses" class="input-form" value="Новый">
                        <datalist id="delivery_statuses">
                            <option value="подтвержден"/>
                            <option value="отменен"/>
                        </datalist>
                    </div>
                    <br>
                    <button type="submit" class="btn">Обновить статус</button>
                </form>
            </th>
        </tr>
    </table>
</div>
@include('admin/footerAdmin')
</body>
</html>
