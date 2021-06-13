<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?$APPLICATION->SetTitle('Огнезащита ДЕКОТЕРМ');?>
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
            <?$APPLICATION->IncludeComponent("bitrix:news.list","",Array(
                "DISPLAY_DATE" => $arParams['DISPLAY_DATE'],
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => $arParams['DISPLAY_PICTURE'],
                "DISPLAY_PREVIEW_TEXT" => $arParams['DISPLAY_PREVIEW_TEXT'],
                "AJAX_MODE" => $arParams['AJAX_MODE'],
                "IBLOCK_TYPE" => $arParams['IBLOCK_TYPE'],
                "IBLOCK_ID" => $arParams['IBLOCK_ID'],
                "NEWS_COUNT" => $arParams['NEWS_COUNT'],
                "SORT_BY1" => $arParams['SORT_BY1'],
                "SORT_ORDER1" => $arParams['SORT_ORDER1'],
                "SORT_BY2" => $arParams['SORT_BY2'],
                "SORT_ORDER2" => $arParams['SORT_ORDER2'],
                "FILTER_NAME" => $arParams['FILTER_NAME'],
                "FIELD_CODE" => $arParams['LIST_FIELD_CODE'],
                "PROPERTY_CODE" => $arParams['LIST_PROPERTY_CODE'],
                "CHECK_DATES" => $arParams['CHECK_DATES'],
                "DETAIL_URL" => "",
                "PREVIEW_TRUNCATE_LEN" => $arParams['PREVIEW_TRUNCATE_LEN'],
                "ACTIVE_DATE_FORMAT" => $arParams['LIST_ACTIVE_DATE_FORMAT'],
                "SET_TITLE" => $arParams['SET_TITLE'],
                "SET_BROWSER_TITLE" => "Y",
                "SET_META_KEYWORDS" => "Y",
                "SET_META_DESCRIPTION" => "Y",
                "SET_LAST_MODIFIED" => $arParams['SET_LAST_MODIFIED'],
                "INCLUDE_IBLOCK_INTO_CHAIN" => $arParams['INCLUDE_IBLOCK_INTO_CHAIN'],
                "ADD_SECTIONS_CHAIN" => $arParams['ADD_SECTIONS_CHAIN'],
                "HIDE_LINK_WHEN_NO_DETAIL" => $arParams['HIDE_LINK_WHEN_NO_DETAIL'],
                "PARENT_SECTION" => "9",
                "PARENT_SECTION_CODE" => "",
                "INCLUDE_SUBSECTIONS" => "Y",
                "CACHE_TYPE" => $arParams['CACHE_TYPE'],
                "CACHE_TIME" => $arParams['CACHE_TIME'],
                "CACHE_FILTER" => $arParams['CACHE_FILTER'],
                "CACHE_GROUPS" => $arParams['CACHE_GROUPS'],
                "DISPLAY_TOP_PAGER" => $arParams['DISPLAY_TOP_PAGER'],
                "DISPLAY_BOTTOM_PAGER" => $arParams['DISPLAY_BOTTOM_PAGER'],
                "PAGER_TITLE" => $arParams['PAGER_TITLE'],
                "PAGER_SHOW_ALWAYS" => $arParams['PAGER_SHOW_ALWAYS'],
                "PAGER_TEMPLATE" => $arParams['PAGER_TEMPLATER'],
                "PAGER_DESC_NUMBERING" => $arParams['PAGER_DESC_NUMBERING'],
                "PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams['PAGER_DESC_NUMBERING_CACHE_TIME'],
                "PAGER_SHOW_ALL" => $arParams['PAGER_SHOW_ALL'],
                "PAGER_BASE_LINK_ENABLE" => $arParams['PAGER_BASE_LINK_ENABLE'],
                "SET_STATUS_404" => $arParams['SET_STATUS_404'],
                "SHOW_404" => $arParams['SHOW_404'],
                "MESSAGE_404" => $arParams['MESSAGE_404'],
                "PAGER_BASE_LINK" => $arParams['PAGER_BASE_LINK'],
                "PAGER_PARAMS_NAME" => $arParams['PAGER_PARAMS_NAME'],
                "AJAX_OPTION_JUMP" => $arParams['AJAX_OPTION_JUMP'],
                "AJAX_OPTION_STYLE" => $arParams['AJAX_OPTION_STYLE'],
                "AJAX_OPTION_HISTORY" => $arParams['AJAX_OPTION_HISTORY'],
                "AJAX_OPTION_ADDITIONAL" => ""
                ),
                $component
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
		<?include_once $_SERVER["DOCUMENT_ROOT"] . '/includes/callback.html'?>
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