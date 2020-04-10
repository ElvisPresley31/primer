<?
 require "db.php";
  require "nt2.php";
protect_page();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cafe - Баланс</title>
    <link href="/css/1.css" rel="stylesheet" />
    <link href="/css/2.css" rel="stylesheet" />
    <link href="/css/3.css" rel="stylesheet" type="text/css"></link>

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

    
</head>
<body>
    <div class="ui left vertical inverted labeled icon sidebar menu">
        <a href="/" class="item">
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
            <div id="content">
                <div class="ui container" id="panel_page">
                    



<div class="vertical-10"></div>

    <div class="two column stackable ui grid">
        <div class="column">
            <div class="two column ui grid">
                <div class="left aligned column">
                    <a ripple="ripple" onclick="ClosePanelAddCard()" class="ui green circular icon button shadow-button-mini" data-popup="true" data-content="Обновить">
                        <i class="sync alternate icon"></i>
                    </a>
                </div>
                <div class="right aligned column">
                    <a ripple="ripple" onclick="OnPanelAddCard()" class="ui green circular icon button shadow-button-mini" data-popup="true" data-content="Добавить карту">
                        <i class="plus icon"></i>
                    </a>
                </div>
            </div>            
            <div class="vertical-5"></div>
            <div class="ui one column grid">
                <div class="column vertical-5">
                    <h3 class="ui horizontal divider header brand-color">
                        Всего
                    </h3>
                </div>
                <div class="column vertical-5">
                    <div class="flex-panel">
                        <div style="flex:0 0 200px;">
                            <label class="label-title brand-color" style="text-align:left;font-weight:bold;font-size:18px;">Бонусы</label>
                        </div>
                        <div style="flex:1 1 auto;">
                            <label class="label-value" style="text-align:right;"> 0,00</label>
                        </div>
                    </div>
                </div>
                <div class="column vertical-5">
                    <div class="flex-panel">
                        <div style="flex:0 0 200px;">
                            <label class="label-title brand-color" style="text-align:left;font-weight:bold;font-size:18px;">Карты</label>
                        </div>
                        <div style="flex:1 1 auto;">
                            <label class="label-value" style="text-align:right;">1</label>
                        </div>
                    </div>
                </div>


                <div class="column vertical-5" id="panel_card">
                    

    <div class="vertical-10"></div>
    <div class="ui one column grid">

        <div class="vertical-5"></div>
        <div class="column vertical-5">
            <h3 class="ui horizontal divider header brand-color">

                <i  style="color:#3e282a;"></i>
                 Ваша Карта
            </h3>
        </div>
        <div class="column vertical-5">
            <div class="flex-panel">
                <div style="flex:0 0 150px;">
                    <label class="label-title brand-color" style="text-align:left;font-weight:bold;font-size:18px;">Номер</label>
                </div>
                <div style="flex:1 1 auto;">
                    <label class="label-value" style="text-align:right;">701015862079</label>
                </div>
            </div>
        </div>
        <div class="column vertical-5">
            <div class="flex-panel">
                <div style="flex:0 0 150px;">
                    <label class="label-title brand-color" style="text-align:left;font-weight:bold;font-size:18px;">Статус</label>
                </div>
                <div style="flex:1 1 auto;">
                    <label class="label-value" style="text-align:right;">Активна</label>
                </div>
            </div>
        </div>

        <div class="column vertical-5">
            <div class="flex-panel">
                <div style="flex:0 0 150px;">

                    <label class="label-title brand-color" style="text-align:left;font-weight:bold;font-size:18px;">Бонусы</label>
                </div>
                <div style="flex:1 1 auto;">
                    <label class="label-value" style="text-align:right;">  0,00</label>
                </div>
            </div>
        </div>

            <div class="column vertical-5">
                <div class="flex-panel">
                    <div style="flex:0 0 170px;">                       
                        <label class="label-title brand-color" style="text-align:left;font-weight:bold;font-size:18px;">Активных бонусов</label>
                    </div>
                    <div style="flex:1 1 auto;">
                        <label class="label-value" style="text-align:right;">  0,00</label>
                    </div>
                </div>
            </div>

        <div class="column vertical-5">
            <div class="flex-panel">
                <div style="flex:0 0 150px;">
                    <label class="label-title brand-color" style="text-align:left;font-weight:bold;font-size:18px;">Всего потрачено</label>
                </div>
                <div style="flex:1 1 auto;">
                    <label class="label-value" style="text-align:right;">  0,00</label>
                </div>
            </div>
        </div>
        <hr>
                <div class="column vertical-5">
            <div class="flex-panel">
                <div style="flex:0 0 150px;">
                    <label class="label-title brand-color" style="text-align:left;font-weight:bold;font-size:18px;">Удалить учетную запись?</label>
                </div>
                <div style="flex:1 1 auto;">
                    <a href="delete.php" class="label-value" style="text-align:right;color: red;">Удалить</label>
                </div>
            </div>
        </div>

        <div class="vertical-5"></div>

