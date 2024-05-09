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
<? if(!empty($arResult)):?>
<section class="who-area-are pad-90" id="about_us">
    <div class="container">
        <h2 class="title-1"><?= $arResult["PROPERTIES"]["DITAILES_NAME"]["VALUE"] ?? "" ?></h2>
        <div class="row">
            <div class="col-md-7">
                <div class="who-we">
					<?= $arResult["PROPERTIES"]["DITAILES_DESCRIPHIONS"]["~VALUE"]["TEXT"] ?? "" ?>
                </div>
            </div>
            <div class="col-md-5">
                <div class="about-bg">
                    <img src='<?= !empty($arResult["PROPERTIES"]["PHOTO"]["SRC"]["SRC"]) ? $arResult["PROPERTIES"]["PHOTO"]["SRC"]["SRC"] : ""?>' alt="" />
                </div>
            </div>
        </div>
    </div>
</section>

<div class="pb-60">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="mb-30">Вопросы и ответы</h3>
                <div class="brand-accordion">
                    <div class="panel-group icon angle-icon" id="accordion" role="tablist" aria-multiselectable="true">
						<? foreach($arResult["PROPERTIES"]["QUESTIONS_ANSWERS"]["VALUE"] as $key => $arAnsver):?>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id='<?="heading" . $key?>'>
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href='<?="#collapse" . $key?>' aria-expanded="true" aria-controls='<?="collapse" . $key?>'>
                                        <?= $arAnsver ?? ""?>
                                    </a>
                                </h4>
                            </div>
                            <div id='<?="collapse" . $key?>' class="panel-collapse collapse" role="tabpanel" aria-labelledby='<?="heading" . $key?>'>
                                <div class="panel-body">
                                    <?= $arResult["PROPERTIES"]["QUESTIONS_ANSWERS"]["~DESCRIPTION"][$key] ?? "" ?>
                                </div>
                            </div>
                        </div>
						<?endforeach?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <h3 class="mb-30">Этапы разработки</h3>
                <div class="my-tab">
                    <!-- Nav tabs -->
                    <ul class="custom-tab mb-15" role="tablist">
						<? foreach($arResult["PROPERTIES"]["STAGES_DEVELOPMENT"]["VALUE"] as $key => $value):?>
                        <li role="presentation"><a href='<?= "#kod" . $key?>' aria-controls='<?= "kod" . $key?>' role="tab" data-toggle="tab"><?= $value ?? ""?></a></li>
						<?endforeach?>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
						<? foreach($arResult["PROPERTIES"]["STAGES_DEVELOPMENT"]["DESCRIPTION"] as $key => $value):?>
                        <div role="tabpanel" class="tab-pane fade" id='<?= "kod" . $key?>'>
                            <p><?= $value ?? ""?></p>
                        </div>
						<?endforeach?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?endif?>