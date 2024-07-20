<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
$APPLICATION->SetPageProperty("title", "Агентство Недвижимости"); 
?><div class="slide-one-item home-slider owl-carousel">
	<div class="site-blocks-cover" style="background-image: url('local/templates/Home site/images/hero_bg_1.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
		<div class="text">
			<h2><?$APPLICATION->IncludeComponent(
	"bitrix:news.line",
	".default",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.M.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "300",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => ".default",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(0=>"IBLOCK_ID",1=>"",),
		"IBLOCKS" => array(),
		"IBLOCK_TYPE" => "ADS",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "Приоритет",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?>853 S Lucerne Blvd</h2>
			<p class="location">
 <span class="property-icon icon-room"></span> Los Angeles, CA 90005
			</p>
			<p class="mb-2">
 <strong>$2,250,500</strong>
			</p>
			<p class="mb-0">
 <a href="#" class="text-uppercase small letter-spacing-1 font-weight-bold">More Details</a>
			</p>
		</div>
	</div>
	<div class="site-blocks-cover" style="background-image: url('local/templates/Home site/images/hero_bg_3.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
		<div class="text">
			<h2>625 S. Berendo St</h2>
			<p class="location">
 <span class="property-icon icon-room"></span>607 Los Angeles, CA 90005
			</p>
			<p class="mb-2">
 <strong>$2,250,500</strong>
			</p>
			<p class="mb-0">
 <a href="#" class="text-uppercase small letter-spacing-1 font-weight-bold">More Details</a>
			</p>
		</div>
	</div>
</div>
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
<div class="site-section site-section-sm bg-light">
	<div class="container">
		<div class="row mb-5">
			<div class="col-12">
				<div class="site-section-title">
					<h2>New Properties for You&nbsp;&nbsp;<?$APPLICATION->IncludeComponent(
	"bitrix:news.line",
	"",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "300",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array("",""),
		"IBLOCKS" => array("5"),
		"IBLOCK_TYPE" => "ADS",
		"NEWS_COUNT" => "9",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?>&nbsp;</h2>
				</div>
			</div>
		</div>
		<div class="row mb-5">
			<div class="col-md-6 col-lg-4 mb-4">
 <a href="property-details.html" class="prop-entry d-block"> <figure> <img alt="Image" src="local/templates/Home site/images/img_1.jpg" class="img-fluid"> </figure>
				<div class="prop-text">
					<div class="inner">
 <span class="price rounded">$1,930,000</span>
						<h3 class="title">853 S Lucerne Blvd</h3>
						<p class="location">
							 Los Angeles, CA 90005
						</p>
					</div>
					<div class="prop-more-info">
						<div class="inner d-flex">
							<div class="col">
								 Area: <strong>240m<sup>2</sup></strong>
							</div>
							<div class="col">
								 Beds: <strong>2</strong>
							</div>
							<div class="col">
								 Baths: <strong>2</strong>
							</div>
							<div class="col">
								 Garages: <strong>1</strong>
							</div>
						</div>
					</div>
				</div>
 </a>
			</div>
			<div class="col-md-6 col-lg-4 mb-4">
 <a href="property-details.html" class="prop-entry d-block"> <figure> <img alt="Image" src="local/templates/Home site/images/img_2.jpg" class="img-fluid"> </figure>
				<div class="prop-text">
					<div class="inner">
 <span class="price rounded">$2,438,000</span>
						<h3 class="title">853 S Lucerne Blvd</h3>
						<p class="location">
							 Los Angeles, CA 90005
						</p>
					</div>
					<div class="prop-more-info">
						<div class="inner d-flex">
							<div class="col">
								 Area: <strong>240m<sup>2</sup></strong>
							</div>
							<div class="col">
								 Beds: <strong>2</strong>
							</div>
							<div class="col">
								 Baths: <strong>2</strong>
							</div>
							<div class="col">
								 Garages: <strong>1</strong>
							</div>
						</div>
					</div>
				</div>
 </a>
			</div>
			<div class="col-md-6 col-lg-4 mb-4">
 <a href="property-details.html" class="prop-entry d-block"> <figure> <img alt="Image" src="local/templates/Home site/images/img_3.jpg" class="img-fluid"> </figure>
				<div class="prop-text">
					<div class="inner">
 <span class="price rounded">$5,320,000</span>
						<h3 class="title">853 S Lucerne Blvd</h3>
						<p class="location">
							 Los Angeles, CA 90005
						</p>
					</div>
					<div class="prop-more-info">
						<div class="inner d-flex">
							<div class="col">
								 Area: <strong>240m<sup>2</sup></strong>
							</div>
							<div class="col">
								 Beds: <strong>2</strong>
							</div>
							<div class="col">
								 Baths: <strong>2</strong>
							</div>
							<div class="col">
								 Garages: <strong>1</strong>
							</div>
						</div>
					</div>
				</div>
 </a>
			</div>
			<div class="col-md-6 col-lg-4 mb-4">
 <a href="property-details.html" class="prop-entry d-block"> <figure> <img alt="Image" src="local/templates/Home site/images/img_4.jpg" class="img-fluid"> </figure>
				<div class="prop-text">
					<div class="inner">
 <span class="price rounded">$2,350,000</span>
						<h3 class="title">853 S Lucerne Blvd</h3>
						<p class="location">
							 Los Angeles, CA 90005
						</p>
					</div>
					<div class="prop-more-info">
						<div class="inner d-flex">
							<div class="col">
								 Area: <strong>240m<sup>2</sup></strong>
							</div>
							<div class="col">
								 Beds: <strong>2</strong>
							</div>
							<div class="col">
								 Baths: <strong>2</strong>
							</div>
							<div class="col">
								 Garages: <strong>1</strong>
							</div>
						</div>
					</div>
				</div>
 </a>
			</div>
			<div class="col-md-6 col-lg-4 mb-4">
 <a href="property-details.html" class="prop-entry d-block"> <figure> <img alt="Image" src="local/templates/Home site/images/img_5.jpg" class="img-fluid"> </figure>
				<div class="prop-text">
					<div class="inner">
 <span class="price rounded">$1,550,000</span>
						<h3 class="title">853 S Lucerne Blvd</h3>
						<p class="location">
							 Los Angeles, CA 90005
						</p>
					</div>
					<div class="prop-more-info">
						<div class="inner d-flex">
							<div class="col">
								 Area: <strong>240m<sup>2</sup></strong>
							</div>
							<div class="col">
								 Beds: <strong>2</strong>
							</div>
							<div class="col">
								 Baths: <strong>2</strong>
							</div>
							<div class="col">
								 Garages: <strong>1</strong>
							</div>
						</div>
					</div>
				</div>
 </a>
			</div>
			<div class="col-md-6 col-lg-4 mb-4">
 <a href="property-details.html" class="prop-entry d-block"> <figure> <img alt="Image" src="local/templates/Home site/images/img_6.jpg" class="img-fluid"> </figure>
				<div class="prop-text">
					<div class="inner">
 <span class="price rounded">$4,291,000</span>
						<h3 class="title">853 S Lucerne Blvd</h3>
						<p class="location">
							 Los Angeles, CA 90005
						</p>
					</div>
					<div class="prop-more-info">
						<div class="inner d-flex">
							<div class="col">
								 Area: <strong>240m<sup>2</sup></strong>
							</div>
							<div class="col">
								 Beds: <strong>2</strong>
							</div>
							<div class="col">
								 Baths: <strong>2</strong>
							</div>
							<div class="col">
								 Garages: <strong>1</strong>
							</div>
						</div>
					</div>
				</div>
 </a>
			</div>
		</div>
	</div>
</div>
<div class="site-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-7 text-center mb-5">
				<div class="site-section-title">
					<h2>Our Services<?$APPLICATION->IncludeComponent(
	"bitrix:news.line",
	".default",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "300",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => ".default",
		"DETAIL_URL" => "https://yandex.ru/images",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"IBLOCKS" => array(0=>"6",),
		"IBLOCK_TYPE" => "Services",
		"NEWS_COUNT" => "6",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?>&nbsp;</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-4 mb-4">
 <a href="#" class="service text-center border rounded"> <span class="icon flaticon-house"></span>
				<h2 class="service-heading">Research Subburbs</h2>
				<p>
 <span class="read-more">Learn More</span>
				</p>
 </a>
			</div>
			<div class="col-md-6 col-lg-4 mb-4">
 <a href="#" class="service text-center border rounded"> <span class="icon flaticon-sold"></span>
				<h2 class="service-heading">Sold Houses</h2>
				<p>
 <span class="read-more">Learn More</span>
				</p>
 </a>
			</div>
			<div class="col-md-6 col-lg-4 mb-4">
 <a href="#" class="service text-center border rounded"> <span class="icon flaticon-camera"></span>
				<h2 class="service-heading">Security Priority</h2>
				<p>
 <span class="read-more">Learn More</span>
				</p>
 </a>
			</div>
			<div class="col-md-6 col-lg-4 mb-4">
 <a href="#" class="service text-center border rounded"> <span class="icon flaticon-house"></span>
				<h2 class="service-heading">Research Subburbs</h2>
				<p>
 <span class="read-more">Learn More</span>
				</p>
 </a>
			</div>
			<div class="col-md-6 col-lg-4 mb-4">
 <a href="#" class="service text-center border rounded"> <span class="icon flaticon-sold"></span>
				<h2 class="service-heading">Sold Houses</h2>
				<p>
 <span class="read-more">Learn More</span>
				</p>
 </a>
			</div>
			<div class="col-md-6 col-lg-4 mb-4">
 <a href="#" class="service text-center border rounded"> <span class="icon flaticon-camera"></span>
				<h2 class="service-heading">Security Priority</h2>
				<p>
 <span class="read-more">Learn More</span>
				</p>
 </a>
			</div>
		</div>
	</div>
</div>
<div class="site-section bg-light">
	<div class="container">
		<div class="row justify-content-center mb-5">
			<div class="col-md-7 text-center">
				<div class="site-section-title">
					<h2>Our Blog&nbsp; &nbsp;<?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	".default", 
	array(
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "3",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_MODE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "TIMESTAMP_X",
		"SORT_BY2" => "TIMESTAMP_X",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => ".default",
		"VARIABLE_ALIASES" => array(
			"SECTION_ID" => "SECTION_ID",
			"ELEMENT_ID" => "ELEMENT_ID",
		)
	),
	false
);?></h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
 <a href="#"><img alt="Image" src="local/templates/Home site/images/img_4.jpg" class="img-fluid"></a>
				<div class="p-4 bg-white">
 <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
					<h2 class="h5 text-black mb-3"><a href="#">When To Sell &amp; How Much To Sell?</a></h2>
					<p>
						 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem veniam quae sunt.
					</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
 <a href="#"><img alt="Image" src="local/templates/Home site/images/img_2.jpg" class="img-fluid"></a>
				<div class="p-4 bg-white">
 <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
					<h2 class="h5 text-black mb-3"><a href="#">When To Sell &amp; How Much To Sell?</a></h2>
					<p>
						 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem veniam quae sunt.
					</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="300">
 <a href="#"><img alt="Image" src="local/templates/Home site/images/img_3.jpg" class="img-fluid"></a>
				<div class="p-4 bg-white">
 <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
					<h2 class="h5 text-black mb-3"><a href="#">When To Sell &amp; How Much To Sell?</a></h2>
					<p>
						 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem veniam quae sunt.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
