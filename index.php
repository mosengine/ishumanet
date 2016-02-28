<?php require 'functions.php';
header('Content-type: text/html; charset=utf-8');
$ini = parse_ini_file('./config/config.ini');
if (!$ini) {
    echo '&#1054;&#1096;&#1080;&#1073;&#1082;&#1072; &#1074; &#1082;&#1086;&#1085;&#1092;&#1080;&#1075;&#1091;&#1088;&#1072;&#1094;&#1080;&#1086;&#1085;&#1085;&#1086;&#1084; &#1092;&#1072;&#1081;&#1083;&#1077;';
    die();
}
?>
	<!DOCTYPE html>
	<html>

	<head>
		<title>
			<?php print $ini['title']; ?>
		</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="user-scalable=yes, width=1100, initial-scale=1">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500">
		<link href="css/sreset.css?v123" rel="stylesheet" type="text/css">
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link href="css/catalog.css" rel="stylesheet" type="text/css">

		<link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css">
		<link href="css/user_style.css?v123" rel="stylesheet" type="text/css">
		<?php if ($ini['head_code']) include($ini['head_code']); ?>


			<!-- Yandex.Metrika counter -->
			<script type="text/javascript">
				(function (d, w, c) {
					(w[c] = w[c] || []).push(function () {
						try {
							w.yaCounter30217815 = new Ya.Metrika({
								id: 30217815,
								webvisor: true,
								clickmap: true,
								trackLinks: true,
								accurateTrackBounce: true
							});
						} catch (e) {}
					});

					var n = d.getElementsByTagName("script")[0],
						s = d.createElement("script"),
						f = function () {
							n.parentNode.insertBefore(s, n);
						};
					s.type = "text/javascript";
					s.async = true;
					s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

					if (w.opera == "[object Opera]") {
						d.addEventListener("DOMContentLoaded", f, false);
					} else {
						f();
					}
				})(document, window, "yandex_metrika_callbacks");
			</script>
			<noscript>
				<div><img src="//mc.yandex.ru/watch/30217815" style="position:absolute; left:-9999px;" alt="" /></div>
			</noscript>
			<!-- /Yandex.Metrika counter -->
	</head>

	<body data-metrika="<?php if ($ini['metrika_id']) print $ini['metrika_id']; ?>">
		<!-- VWO Container -->
		<div id="root_container">
			<div class="header">
				<div class="inner">
					<div id="logo" contenteditable="true"><span style="color:white; font-size:35px; text-shadow: 0px 0px 13px rgba(150, 150, 150, 1);">И ШУМА НЕТ</span></div>
					<span style="height: 15px; font-size: 15px; margin: 2px 15px;" data-offset="-120" data-href=".form-wrapper" class="scroll-link green-btn top-btn">ОТПРАВИТЬ ЗАЯВКУ</span>
					<span class="open-modal call-req" data-modal="#call">Заказать звонок</span>
					<?php if ($ini['phone']) { ?><span class="phone"><?php print $ini['phone']; ?></span>
						<?php } ?>
							<a href="http://vk.com/shumanetu"><img style="  position: absolute; margin-left:150px; margin-top:10px; border-radius: 50px;" width="30" src="i/vk.png" /></a>
							<a href="https://facebook.com"><img style="  position: absolute; margin-left:190px; margin-top:10px;  border-radius: 50px;" width="30" src="i/fb.png" /></a>

							<BR>
							<BR>
							<span id="menu" style=" border-left:2px ridge #fff;  border-right:2px ridge #fff;  padding-left:47px" data-offset="-120" data-href=".head" class="scroll-link ">Главная </span>
							<span id="menu" style=" border-right:2px ridge #fff;  margin-left:47px" data-offset="-120" data-href=".promo" class="scroll-link ">Акции </span>
							<span id="menu" style=" border-right:2px ridge #fff;  margin-left:47px" data-offset="-120" data-href=".well" class="scroll-link ">Преимущества </span>
							<span id="menu" style=" border-right:2px ridge #fff;  margin-left:47px" data-offset="-120" data-href=".contact" class="scroll-link ">Контакты </span>


				</div>

			</div>
			<div class="zolu" style="width:100%; height:120px;">

			</div>
			<div class="head">
				<div class="cont">
					<h1 style="font-size: 34px;">Предлагаем эффективные решения для шумоизоляции</h1>

					<img style=" margin-left: 35px;" width="250" height="250" src="i/602.png" />
					<img width="300" height="300" src="i/601.png" />
					<img width="350" height="350" src="i/600.png" />

				</div>
			</div>
			<div class="well">
				<div class="inner">
					<div class="title" contenteditable="true" id="id-block10">Преимущества</div>
					<div contenteditable="true" id="id-block11">
						<ul class="clearfix">
							<li><img width="123" height="143" alt="" src="i/ekolog.png">

								<p style="font-size: 23px;" class="tit">
									Экологичные
									<BR> материалы
									<BR> отечественного
									<BR> производства</p>


							</li>
							<li><img width="123" height="143" alt="" src="i/monta.png">

								<p style="font-size: 23px;" class="tit">Высококвали-
									<BR>фицированный
									<BR> монтаж в
									<BR> короткие сроки</p>


							</li>
							<li><img width="143" height="143" alt="" src="i/well3.png">

								<p style="font-size: 23px;" class="tit">Ограждающая
									<BR> <span style="margin-left:-18px;">звукоизоляционная</span>
									<BR> конструкция
									<BR>толщиной всего
									<BR> 40 мм</p>


							</li>
							<li><img width="143" height="143" alt="" src="i/well4.png">

								<p style="font-size: 23px;" class="tit">Можете спать
									<BR>спокойно</p>


							</li>
							<li><img width="123" height="143" alt="" src="i/10.png">

								<p style="font-size: 23px;" class="tit">Индивидуально
									<BR> разработанный
									<BR> проект и смета</p>


							</li>
						</ul>
					</div>
				</div>
			</div>


			<!--
    <div class="sl-wr">
        <div class="inner">

            <div class="b-slider">
                <ul id="slider"><?php $imgs = scandir('./slider');
                    foreach ($imgs as $img) {
                        $ext = explode('.', $img);
                        if ($img && in_array(strtolower(end($ext)), array('jpg', 'png', 'jpeg', 'gif'))) {
                            echo chr(60) . 'li' . chr(62) . chr(60) . 'img src="slider/' . $img . '" /' . chr(62) . chr(60) . '/li' . chr(62);
                        }

                    }
                    ?></ul>
            </div>
        </div>
    </div>
    <div class="onas_full">
        <div class="onas">
            <div class="infa1">
                <h1 style="font-size: 300%">Звукоизоляция <BR>жилых и нежилых<BR> помещений</h1><BR><BR>
                <p style="font-size: 180%">
                    Инженерная компания,<BR>
                    представляющая из себя<BR>
                    коллектив специалистов<BR>
                    в области звукоизоляции,<BR>
                    звукопоглащения и<BR>
                    архитектурно-акустического<BR>
                    оформления жилых и <BR>
                    нежилых помещений.
                </p>
                <BR>
                <img    src="i/22.png"/>
            </div>
            <div class="locks">
            </div>
             <div class="locks nd">
            </div>
             <div class="locks rd">
            </div>

            <div class="imagess">
                <img width="340" src="i/1.png"/><br>
                <img width="340" src="i/2.png"/><br>
                <img style="margin-top: -32px;" width="380" src="i/3.png"/>

            </div>
        </div>
    </div>
