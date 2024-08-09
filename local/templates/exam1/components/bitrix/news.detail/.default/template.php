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
	<div class="review-block">
		<div class="review-text">
			<div class="review-text-cont"><?= $arResult["DETAIL_TEXT"];?>
			</div>
			<div class="review-autor">
			<?echo $arResult["NAME"];?>,<?= $arResult["DISPLAY_ACTIVE_FROM"];?> , <?= $arResult["DISPLAY_PROPERTIES"]["POSITION"]['VALUE'];?>, <?= $arResult["DISPLAY_PROPERTIES"]["COMPANY"]['VALUE'];?>.
			</div>
		</div>
		<div style="clear: both;" class="review-img-wrap">
<?
if($arResult["DETAIL_PICTURE"]['SRC']) {?>
	<img src="<?echo $arResult["DETAIL_PICTURE"]['SRC'];?>" alt="">
<?}
else{	?>
	<img src="/local/templates/exam1/img/no_photo.jpg" alt="">
<?}
?>		
		</div>
	</div>
	<div class="exam-review-doc">
	<p><?= $arResult["DISPLAY_PROPERTIES"]["DOCS"]['NAME'];?></p>

	<?
	foreach ($arResult["DISPLAY_PROPERTIES"]["DOCS"]['FILE_VALUE'] as $val)
	{
		echo '<div  class="exam-review-item-doc"><img class="rew-doc-ico" src="/local/templates/exam1/img/icons/pdf_ico_40.png">
		<a href='.$val["SRC"].'>'.$val["ORIGINAL_NAME"].'</a></div>';
	}
?>


	</div>
	<hr>