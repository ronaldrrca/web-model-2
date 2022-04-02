<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="414p.css">
    <!-- <link rel="stylesheet" href="768p.css" media="screen and (min-width: 768px)"> -->
    <!-- <link rel="stylesheet" href="1024p.css" media="screen and (min-width: 1024px)"> -->
    <link rel="stylesheet" href="1300p.css" media="screen and (min-width: 1300px)">
    <!-- <link rel="stylesheet" href="1500p.css" media="screen and (min-width: 1500px)"> -->
</head>
<body>
    <img id="menu_icon" src="assets/icons/menu_black_24dp.svg" alt="icono de menu">
    <p id="empresa_title">TU-EMPRESA</p>
    <nav>
        <ul id="dropDown_menu">
            <li class="dropDown_menu_item"><a href="#">INICIO</a></li>
            <li class="dropDown_menu_item"><a href="#">PRODUCTOS</a>
                <ul id="dropDown_menu_submenu">
                    <li class="dropDown_menu_item"><a href="#">Producto 1</a></li>
                    <li class="dropDown_menu_item"><a href="#">Producto 2</a></li>
                    <li class="dropDown_menu_item"><a href="#">Producto 3</a></li>
                </ul>
            </li>
            <li class="dropDown_menu_item"><a href="#">SERVICIOS</a></li>
            <li class="dropDown_menu_item"><a href="#">CONTACTANOS</a></li>
            <li class="dropDown_menu_item"><a href="#">LA EMPRESA</a></li>
        </ul>
        <ul id="mobil_menu">
            <li id="close_menu" class="mobil_menu_item"><a href="#">X</a></li>
            <li class="mobil_menu_item"><a href="#">INICIO</a></li>
            <li id="mobil_menu_products" class="mobil_menu_item"><a href="#">PRODUCTOS</a><img id="expandMore_arrow" src="assets/icons/expand_more_white_24dp.svg" alt="">
                <ul id="mobil_menu_submenu">
                    <li class="mobil_menu_item"><a href="#">Producto 1</a></li>
                    <li class="mobil_menu_item"><a href="#">Producto 2</a></li>
                    <li class="mobil_menu_item"><a href="#">Producto 3</a></li>
                </ul>
            </li>
            <li class="mobil_menu_item"><a href="#">SERVICIOS</a></li>
            <li class="mobil_menu_item"><a href="#">CONTACTANOS</a></li>
            <li class="mobil_menu_item"><a href="#">LA EMPRESA</a></li>
        </ul>
    </nav>
    <img id="home_icon" src="assets/icons/home_icon_24dp.svg" alt="icono de inicio">
</body>
</html>