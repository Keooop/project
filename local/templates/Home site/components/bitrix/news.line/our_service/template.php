<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

// echo "<pre> Строка:[" . __LINE__ . "] \n " . print_r($arResult['ITEMS'], 1) . "</pre>";
?>
<div class="news-line">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
	<div id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<a href="<?echo $arItem["PROPERTY_LINK_VALUE"] ?>" class="service text-center border rounded"> <span class="<?echo $arItem["PROPERTY_ICON_VALUE"]?>"></span>
				<h2 class="service-heading"><?echo $arItem['NAME'] ?></h2>
				<p>
 				<span class="read-more">Подробнее</span>
				</p>
		 </a>
	</div> 
					
	<?endforeach;?>
</div>
