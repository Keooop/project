<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Объявления");
?><div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(/images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row align-items-center justify-content-center text-center">
			<div class="col-md-10">
				<h1 class="mb-2">Объявления</h1>
				 <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"Nav",
	Array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0"
	)
);?>
			</div>
		</div>
	</div>
</div>
 <br>
<div class="pt-5">
	<div class="container">
		<form class="row">
			<div class="col-sm-6 col-md-4 col-lg-3 mb-4">
				<div class="select-wrap">
 <span class="icon icon-arrow_drop_down"></span>
					<select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
						<option value="">Lot Area</option>
						<option value="1000">1000</option>
						<option value="800">800</option>
						<option value="600">600</option>
						<option value="400">400</option>
						<option value="200">200</option>
						<option value="100">100</option>
					</select>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3 mb-4">
				<div class="select-wrap">
 <span class="icon icon-arrow_drop_down"></span>
					<select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
						<option value="">Property Status</option>
						<option value="For Sale">For Sale</option>
						<option value="For Rent">For Rent</option>
					</select>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3 mb-4">
				<div class="select-wrap">
 <span class="icon icon-arrow_drop_down"></span>
					<select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
						<option value="">Location</option>
						<option value="United States">United States</option>
						<option value="United Kingdom">United Kingdom</option>
						<option value="Canada">Canada</option>
						<option value="Belgium">Belgium</option>
					</select>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3 mb-4">
				<div class="select-wrap">
 <span class="icon icon-arrow_drop_down"></span>
					<select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
						<option value="">Lot Area</option>
						<option value="1000">1000</option>
						<option value="800">800</option>
						<option value="600">600</option>
						<option value="400">400</option>
						<option value="200">200</option>
						<option value="100">100</option>
					</select>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3 mb-4">
				<div class="select-wrap">
 <span class="icon icon-arrow_drop_down"></span>
					<select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
						<option value="">Bedrooms</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5+">5+</option>
					</select>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3 mb-4">
				<div class="select-wrap">
 <span class="icon icon-arrow_drop_down"></span>
					<select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
						<option value="">Bathrooms</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5+">5+</option>
					</select>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3 mb-4">
				<div class="mb-4">
					<div id="slider-range" class="border-primary">
					</div>
 <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="">
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3 mb-4">
 <input type="submit" class="btn btn-primary btn-block form-control-same-height rounded-0" value="Search">
			</div>
		</form>
	</div>
</div>
<div class="site-section site-section-sm bg-light">
	<div class="container">
		<div class="row mb-5">
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
			0 => "ID",
			1 => "CODE",
			2 => "XML_ID",
			3 => "NAME",
			4 => "TAGS",
			5 => "SORT",
			6 => "PREVIEW_TEXT",
			7 => "PREVIEW_PICTURE",
			8 => "DETAIL_TEXT",
			9 => "DETAIL_PICTURE",
			10 => "DATE_ACTIVE_FROM",
			11 => "ACTIVE_FROM",
			12 => "DATE_ACTIVE_TO",
			13 => "ACTIVE_TO",
			14 => "SHOW_COUNTER",
			15 => "SHOW_COUNTER_START",
			16 => "IBLOCK_TYPE_ID",
			17 => "IBLOCK_ID",
			18 => "IBLOCK_CODE",
			19 => "IBLOCK_NAME",
			20 => "IBLOCK_EXTERNAL_ID",
			21 => "DATE_CREATE",
			22 => "CREATED_BY",
			23 => "CREATED_USER_NAME",
			24 => "TIMESTAMP_X",
			25 => "MODIFIED_BY",
			26 => "USER_NAME",
			27 => "PROPERTY_PRiCE",
			28 => "PROPERTY_SQUARE",
			29 => "PROPERTY_BEDROOM",
			30 => "PROPERTY_BATH",
			31 => "PROPERTY_GARAGES",
			32 => "PROPERTY_PRIORITY",
			33 => "",
		),
		"IBLOCKS" => array(
			0 => "8",
		),
		"IBLOCK_TYPE" => "news",
		"NEWS_COUNT" => "9",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"NEW_PROPER" => "New Properties for You"
	),
	false
);?>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="site-pagination">
 <a href="#" class="active">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">5</a>
					... <a href="#">10</a>
				</div>
			</div>
		</div>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
