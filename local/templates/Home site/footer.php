<? 
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
use Bitrix\Main\Page\Asset;
?>
<footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          	<div class="mb-5">
				<?$APPLICATION->IncludeComponent(
				"bitrix:main.include", 
				".default", 
				array(
				"AREA_FILE_SHOW" => "file",
				"AREA_FILE_SUFFIX" => "inc",
				"EDIT_TEMPLATE" => "",
				"PATH" => "/local/templates/Home site/include/about.php",
				"COMPONENT_TEMPLATE" => ".default"
				),
				false
				);?>		
			</div>
        </div>

		

			<div class="col-lg-4 mb-5 mb-lg-0">
			<div class="row mb-5">
				<div class="col-md-12">
				<h3 class="footer-heading mb-4">Навигация</h3>
				</div>
				<div class="col-md-6 col-lg-6">
							<?$APPLICATION->IncludeComponent(
							"bitrix:menu",
							"low_menu",
							Array(
								"ALLOW_MULTI_SELECT" => "N",
								"CHILD_MENU_TYPE" => "bottom",
								"DELAY" => "N",
								"MAX_LEVEL" => "1",
								"MENU_CACHE_GET_VARS" => array(0=>"",),
								"MENU_CACHE_TIME" => "3600",
								"MENU_CACHE_TYPE" => "N",
								"MENU_CACHE_USE_GROUPS" => "Y",
								"ROOT_MENU_TYPE" => "bottom",
								"USE_EXT" => "N"
							)
						);?><br>
				</div>
				<div class="col-md-6 col-lg-6">
						<?$APPLICATION->IncludeComponent(
						"bitrix:menu", 
						"low_menu2", 
						array(
							"ALLOW_MULTI_SELECT" => "N",
							"CHILD_MENU_TYPE" => "bottom2",
							"DELAY" => "N",
							"MAX_LEVEL" => "1",
							"MENU_CACHE_GET_VARS" => array(
							),
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_TYPE" => "N",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"ROOT_MENU_TYPE" => "bottom2",
							"USE_EXT" => "N",
							"COMPONENT_TEMPLATE" => "low_menu2"
						),
						false
					);?><br>
														
				</div>
			</div>
			</div>

        
		<div class="col-lg-4 mb-5 mb-lg-0">
			<div>
				<?$APPLICATION->IncludeComponent(
				"bitrix:main.include", 
				".default", 
				array(
				"AREA_FILE_SHOW" => "file",
				"AREA_FILE_SUFFIX" => "inc",
				"EDIT_TEMPLATE" => "",
				"PATH" => "/local/templates/Home site/include/follow.php",
				"COMPONENT_TEMPLATE" => ".default"
				),
				false
         		);?>
          	</div>
        </div>

      </div>
    <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
          <p>
            
            <?$APPLICATION->IncludeComponent(
			"bitrix:main.include", 
			".default", 
			array(
				"AREA_FILE_SHOW" => "file",
				"AREA_FILE_SUFFIX" => "inc",
				"EDIT_TEMPLATE" => "",
				"PATH" => "/local/templates/Home site/include/Copyright.php",
				"COMPONENT_TEMPLATE" => ".default"
					),
			false
				);?>
          </p>
        </div>

      </div>
    </div>
</footer>

 
</body>

</html>
