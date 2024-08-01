<?php

if (!defined('B_PROLOG_INCLUDED') || (B_PROLOG_INCLUDED !== true)) {
    die();
}
?>
      <div class="row">
          <div class="col-md-12 text-center">
            <div class="site-pagination">
        <?php while ($arResult["START_PAGE"] <= $arResult["END_PAGE"]) { ?>
        <?php if ($arResult["START_PAGE"] == $arResult["CURRENT_PAGE"]) { ?>
            <a class="active"><?php echo $arResult["START_PAGE"] ?></a>
        <?php } else { ?>
            <a href="<?=htmlspecialcharsbx($component->replaceUrlTemplate($arResult["START_PAGE"]))?>"><?php echo $arResult["START_PAGE"] ?></a>
        <?php } ?>
        <?php $arResult["START_PAGE"]++ ?>
        <?php } ?>

            </div>
          </div>  
        </div>
