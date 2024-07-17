<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вакансии");
?><?$APPLICATION->IncludeComponent(
	"bitrix:furniture.vacancies", 
	".default", 
	array(
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "vacancies",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>