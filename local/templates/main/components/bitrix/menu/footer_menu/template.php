<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!empty($arResult)) : ?>
	<div class="col-lg-7 col-md-7 col-sm-12">
		<div class="footer-nav white-text">
			<nav>
				<ul>
					<? foreach ($arResult as $arItem) : ?>
						<li <?= $arItem == $arResult[0] ? 'class="mega-parent"' : '' ?>>
							<a href="<?= $arItem["LINK"] ?>"> <?= $arItem["TEXT"] ?></a>
						</li>
					<? endforeach ?>
				</ul>
			</nav>
		</div>
	</div>
<? endif ?>