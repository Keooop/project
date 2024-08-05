<?
use PhpParser\Node\Stmt\Global_;
require $_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php";?>;
<?$APPLICATION->IncludeComponent(
	"bitrix:main.register", 
	"registration", 
	array(
		"AUTH" => "Y",
		"REQUIRED_FIELDS" => array(
		),
		"SET_TITLE" => "Y",
		"SHOW_FIELDS" => array(
		),
		"SUCCESS_PAGE" => "/lichnyy-kabinet/index.php",
		"USER_PROPERTY" => array(
		),
		"USER_PROPERTY_NAME" => "",
		"USE_BACKURL" => "Y",
		"COMPONENT_TEMPLATE" => "registration"
	),
	false
);?><?require $_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php";?>
