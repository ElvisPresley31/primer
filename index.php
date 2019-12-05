<?php
require "db1.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe - Регистрация</title>
    <link href="/reg/2.css" rel="stylesheet" />
    <link href="4.css" rel="stylesheet" type="text/css"></link>

    <link rel="apple-touch-icon" sizes="57x57" href="/reg/1.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/reg/2.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/reg/3.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/reg/4.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/reg/5.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/reg/6.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/reg/7.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/reg/8.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/reg/9.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/reg/10.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/reg/11.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/reg/12.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/reg/13.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/reg/14.png">
    <meta name="theme-color" content="#ffffff">
    
    <style type="text/css">
        #content {
            background: #f2ede9 !important;
        }

        #g-recaptcha-response {
           display: block !important;
           position: absolute;
           margin: -78px 0 0 0 !important;
           width: 302px !important;
           height: 76px !important;
           z-index: -999999;
           opacity: 0;
        }
    </style>
    <link href="/reg/data.css" rel="stylesheet" />
</head>
<body>
    <div class="ui left vertical inverted labeled icon sidebar menu">
        <a href="reg.phps" class="item">
            <i class="sign-in alternate icon"></i>
            Вход
        </a>
        <a href="rega.php" class="item">
            <i class="address book outline icon"></i>
            Регистрация
        </a>
        <a href="/Account/RestorePassword" class="item">
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
                                 <a href="index.php"><img src="logo.png" alt="cafe" style="height:40px;margin-top:5px;" /></a>
                        </div>
                        <div style="flex:1 1 auto;padding-top:5px;">
                            <div class="ui menu menuheader" style="background-color:transparent;">
                                <div class="right menu">
                                    <a href="reg.php" class="item">Вход</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-block">
                    <div class="header-mobile shadow-button-mini">
                        <div class="ui grid">
                            <div class="twelve wide column" style="text-align:center;">
                                 <a href="index.php"><img src="img/logo.png" alt="cafe" style="height:40px;margin-top:5px;text-align: center;margin-left:65px;" /></a>
                            </div>
                            <div class="two wide column">
                            </div>
                        </div>
                    </div>
                    <div style="height:50px;"></div>
                </div>
            </div>
            <div id="content" style="background:url('/img/top-bg.jpg');background-size:cover;">
                
<div class="ui container">
    <div id="panel_registration">
