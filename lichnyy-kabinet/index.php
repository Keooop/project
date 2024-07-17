<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Личный кабинет");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.auth.form",
	"",
Array()
);?><?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form",
	"",
Array()
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>