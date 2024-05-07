<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!empty($arResult)) : ?>
	<div class="col-md-10 col-sm-9 col-xs-4 text-right dark-menu">
		<div class="header-main-menu hidden-xs">
			<nav id="primary-menu">
				<ul class="main-menu text-right">
					<? foreach ($arResult as $arItem) : ?>
						<li>
							<a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
						</li>
					<? endforeach ?>
				</ul>
			</nav>
		</div>
	<? endif ?>