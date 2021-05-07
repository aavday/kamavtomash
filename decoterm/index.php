<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Огнезащита ДЕКОТЕРМ');
?>

<div class="inside-page decoterm-page">
	<div class="container">
		<div class="inside-wrapper decoterm-wrapper">
			<h1 class="title"><?$APPLICATION->ShowTitle(false)?></h1>
			<?$APPLICATION->IncludeComponent("bitrix:news.detail","decoterm_text",Array(
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
				"IBLOCK_ID" => "7",
				"ELEMENT_ID" => "72",
				"ELEMENT_CODE" => "",
				"CHECK_DATES" => "Y",
				"FIELD_CODE" => Array("DETAIL_TEXT"),
				"PROPERTY_CODE" => Array(""),
				"IBLOCK_URL" => "news.php?ID=#IBLOCK_ID#\"",
				"DETAIL_URL" => "",
				"SET_TITLE" => "Y",
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
			<?$APPLICATION->IncludeComponent("bitrix:news.list","decoterm_products",Array(
				"DISPLAY_DATE" => "Y",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"AJAX_MODE" => "Y",
				"IBLOCK_TYPE" => "main",
				"IBLOCK_ID" => "8",
				"NEWS_COUNT" => "20",
				"SORT_BY1" => "ID",
				"SORT_ORDER1" => "ASC",
				"SORT_BY2" => "SORT",
				"SORT_ORDER2" => "ASC",
				"FILTER_NAME" => "",
				"FIELD_CODE" => Array("NAME","PREVIEW_PICTURE", "PREVIEW_TEXT", "DETAIL_PICTURE"),
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
				"PARENT_SECTION" => "9",
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
			<?$APPLICATION->IncludeComponent("bitrix:news.list","decoterm_advantages",Array(
				"DISPLAY_DATE" => "Y",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"AJAX_MODE" => "Y",
				"IBLOCK_TYPE" => "main",
				"IBLOCK_ID" => "7",
				"NEWS_COUNT" => "20",
				"SORT_BY1" => "ID",
				"SORT_ORDER1" => "ASC",
				"SORT_BY2" => "SORT",
				"SORT_ORDER2" => "ASC",
				"FILTER_NAME" => "",
				"FIELD_CODE" => Array("NAME", "PREVIEW_PICTURE"),
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
				"PARENT_SECTION" => "7",
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
			<?$APPLICATION->IncludeComponent("bitrix:news.list","decoterm_examples",Array(
				"DISPLAY_DATE" => "Y",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"AJAX_MODE" => "Y",
				"IBLOCK_TYPE" => "main",
				"IBLOCK_ID" => "7",
				"NEWS_COUNT" => "20",
				"SORT_BY1" => "ID",
				"SORT_ORDER1" => "ASC",
				"SORT_BY2" => "SORT",
				"SORT_ORDER2" => "ASC",
				"FILTER_NAME" => "",
				"FIELD_CODE" => Array("PREVIEW_TEXT","PREVIEW_PICTURE"),
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
				"PARENT_SECTION" => "8",
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
		<div class="callback">
			<div class="row">
				<div class="offset-md-4 col-md-8 offset-lg-3 col-lg-9 offset-xl-6 col-xl-6">
					<h3 class="callback__title">Сомневаетесь с выбором?</h3>
					<h6 class="callback__text">Закажите звонок или оставьте сообщение. Наш менеджер свяжется с Вами и проконсультирует по любому вопросу!</h6>
					<button class="callback__btn" data-toggle="modal" data-target="#messageModal">Оставить сообщение</button>
					<button class="callback__btn" data-toggle="modal" data-target="#contactModal">заказать звонок</button>
				</div>
			</div>
		</div>
	</div>
</div>
<section class="contact">
	<div class="container"> 
		<div class="contact__block">
			<h3 class="contact__block__title">Контакты </h3>
			<div class="contact__block__town"><a class="contact__block__town__select" data-toggle="modal" data-target="#selectTownModal">Набережные Челны</a><br/>
				<p class="contact__block__town__text">ул. Раскольникова, 79, офис 5А</p>
			</div><a class="contact__block__phone" href="tel:88552200720">8 (8552) 20-07-20</a><br><a class="contact__block__phone" href="tel:89673790720">8 (967) 379-07-20</a><br><a class="contact__block__mail" href="mailto:kam-info@mail.ru">kam-info@mail.ru</a><br>
			<button class="contact__block__btn" data-toggle="modal" data-target="#contactModal">Оставить заявку</button>
		</div>
	</div>
	<div class="map">
		<div id="map-card"></div>
	</div>
</section>

<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>