<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action = "?url=createaccount/register" method = "post" class = "form" id = "form" name = "form">
<div class = "form__block">
<div class = "form__pics"> 
<img src ="<?= URLROOT?>/Local/Images/displaypop.jpg" class = form__picture>
<img src = "<?= URLROOT?>/Local/Images/popup.jpg" class = form__picture>
</div>
<div class = form__body>
            <h1 class = "heading-primary heading-primary--signup" id = "usertitle">sign up</h1><p id = "paragraphedit"></p>
                <div class = "form__container ">
                    <label for ="username"> <H1 class = "heading-primary heading-primary--username">Username<h1>
                    <input type = "text" name = "uid" id = "form__name" class = "form__label" placeholder="username" > 
                    <p class = "form__container--text"><?php echo $data["username_error"];?></p></label>
                </div>
                    <div class = "form__container">
                        <label for ="email"> <H1 class = "heading-primary heading-primary--email">Email<h1></label>
                            <input type = "text" name = "email" id = "form__name" class = "form__label" placeholder="Email" > 
                                <p class = "form__container--text"><?= $data["email_error"]; ?></p>
                        </div>
                        <div class = "form__container">
                            <label for ="password"> <H1 class = "heading-primary heading-primary--password">password <h1></label>
                                <input type = "password" name = "pwd" id = "form__name" class = "form__label" placeholder="password" > 
                                <p class = "form__container--text"><?= $data["password_error"];?></p>
                            </div>
                            <div class = "form__container">
                                <label for ="pwd_repeat"> <H1 class = "heading-primary heading-primary--confirm">confirm password<h1></label>
                                    <input type = "password" name = "pwd-repeat" id = "form__name" class = "form__label" placeholder = "confirm" > 
                                    <p class = "form__container--text"><?= $data["confirm_error"];?></p>

                                </div>
                                <div class = "form__container form__container--button">
                            <button class = "form__button" type = "submit" name = "submit" action = "?url=login/authenticate">Sign Up</button>
                           <a href = "?url=login/authenticate"> Have an account?login</a>
                                </div>
                </div>
       
            <div class = "form__document">
                <h2 class = "heading-primary heading-primary--document">Terms and Agreements</h2>
                    <p class = "paragraph__default form__document--text"> The purpose of this signup form is to demonstrate my ability as an aspiring Jr.front-end webdeveloper and thus attract the interest of employers and recruiters. By signing up, you will have access
                        to a page that contains projects that is only accessible for registered users. The registration process is intended to be brief so that
                        it isn't difficult to access my project. All information is stored in a mysql database.   
            <p class = "form__document--text"></p>
            
                    </div>
        </div>
    </form>    


</body>
</html>