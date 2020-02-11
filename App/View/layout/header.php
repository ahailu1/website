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
        <li class = "header__navbar-ul-li  header__navbar-ul-li-a"><a href = "<?= $data["homeahref"];?>"><?php echo $data["session"];?></a></li>
        <li class = "header__navbar-ul-li  header__navbar-ul-li-a"><a href ="<?= $data["ahref"];?>" ><?php echo $data["login"];?> </a></li>
            <li>    
<ul class = "header__navbar-ul header__navbar-ul-second">
    <li class = "header__navbar-ul-li  header__navbar-ul-li-c"><a href = "?url=home/homey">Home</a></li>
        <li class = "header__navbar-ul-li  header__navbar-ul-li-e"><a href = "?url=portfolio/calendar">Portfolio</a></li>
                </ul>
            </li>
                </ul>
</nav>
</body>
</html>