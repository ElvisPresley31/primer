<?php
   require "db.php";
   $data = $_POST;
   if( isset($data['inf']))
{
    $errors = array();
        $user = R::findOne('subcribe', 'mail = ?', array($data['mail']));
        if($data['mail'] !=0)
        {

      if(R::count('subcribe',"mail = ?", array($data['mail'])) > 0)
{
	 echo "<script>alert('Вы уже подписаны');location.href='index.php';</script>";
}else
{			
	 echo "<script>alert('Вы успешно подписались');location.href='index.php';</script>";
		$use = R::dispense('subcribe');
		$use->mail = $data['mail'];
		R::store($use);

	$message =
"Благодарим вас за подписку на нашу рассылку новостей ";
 
mail($_POST['mail'], 'Регистрация', $message);
}
}
}


?>

	<!DOCTYPE html>
	<html lang="ru" class="no-js">
	<head>		
		<meta charset="UTF-8">		
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="img/fav.png">
		<meta name="author" content="Dmitry">
		<meta name="yandex-verification" content="db15f6fb3e4bba1f" />
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="verification" content="dfab78c99b255649eff47f959b678a" />
		<meta name="yandex-verification" content="db15f6fb3e4bba1f" />
		<title>Официальный сайт кофейни "Cafe" </title>
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main1.css">
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/123.css">
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(54934411, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/54934411" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

		</head>
		<body>	
		


<?php 
$roe = R::load( 'Admin', 1 );
?>
			  <header id="header" id="home">
				<div class="header-top">
		  			<div class="container">
				  		<div class="row justify-content-end">
				  			<div class="col-lg-8 col-sm-4 col-8 header-top-right no-padding">
				  				<ul>
				  					<li>
				  						Пн-Пт: 8:00 - 20:00
				  					</li>
				  					<li>
				  						Сб-Вс: 11:00 - 16:00
				  					</li>
				  					<li>
				  						<a href=""> <?php echo $roe['tel']?></a>
				  					</li>		
				  					<li>

				  			        <?php
							        if( isset($_SESSION['logged_user'])): ?>	Здравствуйте, <?php echo $_SESSION['logged_user']->name; ?>
							         <a style= "text-decoration: underline;" href="logout.php">Выйти</a>
							  	    <?php endif; ?>	
							  	    </li>
				  				</ul>
				  			</div>
				  		</div>			  					
		  			</div>
				</div>			  	
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.php"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="#home">Главная</a></li>
				          <li><a href="#about">О нас</a></li>
				          <li><a href="#coffee">Кофе</a></li>
				          <li><a href="#review">Отзывы</a></li>
				          <li class="menu-has-children"><a href="">Страницы</a>
				            <ul>
				              <li><a href="generic.php">Информация</a></li>
				              							  <?php
							  if( isset($_SESSION['logged_user']))
							  	{
    echo '';
     
}else
{   
    echo '<li><a href="reg.php">Авторизоваться</a></li>';

}
?>
							  <?php
							  if( isset($_SESSION['logged_user'])): ?>
							  	<li><a href="lk.php">Личный кабинет</a></li>
							  <?php endif; ?>
							  <?php
							  if( isset($_SESSION['logged_user'])): ?>
							  	<li><a href="logout.php">Выйти</a></li>
							  <?php endif; ?>
				            </ul>
				          </li>
				        </ul>
				      </nav>		    		
			    	</div>
			    </div>
			  </header>

			<section class="banner-area" id="home">	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-start">
						<div class="banner-content col-lg-7">
							<h6 class="text-white text-uppercase">Теперь вы можете почувствовать бодрящую энергию кофе </h6>
							<h1>
								Начни свой день <br>
							    с черного кофе				
							</h1>
							<a href="pokypka.php" class="primary-btn text-uppercase">Купить сейчас</a>
<script>var amo_social_button = {id: "15535", hash: "62e72f8f4c8a67b9e627836f170a5a8a3fdde6a72fd6084aab7dafeaf091d6db", locale: "ru", setMeta: function(params) {this.params = this.params || []; this.params.push(params);}};</script><script id="amo_social_button_script" async="async" src="https://gso.amocrm.ru/js/button.js"></script>
						</div>											
					</div>
				</div>
			</section>
<?php
$row = R::load( 'video', 1 ); 
?>
			<section class="video-sec-area pb-100 pt-40" id="about">
				<div class="container">
					<div class="row justify-content-start align-items-center">
						<div class="col-lg-6 video-right justify-content-center align-items-center d-flex">
							<div class="overlay overlay-bg"></div>
						 <?php echo "<a class='play-btn' href='".$row['url']."'><img class='img-fluid' src=img/play-icon.png </a>";?></a>
						</div>						
						<div class="col-lg-6 video-left">

							<h6>Процесс приготовления кофе.</h6>
							<h1>Мы ведем трансляцию<br>
							приготовления нашего кофе</h1>
							<p><span>Мы ведем ее чтоб вы могли увидеть что мы готовим настоящий кофе и как мы это делаем</span></p>
							<p>
								
							</p>
							<img class="img-fluid" src="img/signature.png" alt="">
						</div>
					</div>
				</div>	
			</section>
			
			<section class="menu-area section-gap" id="coffee">
<?php
$roe = R::load( 'coffe', 1);
$roz = R::load( 'coffe', 2);
$rox = R::load( 'coffe', 3);
$roc = R::load( 'coffe', 4);
$rov = R::load( 'coffe', 5);
$rob = R::load( 'coffe', 6);
$ron = R::load( 'coffe', 7);
$rom = R::load( 'coffe', 8);
$roa = R::load( 'coffe', 9);
 ?>
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Какой из кофейных напитков вы больше предпочитаете?</h1>	
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4><?php echo $roe['name'];?></h4>
									<p class="price float-right">
										<?php echo $roe['price'];?>
									</p>
								</div>
								<p>
									<?php echo $roe['opis'];?>
								</p>								
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4><?php echo $roz['name'];?></h4>
									<p class="price float-right">
										<?php echo $roz['price'];?>
									</p>
								</div>
								<p>
									<?php echo $roz['opis'];?>
								</p>								
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4><?php echo $rox['name'];?></h4>
									<p class="price float-right">
										<?php echo $rox['price'];?>
									</p>
								</div>
								<p>
									<?php echo $rox['opis'];?>
								</p>								
							</div>
						</div>	
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4><?php echo $roc['name'];?></h4>
									<p class="price float-right">
										<?php echo $roc['price'];?>
									</p>
								</div>
								<p>
									<?php echo $roc['opis'];?>
								</p>								
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4><?php echo $rov['name'];?></h4>
									<p class="price float-right">
										<?php echo $rov['price'];?>
									</p>
								</div>
								<p>
									<?php echo $rov['opis'];?> 
								</p>								
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4><?php echo $rob['name'];?></h4>
									<p class="price float-right">
										<?php echo $rob['price'];?>
									</p>
								</div>
								<p>
									 <?php echo $rob['opis'];?> 
								</p>								
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4><?php echo $ron['name'];?></h4>
									<p class="price float-right">
										<?php echo $ron['price'];?>
									</p>
								</div>
								<p>
									 <?php echo $ron['opis'];?>
								</p>								
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4><?php echo $rom['name'];?></h4>
									<p class="price float-right">
										<?php echo $rom['price'];?>
									</p>
								</div>
								<p>
									<?php echo $rom['opis'];?>
								</p>								
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4><?php echo $roa['name'];?></h4>
									<p class="price float-right">
										<?php echo $roa['price'];?>
									</p>
								</div>
								<p>
									<?php echo $roa['opis'];?>
								</p>								
							</div>
						</div>															
					</div>
				</div>	
			</section>

			<section class="gallery-area section-gap" id="gallery">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Так вы можете начать свое утро с нашем кофе</h1>
								<p>Только у нас кофе: вкусный, крепкий и бодрящий.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-4">
							<a href="img/g1.jpg" class="img-pop-home">
								<img class="img-fluid" src="img/g1.jpg" alt="">
							</a>	
							<a href="img/g2.jpg" class="img-pop-home">
								<img class="img-fluid" src="img/g2.jpg" alt="">
							</a>	
						</div>
						<div class="col-lg-8">
							<a href="img/g3.jpg" class="img-pop-home">
								<img class="img-fluid" src="img/g3.jpg" alt="">
							</a>	
							<div class="row">
								<div class="col-lg-6">
									<a href="img/g4.jpg" class="img-pop-home">
										<img class="img-fluid" src="img/g4.jpg" alt="">
									</a>	
								</div>
								<div class="col-lg-6">
									<a href="img/g5.jpg" class="img-pop-home">
										<img class="img-fluid" src="img/g5.jpg" alt="">
									</a>	
								</div>
							</div>
						</div>
					</div>
				</div>	
			</section>

			<section class="review-area section-gap" id="review">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Отзывы наших посетителей о нас</h1>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-6 col-md-6 single-review">
							<img src="img/r1.png" alt="">
							<div class="title d-flex flex-row">
								<h4>Дмитрий</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>								
								</div>
							</div>
							<p>
								Сегодня побывала в этом замечательном заведении, все понравилось
							</p>
						</div>	
						<div class="col-lg-6 col-md-6 single-review">
							<img src="img/r2.png" alt="">
							<div class="title d-flex flex-row">
								<h4>Анна</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>								
								</div>
							</div>
							<p>
								Ходили с детьми, очень понравилось. Спасибо за вкусный кофе.
							</p>
						</div>	
					</div>
					<div class="row counter-row">
						<div class="col-lg-3 col-md-6 single-counter">
							<h1 class="counter">114</h1>
							<p>Счастливые клиенты</p>
						</div>
						<div class="col-lg-3 col-md-6 single-counter">
							<h1 class="counter">4</h1>
							<p>Бариста Профессионала</p>
						</div>
						<div class="col-lg-3 col-md-6 single-counter">
							<h1 class="counter">168</h1>
							<p>Приготовлено кружек кофе</p>
						</div>
						<div class="col-lg-3 col-md-6 single-counter">
							<h1 class="counter">142</h1>
							<p>Всего отзывов</p>
						</div>																		
					</div>
				</div>	
			</section>

<br>
<br>
	
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">

						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>О нас</h6>
								<oh>
									<style>
									oh {
									font-size: 15px;
									line-height: 1.5
								}
							</style>
								На сегодняшний день сеть кофеен 
								«Cafe» — одна из самых динамично развивающихся компаний в сфере ресторанного бизнеса в Москве, регионах России и странах СНГ.
							</oh>
								<p class="footer-text">	
								</p>								
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Подписка</h6>
								<p>Будьте в курсе наших последних событий</p>
								           <?
//$message =
//"Благодарим вас за подписку на нашу рассылку новостей ";
 
//mail($_POST['mail'], 'Регистрация', $message);
?>
<form action="/index.php" id="form_login" method="post">    
                        <label>Ваша почта:  </label>
                        <input data-val="true" data-val-regex="Неверный адрес" data-val-regex-pattern="^(([A-Za-z0-9]+_+)|([A-Za-z0-9]+\-+)|([A-Za-z0-9]+\.+)|([A-Za-z0-9]+\++))*[A-Za-z0-9-_]+@((\w+\-+)|(\w+\.))*\w{1,63}\.[a-zA-Z]{2,6}$" data-val-required="Заполните поле" id="registerCustomer_Email" name="mail" type="text" value="<?php @$data['mail']; ?>" />
	                    <input href="index.php" value="Согласиться" name="inf"  id="submit" class="ui label" type="submit" ripple="ripple" style="background-color:#77afcb;color:#3e282a;"></input> 
	                    </div>
        </div>


		</div>
							</div>
						</div>												
					</div>
				</div>
			</footer>	
			<script src="js/vendor/jquery-2.2.4.min.js"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>					
			<script src="js/main.js"></script>	
						<script src="js/jquery.ajaxchimp.min.js"></script>
				<script src="js/owl.carousel.min.js"></script>	
		</body>
	</html>



