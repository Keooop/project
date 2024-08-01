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
	".default", 
	array(
		"AUTH_FORGOT_PASSWORD_URL" => "",
		"AUTH_REGISTER_URL" => "/login/registration",
		"AUTH_SUCCESS_URL" => "/lichnyy-kabinet/index.php",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><br>
<br>
 <br><?require $_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php";?>