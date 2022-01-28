<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>home</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">Products</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li ><a href="http://internet-shop.tmweb.ru/basket">Cart</a></li>
                <li><a href="http://internet-shop.tmweb.ru/reset">Add product</a></li>
                <li><a href="http://internet-shop.tmweb.ru/locale/en">Users</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://internet-shop.tmweb.ru/login">Log Out</a></li>

            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="starter-template">
        <h1>All products</h1>

        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="labels">


                    </div>

                    <img src="http://internet-shop.tmweb.ru/storage/products/gopro.jpg" alt="Камера GoPro">
                    <div class="caption">
                        <h3>Камера GoPro</h3>
                        <p>12000 ₽</p>
                        <p>
                        <form action="http://internet-shop.tmweb.ru/basket/add/6" method="POST">
                            <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                            <a href="http://internet-shop.tmweb.ru/portable/gopro"
                               class="btn btn-default"
                               role="button">Подробнее</a>
                            <input type="hidden" name="_token" value="T5buwIZgwUOv0TsWBWKs7Nu0GoEs8afVLOG1kiK9">            </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <ul class="pagination">

                <li class="page-item disabled" aria-disabled="true" aria-label="pagination.previous">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </li>





                <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                <li class="page-item"><a class="page-link" href="?&amp;page=2">2</a></li>


                <li class="page-item">
                    <a class="page-link" href="?&amp;page=2" rel="next" aria-label="pagination.next">&rsaquo;</a>
                </li>
            </ul>
        </nav>

    </div>
</div>
</body>
</html>
