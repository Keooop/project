<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

<div class="site-section">
	<div class="container">
		<div class="row">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.feedback", 
					"feedback", 
					array(
						"EMAIL_TO" => "sasha.samoldin1@gmail.com",
						"EVENT_MESSAGE_ID" => array(
							0 => "7",
						),
						"OK_TEXT" => "Спасибо, ваше сообщение принято.",
						"REQUIRED_FIELDS" => array(
							0 => "NAME",
							1 => "EMAIL",
							2 => "MESSAGE",
						),
						"USE_CAPTCHA" => "Y",
						"COMPONENT_TEMPLATE" => "feedback"
					),
					false
				);?> 

			<div class="col-lg-4">
					<div class="p-4 mb-3 bg-white">
						<h3 class="h6 text-black mb-3 text-uppercase"></h3>
						 	<?$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"Contact_Info",
							Array(
								"AREA_FILE_SHOW" => "file",
								"AREA_FILE_SUFFIX" => "inc",
								"COMPONENT_TEMPLATE" => "Contact_Info",
								"EDIT_TEMPLATE" => "",
								"PATH" => "/include/Contact_Info.php"
							)
								);?><br>
					</div>
			</div>
		</div>
	</div>
</div>


 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
