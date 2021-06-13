<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('О компании');
?>

<div class="inside-page about-page">
	<div class="container">
		<div class="inside-wrapper about-wrapper">
			<div class="row">
				<div class="col-xl-6">
					<h1 class="title"><?=$APPLICATION->ShowTitle(false)?></h1>
					<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
							"AREA_FILE_SHOW" => "file", 
							"PATH" => "/includes/about/about.html"
						)
					);?>
				</div>
				<div class="col-xl-6">
					<div class="about-advantage">
						<h3 class="about-advantage__title">Наши преимущества</h3>
						<?$APPLICATION->IncludeComponent("bitrix:news.list","about_advantages",Array(
							"DISPLAY_DATE" => "Y",
							"DISPLAY_NAME" => "Y",
							"DISPLAY_PICTURE" => "Y",
							"DISPLAY_PREVIEW_TEXT" => "Y",
							"AJAX_MODE" => "Y",
							"IBLOCK_TYPE" => "main",
							"IBLOCK_ID" => "4",
							"NEWS_COUNT" => "20",
							"SORT_BY1" => "ID",
							"SORT_ORDER1" => "ASC",
							"SORT_BY2" => "SORT",
							"SORT_ORDER2" => "ASC",
							"FILTER_NAME" => "",
							"FIELD_CODE" => Array("NAME","PREVIEW_PICTURE"),
							"PROPERTY_CODE" => Array(),
							"CHECK_DATES" => "Y",
							"DETAIL_URL" => "",
							"PREVIEW_TRUNCATE_LEN" => "",
							"ACTIVE_DATE_FORMAT" => "d.m.Y",
							"SET_TITLE" => "N",
							"SET_BROWSER_TITLE" => "Y",
							"SET_META_KEYWORDS" => "Y",
							"SET_META_DESCRIPTION" => "Y",
							"SET_LAST_MODIFIED" => "Y",
							"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
							"ADD_SECTIONS_CHAIN" => "Y",
							"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
							"PARENT_SECTION" => "3",
							"PARENT_SECTION_CODE" => "",
							"INCLUDE_SUBSECTIONS" => "Y",
							"CACHE_TYPE" => "A",
							"CACHE_TIME" => "3600",
							"CACHE_FILTER" => "Y",
							"CACHE_GROUPS" => "Y",
							"DISPLAY_TOP_PAGER" => "Y",
							"DISPLAY_BOTTOM_PAGER" => "Y",
							"PAGER_TITLE" => "Новости",
							"PAGER_SHOW_ALWAYS" => "Y",
							"PAGER_TEMPLATE" => "",
							"PAGER_DESC_NUMBERING" => "Y",
							"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
							"PAGER_SHOW_ALL" => "Y",
							"PAGER_BASE_LINK_ENABLE" => "Y",
							"SET_STATUS_404" => "Y",
							"SHOW_404" => "Y",
							"MESSAGE_404" => "",
							"PAGER_BASE_LINK" => "",
							"PAGER_PARAMS_NAME" => "arrPager",
							"AJAX_OPTION_JUMP" => "N",
							"AJAX_OPTION_STYLE" => "Y",
							"AJAX_OPTION_HISTORY" => "N",
							"AJAX_OPTION_ADDITIONAL" => ""
							)
						);?>
					</div>
				</div>
			</div>
			<div class="about-page__media">
				<div class="row">
					<div class="col-lg-5 col-xl-6">
						<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
								"AREA_FILE_SHOW" => "file", 
								"PATH" => "/includes/about/video.html"
							)
						);?>
					</div>
					<div class="col-lg-7 col-xl-6">
						<?$APPLICATION->IncludeComponent("bitrix:news.list","about_imgs_inner",Array(
							"DISPLAY_DATE" => "Y",
							"DISPLAY_NAME" => "Y",
							"DISPLAY_PICTURE" => "Y",
							"DISPLAY_PREVIEW_TEXT" => "Y",
							"AJAX_MODE" => "Y",
							"IBLOCK_TYPE" => "main",
							"IBLOCK_ID" => "4",
							"NEWS_COUNT" => "20",
							"SORT_BY1" => "ID",
							"SORT_ORDER1" => "ASC",
							"SORT_BY2" => "SORT",
							"SORT_ORDER2" => "ASC",
							"FILTER_NAME" => "",
							"FIELD_CODE" => Array("PREVIEW_PICTURE"),
							"PROPERTY_CODE" => Array(),
							"CHECK_DATES" => "Y",
							"DETAIL_URL" => "",
							"PREVIEW_TRUNCATE_LEN" => "",
							"ACTIVE_DATE_FORMAT" => "d.m.Y",
							"SET_TITLE" => "N",
							"SET_BROWSER_TITLE" => "Y",
							"SET_META_KEYWORDS" => "Y",
							"SET_META_DESCRIPTION" => "Y",
							"SET_LAST_MODIFIED" => "Y",
							"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
							"ADD_SECTIONS_CHAIN" => "Y",
							"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
							"PARENT_SECTION" => "5",
							"PARENT_SECTION_CODE" => "",
							"INCLUDE_SUBSECTIONS" => "Y",
							"CACHE_TYPE" => "A",
							"CACHE_TIME" => "3600",
							"CACHE_FILTER" => "Y",
							"CACHE_GROUPS" => "Y",
							"DISPLAY_TOP_PAGER" => "Y",
							"DISPLAY_BOTTOM_PAGER" => "Y",
							"PAGER_TITLE" => "Новости",
							"PAGER_SHOW_ALWAYS" => "Y",
							"PAGER_TEMPLATE" => "",
							"PAGER_DESC_NUMBERING" => "Y",
							"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
							"PAGER_SHOW_ALL" => "Y",
							"PAGER_BASE_LINK_ENABLE" => "Y",
							"SET_STATUS_404" => "Y",
							"SHOW_404" => "Y",
							"MESSAGE_404" => "",
							"PAGER_BASE_LINK" => "",
							"PAGER_PARAMS_NAME" => "arrPager",
							"AJAX_OPTION_JUMP" => "N",
							"AJAX_OPTION_STYLE" => "Y",
							"AJAX_OPTION_HISTORY" => "N",
							"AJAX_OPTION_ADDITIONAL" => ""
							)
						);?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?global $elementId;?>
