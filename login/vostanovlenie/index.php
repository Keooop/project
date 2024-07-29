<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("востановление");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.auth.changepasswd",
	"",
	Array(
		"AUTH_AUTH_URL" => "/login/",
		"AUTH_REGISTER_URL" => "/login/registration"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>