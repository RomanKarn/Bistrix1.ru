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
	<section class="testimonial-area bg-color pad-90">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="testimonial-active dots-style">
						<? foreach ($arResult["ITEMS"] as $arItem) : ?>
							<div class="single-testimonial black-text text-center">
								<div class="testimonial-title">
									<span class="icon-quote"></span>
									<h3 class="black-text"><?= isset($arItem["NAME"]) ? $arItem["NAME"] : "" ?></h3>
								</div>
								<p><span>"</span><?= isset($arItem["PREVIEW_TEXT"]) ? $arItem["PREVIEW_TEXT"] : "" ?><span>"</span>
								</p>
								<div class="testimonial-author text-uppercase">
									<span><?= isset($arItem["DETAIL_TEXT"]) ? $arItem["DETAIL_TEXT"] : "" ?></span>
								</div>
							</div>
						<? endforeach ?>
					</div>
				</div>
			</div>
		</div>
	</section>
<? endif ?>