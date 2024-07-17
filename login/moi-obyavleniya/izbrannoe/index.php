<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("tags", "Избранное");
$APPLICATION->SetPageProperty("keywords_inner", "Избранное");
$APPLICATION->SetPageProperty("title", "Избранное");
$APPLICATION->SetPageProperty("keywords", "Избранное");
$APPLICATION->SetPageProperty("description", "Избранное");
$APPLICATION->SetTitle("Title");
?><?$APPLICATION->IncludeComponent(
	"bitrix:landing.site_tile",
	"",
	Array(
		"FEEDBACK_CODE" => "",
		"PAGE_URL_CONTACTS" => "",
		"PAGE_URL_CRM_ORDERS" => "",
		"PAGE_URL_DOMAIN" => "",
		"PAGE_URL_SITE" => "",
		"PAGE_URL_SITE_ADD" => "",
		"PAGE_URL_SITE_DOMAIN_SWITCH" => "",
		"TYPE" => "PAGE"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>