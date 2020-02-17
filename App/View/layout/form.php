<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class = "form__block">


<div class = form__body>
    
<div class = "form__body--header">
<h1 class = "form__container--sign">Sign Up</h1>
</div>

<div class = "form__container">
<form action = "?url=createaccount/register" method = "post" class = "form" id = "form" name = "form">

            <div class = "form__container--item">
                    <label for ="username" class = "form__body--label"> <H1 class = "form__container--heading"><h1>
                    <input type = "text" name = "uid" id = "form__name" class = "form__label" placeholder="Username" > 
                    <p class = "form__container--text"><?php echo $data["username_error"];?></p></label>
                </div>

                    <div class = "form__container--item">
                        <label for ="email"> <H1 class = "heading-primary form__container--heading"><h1></label>
                            <input type = "text" name = "email" id = "form__name" class = "form__label" placeholder="Email" > 
                                <p class = "form__container--text"><?= $data["email_error"]; ?></p>
                        </div>
                        
                        <div class = "form__container--item">
                            <label for ="password"> <H1 class = "heading-primary form__container--heading"> <h1></label>
                                <input type = "password" name = "pwd" id = "form__name" class = "form__label" placeholder="Password" > 
                                <p class = "form__container--text"><?= $data["password_error"];?></p>
                            </div>

                            <div class = "form__container--item">
                                <label for ="pwd_repeat"> <H1 class = "heading-primary form__container--heading"><h1></label>
                                    <input type = "password" name = "pwd-repeat" id = "form__name" class = "form__label" placeholder = "Confirm" > 
                                    <p class = "form__container--text"><?= $data["confirm_error"];?></p>
                                </div>

                                <div class = "form__container--item form__container--button">
                            <button class = "form__button form__button--Account" type = "submit" name = "submit" action = "?url=login/authenticate">Create Account</button>
                           <a href = "?url=login/authenticate"> Have an account?login</a>
                                </div>
                            
                            </form>
                            </div>

            
        
</div>
</div>
</body>
</html>