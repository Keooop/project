<?

use PhpParser\Node\Stmt\Global_;

require $_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php";
$APPLICATION->SetTitle("Главная");
$APPLICATION->SetPageProperty("tags", "Главная");
$APPLICATION->SetPageProperty("keywords", "Главная");
$APPLICATION->SetPageProperty("description", "Главная");
$APPLICATION->SetPageProperty("title", "Агентство Недвижимости");
?>

<?
	$GLOBALS['arrFilterTop']['PROPERTY_23'] = '5';
$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"Slayder", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "Y",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "600",
		"CACHE_TYPE" => "Y",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "Slayder",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "PREVIEW_PICTURE",
			1 => "",
		),
		"FILTER_NAME" => "arrFilterTop",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "ADS",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "2",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "PREFERRED_DEAL",
			1 => "LINK",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	),
	false
);?><br>
 <br>
 <div class="py-5">
    <div class="container">

      <div class="row">
        <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
          <div class="feature d-flex align-items-start">
            <span class="icon mr-3 flaticon-house"></span>
            <div class="text">
				<?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				Array(
				"AREA_FILE_SHOW" => "file",
				"AREA_FILE_SUFFIX" => "inc",
				"EDIT_TEMPLATE" => "",
				"PATH" => "local/templates/Home site/include/Wide.php"
				)
				);?> 
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
          <div class="feature d-flex align-items-start">
            <span class="icon mr-3 flaticon-rent"></span>
            <div class="text">
				<?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				Array(
				"AREA_FILE_SHOW" => "file",
				"AREA_FILE_SUFFIX" => "inc",
				"EDIT_TEMPLATE" => "",
				"PATH" => "local/templates/Home site/include/Rent.php"
				)
				);?>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
          <div class="feature d-flex align-items-start">
            <span class="icon mr-3 flaticon-location"></span>
            <div class="text">
					<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					Array(
					"AREA_FILE_SHOW" => "file",
					"AREA_FILE_SUFFIX" => "inc",
					"EDIT_TEMPLATE" => "",
					"PATH" => "local/templates/Home site/include/Property.php"
					)
				);?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



<?$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	"template", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "600",
		"CACHE_TYPE" => "Y",
		"COMPONENT_TEMPLATE" => "template",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "DETAIL_TEXT",
			2 => "DETAIL_PICTURE",
			3 => "PROPERTY_PRiCE",
			4 => "PROPERTY_SQUARE",
			5 => "PROPERTY_NUMBER_FLOORS",
			6 => "PROPERTY_BATH",
			7 => "PROPERTY_GARAGE_AVAILABILITY",
			8 => "PROPERTY_NUMBER_BATHROOMS",
			9 => "PROPERTY_NEW_PROPER",
			10 => "",
		),
		"IBLOCKS" => array(
			0 => "5",
		),
		"IBLOCK_TYPE" => "ADS",
		"NEWS_COUNT" => "9",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"NEW_PROPER" => "New Properties for You"
	),
	false
);?>

							 <?$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	"our_service", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "86 400",
		"CACHE_TYPE" => "Y",
		"COMPONENT_TEMPLATE" => "our_service",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "DETAIL_TEXT",
			2 => "PROPERTY_LINK",
			3 => "PROPERTY_ICON",
			4 => "",
		),
		"IBLOCKS" => array(
			0 => "6",
		),
		"IBLOCK_TYPE" => "Services",
		"NEWS_COUNT" => "6",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	),
	false
);?>

							<?$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	"Our_Blog", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.M.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "86 400",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "Our_Blog",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_PICTURE",
			2 => "DETAIL_TEXT",
			3 => "DATE_ACTIVE_FROM",
			4 => "",
		),
		"IBLOCKS" => array(
			0 => "1",
		),
		"IBLOCK_TYPE" => "news",
		"NEWS_COUNT" => "3",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	),
	false
);?>

 <?require $_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php";?>
