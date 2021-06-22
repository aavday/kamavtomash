<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); 
use Bitrix\Main\Page\Asset;
global $USER;
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <?$APPLICATION->AddBufferContent('convertMetaTags');?>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title><? $APPLICATION->ShowTitle(); ?></title>
    <? $APPLICATION->ShowHead();  ?>
    <link rel="preload" href="<?=SITE_TEMPLATE_PATH?>/fonts/SegoeUI/SegoeUI-min.woff" as="font" type="font/woff" crossorigin="anonymous">
    <link rel="preload" href="<?=SITE_TEMPLATE_PATH?>/fonts/SegoeUI/SegoeUI-Bold-min.woff" as="font" type="font/woff" crossorigin="anonymous">
    <link rel="preload" href="<?=SITE_TEMPLATE_PATH?>/fonts/SegoeUI/SegoeUI-Light-min.woff" as="font" type="font/woff" crossorigin="anonymous">
    <link rel="preload" href="<?=SITE_TEMPLATE_PATH?>/fonts/MyriadPro-Bold-min.woff" as="font" type="font/woff" crossorigin="anonymous">
    <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/libs/css-libs.min.css") ?>
    <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bundle.min.css") ?>
    <? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/libs/js-libs.min.js") ?>
    <? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/script.min.js") ?>
    <? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/template.js") ?>
  </head>
  <body>
      <? if($GLOBALS["USER"]->IsAuthorized()): ?>
        <div id="panel">
          <?
            $APPLICATION->ShowPanel();
            if ($APPLICATION->GetCurPage() == '/') Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/panel-fix.js");
          ?>
        </div>
      <? endif; ?>
    <div id="preloader">
      <div class="loader-container"></div>
    </div>
    <?
    if ($APPLICATION->GetCurPage() == '/'):?>
      <header class="header">
    <?else:?>
      <header class="header header-inside">
    <?endif;?>
      <nav class="navbar navbar-expand-lg">
        <?$APPLICATION->IncludeComponent("bitrix:news.detail","logo",Array(
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
          "IBLOCK_ID" => "9",
          "ELEMENT_ID" => "90",
          "ELEMENT_CODE" => "",
          "CHECK_DATES" => "Y",
          "FIELD_CODE" => Array(""),
          "PROPERTY_CODE" => Array("LOGO"),
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
        <div class="collapse navbar-collapse" id="navbarHeader">
          <?$APPLICATION->IncludeComponent("bitrix:menu","main_menu",Array(
              "ROOT_MENU_TYPE" => "top", 
              "MAX_LEVEL" => "1", 
              "CHILD_MENU_TYPE" => "top", 
              "USE_EXT" => "Y",
              "DELAY" => "N",
              "ALLOW_MULTI_SELECT" => "Y",
              "MENU_CACHE_TYPE" => "N", 
              "MENU_CACHE_TIME" => "3600", 
              "MENU_CACHE_USE_GROUPS" => "Y", 
              "MENU_CACHE_GET_VARS" => "" 
            )
          );?>
          <?
          global $city;
          \Bitrix\Main\Loader::includeModule('iblock');

          $arSelect = Array("ID", "NAME");
          $arFilter = Array("NAME"=>$city['name1'], "ACTIVE"=>"Y");
          $res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
          while($arFields = $res->GetNext())
          {
            global $elementId;
            $elementId = $arFields['ID'];
          }
          ?>
          <div class="header__town">
            <?$APPLICATION->IncludeComponent("bitrix:news.detail","header_town",Array(
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
              "FIELD_CODE" => Array("NAME"),
              "PROPERTY_CODE" => Array("ADDRESS"),
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
          </div>
          <?$APPLICATION->IncludeComponent("bitrix:news.detail","header_contact",Array(
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
            "FIELD_CODE" => Array("NAME"),
            "PROPERTY_CODE" => Array("PHONE_1", "PHONE_2", "WORKING_HOURS", "EMAIL"),
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
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <div class="menu"><span class="bar"></span><span class="bar"></span></div>
        </button>
      </nav>
    </header>
    <div id="main">
	