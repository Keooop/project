<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?> <?$APPLICATION->IncludeComponent("bitrix:news.list", "left", array(	"IBLOCK_TYPE" => "news",	"IBLOCK_ID" => "15",	"NEWS_COUNT" => "3",	"SORT_BY1" => "ACTIVE_FROM",	"SORT_ORDER1" => "DESC",	"SORT_BY2" => "SORT",	"SORT_ORDER2" => "ASC",	"FILTER_NAME" => "",	"FIELD_CODE" => array(),	"PROPERTY_CODE" => array(),	"CHECK_DATES" => "Y",	"DETAIL_URL" => "",	"AJAX_MODE" => "N",	"AJAX_OPTION_SHADOW" => "Y",	"AJAX_OPTION_JUMP" => "N",	"AJAX_OPTION_STYLE" => "Y",	"AJAX_OPTION_HISTORY" => "N",	"CACHE_TYPE" => "A",	"CACHE_TIME" => "36000000",	"CACHE_FILTER" => "N",	"CACHE_GROUPS" => "Y",	"PREVIEW_TRUNCATE_LEN" => "100",	"ACTIVE_DATE_FORMAT" => "d.m.Y",	"DISPLAY_PANEL" => "N",	"SET_TITLE" => "N",	"SET_STATUS_404" => "N",	"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	"ADD_SECTIONS_CHAIN" => "N",	"HIDE_LINK_WHEN_NO_DETAIL" => "N",	"PARENT_SECTION" => "",	"PARENT_SECTION_CODE" => "",	"DISPLAY_TOP_PAGER" => "N",	"DISPLAY_BOTTOM_PAGER" => "N",	"PAGER_TITLE" => "Новости",	"PAGER_SHOW_ALWAYS" => "N",	"PAGER_TEMPLATE" => "",	"PAGER_DESC_NUMBERING" => "N",	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",	"PAGER_SHOW_ALL" => "N",	"AJAX_OPTION_ADDITIONAL" => ""	),	false);?>