<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!empty($arResult)) : ?>
		<div class="header-main-menu hidden-xs">
			<nav id="primary-menu">
				<ul class="main-menu text-right">
					<? foreach ($arResult as $arItem) : ?>
						<li <?= $arItem==$arResult[0] ? 'class="mega-parent"' : '' ?> >
							<a href="<?= $arItem["LINK"] ?>"> <?= $arItem["TEXT"] ?></a>
						</li>
					<? endforeach ?>
				</ul>
			</nav>
		</div>
	<? endif ?>