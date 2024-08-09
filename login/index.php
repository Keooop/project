<?

use PhpParser\Node\Stmt\Global_;

require $_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php";
$APPLICATION->SetTitle("Авторизация");
$APPLICATION->SetPageProperty("tags", "Главная");
$APPLICATION->SetPageProperty("keywords", "Главная");
$APPLICATION->SetPageProperty("description", "Главная");
$APPLICATION->SetPageProperty("title", "Авторизация");
?><?
global $USER;
if ($USER->IsAuthorized()) echo "Вы авторизованы!";
?> <br>

 <?$APPLICATION->IncludeComponent(
	"bitrix:main.auth.form",
	"registration",
	Array(
		"AUTH_FORGOT_PASSWORD_URL" => "/login/",
		"AUTH_REGISTER_URL" => "/login/registration",
		"AUTH_SUCCESS_URL" => "/",
		"COMPONENT_TEMPLATE" => "registration"
	)
);?>


<?require $_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php";?>
