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
                        <hr>
           				<div class="review-block">
							<div class="review-text">
								<div class="review-text-cont"><?= $arResult["DETAIL_TEXT"];?></div>
								<div class="review-autor">
							
								<?=$arResult["NAME"]?>, <?=$arResult["DISPLAY_ACTIVE_FROM"]?>, <?=$arResult["DISPLAY_PROPERTIES"]["POSITION"]["VALUE"]?>, <?=$arResult["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"]?>.
								</div>
							</div>
							<div style="clear: both;" class="review-img-wrap">


							<?if ($arResult["DETAIL_PICTURE"]["SRC"]): {?>
							<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="">
								 <?} else: {?>
								<img src="<?=SITE_TEMPLATE_PATH?>/img/no_photo.jpg" alt="img123">
								<?}?>
							<?endif;?>
						</div>
						</div>
						<div class="exam-review-doc">
						<p><?=$arResult["DISPLAY_PROPERTIES"]["DOCS"]["NAME"]?></p>

		<?if ($arResult["DISPLAY_PROPERTIES"]["DOCS"]['FILE_VALUE']["ID"]): {?>
						<div  class="exam-review-item-doc">
							<img class="rew-doc-ico" src="<?=SITE_TEMPLATE_PATH ?>/img/icons/pdf_ico_40.png">
							<a href="<?=$arResult["DISPLAY_PROPERTIES"]["DOCS"]["FILE_VALUE"]["SRC"]?>"> <?=$arResult["DISPLAY_PROPERTIES"]["DOCS"]["FILE_VALUE"]["ORIGINAL_NAME"]?> </a>
						</div>
			<?} else: {?>

				<?foreach($arResult["DISPLAY_PROPERTIES"]["DOCS"]["FILE_VALUE"] as $arItem):?>
					<div  class="exam-review-item-doc">
							<img class="rew-doc-ico" src="<?=SITE_TEMPLATE_PATH ?>/img/icons/pdf_ico_40.png">
						<a href="<?= $arItem["SRC"]?>"><?= $arItem["ORIGINAL_NAME"]?></a>
					</div>
						
						<?endforeach;?>   
						<?}?>
						<?endif;?>
						</div>
						<hr>
					
