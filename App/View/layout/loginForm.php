<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class = "form__background">  
<form action = "?url=login/authenticate" method = "post" class = "form" id = "form" name = "form">
<div class = "form__border">
<div class = "form__container--login"><h1>Login</h1></div>


<div class = form__container>
<label for ="username"> <H1 class = "heading-primary heading-primary--username">Username<h1></label>
<input type = "text" name = "username" id = "form__name" class = "form__label" placeholder="username" value=<?= $data["username"]?> > 
<p class = "form__container--text"><?= $data["username_error"];?></p>
</div>

<div class = "form__container">
<label for ="password"> <H1 class = "heading-primary heading-primary--password">password <h1></label>
<input type = "password" name = "password" id = "form__name" class = "form__label" placeholder="password" > 
<p class = "form__container--text"><?= $data["password_error"];?></p>
</div>

<div class = "form__container form__container--button">
<button class = "form__button" type = "submit" name = "login">Login</button>
<a href = "?url=createAccount/register" class = "form__container--button-text"> No account? register</a></button>
</div>
</div>
</form>
</div>




</body>
</html>