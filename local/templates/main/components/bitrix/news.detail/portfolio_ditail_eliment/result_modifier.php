<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
{
	die();
}

/** @var array $arResult */
if(!empty($arResult))
{
	foreach($arResult["PROPERTIES"]["GALERI"]["VALUE"] as $key => $valueId)
	{
		$arSrc = CFile::GetFileArray($valueId);
		if(!empty($arSrc))
		{
			$arResult["PROPERTIES"]["GALERI"]["PHOTOS"][$key]["SCR"] = $arSrc;
		}
	}
}