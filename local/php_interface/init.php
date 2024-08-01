<?
// скрипт в файле /bitrix/php_interface/init.php
AddEventHandler("main", "OnBeforeUserLogin",  "CheckLogin");
	function CheckLogin($arFields)
	{
		if(strtolower($arFields["LOGIN"])=="guest")
		{
			global $APPLICATION;
			$APPLICATION->throwException("Пользователь с именем входа Guest не может быть авторизован.");
			return false;
		}
	}



$eventManager = \Bitrix\Main\EventManager::getInstance();
$eventManager->addEventHandler('', 'RealEstateAgentOnAfterAdd', 'RealEstateAgentClearCache');
$eventManager->addEventHandler('', 'RealEstateAgentOnAfterUpdate', 'RealEstateAgentClearCache');
$eventManager->addEventHandler('', 'RealEstateAgentOnAfterDelete', 'RealEstateAgentClearCache');

function RealEstateAgentClearCache(\Bitrix\Main\Entity\Event $event) {  
    $entity = $event->getEntity();
    $entityDataClass = $entity->GetDataClass();
	$tableName = $entityDataClass::getTableName();
	$taggedCache = \Bitrix\Main\Application::getInstance()->getTaggedCache();
	$taggedCache->clearByTag('hlblock_table_name_' . $tableName);

}



?>
