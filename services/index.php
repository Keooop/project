<?

use PhpParser\Node\Stmt\Global_;

require $_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php";
$APPLICATION->SetTitle("Главная");
$APPLICATION->SetPageProperty("tags", "Главная");
$APPLICATION->SetPageProperty("keywords", "Главная");
$APPLICATION->SetPageProperty("description", "Главная");
$APPLICATION->SetPageProperty("title", "Агентство Недвижимости");
?><div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(/images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row align-items-center justify-content-center text-center">
			<div class="col-md-10">
				<h1 class="mb-2">О Сервисе</h1>
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
 <br>
 <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(""),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "N"
	)
);?><br>
 <br>
<div class="site-section border-bottom">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
 <img alt="Image" src="/images/about.jpg" class="img-fluid">
			</div>
			<div class="col-md-5 ml-auto" data-aos="fade-up" data-aos-delay="200">
				<div class="site-section-title mb-3">
					<h2>Our Company</h2>
				</div>
				<p>
					 Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus in cum odio.
				</p>
				<p>
					 Illum repudiandae ratione facere explicabo. Consequatur dolor optio iusto, quos autem voluptate ea? Sunt laudantium fugiat, mollitia voluptate? Modi blanditiis veniam nesciunt architecto odit voluptatum tempore impedit magnam itaque natus!
				</p>
			</div>
		</div>
	</div>
</div>
 <br>
 <br><?require $_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php";?>
