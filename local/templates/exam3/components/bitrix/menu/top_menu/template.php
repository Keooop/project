<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
	<div class="menu-block popup-wrap">
          <div class="menu popup-block">
				<ul class="">
					<li class="main-page"><a href="/ex3/"><?=GetMessage("MAIN")?></a> </li>
             
<?
$previousLevel = 0;
foreach($arResult as $arItem):?>
<?if ($arItem["PERMISSION"] > "D"):?>
	
	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<?
				$sClassStyle='';
			if (isset($arItem['PARAMS']['CLASS_STYLE'])) {
				$sClassStyle = $arItem['PARAMS']['CLASS_STYLE'];
			}?>
			<li>
				<a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?> <?=$sClassStyle;?>">
					<?=$arItem["TEXT"]?></a>
					
				<ul>
				<?if (isset($arItem['PARAMS']['TXT'])) {?>
		 <div class="menu-text"><?=$arItem['PARAMS']['TXT']?></div>
		 <?}?>
	
		<?else:?>
			<li <?if ($arItem["SELECTED"]):?> class="item-selected"<?endif?>><a href="<?=$arItem["LINK"]?>" class="parent"><?=$arItem["TEXT"]?></a>
				<ul>
				<? if (isset($arItem['PARAMS']['TXT'])): {?>
		 <div class="menu-text"><?=$arItem['PARAMS']['TXT']?></div>
		 <?}?>
		 <?endif?>
		<?endif?>
	<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li><a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li<?if ($arItem["SELECTED"]):?> class="item-selected"<?endif?>><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>
	

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>
	<?endif?>
<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>                                                             
                </div>
            </div>

<?endif?>
