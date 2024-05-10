<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("test");
$APPLICATION->SetPageProperty('TITLE', "Тест");
?><? $APPLICATION->IncludeComponent(
		"myComponents:main.feedback",
		"feetback_forms",
		array(
			"EMAIL_TO" => "stalker.karnuhov@yandex.ru",
			"EVENT_MESSAGE_ID" => array(0 => "7",),
			"OK_TEXT" => "Спасибо, ваше сообщение принято.",
			"REQUIRED_FIELDS" => array(0 => "NAME", 1 => "EMAIL",2=>"PHONE"),
			"USE_CAPTCHA" => "N"
		)
	); ?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>