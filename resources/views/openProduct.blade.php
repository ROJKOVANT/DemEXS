<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/openProduct.css">
    <title>Document</title>
</head>
<body>
@include('header')
<section class="open_tovar">
    <h1>Название открытого товара</h1>
    <div class="tovar_product">
        <div class="tovar_img">
            <img src="img/block2img1.png" alt="">
        </div>
        <div class=" tovar_info">
            <h3>Характеристики:</h3>
            <div class="cont1">
                <h4>Страна-производитель</h4>
                <p>Китай</p>
            </div>
            <div class="cont1">
                <h4>Год выпуска </h4>
                <p>2010</p>
            </div>
            <div class="cont1">
                <h4>Модель</h4>
                <p>лазерные принтеры</p>
            </div>
        </div>
        <div class=" price_info">
            <div class="contprice1">
                <p>5399 ₽</p>
            </div>
            <div class="contprice2">
                <p>кол-во / 15шт.</p>
            </div>
            <div class="btn_top1">
                <form action="" >
                    @csrf
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn_top1_more1">Добавить</button>
                </form>
            </div>
            <div class=" info_price">
                <p>Цена действительна только для интернет-магазина
                    и может отличаться от цен в розничных магазинах !</p>
            </div>
        </div>
    </div>
</section>
@include('footer')
</body>
</html>
