<?
require $_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php";
$APPLICATION->SetTitle("Главная");
$APPLICATION->SetPageProperty("tags", "Главная");
$APPLICATION->SetPageProperty("keywords", "Главная");
$APPLICATION->SetPageProperty("description", "Главная");
$APPLICATION->SetPageProperty("title", "Агентство Недвижимости");
?><?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"Slayder",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "Y",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "Slayder",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "7",
		"IBLOCK_TYPE" => "Slayder",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
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
		"PROPERTY_CODE" => array(0=>"LINK",1=>"PRICE",2=>"",),
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
	)
);?><br>
 <br>
<div class="py-5">
	<div class="container">
		<div class="row">
			 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "local/templates/Home site/include/Wide.php"
	)
);?> <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "local/templates/Home site/include/Rent.php"
	)
);?> <?$APPLICATION->IncludeComponent(
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
<?$APPLICATION->IncludeComponent(
	"bitrix:news.line",
	"template",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "300",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "template",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(0=>"ID",1=>"CODE",2=>"XML_ID",3=>"NAME",4=>"TAGS",5=>"SORT",6=>"PREVIEW_TEXT",7=>"PREVIEW_PICTURE",8=>"DETAIL_TEXT",9=>"DETAIL_PICTURE",10=>"PROPERTY_PRiCE",11=>"PROPERTY_SQUARE",12=>"PROPERTY_SLEEPING_PLACES",13=>"PROPERTY_BATH",14=>"PROPERTY_GARAGES",15=>"PROPERTY_NUMBER_BATHROOMS",16=>""),
		"IBLOCKS" => array(0=>"8"),
		"IBLOCK_TYPE" => "news",
		"NEWS_COUNT" => "9",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"NEW_PROPER" => "New Properties for You"

	)
);?>

					<div class="site-section">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-md-7 text-center mb-5">
									<div class="site-section-title">
										 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "local/templates/Home site/include/OurService.php"
	)
);?>
									</div>
								</div>
							</div>
							 <?$APPLICATION->IncludeComponent(
	"bitrix:news.line",
	"our_service",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "864 000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "our_service",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(0=>"NAME",1=>"DETAIL_TEXT",2=>"PROPERTY_LINK",3=>"PROPERTY_ICON"),
		"IBLOCKS" => array(0=>"6"),
		"IBLOCK_TYPE" => "Services",
		"NEWS_COUNT" => "6",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?>
							<div class="site-section bg-light">
								<div class="container">
									<div class="row justify-content-center mb-5">
										<div class="col-md-7 text-center">
											<div class="site-section-title">
												 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "local/templates/Home site/include/OurBlog.php"
	)
);?>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
											 <?$APPLICATION->IncludeComponent(
	"bitrix:news.line",
	"Our_Blog",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.M.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "604 800",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "Our_Blog",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(0=>"NAME",1=>"PREVIEW_PICTURE",2=>"DETAIL_TEXT",3=>"DATE_ACTIVE_FROM",4=>""),
		"IBLOCKS" => array(0=>"1"),
		"IBLOCK_TYPE" => "news",
		"NEWS_COUNT" => "3",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?>
										</div>
									</div>
 <br>
								</div>
							</div>
						</div>
					</div>
 <br>
				</div>
			</div>
		</div>
	</div>
</div>
 <br><?require $_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php";?>
