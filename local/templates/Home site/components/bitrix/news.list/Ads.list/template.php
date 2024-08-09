<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
$this->setFrameMode(true);
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
?>
<div class="site-section site-section-sm bg-light">
<div class="container">
<div class="row mb-5">
        <div class="col-12">
          <div class="site-section-title">
            <h2><?= ($arParams["TITLE_NAME"] ?: GetMessage("NEW_PROPER"));?> </h2>  
          </div>
        </div>
      </div>
      <div class="row mb-5">

      <?foreach ($arResult["ITEMS"] as $arItem):       
        ?>
          <?
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
            <div id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="col-md-6 col-lg-4 mb-4">
          <a href="<?=$arItem['DETAIL_PAGE_URL'];?>" class="prop-entry d-block">
            <figure>
              <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="Image" class="img-fluid">
            </figure>
            <div class="prop-text">
              <div class="inner">
                <span class="price rounded">₽ <?echo $arItem['DISPLAY_PROPERTIES']['PRICE']['VALUE'];?></span>
                <h3 class="title"><?echo $arItem['NAME'] ?></h3>
                <p class="location"><?echo $arItem["DETAIL_TEXT"]; ?></p>
              </div>
              <div class="prop-more-info">
                <div class="inner d-flex">
                  <div class="col">
                    <span><?echo $arItem['PROPERTIES']['SQUARE']['NAME'];?></span>
                    <strong><?echo $arItem['DISPLAY_PROPERTIES']['SQUARE']['VALUE'];?>м<sup>2</sup></strong>
                  </div>
                  <div class="col">
                    <span><?echo $arItem['PROPERTIES']['BEDROOM']['NAME'];?></span>
                    <strong><?echo $arItem['DISPLAY_PROPERTIES']['BEDROOM']['VALUE'];?></strong>
                  </div>
                  <div class="col">
                    <span><?echo $arItem['PROPERTIES']['BATH']['NAME'];?></span>
                    <strong><?echo $arItem['DISPLAY_PROPERTIES']['BATH']['VALUE']; ?></strong>
                  </div>
                  <div class="col">
                    <span><?echo $arItem['PROPERTIES']['GARAGES']['NAME'];?></span>
                    <strong><?echo $arItem['DISPLAY_PROPERTIES']['GARAGES']['VALUE']; ?></strong>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <?endforeach;?>

</div>
</div>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>
