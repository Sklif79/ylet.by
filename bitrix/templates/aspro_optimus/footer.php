<?if(isset($_SERVER["HTTP_X_REQUESTED_WITH"]) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == "xmlhttprequest") die();?>
<?IncludeTemplateLangFile(__FILE__);?>
							<?if(!COptimus::IsMainPage()):?>
								</div> <?// .container?>
							<?endif;?>
						</div>
					<?if(!COptimus::IsOrderPage() && !COptimus::IsBasketPage()):?>
						</div> <?// .right_block?>
					<?endif;?>
				</div> <?// .wrapper_inner?>				
			</div> <?// #content?>
		</div><?// .wrapper?>
		<footer id="footer">
			<div class="footer_inner <?=strtolower($TEMPLATE_OPTIONS["BGCOLOR_THEME_FOOTER_SIDE"]["CURRENT_VALUE"]);?>">

				<?if($APPLICATION->GetProperty("viewed_show")=="Y" || defined("ERROR_404")):?>
					<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
						array(
							"COMPONENT_TEMPLATE" => ".default",
							"PATH" => SITE_DIR."include/footer/comp_viewed.php",
							"AREA_FILE_SHOW" => "file",
							"AREA_FILE_SUFFIX" => "",
							"AREA_FILE_RECURSIVE" => "Y",
							"EDIT_TEMPLATE" => "standard.php"
						),
						false
					);?>					
				<?endif;?>
				<div class="wrapper_inner">
					<div class="footer_bottom_inner">
						<div class="left_block">
							<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
								array(
									"COMPONENT_TEMPLATE" => ".default",
									"PATH" => SITE_DIR."include/footer/copyright.php",
									"AREA_FILE_SHOW" => "file",
									"AREA_FILE_SUFFIX" => "",
									"AREA_FILE_RECURSIVE" => "Y",
									"EDIT_TEMPLATE" => "standard.php"
								),
								false
							);?>							
							<div id="bx-composite-banner"></div>
						</div>
						<div class="right_block">
							<div class="middle">
								<div class="rows_block">
									<div class="item_block col-75 menus">
										<?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_submenu_top", array(
											"ROOT_MENU_TYPE" => "bottom",
											"MENU_CACHE_TYPE" => "Y",
											"MENU_CACHE_TIME" => "3600000",
											"MENU_CACHE_USE_GROUPS" => "N",
											"MENU_CACHE_GET_VARS" => array(),
											"MAX_LEVEL" => "1",
											"USE_EXT" => "N",
											"DELAY" => "N",
											"ALLOW_MULTI_SELECT" => "N"
											),false
										);?>
										<div class="rows_block">
											<div class="item_block col-3">
												<?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_submenu", array(
													"ROOT_MENU_TYPE" => "bottom_company",
													"MENU_CACHE_TYPE" => "Y",
													"MENU_CACHE_TIME" => "3600000",
													"MENU_CACHE_USE_GROUPS" => "N",
													"MENU_CACHE_GET_VARS" => array(),
													"MAX_LEVEL" => "1",
													"USE_EXT" => "N",
													"DELAY" => "N",
													"ALLOW_MULTI_SELECT" => "N"
													),false
												);?>
											</div>
											<div class="item_block col-3">
												<?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_submenu", array(
													"ROOT_MENU_TYPE" => "bottom_info",
													"MENU_CACHE_TYPE" => "Y",
													"MENU_CACHE_TIME" => "3600000",
													"MENU_CACHE_USE_GROUPS" => "N",
													"MENU_CACHE_GET_VARS" => array(),
													"MAX_LEVEL" => "1",
													"USE_EXT" => "N",
													"DELAY" => "N",
													"ALLOW_MULTI_SELECT" => "N"
													),false
												);?>
											</div>
											<div class="item_block col-3">
												<?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_submenu", array(
													"ROOT_MENU_TYPE" => "bottom_help",
													"MENU_CACHE_TYPE" => "Y",
													"MENU_CACHE_TIME" => "3600000",
													"MENU_CACHE_USE_GROUPS" => "N",
													"MENU_CACHE_GET_VARS" => array(),
													"MAX_LEVEL" => "1",
													"USE_EXT" => "N",
													"DELAY" => "N",
													"ALLOW_MULTI_SELECT" => "N"
													),false
												);?>
											</div>
										</div>
									</div>
									<div class="item_block col-4 soc">
										<div class="soc_wrapper">
											<div class="phones">
												<div class="phone_block">
													<span class="phone_wrap">
														<span class="icons fa fa-phone"></span>
														<span>
															<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
																array(
																	"COMPONENT_TEMPLATE" => ".default",
																	"PATH" => SITE_DIR."include/phone.php",
																	"AREA_FILE_SHOW" => "file",
																	"AREA_FILE_SUFFIX" => "",
																	"AREA_FILE_RECURSIVE" => "Y",
																	"EDIT_TEMPLATE" => "standard.php"
																),
																false
															);?>
														</span>
													</span>
													<span class="order_wrap_btn">
														<span class="callback_btn"><?=GetMessage('CALLBACK')?></span>
													</span>
												</div>
											</div>
											<div class="social_wrapper">
												<div class="social">
													<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
														array(
															"COMPONENT_TEMPLATE" => ".default",
															"PATH" => SITE_DIR."include/footer/social.info.optimus.default.php",
															"AREA_FILE_SHOW" => "file",
															"AREA_FILE_SUFFIX" => "",
															"AREA_FILE_RECURSIVE" => "Y",
															"EDIT_TEMPLATE" => "standard.php"
														),
														false
													);?>
												</div>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="mobile_copy">
						<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
							array(
								"COMPONENT_TEMPLATE" => ".default",
								"PATH" => SITE_DIR."include/footer/copyright.php",
								"AREA_FILE_SHOW" => "file",
								"AREA_FILE_SUFFIX" => "",
								"AREA_FILE_RECURSIVE" => "Y",
								"EDIT_TEMPLATE" => "standard.php"
							),
							false
						);?>
					</div>
					<?$APPLICATION->IncludeFile(SITE_DIR."include/bottom_include1.php", Array(), Array("MODE" => "text", "NAME" => GetMessage("ARBITRARY_1"))); ?>
					<?$APPLICATION->IncludeFile(SITE_DIR."include/bottom_include2.php", Array(), Array("MODE" => "text", "NAME" => GetMessage("ARBITRARY_2"))); ?>
				</div>
			</div>
		</footer>
		<?
		COptimus::setFooterTitle();
		COptimus::showFooterBasket();
		?>
