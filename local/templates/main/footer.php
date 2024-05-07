<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>

<footer class="footer-style-2">
	<div class="footer-top-area brand-bg pad-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="footer-widget footer-widget-center text-center">
						<!-- Лого + текст -->
						<div class="footer-logo">
							<a href="#">
								<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/logo/logo-white.png" alt="" />
							</a>
						</div>
						<p>Если вы похожи на большинство компаний, у вас нет маркетингового бюджета в миллион
							долларов<br>
							или своей команды разработки. Но это не значит, что у вас не может быть<br>
							сайта мирового класса. И мы вам в этом поможем!</p>

						<!-- Соц. сети -->
						<div class="social-icon">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-youtube"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- нижнее меню -->
	<div class="footer-bottom-area pad-20 brand-bg footer-border">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-12">
					<div class="copyright white-text">
						<p>We Coders © 2018</p>
					</div>
				</div>

				<? $APPLICATION->IncludeComponent(
					"bitrix:menu",
					"footer_menu",
					array(
						"ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
						"CHILD_MENU_TYPE" => "left",    // Тип меню для остальных уровней
						"DELAY" => "N",    // Откладывать выполнение шаблона меню
						"MAX_LEVEL" => "1",    // Уровень вложенности меню
						"MENU_CACHE_GET_VARS" => array(    // Значимые переменные запроса
							0 => "",
						),
						"MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
						"MENU_CACHE_TYPE" => "N",    // Тип кеширования
						"MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
						"ROOT_MENU_TYPE" => "top",    // Тип меню для первого уровня
						"USE_EXT" => "Y",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
					),
					false
				); ?>
			</div>
		</div>
	</div>
</footer>
</body>

</html>