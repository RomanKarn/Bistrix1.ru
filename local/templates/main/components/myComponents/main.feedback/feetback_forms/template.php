<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>

<div class="col-md-8">
	<? if (!empty($arResult["ERROR_MESSAGE"])) {
		foreach ($arResult["ERROR_MESSAGE"] as $v)
			ShowError($v);
	}
	if ($arResult["OK_MESSAGE"] <> '') {
	?>
	<div class="mf-ok-text"><?= $arResult["OK_MESSAGE"] ?></div>
	<?}?>
	<div class="row">
		<form id="contact-form" class="default-form" action="<?= POST_FORM_ACTION_URI ?>" method="post">
		<?= bitrix_sessid_post() ?>
			<div class="col-md-4 col-sm-6">
				<input name="user_name" type="text" placeholder="Имя" value="<?= $arResult["AUTHOR_NAME"] ?>" />
			</div>
			<div class="col-md-4 col-sm-6">
				<input name="user_email" type="email" placeholder="Email" value="<?= $arResult["AUTHOR_EMAIL"] ?>" />
			</div>
			<div class="col-md-4 col-sm-12">
				<input name="user_phone" type="text" placeholder="Телефон" value="<?= $arResult["AUTHOR_PHONE"] ?>" />
			</div>
			<div class="col-md-12 col-sm-12">
				<textarea name="MESSAGE" cols="30" rows="10" placeholder="Сообщение"><?= $arResult["MESSAGE"] ?></textarea>
				<input type="hidden" name="PARAMS_HASH" value="<?= $arResult["PARAMS_HASH"] ?>">
				<input class="btn mt-30" type="submit" name="submit" value="<?= GetMessage("MFT_SUBMIT") ?>">
			</div>
		</form>
		<p class="form-messege"></p>
	</div>
</div>