-->

			<div class="promo clearfix">
				<div class="inner clearfix">
					<div class="title" contenteditable="true" id="id-block1"> Звукоизоляция в каждый дом!</div>
					<div class="post-title" contenteditable="true" id="id-block2">Закажите прямо сейчас!</div>
					<!--
            <div class="product-block">
                <div contenteditable="true" id="id-block3">

                    <ul class="clearfix">
                        <li><img alt="" src="ckfinder/userfiles/images/box_placeholder.jpg"
                                 style="width: 190px; height: 164px;">

                            <div class="text">
                                <p class="tit">Груша</p>

                                <p class="tit_2">кресло-мешок</p>

                                <p class="tit_3">4 990.- <span> 7 425. </span></p>
                            </div>
                        </li>
                        <li><img alt="" src="ckfinder/userfiles/images/box_placeholder.jpg"
                                 style="width: 190px; height: 164px;">

                            <div class="text">
                                <p class="tit">Звезда</p>

                                <p class="tit_2">кресло-диван</p>

                                <p class="tit_3">5 990.- <span> 8 775.- </span></p>
                            </div>
                        </li>
                        <li><img alt="" src="ckfinder/userfiles/images/box_placeholder.jpg"
                                 style="width: 190px; height: 164px;">

                            <div class="text">
                                <p class="tit">Звезда</p>

                                <p class="tit_2">кресло-диван</p>

                                <p class="tit_3">5 990.- <span> 8 775.- </span></p>
                            </div>
                        </li>
                        <li><img alt="" src="ckfinder/userfiles/images/box_placeholder.jpg"
                                 style="width: 190px; height: 164px;">

                            <div class="text">
                                <p class="tit">Звезда</p>

                                <p class="tit_2">кресло-диван</p>

                                <p class="tit_3">5 990.- <span> 8 775.- </span></p>
                            </div>
                        </li>
                        <li><img alt="" src="ckfinder/userfiles/images/box_placeholder.jpg"
                                 style="width: 190px; height: 164px;">

                            <div class="text">
                                <p class="tit">Звезда</p>

                                <p class="tit_2">кресло-диван</p>

                                <p class="tit_3">5 990.- <span> 8 775.- </span></p>
                            </div>
                        </li>
                        <li><img alt="" src="ckfinder/userfiles/images/box_placeholder.jpg"
                                 style="width: 190px; height: 164px;">

                            <div class="text">
                                <p class="tit">Звезда</p>

                                <p class="tit_2">кресло-диван</p>

                                <p class="tit_3">5 990.- <span> 8 775.- </span></p>
                            </div>
                        </li>
                        <li><img alt="" src="ckfinder/userfiles/images/box_placeholder.jpg"
                                 style="width: 190px; height: 164px;">

                            <div class="text">
                                <p class="tit">Звезда</p>

                                <p class="tit_2">кресло-диван</p>

                                <p class="tit_3">5 990.- <span> 8 775.- </span></p>
                            </div>
                        </li>
                        <li><img alt="" src="ckfinder/userfiles/images/box_placeholder.jpg"
                                 style="width: 190px; height: 164px;">

                            <div class="text">
                                <p class="tit">Звезда</p>

                                <p class="tit_2">кресло-диван</p>

                                <p class="tit_3">5 990.- <span> 8 775.- </span></p>
                            </div>
                        </li>
                        <li><img alt="" src="ckfinder/userfiles/images/box_placeholder.jpg"
                                 style="width: 190px; height: 164px;">

                            <div class="text">
                                <p class="tit">Звезда</p>

                                <p class="tit_2">кресло-диван</p>

                                <p class="tit_3">5 990.- <span> 8 775.- </span></p>
                            </div>
                        </li>
                        <li><img alt="" src="ckfinder/userfiles/images/box_placeholder.jpg"
                                 style="width: 190px; height: 164px;">

                            <div class="text">
                                <p class="tit">Звезда</p>

                                <p class="tit_2">кресло-диван</p>

                                <p class="tit_3">5 990.- <span> 8 775.- </span></p>
                            </div>
                        </li>
                        <li><img alt="" src="ckfinder/userfiles/images/box_placeholder.jpg"
                                 style="width: 190px; height: 164px;">

                            <div class="text">
                                <p class="tit">Звезда</p>

                                <p class="tit_2">кресло-диван</p>

                                <p class="tit_3">5 990.- <span> 8 775.- </span></p>
                            </div>
                        </li>
                        <li><img alt="" src="ckfinder/userfiles/images/box_placeholder.jpg"
                                 style="width: 190px; height: 164px;">

                            <div class="text">
                                <p class="tit">Звезда</p>

                                <p class="tit_2">кресло-диван</p>

                                <p class="tit_3">5 990.- <span> 8 775.- </span></p>
                            </div>
                        </li>
                        <li><img alt="" src="ckfinder/userfiles/images/box_placeholder.jpg"
                                 style="width: 190px; height: 164px;">

                            <div class="text">
                                <p class="tit">Звезда</p>

                                <p class="tit_2">кресло-диван</p>

                                <p class="tit_3">5 990.- <span> 8 775.- </span></p>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            -->
					<div style=" padding: 30px 0 0 75px;">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/-zZI1UQ49O4" frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="timer">
						<div class="left">
							<div class="top" contenteditable="true" id="id-block4"><span style="font-size:18px;">Приведи соседа </span>
								<br> и получи скидку на шумоизоляцию!
							</div>
							<div class="bottom" contenteditable="true" id="id-block5">Заполните форму,
								<br> чтобы получить консультацию!
							</div>
						</div>
						<div class="right">
							<div class="title">До конца акции осталось:</div>
							<div id="timer">
								<span class="number-wrapper mar-rig">
                                        <span class="number days">4</span>
								<span class="hr"></span>
								</span>
								<span class="number-wrapper">
                                        <span class="number hurses">09</span>
								<span class="hr"></span>

								</span>
								<span class="number-wrapper mar-rig">
                                        <span class="number"></span>
								<span class="hr"></span>
								</span>
								<span class="number-wrapper">
                                        <span class="number minutes">41</span>
								<span class="hr"></span>

								</span>
								<span class="number-wrapper mar-rig">
                                        <span class="number"></span>
								<span class="hr"></span>
								</span>
								<span class="number-wrapper">
                                        <span class="number secunds">34</span>
								<span class="hr"></span>
								</span>
								<span class="number-wrapper end">
                                        <span class="number"></span>
								<span class="hr"></span>
								</span>

								<div class="clearfix"></div>
								<div class="string-time">
									<span class="ddays width30">дня</span>
									<span class="hhours width57">часов</span>
									<span class="mminutes">минута</span>
									<span class="ssecunds">секунды</span>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<div class="right b-form">
						<div class="form-wrapper">
							<form class="fck" action="form/form.php" method="POST">
								<input type="hidden" name="type" value="catalog">

								<div style="font-size: 20px;" class="form-title" contenteditable="true" id="id-block6">Получите консультацию и предварительный расчет</div>
								<p contenteditable="true" id="id-block7">Заполните простую форму
									<br>
									<br>
								</p>

								<div>
									<input class="<?php if ($ini['name_required']) print 'required'; ?> name" placeholder="Ваше имя" type="text" name="name">
								</div>
								<div>
									<input class="<?php if ($ini['phone_required']) print 'required'; ?> phone" placeholder="Ваш телефон" type="text" name="phone">
								</div>
								<div>
									<input data-valid="email" class="<?php if ($ini['email_required']) print 'required'; ?> email" placeholder="Ваша электропочта" type="text" name="email">
								</div>
								<div>
									<input style="height:100px;" placeholder="Дополнение" type="text" name="dop">
								</div>

								<div>


									<input style="margin:5px 0 5px;" class="green-btn" type="submit" name="sub" value="ОТПРАВИТЬ">
								</div>
								<?php if ($ini['catalog_file']) { ?>
									<?php } ?>
							</form>
						</div>
					</div>

				</div>

			</div>
			<div class="ags">
				<div class="inner clearfix" contenteditable="true" id="id-block9">

					<span class="number">150</span>
					<p>довольных
						<br> клиентов
					</p>
					<span class="number">500</span>

					<p>коммерческих
						<br> предложений
						<br> и расчетов</p>
					<span class="number">5</span>

					<p class="end">лет
						<br> гарантии
					</p>
				</div>
			</div>

			<div class="scheme">
				<div class="inner">
					<div class="title" contenteditable="true" id="id-block12">Схема работы</div>
					<div contenteditable="true" id="id-block13">
						<ul class="clearfix">
							<li style="  margin-top: -3px;" class="width134">
								<BR>Вы отправляете
								<br> заявку.
							</li>
							<li class="sep"> </li>
							<li style="  margin-top: -17px;" class="width142">
								<br> Наш менеджер
								<br> связывается с Вами.
							</li>
							<li class="sep"> </li>
							<li style="margin-top: -4px;" class="width160">
								Наш замерщик
								<BR> приезжает к Вам и мы заключаем
								<br> договор.
							</li>
							<li class="sep"> </li>
							<li style="margin-top: 16px;" class="width197">
								Мы составляем
								<BR> проект на монтаж
								<BR> шумоизоляции.
							</li>
							<li class="sep"> </li>
							<li style="margin-top: 17px;" class="end width178">
								Мы производим
								<BR>шумоизоляцию
								<BR>точно в срок.
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="hor-form">
				<div class="inner">
					<form action="form/form.php" method="POST">
						<input type="hidden" name="type" value="catalog">

						<div class="title" contenteditable="true" id="id-block14">Заполните форму</div>
						<p contenteditable="true" id="id-block15">И наш менеджер перезвонит Вам.
						</p>

						<div>
							<input class="<?php if ($ini['name_required']) print 'required'; ?> name" placeholder="Ваше имя" type="text" name="name">
							<input class="<?php if ($ini['phone_required']) print 'required'; ?> phone" placeholder="Ваш телефон" type="text" name="phone">
							<input data-valid="email" class="<?php if ($ini['email_required']) print 'required'; ?> email" placeholder="Ваша электропочта" type="text" name="email">
							<input class="green-btn" type="submit" name="sub" value="ОТПРАВИТЬ">
						</div>

						<?php if ($ini['catalog_file']) { ?>
							<div class="note" contenteditable="true" id="id-block16">

							</div>
							<?php } ?>
					</form>
				</div>
			</div>


			<div class="contact">
				<div class="inner">
					<div class="title" contenteditable="true" id="id-block17">Контактная информация</div>
					<div class="cols clearfix">
						<div id="map" data-coord="<?php if ($ini['map_point']) print $ini['map_point']; ?>" data-center="<?php if ($ini['map_center']) print $ini['map_center']; ?>"></div>
						<div class="adres">
							<?php if ($ini['address']) { ?>
								<div>
									<strong>Адрес:</strong>
									<br>
									<?php print $ini['address']; ?>
								</div>
								<?php } ?>
									<?php if ($ini['email']) { ?>
										<div class="ad_email">
											<strong>Адреса электронной почты:</strong>
											<br>
											<?php print chr(60) . 'a href="mailto:' . $ini['email'] . '"' . chr(62) . $ini['email'] . chr(60) . '/a' . chr(62); ?>
												<br>
												<?php print chr(60) . 'a href="mailto: shum.piter@gmail.com"' . chr(62) . 'shum.piter@gmail.com' . chr(60) . '/a' . chr(62); ?>


										</div>



										<?php } ?>
											<?php if ($ini['phone']) { ?>
												<div class="phone">
													<strong>Телефон:</strong>
													<br>
													<?php print $ini['phone']; ?>
												</div>
												<?php } ?>
						</div>
					</div>
				</div>
			</div>
			<div class="footer">
				<div>
					<div class="inner clearfix">
						<span class="left">© <?php print $ini['company_name'] . ', ' . date('Y'); ?></span>
						<span class="right">Лэндинг сделан в <a target="_blank" href="http://www.frostyweb.ru/">FrostyWeb</a>
                            в 2015 году
                        </span>
					</div>
				</div>
			</div>
			<div class="modals">
				<div id="call">
					<span class="close"></span>

					<form action="form/form.php" method="POST">
						<input type="hidden" name="type" value="callback">
						<input type="hidden" name="call" value="1">

						<div class="title">Мы вам перезвоним!</div>
						<div>
							<input class="<?php if ($ini['name_required']) print 'required'; ?> name" placeholder="Ваше имя" type="text" name="name">
						</div>
						<div>
							<input class="required phone" placeholder="Ваш телефон" type="text" name="phone">
						</div>
						<div>
							<input class="green-btn sub_btn" type="submit" name="sub" value="ОТПРАВИТЬ">
						</div>
					</form>
				</div>
				<div id="success">
					<div>
						<span class="close"></span>

						<div class="title">Спасибо, ваша заявка принята!</div>
						<p>
							Наши операторы свяжутся с вами в ближайшее время, чтобы
							<br> провести расчет вашего заказа!
						</p>
						<span class="close-text">Закрыть</span>
					</div>
				</div>
			</div>
			<div id="overlay"></div>
		</div>
		<script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=false"></script>
		<script type="text/javascript" src="js/jquery-1.10.2-min.js"></script>
		<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
		<script type="text/javascript" src="js/jquery.plugins.js"></script>
		<script type="text/javascript" src="js/common.js?v2"></script>
		<?php if ($ini['body_code']) include($ini['body_code']); ?>
			<?php include 'functions_html.php'; ?>
	</body>

	</html>