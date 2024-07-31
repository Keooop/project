<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
{
	die();
}
/** @var array $arCurrentValues */

use Bitrix\Main\Loader;

if (!Loader::includeModule('iblock'))
{
	return;
}

$arComponentParameters = [
	"GROUPS" => [],
	"PARAMETERS" => [

        "HLBLOCK_TNAME"  =>  Array( // Код поля
            "PARENT" => "BASE", //
            "NAME" => GetMessage("MCART_AGENTS_LIST_HLBLOCK_TNAME"), // Название параметра, берется из языкового файла
            "TYPE" => "STRING", // Тип поля
            "DEFAULT" => "", // Значение по дефолту
        ),
		"AJAX_MODE" => [],
			
		"AGENT_COUNT" => [
			"PARENT" => "BASE",
			"NAME" => GetMessage("T_IBLOCK_DESC_LIST_CONT"),
			"TYPE" => "STRING",
			"DEFAULT" => "3",
		],
		"CACHE_TIME"  =>  ["DEFAULT"=>36000],
		"CACHE_FILTER" => [
			"PARENT" => "CACHE_SETTINGS",
			"NAME" => GetMessage("IBLOCK_CACHE_FILTER"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
		],
		"CACHE_GROUPS" => [
			"PARENT" => "CACHE_SETTINGS",
			"NAME" => GetMessage("CP_BNL_CACHE_GROUPS"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "Y",
		],
	],
];

CIBlockParameters::AddPagerSettings(
	$arComponentParameters,
	GetMessage("T_IBLOCK_DESC_PAGER_NEWS"), //$pager_title
	true, //$bDescNumbering
	true, //$bShowAllParam
	true, //$bBaseLink
	($arCurrentValues["PAGER_BASE_LINK_ENABLE"] ?? '') ==="Y" //$bBaseLinkEnabled
);

CIBlockParameters::Add404Settings($arComponentParameters, $arCurrentValues);