<div class="simple_form_7_frame popup jqmID5">
<?
	$APPLICATION->IncludeComponent(
		"bitrix:form",
		"popup",
		Array(
			"AJAX_MODE" => "Y",
			"SEF_MODE" => "N",
			"WEB_FORM_ID" => "SIMPLE_FORM_7",
			"START_PAGE" => "new",
			"SHOW_LIST_PAGE" => "N",
			"SHOW_EDIT_PAGE" => "N",
			"SHOW_VIEW_PAGE" => "N",
			"SUCCESS_URL" => "",
			"SHOW_ANSWER_VALUE" => "N",
			"SHOW_ADDITIONAL" => "N",
			"SHOW_STATUS" => "N",
			"EDIT_ADDITIONAL" => "N",
			"EDIT_STATUS" => "Y",
			"NOT_SHOW_FILTER" => "",
			"NOT_SHOW_TABLE" => "",
			"CHAIN_ITEM_TEXT" => "",
			"CHAIN_ITEM_LINK" => "",
			"IGNORE_CUSTOM_TEMPLATE" => "N",
			"USE_EXTENDED_ERRORS" => "Y",
			"CACHE_GROUPS" => "N",
			"CACHE_TYPE" => "A",
			"CACHE_TIME" => "3600000",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"AJAX_OPTION_HISTORY" => "N",
			"VARIABLE_ALIASES" => Array(
				"action" => "action"
			)
		)
	);?>
</div>
<script>
	$(document).ready(function () {
		$('.simple_form_7_btn').click(function(){
			$('.simple_form_7_frame').addClass('show');
			$('.simple_form_7_frame').css({'z-index':'3000','display':'block','margin-left':'-210px','top':'313.5px','opacity':'1'});
		});

		$('.simple_form_7_frame .jqmClose, .simple_form_7_frame .close').click(function(){
			$('.simple_form_7_frame').removeClass('show');
			$('.simple_form_7_frame').removeAttr("style");
		});

		$('.simple_form_7_frame button[name="web_form_reset"]').click(function(){
			$('.simple_form_7_frame input[type="text"],.simple_form_7_frame input[type="email"]').val('');
			$('.simple_form_7_frame').removeClass('show');
			$('.simple_form_7_frame').removeAttr("style");
		});
	});
</script>
	</body>
</html>