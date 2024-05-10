<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
{
	die();
}

/** @var array $arResult */
if(!empty($arResult))
{
	$arMenus =[];
	foreach($arResult as $key => $item)
	{
		if($item["DEPTH_LEVEL"]=== 1)
		{
			$arMenus[] = $item;
		}
		else
		{
			$arMenus[end(array_keys($arMenus))]["SUBMENU"][]=$item; 
		}
	}
	$arResult =$arMenus;
}