<?$APPLICATION->IncludeComponent("bitrix:news.detail","contacts",Array(
  "DISPLAY_DATE" => "Y",
  "DISPLAY_NAME" => "Y",
  "DISPLAY_PICTURE" => "Y",
  "DISPLAY_PREVIEW_TEXT" => "Y",
  "USE_SHARE" => "Y",
  "SHARE_HIDE" => "N",
  "SHARE_TEMPLATE" => "",
  "SHARE_HANDLERS" => array("delicious"),
  "SHARE_SHORTEN_URL_LOGIN" => "",
  "SHARE_SHORTEN_URL_KEY" => "",
  "AJAX_MODE" => "Y",
  "IBLOCK_TYPE" => "main",
  "IBLOCK_ID" => "2",
  "ELEMENT_ID" => $elementId,
  "ELEMENT_CODE" => "",
  "CHECK_DATES" => "Y",
  "FIELD_CODE" => Array(""),
  "PROPERTY_CODE" => Array("CITY", "ADDRESS", "PHONE_1", "PHONE_2", "EMAIL"),
  "IBLOCK_URL" => "news.php?ID=#IBLOCK_ID#\"",
  "DETAIL_URL" => "",
  "SET_TITLE" => "N",
  "SET_CANONICAL_URL" => "Y",
  "SET_BROWSER_TITLE" => "Y",
  "BROWSER_TITLE" => "-",
  "SET_META_KEYWORDS" => "Y",
  "META_KEYWORDS" => "-",
  "SET_META_DESCRIPTION" => "Y",
  "META_DESCRIPTION" => "-",
  "SET_STATUS_404" => "Y",
  "SET_LAST_MODIFIED" => "Y",
  "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
  "ADD_SECTIONS_CHAIN" => "Y",
  "ADD_ELEMENT_CHAIN" => "N",
  "ACTIVE_DATE_FORMAT" => "d.m.Y",
  "USE_PERMISSIONS" => "N",
  "GROUP_PERMISSIONS" => Array("1"),
  "CACHE_TYPE" => "A",
  "CACHE_TIME" => "3600",
  "CACHE_GROUPS" => "Y",
  "DISPLAY_TOP_PAGER" => "Y",
  "DISPLAY_BOTTOM_PAGER" => "Y",
  "PAGER_TITLE" => "Страница",
  "PAGER_TEMPLATE" => "",
  "PAGER_SHOW_ALL" => "Y",
  "PAGER_BASE_LINK_ENABLE" => "Y",
  "SHOW_404" => "Y",
  "MESSAGE_404" => "",
  "STRICT_SECTION_CHECK" => "Y",
  "PAGER_BASE_LINK" => "",
  "PAGER_PARAMS_NAME" => "arrPager",
  "AJAX_OPTION_JUMP" => "N",
  "AJAX_OPTION_STYLE" => "Y",
  "AJAX_OPTION_HISTORY" => "N"
  )
);?>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>