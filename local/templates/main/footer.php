<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die;
?>
	</div>
    <footer class="footer sticky_footer">
      <?$APPLICATION->IncludeComponent("bitrix:news.detail","footer",Array(
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
        "PROPERTY_CODE" => Array("LOGO_FOOTER", "COPYRIGHT"),
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
      <a class="itchelny" href="https://www.itchelny.ru/">
        <p>Создание и поддержка –</p>
        <img src="<?=SITE_TEMPLATE_PATH?>/images/icons/itchelny-logo.png" alt="Логотип ITChelny"/>
      </a>
    </footer>
    <div class="modal modal-town fade" id="selectTownModal" tabindex="-1" aria-labelledby="selectTownModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="selectTownModalLabel">Выбор города</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <?
            global $arFilter;
            $arFilter = array('!ID'=>$elementId);
            ?>
            <?$APPLICATION->IncludeComponent("bitrix:news.list","cities",Array(
              "DISPLAY_DATE" => "Y",
              "DISPLAY_NAME" => "Y",
              "DISPLAY_PICTURE" => "Y",
              "DISPLAY_PREVIEW_TEXT" => "Y",
              "AJAX_MODE" => "Y",
              "IBLOCK_TYPE" => "main",
              "IBLOCK_ID" => "2",
              "NEWS_COUNT" => "20",
              "SORT_BY1" => "NAME",
              "SORT_ORDER1" => "ASC",
              "SORT_BY2" => "SORT",
              "SORT_ORDER2" => "ASC",
              "FILTER_NAME" => "arFilter",
              "FIELD_CODE" => Array("NAME"),
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
      </div>
    </div>
    <div class="modal modal-town modal-contact fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <form action class="callback-request">
            <div class="modal-header">
              <h5 class="modal-title" id="contactModalLabel">Заказать звонок</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <input class="form-control" type="text" placeholder="Ваше имя" required="required" id="name" name="Имя"/>
              <input class="form-control" type="text" placeholder="Номер телефона" required="required" id="phone" name="Телефон"/>
              <input class="form-control" type="text" placeholder="Ваш город" id="city" name="Город"/>
              <p class="modal-time__title">Укажите удобное время для звонка:</p>
              <div class="modal-time">
                <input type="text" id="from__time" name="time_from" readonly="readonly"/>
                <input type="text" id="to__time" name="time_by" readonly="readonly"/>
                <div id="slider-range"></div>
              </div>
              <div class="checkbox">
                <input type="checkbox" id="check" name="check" required="required"/>
                <label for="check">Я согласен на обработку персональных данных</label>
              </div>
              <button class="btn-submit" type="submit">Заказать звонок</button>
            </div>
            <input type="hidden" id="subject" name="subject" value="Заказ обратного звонка">
          </form>
        </div>
      </div>
    </div>
    <div class="modal modal-town modal-contact fade" id="messageModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <form action class="message-form">
            <div class="modal-header">
              <h5 class="modal-title" id="contactModalLabel">Оставить сообщение</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <input class="form-control" type="text" placeholder="Ваше имя" required="required" id="name" name="Имя"/>
              <input class="form-control" type="text" placeholder="Номер телефона" required="required" id="phone" name="Телефон"/>
              <textarea class="form-control" type="text" placeholder="Ваше сообщение" id="city" name="Сообщение"></textarea>
              <div class="checkbox">
                <input type="checkbox" id="check" name="check" required="required"/>
                <label for="check">Я согласен на обработку персональных данных</label>
              </div>
              <button class="btn-submit" type="submit">Оставить сообщение</button>
            </div>
            <input type="hidden" id="subject" name="subject" value="Сообщение">
          </form>
        </div>
      </div>
    </div>
    <div class="modal modal-town modal-contact fade" id="consultModal" tabindex="-1" aria-labelledby="consultModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <form action class="consult-request">
            <div class="modal-header">
              <h5 class="modal-title" id="consultModalLabel">Заказать консультацию</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <input class="form-control" type="text" placeholder="Ваше имя" required="required" id="name" name="Имя"/>
              <input class="form-control" type="text" placeholder="Номер телефона" required="required" id="phone" name="Телефон"/>
              <input class="form-control" type="text" placeholder="Ваш город" id="city" name="Город"/>
              <p class="modal-time__title">Укажите удобное время для звонка:</p>
              <div class="modal-time">
                <input type="text" id="from__time-2" name="time_from" readonly="readonly"/>
                <input type="text" id="to__time-2" name="time_by" readonly="readonly"/>
                <div id="slider-range-2"></div>
              </div>
              <div class="checkbox">
                <input type="checkbox" id="check" name="check" required="required"/>
                <label for="check">Я согласен на обработку персональных данных</label>
              </div>
              <button class="btn-submit" type="submit">Заказать консультацию</button>
            </div>
            <input type="hidden" id="subject" name="subject" value="Заказ консультации">
            <input type="hidden" id="product" name="Товар" value="<?=$APPLICATION->ShowTitle(false)?>">
          </form>
        </div>
      </div>
    </div>
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
            <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <iframe width="100%" height="100%" src="<?=$GLOBALS["video"]?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
    <?if($GLOBALS['instructions']):?>
    <div class="modal modal-instructions fade" id="instructionsModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
            <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <?foreach ($GLOBALS['instructions'] as $key => $instruction):?>
            <a href="<?=$instruction?>">Инструкция <?=$key + 1?></a></br>
            <?endforeach?>
          </div>
        </div>
      </div>
    </div>
    <?endif?>
    <?if($GLOBALS['certificates']):?>
    <div class="modal modal-certificates fade" id="certificatesModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
            <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <?foreach ($GLOBALS['certificates'] as $key => $instruction):?>
            <a href="<?=$instruction?>">Сертификат <?=$key + 1?></a></br>
            <?endforeach?>
          </div>
        </div>
      </div>
    </div>
    <?endif?>
  </body>
</html>