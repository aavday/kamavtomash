
	</div>
    <footer class="footer sticky_footer">
      <div class="footer__left"><a class="footer-logo" href="/"><img src="<?=SITE_TEMPLATE_PATH?>/images/icons/logo-footer.png" alt="Логотип компании"/></a>
        <p class="copyright"> &copy; 2021 КамАвтоМаш. Все права защищены.</p>
      </div><a class="itchelny" href="https://www.itchelny.ru/">
        <p>Создание и поддержка –</p><img src="<?=SITE_TEMPLATE_PATH?>/images/icons/itchelny-logo.png" alt="Логотип ITChelny"/></a>
    </footer>
    <div class="modal modal-town fade" id="selectTownModal" tabindex="-1" aria-labelledby="selectTownModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="selectTownModalLabel">Выбор города</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <ul class="modal-town__list">
              <li><a class="modal-town__link" href="#">Азнакаево</a></li>
              <li><a class="modal-town__link" href="#">Альметьевск</a></li>
              <li><a class="modal-town__link" href="#">Бавлы</a></li>
              <li><a class="modal-town__link" href="#">Бугульма</a></li>
              <li><a class="modal-town__link" href="#">Волгоград</a></li>
              <li><a class="modal-town__link" href="#">Воронеж</a></li>
              <li><a class="modal-town__link" href="#">Джалиль</a></li>
              <li><a class="modal-town__link" href="#">Екатеринбург</a></li>
              <li><a class="modal-town__link" href="#">Елабуга</a></li>
              <li><a class="modal-town__link" href="#">Заинск</a></li>
              <li><a class="modal-town__link" href="#">Ижевск</a></li>
              <li><a class="modal-town__link" href="#">Иркутск</a></li>
              <li><a class="modal-town__link" href="#">Казань</a></li>
              <li><a class="modal-town__link" href="#">Краснодар</a></li>
              <li><a class="modal-town__link" href="#">Красноярск</a></li>
              <li><a class="modal-town__link" href="#">Лениногорск</a></li>
              <li><a class="modal-town__link" href="#">Менделеевск</a></li>
              <li><a class="modal-town__link" href="#">Москва</a></li>
              <li><a class="modal-town__link active" href="#">Набережные Челны</a></li>
              <li><a class="modal-town__link" href="#">Нижнекамск</a></li>
              <li><a class="modal-town__link" href="#">Нижний Новгород</a></li>
              <li><a class="modal-town__link" href="#">Нурлат</a></li>
              <li><a class="modal-town__link" href="#">Омск</a></li>
              <li><a class="modal-town__link" href="#">Пермь</a></li>
              <li><a class="modal-town__link" href="#">Ростов-на-Дону</a></li>
              <li><a class="modal-town__link" href="#">Самара</a></li>
              <li><a class="modal-town__link" href="#">Санкт-Петербург</a></li>
              <li><a class="modal-town__link" href="#">Саратов</a></li>
              <li><a class="modal-town__link" href="#">Сургут</a></li>
              <li><a class="modal-town__link" href="#">Тюмень</a></li>
              <li><a class="modal-town__link" href="#">Ульяновск</a></li>
              <li><a class="modal-town__link" href="#">Уфа</a></li>
              <li><a class="modal-town__link" href="#">Челябинск</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="modal modal-town modal-contact fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <form>
            <div class="modal-header">
              <h5 class="modal-title" id="contactModalLabel">Заказать звонок</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <input class="form-control" type="text" placeholder="Ваше имя" required="required"/>
              <input class="form-control" type="text" placeholder="Номер телефона" required="required"/>
              <input class="form-control" type="text" placeholder="Ваш город"/>
              <p class="modal-time__title">Укажите удобное время для звонка:</p>
              <div class="modal-time">
                <input type="text" id="from__time" readonly="readonly"/>
                <input type="text" id="to__time" readonly="readonly"/>
                <div id="slider-range"></div>
              </div>
              <div class="checkbox">
                <input type="checkbox" id="check" name="check" required="required"/>
                <label for="check">Я согласен на обработку персональных данных</label>
              </div>
              <button class="btn-submit" type="submit">Заказать звонок</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>