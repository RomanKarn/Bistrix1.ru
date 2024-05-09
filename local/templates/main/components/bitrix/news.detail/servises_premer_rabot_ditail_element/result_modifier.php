<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
{
	die();
}

/** @var array $arResult */
if(!empty($arResult))
{
	$valueId = $arResult["PROPERTIES"]["PHOTO"]["VALUE"];
	if(!empty($valueId))
	{
		$arSrc = CFile::GetFileArray($valueId);
		if(!empty($arSrc))
		{
			$arResult["PROPERTIES"]["PHOTO"]["SRC"] = $arSrc;
		}
	}
}