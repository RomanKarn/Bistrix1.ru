<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
{
	die();
}

/** @var array $arResult */

if(!empty($arResult))
{
	$arElementsIds=[];
	foreach($arResult["ITEMS"] as $arItem)
	{
		if(isset($arItem["ID"]))
		{
			$arElementsIds[]=$arItem["ID"];
		}
	}

	$dbSections=CIBlockElement::GetElementGroups($arElementsIds);
	$arSectios=[];
	while($el = $dbSections->Fetch())
	{
		$arSectios[] = $el;
	}
	foreach($arResult["ITEMS"] as $itemKey=>$itemAr)
	{
		if(isset($itemAr["IBLOCK_SECTION_ID"]))
		{
			$itemSectiomId= $itemAr["IBLOCK_SECTION_ID"];
			foreach($arSectios as $itemSection)
			{
				if($itemSection["ID"]===$itemSectiomId)
				{
				$arResult["ITEMS"][$itemKey]["SECTION_NAME"]=$itemSection["NAME"];
				}
			}
			if(!isset($arResult["ITEMS"][$itemKey]["SECTION_NAME"]))
			{
				$arResult["ITEMS"][$itemKey]["SECTION_NAME"]="";
			}
		}

		if(isset($itemAr["ID"]))
		{
			$arElementSectionCods=[];
			foreach($arSectios as $section)
			{
				
				if($itemAr["ID"]===$section["IBLOCK_ELEMENT_ID"])
				{
					$arElementSectionCods[]= $section["CODE"];
				}
				
			}
			$arResult["ITEMS"][$itemKey]["SECTION_CODES"]=implode(' ',$arElementSectionCods);
		}
		else
		{
			$arResult["ITEMS"][$itemKey]["SECTION_CODES"]='';
		}
	}
}
