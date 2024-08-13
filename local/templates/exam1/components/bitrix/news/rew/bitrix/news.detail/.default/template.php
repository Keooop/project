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
?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	
<div class="review-block">
			<div class="review-text">
				<div class="review-text-cont">
				<?= $arResult["DETAIL_TEXT"];?>
				</div>
				<div class="review-autor">
				<?=$arResult["NAME"]?>,<?=$arResult["DISPLAY_ACTIVE_FROM"]?>,<?=$arResult["DISPLAY_PROPERTIES"]["COMPANY"]['VALUE']?> ,<?=$arResult["DISPLAY_PROPERTIES"]["POSITION"]['VALUE']?>
				</div>
			</div>
			<div style="clear: both;" class="review-img-wrap">
	<?if ($arResult["DETAIL_PICTURE"]["SRC"])		{	?>
	<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="img">
	<?}else{?>	
		<img src="<?=SITE_TEMPLATE_PATH?>/img/no_photo.jpg" alt="img">
	<?}?>
		</div>
		</div>
		<div class="exam-review-doc">

		<p><?=$arResult["DISPLAY_PROPERTIES"]["DOCS"]['NAME']?></p>			
		<div  class="exam-review-item-doc">
		
		
		<?if ($arResult["DISPLAY_PROPERTIES"]["DOCS"]['FILE_VALUE']['ID'] ):?>			
			<img class="rew-doc-ico" src="<?=SITE_TEMPLATE_PATH?>/img/icons/pdf_ico_40.png">
			<a href="<?=$arResult["DISPLAY_PROPERTIES"]["DOCS"]['FILE_VALUE']['SRC']?>">
				<?=$arResult["DISPLAY_PROPERTIES"]["DOCS"]['FILE_VALUE']["ORIGINAL_NAME"]?></a>
			<?else:?>     
		<?foreach($arResult["DISPLAY_PROPERTIES"]["DOCS"]['FILE_VALUE'] as $arItem):?>	
			<div  class="exam-review-item-doc">
			<img class="rew-doc-ico" src="<?=SITE_TEMPLATE_PATH?>/img/icons/pdf_ico_40.png">
			<a href="<?=$arItem['SRC']?>"><?=$arItem["ORIGINAL_NAME"]?></a>
				</div>
		<?endforeach;?>
	<?endif;?>    
	</div>
	</div>
	<hr>
   