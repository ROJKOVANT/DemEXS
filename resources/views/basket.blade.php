<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/basket.css">
    <title>CopyStar</title>
</head>
<body>
@include('header')
<section class="paragraph">
    <h3>Корзина</h3>
    <table class="table-block">
        <tr class="table-title">
            <th>Изображение товара</th>
            <th>Название товара</th>
            <th>Кол-во товара</th>
            <th>Цена товара</th>
            <th>Действие</th>
        </tr>
            <tr class="table-content">
                <th><img src="" style="height: 5vw; width: 5vw;" alt=""></th>
                <th></th>
                <th> шт.</th>
                <th> ₽</th>
                <th>
                    <a onclick=" return confirm('Вы действительно хотите удалить данный товар?')" href="">X</a>
                </th>
            </tr>
    </table>
    <div class="order">
        <h1> Оформление заказа</h1>
    </div>
    <div class="data">
        <div class="itog">
            <h2>Итоговая сумма заказа :  сумма заказа ₽</h2>
        </div>
        <div class="address">
            <form action="">
                <div class="buy">
                    <button type="submit" class="btn_top1_more1"
                            onclick="return confirm('Подтвердите свой заказ и мы получилим его.Ожидайте доставки!')">
                        Оплата наличными
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@include('footer')
</body>
</html>
