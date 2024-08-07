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
<div class="site-loader"></div>
    <div class="site-blocks-cover overlay" style="background-image: url(<?=$arResult["DETAIL_PICTURE"]["SRC"]?>);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <span class="d-inline-block text-white px-3 mb-3 property-offer-type rounded"><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></span>
            <h1 class="mb-2"><?=$arResult["NAME"]?></h1>
            <p class="mb-5"><strong class="h2 text-success font-weight-bold">₽ <?echo $arResult['PROPERTIES']['PRICE']['VALUE'] ?></strong></p>
          </div>
        </div>
      </div>
    </div>	     
    <div class="site-section site-section-sm">
      <div class="container">
        <div class="row">
          <div class="col-lg-8" style="margin-top: -150px;">
            <div class="mb-5">
              <div class="slide-one-item home-slider owl-carousel">
              <?if ($arResult["DISPLAY_PROPERTIES"]["GALLERY"]["FILE_VALUE"]['ID']):?>
                <div><img src="<?= $arResult["DISPLAY_PROPERTIES"]["GALLERY"]["FILE_VALUE"]['SRC'] ?>" alt="Image" class="img-fluid"></div>                   
                    <?else:?>                 
                  <? foreach ($arResult["DISPLAY_PROPERTIES"]["GALLERY"]["FILE_VALUE"] as $arImgID):?>                                  
                    <div><img src="<?= $arImgID["SRC"] ?>" alt="Image" class="img-fluid"></div>
                <? endforeach;?>
                <?endif;?>               
              </div>
            </div>
            <div class="bg-white">
              <div class="row mb-5">
                <div class="col-md-6">
                  <strong class="text-success h1 mb-3">₽ <?echo $arResult['PROPERTIES']['PRICE']['VALUE'] ?></strong>
                </div>
                <div class="col-md-6">
                  <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
				          <li>
                    <span class="property-specs"><?=GetMessage("DATE_UPDATE")?></span>
                
                    <span class="property-specs-number"><?echo $arResult['TIMESTAMP_X'];?></span>
                    
                  </li>
				          <li>
                    <span class="property-specs"><?echo $arResult['PROPERTIES']['BEDROOM']['NAME'];?></span>
                    <span class="property-specs-number"><?echo $arResult['DISPLAY_PROPERTIES']['BEDROOM']['VALUE'];?></span>
                    
                  </li>
                  <li>
                    <span class="property-specs"><?echo $arResult['PROPERTIES']['SQUARE']['NAME'];?></span>
                    <span class="property-specs-number"><?echo $arResult['DISPLAY_PROPERTIES']['SQUARE']['VALUE'];?>м<sup>2</sup></span>
                    
                  </li>
                </ul>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text"><?echo $arResult['PROPERTIES']['BATH']['NAME'];?></span>
                  <strong class="d-block"><?echo $arResult['DISPLAY_PROPERTIES']['BATH']['VALUE'];?></strong>
                </div>
                <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text"><?echo $arResult['PROPERTIES']['GARAGES']['NAME'];?></span>
                  <strong class="d-block"><?echo $arResult['DISPLAY_PROPERTIES']['GARAGES']['VALUE'];?></strong>
                </div>
              </div>
              <h2 class="h4 text-black"><?=GetMessage("DISCRIPTION")?></h2>
                <p><?echo $arResult["DETAIL_TEXT"];?></p>

                <div class="row mt-5">
                  <div class="col-12">
                    <h2 class="h4 text-black mb-3"><?echo $arResult['PROPERTIES']['IMAGE_GALLERY']['NAME'];?></h2>
                  </div>
                  <?if ($arResult["DISPLAY_PROPERTIES"]["GALLERY"]["FILE_VALUE"]['ID']):?>
                      <a href="<?= $arImgID["SRC"] ?>" dump class="image-popup gal-item"><img src="<?= $arResult["DISPLAY_PROPERTIES"]["GALLERY"]["FILE_VALUE"]['SRC'] ?>"    alt="Image" class="img-fluid"></a>                   
                    <?else:?>                 
                  <? foreach ($arResult["DISPLAY_PROPERTIES"]["GALLERY"]["FILE_VALUE"] as $arImgID):?>
                                  <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <a href="<?= $arImgID["SRC"] ?>" dump class="image-popup gal-item"><img src="<?= $arImgID['SRC'] ?>" alt="Image" class="img-fluid"></a>
                </div>
                <? endforeach;?>
                <?endif;?>         
             </div>
            </div>
          </div>      
          <div class="col-lg-4 pl-md-5">

            <div class="bg-white widget border rounded">

              <h3 class="h4 text-black widget-title mb-3"><?=GetMessage("CONTACT_AGENT")?></h3>
              <form action="" class="form-contact-agent">
                <div class="form-group">
                  <label for="name"><?=GetMessage("NAME_AGENT")?></label>
                  <input type="text" id="name" class="form-control">
                </div>
                <div class="form-group">
                  <label for="email"><?=GetMessage("EMAIL_AGENT")?></label>
                  <input type="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                  <label for="phone"><?=GetMessage("PHONE")?></label>
                  <input type="text" id="phone" class="form-control">
                </div>
                <div class="form-group">
                  <input type="submit" id="phone" class="btn btn-primary" value="Send Message">
                </div>
              </form>
            </div>

            <div class="bg-white widget border rounded">
              <h3 class="h4 text-black widget-title mb-3"><?=GetMessage("PARAGRAPH")?></h3>
              <p><?=GetMessage("TEXT_DISCRIPTION")?></p>
            </div>

          </div>
          <div>
                <h4> <?echo $arResult['DISPLAY_PROPERTIES']['DOCUMENT']['NAME'];?></h4>

                    <? foreach ($arResult["DISPLAY_PROPERTIES"]["DOCUMENT"]["VALUE"] as  $doc):
                    $docID[$doc] = $arResult["DISPLAY_PROPERTIES"]["DOCUMENT"]["FILE_VALUE"]  ?>
                            <div> 
                              <img src="<?=$docID[$doc]['SRC'] ?>" alt="image">
                            </div>
                  <? endforeach;?>
          </div>  
            <div class ="link">
          
                <h4> <?echo $arResult['DISPLAY_PROPERTIES']['LINK']['NAME'];?></h4>
                <? foreach ($arResult['DISPLAY_PROPERTIES']['LINK']['VALUE'] as   $key=>$value): ;?>
                      
                <a  align = "center" href= '<?=$value?>'> <?=$arResult['DISPLAY_PROPERTIES']['LINK']['DESCRIPTION'][$key]?></a>
                <? endforeach;?>
          
            </div>
        </div>
      </div>
    </div>

    <div>
                  

</div>
<div>


                




         