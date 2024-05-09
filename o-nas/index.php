<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О СТУДИИ");
?>

<!-- О нас -->
<section class="who-area-are pad-90" id="about_us">
	<div class="container">
		<h2 class="title-1">
			<? $APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				array(
					"AREA_FILE_RECURSIVE" => "Y",
					"AREA_FILE_SHOW" => "file",
					"AREA_FILE_SUFFIX" => "inc",
					"EDIT_TEMPLATE" => "standard.php",
					"PATH" => SITE_TEMPLATE_PATH . "/include_file/aboutUs/titel.php"
				)
			); ?>
		</h2>
		<div class="row">
			<div class="col-md-7">
				<div class="who-we">
					<? $APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						array(
							"AREA_FILE_RECURSIVE" => "Y",
							"AREA_FILE_SHOW" => "file",
							"AREA_FILE_SUFFIX" => "inc",
							"EDIT_TEMPLATE" => "standard.php",
							"PATH" => SITE_TEMPLATE_PATH . "/include_file/aboutUs/text.php"
						)
					); ?>

				</div>
			</div>
			<div class="col-md-5">
				<div class="about-bg">
					<? $APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						array(
							"AREA_FILE_RECURSIVE" => "Y",
							"AREA_FILE_SHOW" => "file",
							"AREA_FILE_SUFFIX" => "inc",
							"EDIT_TEMPLATE" => "standard.php",
							"PATH" => SITE_TEMPLATE_PATH . "/include_file/aboutUs/img.php"
						)
					); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>