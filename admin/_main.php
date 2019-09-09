
<div>



    <div id="popup-wrap-call">
        <div class="result-popup-mask"></div>
        <div class="result-popup">
            <div class="step-1">
                <div class="title-main">Спасибо, заявка принята</div>
                <button class="close-btn">Закрыть</button>
            </div>
        </div>
    </div>
    <section class="section" style="border-bottom: #cecece 1px solid;">
        <?=$additional[3]?>
    </section>

    <section class="section" id="tv">
        <?=$additional[4]?>
    </section>

    <!--<section class="slider section" id="tariffs">-->
    <!--<div class="container main-provider-list">-->
    <!--<h2>Тарифы подключения домашнего интернета по акции</h2>-->

    <!--<div class="tafiff-action">-->
    <!--<a href="#callback"><button class="search-button no-border tariff-button">Помогите выбрать лучший</button></a>-->
    <!--</div>-->

    <!--<a class="dotted" href="">Выбрать тариф домашнего интернета самостоятельно</a>-->
    <!--</div>-->
    <!--</section>-->

    <section class="section" id="leader" style="border-top: #cecece 1px solid;">
        <div class="container page-block">
            <h2>Мы гарантируем самую низкую стоимость<br>тарифных планов от интернет-провайдеров</h2>
            <div style="text-align:center;">
                <img src="../assets/app/img/garant-cost.jpg" alt="Гарантия лучшей цены">
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container page-block">
            <h2>С нами подключили домашний интернет<br>на эксклюзивных условиях</h2>
            <div class="ccounter">
                <div class="ccounter-item">3</div>
                <div class="ccounter-item">4</div>
                <div class="ccounter-item">6</div>
                <div class="ccounter-item">9</div>
            </div>
            <div style="text-align:center;"><h3>клиента</h3></div>
            <div class="tafiff-action">
                <a href="#callback"><button class="search-button no-border tariff-button">Подключить интернет сегодня!</button></a>
            </div>
        </div>
    </section>

    <section class="shema-work section" id="easy">
        <div class="container page-block">
            <h2>Подключить домашний интернет легко</h2>
            <div class="shema-blocks" style="padding-top:25px;">
                <div class="shema-block sh-1">
                    <div class="caption">Оставьте заявку и наш cпециалист свяжется с Вами</div>
                </div>
                <div class="shema-sep"></div>
                <div class="shema-block sh-2">
                    <div class="caption">Выбераем доступного провайдера и тариф</div>
                </div>
                <div class="shema-sep"></div>
                <div class="shema-block sh-3">
                    <div class="caption">Выезд специалистов на подключение </div>
                </div>
                <div class="shema-sep"></div>
                <div class="shema-block sh-4">
                    <div class="caption">Вы пользуетесь качественным интернетом</div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div style="text-align:right;"><div style="min-height:360px;"><div style="width:100%;height:0;padding-bottom:50%;position:relative;"><iframe style="border:none;position:absolute;top:0;left:0;width:100%;height:100%;min-height:360px;border:none;overflow:hidden !important;" src="//www.metercustom.net/plugin/?th=w"></iframe></div></div></div>
        <!--<div class="container" style="padding-top:30px;">-->
        <!--<a href=""><img src="http://fabrika-interneta.ru/wp-content/uploads/2017/12/ban-na-dachu.jpg" width="100%" alt="Интернет на дачу" border="0"></a>-->
        <!--</div>-->
    </section>

    <!--<section class="slider section">-->
    <!--<div class="container main-provider-list">-->
    <!--<h2>Популярные интернет-провайдеры</h2>-->
    <!--<div class="tafiff-action">-->
    <!--<a href="#callback"><button class="search-button no-border tariff-button">Не могу выбрать. Нужна консультация</button></a>-->
    <!--</div>-->
    <!--</div>-->
    <!--</section>-->

    <!--<section id="homepage-main-type section">-->
    <!--<div class="container main-type-list" style="text-align:center;">-->
    <!--<h2>Какой вы хотите подключить интернет?</h2>-->
    <!--<div class="col-md-12">-->
    <!--<div class="col-md-6">-->
    <!--<a href="#callback">-->
    <!--<div class="type-item">-->
    <!--<div class="type-item-image"><img border="0" src="img/i2kv.jpg" alt="Подключить интернет в квартиру"></div>-->
    <!--<div class="type-item-text">Интернет в квартиру</div>-->
    <!--</div>-->
    <!--</a>-->
    <!--</div>-->
    <!--<div class="col-md-6">-->
    <!--<a href="#callback">-->
    <!--<div class="type-item">-->
    <!--<div class="type-item-image"><img border="0" src="img/i2dom.jpg" alt="Подключить интернет в частный дом"></div>-->
    <!--<div class="type-item-text">Интернет для дома</div>-->
    <!--</div>-->
    <!--</a>-->
    <!--</div>-->

    <!--</div>-->
    <!--</div>-->
    <!--</section>-->

    <section id="pochemu-my">
        <div class="container">
        <?=str_replace($ar_rf,$ar_to,$seo["text"])?>
        </div>
    </section>

