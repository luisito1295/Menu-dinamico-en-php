<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla home</title>
    <style>
        header{
            position: relative;
            margin: auto;
            text-align: center;
            padding: 5px;
        }
        nav{
            position: relative;
            margin: auto;
            width: 100%;
            height: auto;
            background: black;
        }
        nav ul{
            position: relative;
            width: 24%;
            line-height: 50px;
            list-style: none;
        }
        nav ul li{
            display: inline-block;
            width: 24%;
            line-height: 50px;
            list-style: none;
        }
        nav ul li a{
            color: white;
            text-decoration: none;
        }
        section{
            position: relative;
            padding: 20px;
        }
    </style>
</head>
<body>
    
    <header>
        <h1>Logotipo</h1>
    </header>

    <?php include "modules/navegation.php" ?>

    <section>
        <?php 
            $pages = new PagesController();
            $pages -> LinkPagesController();
        ?>
    </section>

</body>
</html>