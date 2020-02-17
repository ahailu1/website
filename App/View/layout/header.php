<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<nav class = "header__navbar">

    <ul class = "header__navbar-ul header__navbar-ul-first">

    <li class = "header__navbar-ul-li  header__navbar-ul-li-c"><a href = "index.php?url=home/homey">Home</a></li>
    <li class = "header__navbar-ul-li  header__navbar-ul-li-e"><a href = "index.php?url=portfolio/calendar">Portfolio</a></li>

    <li class = "header__navbar--sublist0">
<a href = "<?= $data["homeahref"];?>"><?php echo $data["session"];?>  <span class = "arrow">&#9660</span></a>
        <ul class = "header__navbar--ul0">
        <li class = "header__navbar--sublist0--item header__navbar--sublist0--item1"><a href = "<?= $data["ahref"];?>" ><?php echo $data["login"];?></a></li>
        </ul>
        </li>
     
        <li class = "header__navbar--sublist">
            <ul class = "header__navbar--ul">
               <li class = "header__navbar--sublist--item header__navbar--sublist--item1"><a href = "index.php?url=home/homey" class = "anchoraz">GitHub</a></li>
               <li class = "header__navbar--sublist--item header__navbar--sublist--item2"><a href = "index.php?url=home/homey">LinkedIn</a></li>
               <li class = "header__navbar--sublist--item header__navbar--sublist--item3"><a href = "index.php?url=home/homey">Email</a></li>
                    </ul>
                    </li>

                </ul>
</nav>
</body>
</html>