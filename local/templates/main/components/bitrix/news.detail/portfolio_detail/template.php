<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
<? if (!empty($arResult)) : ?>
    <div class="single-portfolio-area pt-90 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="portfolio-details">
                        <h3><?= !empty($arResult["PROPERTIES"]["DETALED_NAME"]["VALUE"]) ? $arResult["PROPERTIES"]["DETALED_NAME"]["VALUE"] : "" ?></h3>
                        <? foreach ($arResult["PROPERTIES"]["DETALEDS_DESCRIPTIONS"]["VALUE"] as $key => $value) : ?>
                            <span class="text-colort-blue"><?= !empty($value["TEXT"]) ? $value["TEXT"] : ' ' ?></span>
                            <p><?= !empty($arResult["PROPERTIES"]["DETALEDS_DESCRIPTIONS"]["DESCRIPTION"][$key]) ? $arResult["PROPERTIES"]["DETALEDS_DESCRIPTIONS"]["DESCRIPTION"][$key] : "" ?></p>
                        <? endforeach ?>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="portfolio-meta">
                        <ul>
                            <? foreach ($arResult["PROPERTIES"]["DETALEDS_INFORMASHIONS"]["VALUE"] as $key => $value) : ?>
                                <li>
                                    <span>
                                        <b>
                                            <?= !empty($value) ? $value : "" ?>
                                        </b>
                                    </span>
                                    <?= !empty($arResult["PROPERTIES"]["DETALEDS_INFORMASHIONS"]["DESCRIPTION"][$key]) ? $arResult["PROPERTIES"]["DETALEDS_INFORMASHIONS"]["DESCRIPTION"][$key] : "" ?>
                                </li>
                            <? endforeach ?>
                        </ul>
                        <a href="<?= !empty($arResult["PROPERTIES"]["LINK"]["VALUE"]) ? $arResult["PROPERTIES"]["LINK"]["VALUE"] : '' ?>" class="btn mt-30">Посмотреть сайт</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="img-gallery-area pt-30 pb-60">
        <div class="container">
            <div class="row">
                <? foreach ($arResult["PROPERTIES"]["GALERI"]["PHOTOS"] as $photo) : ?>
                    <div class="col-md-6 col-sm-4">
                        <div class="img-gallery hover-bg-opacity mb-30">
                            <a class="image-link" href="<?= !empty($photo["SCR"]["SRC"]) ? $photo["SCR"]["SRC"] : '' ?>">
                                <img src="<?= !empty($photo["SCR"]["SRC"]) ? $photo["SCR"]["SRC"] : '' ?>" alt="" /></a>
                        </div>
                    </div>
                <? endforeach ?>
            </div>
        </div>
    </div>
<? endif ?>