<form action="/Home/GetSortCode?Length=4" data-ajax="true" data-ajax-failure="OnFormAjaxError" data-ajax-method="POST" data-ajax-success="CompleteGetShortCode" id="form_get_short_code" method="post"><input name="__RequestVerificationToken" type="hidden" value="qsqvILaVt8LHXfNUy1hP3fEWxLgluACyX_9ztD6SIvHg_jZjkSm5A0KjqoOhrg3vExv4zip1LVJK1GpYPhyAjfN0deM1otyPKB8nEXhE3B5DhtwMicGvVhD8DRh7fdhw0" />                    <div style="display:none;width:100%;" id="panel_code_token">
                        <div class="column vertical-5">
                            <h3 class="ui horizontal divider header brand-color">Оплата</h3>
                        </div>
                        <div class="column vertical-5">
                            В целях безопасности оплаты необходимо ввести пин-код выбранной карты, это делается один раз для привязки устройства.
                        </div>
                        <div class="column vertical-5" style="text-align:center;">
                            <div class="ui input">
                                <input data-val="true" data-val-number="The field Pin must be a number." data-val-required="Заполните поле" id="pinCode_Pin" name="pinCode.Pin" style="width:100px;" type="text" value="" />
                                <span class="field-validation-valid panel-mess-error ui red pointing label" data-valmsg-for="pinCode.Pin" data-valmsg-replace="true"></span>
                            </div>
                            <input data-val="true" data-val-number="The field CardNumber must be a number." data-val-required="Заполните поле" id="pinCode_CardNumber" name="pinCode.CardNumber" type="hidden" value="701015862079" />
                        </div>
                        <div class="column vertical-5" style="text-align:center;">
                            <span onclick="GetSortCode()" class="ui btn-shoko button">Получить код</span>
                        </div>
                    </div>
</form>    </div>
    <div class="vertical-5"></div>
    <input type="hidden" id="hid_user_token" value="" />
    <input type="hidden" id="hid_img_url" value="https://srv-sh-work-mob.secureprofile.ru/v2.0.0/applicationservice/api/Resources/GetImage/701015862079" />


                </div>

            </div>
        </div>
        <div class="column card-img" style="min-height:300px;">
            <img id="img_card" style="border-radius:20px;" src="qwe.png" />
        </div>
    </div>



                </div>
                <div style="padding-bottom:70px;"></div>
            </div>
            <div id="footer">
                
<div class="footer-block">
    <div class="ui container">
        <div style="display:flex;align-items:center;">
            <div style="flex:1 1 auto;padding-left:20px;text-align:right;">
                Личный кабинет кофеен «Cafe»
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
    
    <div class="loader-container">
        <div id="loader"></div>
    </div>



    <script type="text/javascript">
        function OnMenuMobile() {
            var transition = 'overlay';
            $('.ui.sidebar').not('.styled').sidebar('setting', {
                transition: transition,
                mobileTransition: transition
            }).sidebar('toggle');
        };
    </script>
</body>
</html>