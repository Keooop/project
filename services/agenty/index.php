<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Агенты");
?><?$APPLICATION->IncludeComponent(
	"bitrix:desktop",
	"",
	Array(
		"CAN_EDIT" => "Y",
		"COLUMNS" => "3",
		"GADGETS" => array("ALL"),
		"GU_FAVORITES_TITLE_STD" => "",
		"GU_HTML_AREA_TITLE_STD" => "",
		"GU_PROBKI_CITY" => "c213",
		"GU_PROBKI_TITLE_STD" => "",
		"GU_RSSREADER_CNT" => "10",
		"GU_RSSREADER_IS_HTML" => "N",
		"GU_RSSREADER_RSS_URL" => "",
		"GU_RSSREADER_TITLE_STD" => "",
		"GU_WEATHER_CITY" => "",
		"GU_WEATHER_COUNTRY" => "",
		"GU_WEATHER_TITLE_STD" => "",
		"G_PROBKI_CACHE_TIME" => "3600",
		"G_PROBKI_SHOW_URL" => "N",
		"G_RSSREADER_CACHE_TIME" => "3600",
		"G_RSSREADER_PREDEFINED_RSS" => "",
		"G_RSSREADER_SHOW_URL" => "N",
		"G_WEATHER_CACHE_TIME" => "3600",
		"G_WEATHER_SHOW_URL" => "N",
		"ID" => "holder1"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>