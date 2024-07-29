<?

use PhpParser\Node\Stmt\Global_;

require $_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php";
$APPLICATION->SetTitle("Регистрация");
$APPLICATION->SetPageProperty("tags", "Главная");
$APPLICATION->SetPageProperty("keywords", "Главная");
$APPLICATION->SetPageProperty("description", "Главная");
$APPLICATION->SetPageProperty("title", "Агентство Недвижимости");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
?><br>
<br><?require $_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php";?>