<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("title", "Антикоррозийные краски, материалы, покрытия в {{ name2 }}");
$APPLICATION->SetPageProperty("keywords", "антикоррозийные покрытия, антикоррозийные материалы, антикоррозионные краски, антикоррозийные покрытия, {{ name3 }}");
$APPLICATION->SetPageProperty("description", "Купить антикоррозийные краски, материалы, покрытия в {{ name2 }} в компании КамАвтоМаш. Цены на антикоррозионные покрытия по металлу.");
$APPLICATION->SetTitle("Антикоррозийные краски, материалы, покрытия в {{ name2 }}");
?> 
      <section class="greeting">
        <div class="container"> 
          <div class="row">
            <div class="col-lg-6 col-xl-6">
              <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                  "AREA_FILE_SHOW" => "file", 
                  "PATH" => "/includes/main_page/greeting.html"
                )
              );?>
            </div>
            <div class="col-lg-6 col-xl-6"><img class="greeting__img" src="<?=SITE_TEMPLATE_PATH?>/images/greeting-img.png" alt="Greeting img"/></div>
          </div>
        </div>
      </section>
      <section class="about">
        <div class="container">
          <div class="about__wrapper">
            <a class="subtitle" href="/about/">О компании</a>
            <div class="row">
              <div class="col-xl-6">
                <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                    "AREA_FILE_SHOW" => "file", 
                    "PATH" => "/includes/main_page/about/about_left.html"
                  )
                );?>
              </div>
              <div class="col-xl-6">
                <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                    "AREA_FILE_SHOW" => "file", 
                    "PATH" => "/includes/main_page/about/about_right.html"
                  )
                );?>
              </div>
              <?$APPLICATION->IncludeComponent("bitrix:news.list","about_imgs_main",Array(
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
                "PARENT_SECTION" => "4",
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
      </section>
      <section class="brands">
        <div class="jotun">
          <div class="container"> 
            <div class="row">
              <div class="col-lg-6 offset-xl-1 col-xl-5">
                <a class="subtitle" href="/jotun/">Jotun</a>
                <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => "/includes/main_page/brands/first_brand_text.html"
                  )
                );?>
              </div>
            </div>
          </div>
        </div>
        <div class="decoterm">
          <div class="container"> 
            <div class="row">
              <div class="offset-lg-6 col-lg-6 offset-xl-6 col-xl-6">
                <a class="subtitle" href="/decoterm/">Огнезащита Декотерм</a>
                <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => "/includes/main_page/brands/second_brand_text.html"
                  )
                );?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="fire-protection">
        <div class="container"> 
          <div class="row">
            <div class="col-lg-7 offset-xl-1 col-xl-5">
              <a class="subtitle" href="#">Огнезащита</a>
              <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                  "AREA_FILE_SHOW" => "file",
                  "PATH" => "/includes/main_page/fire_protection/fire_protection_text.html"
                )
              );?>
              <div class="fire-protection__use">
                <h4>Области применения огнезащитных красок</h4>
                <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => "/includes/main_page/fire_protection/fire_protection_use_text.html"
                  )
                );?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="project">
        <div class="container"> 
          <div class="project__wrapper">
            <a class="subtitle" href="/proekty/">Проекты</a>
            <?$APPLICATION->IncludeComponent("bitrix:news.list","projects",Array(
              "DISPLAY_DATE" => "Y",
              "DISPLAY_NAME" => "Y",
              "DISPLAY_PICTURE" => "Y",
              "DISPLAY_PREVIEW_TEXT" => "Y",
              "AJAX_MODE" => "Y",
              "IBLOCK_TYPE" => "main",
              "IBLOCK_ID" => "1",
              "NEWS_COUNT" => "20",
              "SORT_BY1" => "ID",
              "SORT_ORDER1" => "ASC",
              "SORT_BY2" => "SORT",
              "SORT_ORDER2" => "ASC",
              "FILTER_NAME" => "",
              "FIELD_CODE" => Array("NAME", "PREVIEW_PICTURE"),
              "PROPERTY_CODE" => Array("CITY", "YEAR", "MATERIAL", "LOGO"),
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
              "PARENT_SECTION" => "",
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
      </section>
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
        "FIELD_CODE" => Array("NAME"),
        "PROPERTY_CODE" => Array("ADDRESS", "PHONE_1", "PHONE_2", "EMAIL"),
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