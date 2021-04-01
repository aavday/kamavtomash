<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); 
use Bitrix\Main\Page\Asset;
global $USER;
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <? $APPLICATION->ShowHead();  ?>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title><? $APPLICATION->ShowTitle(); ?></title>
    <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" type="image/x-icon"/>
    <link rel="icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" type="image/x-icon"/>
    <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/libs/css-libs.min.css") ?>
    <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bundle.min.css") ?>
    <? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/libs/js-libs.min.js") ?>
    <? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/script.min.js") ?>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=eff7a67d-abe4-44c8-ad01-4221d11c84ea&amp;lang=ru_RU"></script>
  </head>
  <body>
      <? if($GLOBALS["USER"]->IsAuthorized()): ?>
        <div id="panel">
          <?
            $APPLICATION->ShowPanel();
            Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/panel-fix.js");
          ?>
        </div>
      <? endif; ?>
    <div id="preloader">
      <div class="loader-container"></div>
    </div>
    <header class="header">
      <nav class="navbar navbar-expand-lg"><a class="logo" href="/"><img src="<?=SITE_TEMPLATE_PATH?>/images/icons/logo.png" alt="Логотип компании"/></a>
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
          <div class="header__town"><a class="header__town__select select-town" data-toggle="modal" data-target="#selectTownModal">Набережные Челны</a><br/>
            <p class="header__town__text text-adress">ул. Раскольникова, 79, офис 5А</p>
          </div>
          <div class="header__contact"><a class="header__contact__select select-phone" id="phoneDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">8 (8552) 20-07-20</a>
            <div class="dropdown-menu phone-dropdown" aria-labelledby="phoneDropdownMenu"><a class="phone-dropdown__phone" href="tel:88552200720">8 (8552) 20-07-20<br></a><a class="phone-dropdown__phone" href="tel:89673790720">8 (967) 379-07-20</a>
              <p class="phone-dropdown__time">Пн-Сб 8:00 - 18:00</p>
              <button class="phone-dropdown__btn" data-toggle="modal" data-target="#contactModal">Оставить заявку</button>
            </div><br/><a class="header__contact__text text-mail" href="mailto:kam-info@mail.ru">kam-info@mail.ru</a>
          </div>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <div class="menu"><span class="bar"></span><span class="bar"></span></div>
        </button>
      </nav>
    </header>
    <div id="main">
	