<?php 
   $data = $_POST;
   if( isset($data['button']))
{
    $errors = array();
        if( $data['password'] != $data['password2'])
    {
        $errors[] = '<p><p><p><p><p><hr><p><p><p><p><p><div style="color: red;">Повторный пароль введен не верно!<p><p><p><p><p></div>';
    }
    if(R::count('users',"name = ?", array($data['name'])) > 0)
    {
        $errors[] = '<p><p><p><p><p><hr><p><p><p><p><p><div style="color: red;">Пользователь с таким логином уже сущевствует<p><p><p><p><p></div>';
    }
      if(R::count('users',"mail = ?", array($data['mail'])) > 0)
    {
        $errors[] = '<p><p><p><p><p><hr><p><p><p><p><p><div style="color: red;">Пользователь с таким почтовым адресом уже сущевствует!<p><p><p><p><p></div>';
    }
          if(R::count('users',"tel = ?", array($data['tel'])) > 0)
    {
        $errors[] = '<p><p><p><p><p><hr><p><p><p><p><p><div style="color: red;">Пользователь с таким телефонным номером!<p><p><p><p><p></div>';
    }
    if( trim($data['password']) == '' )
    {
        $errors[] = 'Введите пароль';
    }
    if( trim($data['mail']) == '' )
    {
        $errors[] = 'Введите почту';
    }
        if( trim($data['tel']) == '' )
    {
        $errors[] = 'Введите телефон';
    }
            if( trim($data['data']) == '' )
    {
        $errors[] = 'Введите дату рождения';
    }
                if( trim($data['name']) == '' )
    {
        $errors[] = 'Введите имя';
    }
                if(trim($data['capcha']) == '')
                {
                    $errors[] = 'Введите капчу';
                }
if(empty($errors))
{
                $_SESSION['logged_user'] = array(
            'mail' => $_POST['mail'],
            'password' => $_POST['password'],
            'message' => $_POST['name'],
                $name = $_POST['name'],
                $password = $_POST['password']);

$message =
"Ваши данные для входа: 
Логин:  ".$name."     
Пароль:  ".$password."";
 

mail($_POST['mail'], 'Регистрация', $message);
$user = R::dispense('users');
$user->name = $data['name'];
$user->data = $data['data'];
$user->tel = $data['tel'];
$user->mail = $data['mail'];
$user->password = password_hash($data['password'],PASSWORD_DEFAULT);
R::store($user);
echo '<div style=color: green;">все прошло успешно</div><hr>';
}else
{
    echo '<div style=color: red;">'.array_shift($errors).'</div><hr>';
}
}
?>

	<form action="/rega.php" id="form_login" method="post" onsubmit="return checkPass()">    
       <div class="ui form">
                <div class="fields">
                    <div class="four wide field" style="position:relative;">
                       
                    </div>
                    <div class="one field" style="max-width:117px;position:relative;">
                       
                    </div>
                </div>
                <h3 class="ui dividing header brand-color">ОСНОВНАЯ ИНФОРМАЦИЯ</h3>
                <div class="fields">
                    <div class="field" style="position:relative;">
                        <label>Логин</label>
                        <input data-val="true" data-val-required="Заполните поле" id="registerCustomer_FirstName" name="name" type="text" value="<?php echo @$data['name']; ?>">  
                    </div>
                </div>
     
                <div class="fields">
                    <div class="field" style="width:130px;position:relative;">
                        <label>Дата рождения</label>
                        <input class="datepicker-here" data-val="true" data-val-required="Заполните поле" id="registerCustomer_Birthday" name="data" placeholder="дд.мм.гггг" type="text" value="<?php echo @$data['data']; ?>" />
                        <span class="field-validation-valid panel-mess-error  ui red pointing label" data-valmsg-for="registerCustomer.Birthday" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <h3 class="ui dividing header brand-color">ИНФОРМАЦИЯ ДЛЯ ВХОДА</h3>
                <div class="fields">
                    <div class="field" style="position:relative;">
                        <label>Моб. телефон (numbers after 8 )</label>
                        <input data-val="true" data-val-required="Заполните поле" name="tel" style="width:180px;" type="tel" maxlength="10" data-rule-regexp="^(([0-9]{3}\-[0-9]{7})|(_{3}\-_{7}))?$" minlength="10" value="<?php echo @$data['tel']; ?>"/>
                        <span class="field-validation-valid panel-mess-error  ui red pointing label" data-valmsg-for="registerCustomer.MobilePhone" data-valmsg-replace="true"></span>
                    </div>
                    <div class="six wide field" style="position:relative;">
                        <label>Email</label>
                        <input data-val="true" data-val-regex="Неверный адрес" data-val-regex-pattern="^(([A-Za-z0-9]+_+)|([A-Za-z0-9]+\-+)|([A-Za-z0-9]+\.+)|([A-Za-z0-9]+\++))*[A-Za-z0-9-_]+@((\w+\-+)|(\w+\.))*\w{1,63}\.[a-zA-Z]{2,6}$" data-val-required="Заполните поле" id="registerCustomer_Email" name="mail" type="text" value="<?php echo @$data['mail']; ?>" />
                        <span class="field-validation-valid panel-mess-error  ui red pointing label" data-valmsg-for="registerCustomer.Email" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="fields">
                    <div class="field">
                        <strong>Для безопасности вашего аккаунта пароль должен быть длиной от 6 до 20 символов и одновременно содержать:</strong><br/>строчные латинские буквы, цифры (0-9)
                    </div>
                </div>
                <div class="fields">
                    <div class="field" style="position:relative;">
                        <label>Пароль</label>
                        <input data-val="true" data-val-required="Заполните поле" id="pass" name="password" style="width:180px;" type="password" />
                        <span class="field-validation-valid panel-mess-error  ui red pointing label" data-valmsg-for="registerCustomer.ClientPassword" data-valmsg-replace="true"></span>
                    </div>
                    <div class="field" style="position:relative;">
                        <label>Подтвердите пароль</label>
                        <input data-val="true" id="passch" onKeyUp="checkPass()" name="password2" style="width:180px;" type="password" />
                        <span class="field-validation-valid panel-mess-error  ui red pointing label" data-valmsg-for="registerCustomer.ConfirmClientPassword" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <hr>
                <br>
                <div class="fields">

                    <div class="field">
                        <div class="ui checkbox">
                            <input data-val="true" data-val-required="The NotifyEmail field is required." id="NotifyEmail" name="registerCustomer.NotifyEmail" type="checkbox" value="true" /><input name="registerCustomer.NotifyEmail" type="hidden" value="false" />
                            <label style="cursor:pointer;" for="NotifyEmail">Я хочу получать Email рассылку</label>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
                <div class="field" style="position:relative;">
                 <span class="field-validation-valid panel-mess-error  ui left pointing red label" data-valmsg-for="registerCustomer.AgreesRegistration" data-valmsg-replace="true"></span>
                   <p><input data-val="true" data-val-range="Необходимо согласие" data-val-range-max="True" data-val-range-min="True" data-val-required="The AgreesRegistration field is required." id="AgreesRegistration" type="checkbox" name="registerCustomer.AgreesRegistration" value="true"><input name="registerCustomer.AgreesRegistration" type="hidden" value="false">                         <label for="AgreesRegistration" style="cursor:pointer;">
                            "Нажимая ЗАРЕГИСТРИРОВАТЬСЯ я соглашаюсь с" <a href="/Account/RegisterRules" style="font-weight:bold;" target="_blank">условиями регистрации и правилами использования</a> и даю
                            <a href="/Account/Politika" style="font-weight:bold;" target="_blank">согласие на сбор, обработку и хранение своих персональных данных.</a>
                        </label></p>
            </div>
