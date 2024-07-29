<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Личный кабинет продавец");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.profile",
	"",
Array()
);?>

<?if($USER->IsAuthorized()):?>
	<a href="/?logout=yes&<?=bitrix_sessid_get()?>">Выйти</a>
	<?endif?>
	<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
