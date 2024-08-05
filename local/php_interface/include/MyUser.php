<?
// // скрипт в файле /bitrix/php_interface/init.php
// AddEventHandler("main", "OnBeforeUserLogin", Array("User", "BeforeLogin"));
// class MyUser
// {
// 	function BeforeLogin(&$arFields)
// 	{
// 		if(strtolower($arFields["LOGIN"])=="guest")
// 		{
// 			global $APPLICATION;
// 			$APPLICATION->throwException("Пользователь с именем входа Guest не может быть авторизован.");
// 			return false;
// 		}
// 	}
// }
?>
<?
class MyUser
{ 
	static function OnBeforeUserAddHandler(&$arFields){
		$groupID = 7;
     if($arFields["UF_PROFILE"] == 7) {
        $groupID = 6;
        }
        $arFields["GROUP_ID"][] = $groupID;
        }
}
?>
