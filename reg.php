<?php
   require "db.php";
if(isset($_SESSION['logged_user'])) { 
header('Location: /'); 
}
else { 
}
   $data = $_POST;
   if( isset($data['log']))
{
    $errors = array();
        $user = R::findOne('users', 'name = ?', array($data['login']));
        if( $user )
        {
if( password_verify($data['password'], $user->password))
{
    $_SESSION['logged_user'] = $user;

}else
{
    $errors[] = 'Неверно введен пароль!';
}
}else
{
    $errors[] = 'Пользователь с таким логином не найден!';
}
}


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <link href="min1.css" rel="stylesheet" />
    <link href="1.css" rel="stylesheet" />
<script type="text/javascript" src="https://vk.com/js/api/openapi.js?162"></script>

    <link rel="apple-touch-icon" sizes="57x57" href="1.png">
    <link rel="apple-touch-icon" sizes="60x60" href="2.png">
    <link rel="apple-touch-icon" sizes="72x72" href="3.png">
    <link rel="apple-touch-icon" sizes="76x76" href="4.png">
    <link rel="apple-touch-icon" sizes="114x114" href="5.png">
    <link rel="apple-touch-icon" sizes="120x120" href="6.png">
    <link rel="apple-touch-icon" sizes="144x144" href="7.png">
    <link rel="apple-touch-icon" sizes="152x152" href="8.png">
    <link rel="apple-touch-icon" sizes="180x180" href="9.png">
    <link rel="icon" type="image/png" sizes="192x192" href="10.png">
    <link rel="icon" type="image/png" sizes="32x32" href="11.png">
    <link rel="icon" type="image/png" sizes="96x96" href="12.png">
    <link rel="icon" type="image/png" sizes="16x16" href="13.png">
	<link rel="shortcut icon" href="img/fav.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/img/ico/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="Регистрация">
</head>
<body>
	<script type="text/javascript">
  VK.init({apiId: 7110215});
</script>
<div id="content" style="background:url('top.jpg');background-size:cover;">
               

    <div class="ui left vertical inverted labeled icon sidebar menu">
        <a href="/" class="item">
            <i class="sign-in alternate icon"></i>
            Вход
        </a>
        <a href="rega.php" class="item">
            <i class="address book outline icon"></i>
            Регистрация
        </a>
        <a href="frg.php" class="item">
            <i class="key icon"></i>
            Пароль
        </a>
    </div>
    <div class="pusher site-ie-container">
        <div class="site">
            <div id="header">
                <div class="ui container header-block">
                    <div style="display:flex;">
                        <div style="flex:0 0 auto;">
                           <a href="index.php"><img src="img/logo.png" alt title /></a>                             
                        </div>
                        <div style="flex:1 1 auto;padding-top:5px;">
                            <div class="ui menu menuheader" style="background-color:transparent;">
                                <div class="right menu">
                                    <a href="index.php" class="item">На главную</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-block">
                    <div class="header-mobile shadow-button-mini">
                        <div class="ui grid">

                            <div class="twelve wide column" style="text-align:center;">
                                <a href="index.php"><img src="img/logo.png" alt="Cafe" style="height:40px;margin-top:5px;text-align: center;margin-left:65px;" /></a>
                            </div>
                            <div class="two wide column">                                
                            </div>
                        </div>
                    </div>
                    <div style="height:50px;"></div>
                </div>
            </div>
            <div id="content" style="background:url('/img/top-bg.jpg');background-size:cover;">
                



<div class="panel-lpgin" style="margin:0 auto;width:350px;background-color:#f2ede9;margin-top:8%;">

 <form action="reg.php" method="post">
<div style="padding:30px;box-shadow: 0px 10px 30px #3e282a !important;">
        <div class="ui form">
            <div class="field" style="position:relative;">
                <label>Логин</label>
                <input data-val="true" data-val-required="Заполните поле" name="login" type="text" value="<?php echo @$data['login']; ?>"> 
                <span class="field-validation-valid panel-mess-error ui red pointing label" data-valmsg-for="_customerLogin.Login" data-valmsg-replace="true"></span>
            </div>
            <div class="field" style="position:relative;">
                <label>Пароль</label>
                <input data-val="true" data-val-required="Заполните поле" name="password" type="password" value="<?php echo @$data['password']; ?>"/>
                <span class="field-validation-valid panel-mess-error ui red pointing label" data-valmsg-for="_customerLogin.Password" data-valmsg-replace="true"></span>
            </div>
        </div>
        <div class="vertical-5">
        </div>
        <div style="text-align:center;">
             <input href="reg.php" value="Войти" name="log" onClick="test1(form)" id="submit" class="ui label" type="submit" ripple="ripple" style="background-color:#77afcb;color:#3e282a;"></input>
             <a href="rega.php" class="ui label" ripple="ripple" style="background-color:#77afcb;color:#3e282a;">Регистрация</a>
            <a href="frg.php" class="ui label" ripple="ripple" style="background-color:#77afcb;color:#3e282a;">Забыли пароль?</a>      
              </div>
        <div class="vertical-5">
           <!-- VK Widget -->
<div id="vk_auth" style="padding: inherit;
    margin: auto;"></div>


<!-- VK Widget -->
<div id="vk_auth"></div>
<script type="text/javascript">
  VK.Widgets.Auth("vk_auth", {"onAuth":"function(data) {alert('user '+data['uid']+' authorized');}"});
</script>


        </div>
        <div id="block_btn_login">
            <style> div{
                text-align: center;
            }
        </style>
            </span>
            <?php

                                    if( isset($_SESSION['logged_user'])): ?>   Вы уже вошли, <?php echo $_SESSION['logged_user']->name; ?>
                                    <a style= "text-decoration: underline;" href="logout.php">Выйти</a>
                                    <?php endif;
                                     ?> 
              <?php
               if( isset($data['log']))
            if(empty($errors))
{
    echo '<hr><div style="text-align:center; color: green;">Авторизация прошла успешно</div>';
     
}else
{   
    echo '<hr><div style="text-align:center; color: red;">Авторизация прошла неудачно</div>';

}
?>

        </div>        
    </div>
</form></div>



                <div class="vertical-20"></div>
            </div>
            <div id="footer">
                
<div class="footer-block">
    <div class="ui container">
        <div style="display:flex;align-items:center;">
            <div style="flex:1 1 auto;padding-left:20px;text-align:right;">
                Личный кабинет кофейни «cafe»
            </div>

        </div>
    </div>    
</div>

            </div>
        </div>       
    </div>

    <div class="ui mini modal" id="panel_modal_error">
        <div class="red header"><i class="red exclamation triangle icon"></i></div>
        <div class="content" id="modal_panel_error_message">
        </div>
    </div>
    <script src="js/1.js"></script>
    <script src="js/2.js"></script>
    <script src="js/3.js"></script>
    <script src="js/4.js"></script>
    <script src="js/5.js"></script>
    <script src="js/6.js"></script>
    <script src="js/7.js" type="text/javascript"></script>
</body>
</html>