<div id="callback" class="modalDialog">
    <div class="callbody">
        <div class="backcall">
            <a href="#close" title="Закрыть" class="close">X</a>
            <h2 class="call-modal-h2">Оставьте заявку и мы свяжемся с Вами в течение нескольких минут!</h2>
            <div class="tour-inputs">
                <div class="inputs_block">
                    <form id="tour--make_order" method="post" name="drop-box" action="/assets/app/mail/send-mail.php">
                        <input type="hidden" id="request" name="main_request" value="Основная заявка">
                        <span class="inp-req">
                        <input id="rqname" name="name" type="text" required="" placeholder="Ваше имя" autocomplete="off" class="suggestions-input">
                        </span>
                        <span class="inp-req inp-req-marg">
                        <input id="rqtelephone" name="telephone" type="text" required="" placeholder="Номер телефона" autocomplete="off" class="suggestions-input">
                        </span>
                        <span class="inp-req">
                        <input id="rqaddress" name="address" type="text" required="" placeholder="Ваш адрес" autocomplete="off" class="suggestions-input">
                        </span>
                        <span class="inp-req">
                        <input type="submit" class="search-button" value="Оставить заявку">
                        </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="endthx" class="modalDialog">
    <div class="callbody">
        <div class="backcall">
            <a href="#close" title="Закрыть" class="close">X</a>
            <div class="tour-inputs">

                <div id="result">
                    <p class="res_p">Ваша заявка принята, спасибо за обращение</p>
                    <h2><a href="#close">ЗАКРЫТЬ</a></h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="callback-i1" class="modalDialog">
    <div class="callbody">
        <div class="backcall">
            <a href="#close" title="Закрыть" class="close">X</a>
            <h2 class="call-modal-h2">Оставьте заявку и мы свяжемся с Вами в течение нескольких минут!</h2>
            <div class="tour-inputs">
                <div class="inputs_block">
                    <form id="tour--make_order" method="post" name="drop-box" action="/assets/app/mail/send-mail.php">
                        <input type="hidden" id="request" name="main_request" value="МТС Тариф: ФИТ Интернет 100 Супер">
                        <span class="inp-req">
                        <input id="rqname" name="name" type="text" required="" placeholder="Ваше имя" autocomplete="off" class="suggestions-input">
                        </span>
                        <span class="inp-req inp-req-marg">
                        <input id="rqtelephone" name="telephone" type="text" required="" placeholder="Номер телефона" autocomplete="off" class="suggestions-input">
                        </span>
                        <span class="inp-req">
                        <input id="rqaddress" name="address" type="text" required="" placeholder="Ваш адрес" autocomplete="off" class="suggestions-input">
                        </span>
                        <span class="inp-req">
                        <input type="submit" class="search-button" value="Оставить заявку">
                        </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="callback-i2" class="modalDialog">
    <div class="callbody">
        <div class="backcall">
            <a href="#close" title="Закрыть" class="close">X</a>
            <h2 class="call-modal-h2">Оставьте заявку и мы свяжемся с Вами в течение нескольких минут!</h2>
            <div class="tour-inputs">
                <div class="inputs_block">
                    <form id="tour--make_order" method="post" name="drop-box" action="/assets/app/mail/send-mail.php">
                        <input type="hidden" id="request" name="main_request" value="ДОМРУ Тариф: 1-ая космическая">
                        <span class="inp-req">
                        <input id="rqname" name="name" type="text" required="" placeholder="Ваше имя" autocomplete="off" class="suggestions-input">
                        </span>
                        <span class="inp-req inp-req-marg">
                        <input id="rqtelephone" name="telephone" type="text" required="" placeholder="Номер телефона" autocomplete="off" class="suggestions-input">
                        </span>
                        <span class="inp-req">
                        <input id="rqaddress" name="address" type="text" required="" placeholder="Ваш адрес" autocomplete="off" class="suggestions-input">
                        </span>
                        <span class="inp-req">
                        <input type="submit" class="search-button" value="Оставить заявку">
                        </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="callback-i3" class="modalDialog">
    <div class="callbody">
        <div class="backcall">
            <a href="#close" title="Закрыть" class="close">X</a>
            <h2 class="call-modal-h2">Оставьте заявку и мы свяжемся с Вами в течение нескольких минут!</h2>
            <div class="tour-inputs">
                <div class="inputs_block">
                    <form id="tour--make_order" method="post" name="drop-box" action="/assets/app/mail/send-mail.php">
                        <input type="hidden" id="request" name="main_request" value="ТАТТЕЛЕКОМ Тариф: Звезда 100 АКЦИЯ">
                        <span class="inp-req">
                        <input id="rqname" name="name" type="text" required="" placeholder="Ваше имя" autocomplete="off" class="suggestions-input">
                        </span>
                        <span class="inp-req inp-req-marg">
                        <input id="rqtelephone" name="telephone" type="text" required="" placeholder="Номер телефона" autocomplete="off" class="suggestions-input">
                        </span>
                        <span class="inp-req">
                        <input id="rqaddress" name="address" type="text" required="" placeholder="Ваш адрес" autocomplete="off" class="suggestions-input">
                        </span>
                        <span class="inp-req">
                        <input type="submit" class="search-button" value="Оставить заявку">
                        </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="callback-i4" class="modalDialog">
    <div class="callbody">
        <div class="backcall">
            <a href="#close" title="Закрыть" class="close">X</a>
            <h2 class="call-modal-h2">Оставьте заявку и мы свяжемся с Вами в течение нескольких минут!</h2>
            <div class="tour-inputs">
                <div class="inputs_block">
                    <form id="tour--make_order" method="post" name="drop-box" action="/assets/app/mail/send-mail.php">
                        <input type="hidden" id="request" name="main_request" value="РОСТЕЛЕКОМ Тариф: Для интернета">
                        <span class="inp-req">
                        <input id="rqname" name="name" type="text" required="" placeholder="Ваше имя" autocomplete="off" class="suggestions-input">
                        </span>
                        <span class="inp-req inp-req-marg">
                        <input id="rqtelephone" name="telephone" type="text" required="" placeholder="Номер телефона" autocomplete="off" class="suggestions-input">
                        </span>
                        <span class="inp-req">
                        <input id="rqaddress" name="address" type="text" required="" placeholder="Ваш адрес" autocomplete="off" class="suggestions-input">
                        </span>
                        <span class="inp-req">
                        <input type="submit" class="search-button" value="Оставить заявку">
                        </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="callback-i+tv1" class="modalDialog">
    <div class="callbody">
        <div class="backcall">
            <a href="#close" title="Закрыть" class="close">X</a>
            <h2 class="call-modal-h2">Оставьте заявку и мы свяжемся с Вами в течение нескольких минут!</h2>
            <div class="tour-inputs">
                <div class="inputs_block">
                    <form id="tour--make_order" method="post" name="drop-box" action="/assets/app/mail/send-mail.php">
                        <input type="hidden" id="request" name="main_request" value="РОСТЕЛЕКОМ Тариф: Для впечатлений">
                        <span class="inp-req">
                        <input id="rqname" name="name" type="text" required="" placeholder="Ваше имя" autocomplete="off" class="suggestions-input">
                        </span>
                        <span class="inp-req inp-req-marg">
                        <input id="rqtelephone" name="telephone" type="text" required="" placeholder="Номер телефона" autocomplete="off" class="suggestions-input">
                        </span>
                        <span class="inp-req">
                        <input id="rqaddress" name="address" type="text" required="" placeholder="Ваш адрес" autocomplete="off" class="suggestions-input">
                        </span>
                        <span class="inp-req">
                        <input type="submit" class="search-button" value="Оставить заявку">
                        </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="callback-i+tv2" class="modalDialog">
    <div class="callbody">
        <div class="backcall">
            <a href="#close" title="Закрыть" class="close">X</a>
            <h2 class="call-modal-h2">Оставьте заявку и мы свяжемся с Вами в течение нескольких минут!</h2>
            <div class="tour-inputs">
                <div class="inputs_block">
                    <form id="tour--make_order" method="post" name="drop-box" action="/assets/app/mail/send-mail.php">
                        <input type="hidden" id="request" name="main_request" value="МТС Тариф: Отличный ФИТ 2в1">
                        <span class="inp-req">
                        <input id="rqname" name="name" type="text" required="" placeholder="Ваше имя" autocomplete="off" class="suggestions-input">
                        </span>
                        <span class="inp-req inp-req-marg">
                        <input id="rqtelephone" name="telephone" type="text" required="" placeholder="Номер телефона" autocomplete="off" class="suggestions-input">
                        </span>
                        <span class="inp-req">
                        <input id="rqaddress" name="address" type="text" required="" placeholder="Ваш адрес" autocomplete="off" class="suggestions-input">
                        </span>
                        <span class="inp-req">
                        <input type="submit" class="search-button" value="Оставить заявку">
                        </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="callback-i+tv3" class="modalDialog">
    <div class="callbody">
        <div class="backcall">
            <a href="#close" title="Закрыть" class="close">X</a>
            <h2 class="call-modal-h2">Оставьте заявку и мы свяжемся с Вами в течение нескольких минут!</h2>
            <div class="tour-inputs">
                <div class="inputs_block">
                    <form id="tour--make_order" method="post" name="drop-box" action="/assets/app/mail/send-mail.php">
                        <input type="hidden" id="request" name="main_request" value="МТС Тариф: ФИТ 100 + ЦТВ">
                        <span class="inp-req">
                        <input id="rqname" name="name" type="text" required="" placeholder="Ваше имя" autocomplete="off" class="suggestions-input">
                        </span>
                        <span class="inp-req inp-req-marg">
                        <input id="rqtelephone" name="telephone" type="text" required="" placeholder="Номер телефона" autocomplete="off" class="suggestions-input">
                        </span>
                        <span class="inp-req">
                        <input id="rqaddress" name="address" type="text" required="" placeholder="Ваш адрес" autocomplete="off" class="suggestions-input">
                        </span>
                        <span class="inp-req">
                        <input type="submit" class="search-button" value="Оставить заявку">
                        </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="callback-i+tv4" class="modalDialog">
    <div class="callbody">
        <div class="backcall">
            <a href="#close" title="Закрыть" class="close">X</a>
            <h2 class="call-modal-h2">Оставьте заявку и мы свяжемся с Вами в течение нескольких минут!</h2>
            <div class="tour-inputs">
                <div class="inputs_block">
                    <form id="tour--make_order" method="post" name="drop-box" action="/assets/app/mail/send-mail.php">
                        <input type="hidden" id="request" name="main_request" value="ДОМРУ Тариф: Мне нравится XS">
                        <span class="inp-req">
                        <input id="rqname" name="name" type="text" required="" placeholder="Ваше имя" autocomplete="off" class="suggestions-input">
                        </span>
                        <span class="inp-req inp-req-marg">
                        <input id="rqtelephone" name="telephone" type="text" required="" placeholder="Номер телефона" autocomplete="off" class="suggestions-input">
                        </span>
                        <span class="inp-req">
                        <input id="rqaddress" name="address" type="text" required="" placeholder="Ваш адрес" autocomplete="off" class="suggestions-input">
                        </span>
                        <span class="inp-req">
                        <input type="submit" class="search-button" value="Оставить заявку">
                        </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="callback-i+tv5" class="modalDialog">
    <div class="callbody">
        <div class="backcall">
            <a href="#close" title="Закрыть" class="close">X</a>
            <h2 class="call-modal-h2">Оставьте заявку и мы свяжемся с Вами в течение нескольких минут!</h2>
            <div class="tour-inputs">
                <div class="inputs_block">
                    <form id="tour--make_order" method="post" name="drop-box" action="/assets/app/mail/send-mail.php">
                        <input type="hidden" id="request" name="main_request" value="50 Мбит+ТВ">
                        <span class="inp-req">
                        <input id="rqname" name="name" type="text" required="" placeholder="Ваше имя" autocomplete="off" class="suggestions-input">
                        </span>
                        <span class="inp-req inp-req-marg">
                        <input id="rqtelephone" name="telephone" type="text" required="" placeholder="Номер телефона" autocomplete="off" class="suggestions-input">
                        </span>
                        <span class="inp-req">
                        <input id="rqaddress" name="address" type="text" required="" placeholder="Ваш адрес" autocomplete="off" class="suggestions-input">
                        </span>
                        <span class="inp-req">
                        <input type="submit" class="search-button" value="Оставить заявку">
                        </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="callback-i+tv6" class="modalDialog">
    <div class="callbody">
        <div class="backcall">
            <a href="#close" title="Закрыть" class="close">X</a>
            <h2 class="call-modal-h2">Оставьте заявку и мы свяжемся с Вами в течение нескольких минут!</h2>
            <div class="tour-inputs">
                <div class="inputs_block">
                    <form id="tour--make_order" method="post" name="drop-box" action="/assets/app/mail/send-mail.php">
                        <input type="hidden" id="request" name="main_request" value="ТАТТЕЛЕКОМ Тариф: 100 Мбит+ТВ">
                        <span class="inp-req">
                        <input id="rqname" name="name" type="text" required="" placeholder="Ваше имя" autocomplete="off" class="suggestions-input">
                        </span>
                        <span class="inp-req inp-req-marg">
                        <input id="rqtelephone" name="telephone" type="text" required="" placeholder="Номер телефона" autocomplete="off" class="suggestions-input">
                        </span>
                        <span class="inp-req">
                        <input id="rqaddress" name="address" type="text" required="" placeholder="Ваш адрес" autocomplete="off" class="suggestions-input">
                        </span>
                        <span class="inp-req">
                        <input type="submit" class="search-button" value="Оставить заявку">
                        </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>