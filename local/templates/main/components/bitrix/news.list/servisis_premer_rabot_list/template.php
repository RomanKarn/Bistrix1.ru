<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?if(!empty($arResult)):?>
	<section id="pricing" class="pricing-area bg-color pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="section-heading text-center mb-70">
                <h2>Разработка сайта</h2>
                <p>Какой сайт вам нужен? Выбирайте, оставляйте заявку в форме ниже и мы свяжемся с вами!</p>
            </div>
        </div>
        <div class="row">
			<? foreach($arResult["ITEMS"] as $arItem):?>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="single-pricing text-center mb-30">
                    <div class="pricing-head">
                        <h2 class="pricing-title text-uppercase"><?= !empty($arItem["NAME"]) ? $arItem["NAME"] : "" ?></h2>
						<?if(!empty($arItem["PREVIEW_TEXT"])):?>
                        <span><?$arItem["PREVIEW_TEXT"] ?? "" ?></span>
						<?endif?>
                    </div>
                    <div class='pricing-plan-price <?= !empty($arItem["PROPERTIES"]["COLOR"]["VALUE"]) ? $arItem["PROPERTIES"]["COLOR"]["VALUE"] : "basic" ?>-bg'>
                        <?= $arItem["DETAIL_TEXT"] ?? "" ?>
                    </div>
                    <div class="pricing-plan-list">
                        <ul>
							<?foreach($arItem["PROPERTIES"]["CHARACTERISTICS_SITE"]["VALUE"] as $charapter):?>
                            <li><?= $charapter ?? "-" ?></li>
							<?endforeach?>
                        </ul>
                    </div>
                    <div class="get-started">
                        <a href='<?= $arItem["DETAIL_PAGE_URL"] ?? "#"?>' class='btn <?= $arItem["PROPERTIES"]["COLOR"]["VALUE"] . "-bg" ?? ""?>' > <?= $arItem["PROPERTIES"]["BUTTON_MORE"]["VALUE"] ?? "Узнать больше"?></a>
                    </div>
                </div>
            </div>
			<?endforeach?>
        </div>
    </div>
</section>

<?endif?>
