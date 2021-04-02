<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
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
            <a class="subtitle" href="#">
              <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                  "AREA_FILE_SHOW" => "file", 
                  "PATH" => "/includes/main_page/about/about_title.html"
                )
              );?>
            </a>
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
            </div>
            <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                "AREA_FILE_SHOW" => "file",
                "PATH" => "/includes/main_page/about/about_bottom.html"
              )
            );?>
          </div>
        </div>
      </section>
      <section class="brands">
        <div class="jotun">
          <div class="container"> 
            <div class="row">
              <div class="col-lg-6 offset-xl-1 col-xl-5">
                <a class="subtitle" href="#">
                  <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                      "AREA_FILE_SHOW" => "file",
                      "PATH" => "/includes/main_page/brands/first_brand_title.html"
                    )
                  );?>
                </a>
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
                <a class="subtitle" href="#">
                  <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                      "AREA_FILE_SHOW" => "file",
                      "PATH" => "/includes/main_page/brands/second_brand_title.html"
                    )
                );?>
                </a>
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
              <a class="subtitle" href="#">
                <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => "/includes/main_page/fire_protection/fire_protection_title.html"
                  )
                );?>
              </a>
              <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                  "AREA_FILE_SHOW" => "file",
                  "PATH" => "/includes/main_page/fire_protection/fire_protection_text.html"
                )
              );?>
              <div class="fire-protection__use">
                <h4>
                  <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                      "AREA_FILE_SHOW" => "file",
                      "PATH" => "/includes/main_page/fire_protection/fire_protection_use_title.html"
                    )
                  );?>
                </h4>
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
          <div class="project__wrapper"><a class="subtitle" href="#">Проекты</a>
            <div class="owl-carousel owl-theme" id="project-slider">
              <div class="project__item">
                <div class="project__item__img"><img src="<?=SITE_TEMPLATE_PATH?>/images/project/project-img-1.jpg" alt="Проект 1"/></div>
                <div class="project__item__content"><img class="project__item__logo" src="<?=SITE_TEMPLATE_PATH?>/images/icons/project-logo-1.jpg" alt="Проект 1 лого"/>
                  <h4 class="project__item__name">ПАО «Нижнекамскнефтехим»</h4>
                  <ul class="project__item__list">
                    <li><span class="project__item__list__preword">город</span>
                      <p>Нижнекамск</p>
                    </li>
                    <li> <span class="project__item__list__preword">год</span>
                      <p>2018 - 2019 гг.</p>
                    </li>
                    <li> <span class="project__item__list__preword">материал</span>
                      <p>ДЕКОТЕРМ-ЭПОКСИ</p>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="project__item">
                <div class="project__item__img"><img src="<?=SITE_TEMPLATE_PATH?>/images/project/project-img-2.jpg" alt="Проект 2"/></div>
                <div class="project__item__content"><img class="project__item__logo" src="<?=SITE_TEMPLATE_PATH?>/images/icons/project-logo-2.jpg" alt="Проект 2 лого"/>
                  <h4 class="project__item__name">ОАО «ТАИФ-НК», КГПТО</h4>
                  <ul class="project__item__list">
                    <li><span class="project__item__list__preword">город</span>
                      <p>Нижнекамск</p>
                    </li>
                    <li> <span class="project__item__list__preword">год</span>
                      <p>2016 - 2017 гг.</p>
                    </li>
                    <li> <span class="project__item__list__preword">материал</span>
                      <p>ДЕКОТЕРМ-ЭПОКСИ</p>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="project__item">
                <div class="project__item__img"><img src="<?=SITE_TEMPLATE_PATH?>/images/project/project-img-3.jpg" alt="Проект 3"/></div>
                <div class="project__item__content"><img class="project__item__logo" src="<?=SITE_TEMPLATE_PATH?>/images/icons/project-logo-3.jpg" alt="Проект 3 лого"/>
                  <h4 class="project__item__name">Завод двигателей «КАМАЗ»</h4>
                  <ul class="project__item__list">
                    <li><span class="project__item__list__preword">город</span>
                      <p>Набережные Челны</p>
                    </li>
                    <li> <span class="project__item__list__preword">год</span>
                      <p>2014 - 2017 гг.</p>
                    </li>
                    <li> <span class="project__item__list__preword">материал</span>
                      <p>ДЕКОТЕРМ, ДЕКОТЕРМ-КОП</p>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="project__item">
                <div class="project__item__img"><img src="<?=SITE_TEMPLATE_PATH?>/images/project/project-img-4.jpg" alt="Проект 4"/></div>
                <div class="project__item__content"><img class="project__item__logo" src="<?=SITE_TEMPLATE_PATH?>/images/icons/project-logo-4.jpg" alt="Проект 4 лого"/>
                  <h4 class="project__item__name">ТЭЦ № 2</h4>
                  <ul class="project__item__list">
                    <li><span class="project__item__list__preword">город</span>
                      <p>Ростов-на-Дону</p>
                    </li>
                    <li> <span class="project__item__list__preword">год</span>
                      <p>2016 г.</p>
                    </li>
                    <li> <span class="project__item__list__preword">материал</span>
                      <p>ДЕКОТЕРМ-КОП</p>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="project__item">
                <div class="project__item__img"><img src="<?=SITE_TEMPLATE_PATH?>/images/project/project-img-5.jpg" alt="Проект 5"/></div>
                <div class="project__item__content"><img class="project__item__logo" src="<?=SITE_TEMPLATE_PATH?>/images/icons/project-logo-5.jpg" alt="Проект 5 лого"/>
                  <h4 class="project__item__name">ТЭЦ № 2 ЛАЭС</h4>
                  <ul class="project__item__list">
                    <li><span class="project__item__list__preword">город</span>
                      <p>Санкт-Петербург</p>
                    </li>
                    <li> <span class="project__item__list__preword">год</span>
                      <p>2013 г.</p>
                    </li>
                    <li> <span class="project__item__list__preword">материал</span>
                      <p>ДЕКОТЕРМ, ДЕКОТЕРМ-Р</p>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="project__item">
                <div class="project__item__img"><img src="<?=SITE_TEMPLATE_PATH?>/images/project/project-img-6.jpg" alt="Проект 6"/></div>
                <div class="project__item__content"><img class="project__item__logo" src="<?=SITE_TEMPLATE_PATH?>/images/icons/project-logo-6.jpg" alt="Проект 6 лого"/>
                  <h4 class="project__item__name">ТЭЦ № 20</h4>
                  <ul class="project__item__list">
                    <li><span class="project__item__list__preword">город</span>
                      <p>Москва</p>
                    </li>
                    <li> <span class="project__item__list__preword">год</span>
                      <p>2014 - 2016 гг.</p>
                    </li>
                    <li> <span class="project__item__list__preword">материал</span>
                      <p>ДЕКОТЕРМ, ДЕКОТЕРМ-КОП</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="contact">
        <div class="container"> 
          <div class="contact__block">
            <h3 class="contact__block__title">Контакты </h3>
            <div class="contact__block__town"><a class="contact__block__town__select" data-toggle="modal" data-target="#selectTownModal">Набережные Челны</a><br/>
              <div class="contact__block__town__text">
                <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                    "AREA_FILE_SHOW" => "file", 
                    "PATH" => "/includes/common/address.html"
                  )
                );?>
              </div>
            </div>
              <a class="contact__block__phone" href="tel:<?include_once($_SERVER["DOCUMENT_ROOT"] . "/includes/common/phone_main.html")?>">
                <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                    "AREA_FILE_SHOW" => "file", 
                    "PATH" => "/includes/common/phone_main.html"
                  )
                );?>
              </a>
              <a class="contact__block__phone" href="tel:<?include_once($_SERVER["DOCUMENT_ROOT"] . "/includes/common/phone_secondary.html")?>">
                <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                    "AREA_FILE_SHOW" => "file", 
                    "PATH" => "/includes/common/phone_secondary.html"
                  )
                );?>
              </a>
              <a class="contact__block__mail" href="tel:<?include_once($_SERVER["DOCUMENT_ROOT"] . "/includes/common/email.html")?>">
                <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                    "AREA_FILE_SHOW" => "file", 
                    "PATH" => "/includes/common/email.html"
                  )
                );?>
              </a>
            <button class="contact__block__btn" data-toggle="modal" data-target="#contactModal">Оставить заявку</button>
          </div>
        </div>
        <div class="map">
          <div id="map-card"></div>
        </div>
      </section>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>