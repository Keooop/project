
<?
// скрипт в файле /bitrix/php_interface/init.php
AddEventHandler("main", "OnBeforeUserLogin", Array("MyClass", "BeforeLogin"));
class MyClass
{
	function BeforeLogin(&$arFields)
	{
		if(strtolower($arFields["LOGIN"])=="guest")
		{
			global $APPLICATION;
			$APPLICATION->throwException("Пользователь с именем входа Guest не может быть авторизован.");
			return false;
		}
	}
}
?>