<input id="registerCustomer_LocalTime" name="registerCustomer.LocalTime" type="hidden" value="" /><input data-val="true" data-val-number="The field LocalTimeOffset must be a number." data-val-required="The LocalTimeOffset field is required." id="registerCustomer_LocalTimeOffset" name="registerCustomer.LocalTimeOffset" type="hidden" value="0" />            <div class="vertical-15">
        <div id="block_btn_login">
        <input id="submit" class="button" type="submit" name="button" style="background-color:#77afcb;color:#3e282a; height: 30px;" value="Отправить данные" ><br/>
            </span>
        </div>   
            </div>
            <br/>
 <img style="border: 1px solid gray; background: url('bg_capcha.png');" src = "captcha.php" width="120" height="40"/>
<br/>
         <a action="validator.php" method="POST">
                 <input type="text" name="capcha" />
                 <br>
</form>    
<br>
<!-- добавление элемента div -->
<div class="g-recaptcha" data-sitekey="6LdjUqQUAAAAABRA4ilDFhz3vfAPv_K3uFSQSk6f"></div>
 
<!-- элемент для вывода ошибок -->
<div class="text-danger" id="recaptchaError"></div>
 
<!-- js-скрипт гугл капчи -->
<script src='https://www.google.com/recaptcha/api.js'></script>
</div>
    <div class="vertical-15"></div>
</div>
                <div class="vertical-20"></div>
            </div>
            <div id="footer">
                
<div class="footer-block">
    <div class="ui container">
        <div style="display:flex;align-items:center;">
            <div style="flex:1 1 auto;padding-left:20px;text-align:right;">
                Личный кабинет кофеен «Cafe» &copy;
            </div>

    <script src="/reg/5.js"></script>
    <script src="/reg/6.js"></script>
    <script src="/reg/7.js"></script>
    <script src="/reg/8.js"></script>
    <script src="/reg/9.js"></script>
    <script src="/reg/10.js"></script>
    
    <script src="/reg/11.js" type="text/javascript"></script>
    
    <script src="/reg/12.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            OnInitDropDown();
            OnMaskPhone();
        });
        //$('[name="registerCustomer.CardNumber"]').inputmask('9999999999999999');
        $('[name="registerCustomer.Pin"]').inputmask('999999');
                        //$('[name="registerCustomer.Birthday"]').inputmask('99.99.9999');
    </script>

    <script type="text/javascript">
        function OnMenuMobile() {
            var transition = 'overlay';
            $('.ui.sidebar').not('.styled').sidebar('setting', {
                transition: transition,
                mobileTransition: transition
            }).sidebar('toggle');
        }
    </script>
        <script type="text/javascript">
    window.onload = function() {
    var $recaptcha = document.querySelector('#g-recaptcha-response');

    if($recaptcha) {
        $recaptcha.setAttribute("required", "required");
    }
};
  </script>
</body>
</html>
