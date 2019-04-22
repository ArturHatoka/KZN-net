<header id="site-header" class="clearfix main-page">

    <nav id="nav-primary" role="navigation" itemtype="http://schema.org/SiteNavigationElement" itemscope="itemscope">
        <div id="nav-primary-menu" class="menu-primary-nav-container">
            <ul id="menu-primary-nav" class="">
                <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#internet">Интернет</a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#internetatv">Интернет + ТВ</a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#leader">Преимущества</a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#easy">Подключение</a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#pochemu-my">Почему мы?</a></li>
            </ul>
        </div>
    </nav>

    <div class="ht-container clearfix">
        <div id="logo" style="cursor:pointer;" onclick="location.href='http://kazan-net.ru/'">
            <a title="The Best Tarif" href="">

                <h2 class="page-header-logo logo-caption">
                    Казанские Интернет Сети             </h2>

                <h3 class="page-header-logo-tagline logo-description">
                    подключение в г. Казань и<br/> респ. Татарстан             </h3>
            </a>
        </div>

        <div class="top-phone">
            <div>Хочешь подключить лучший тариф? Звони!</div>
            <a href="tel:89656226243">+7 (965) 622-62-43</a>
            <div><a class="callback" href="#callback">заказать звонок</a></div>
        </div>
    </div>

    <section id="page-header" class="clearfix ph-align-center ph-large main-page">
        <div class="ht-container hero-top-text">
            <?=$additional[2]?>
        </div>
        <div class="ht-container hero-form-wrapper">
            <div class="ht-grid ht-grid-gutter-20">
                <form class="form-provider" method="post" action="/assets/app/mail/send-mail.php">
                    <input type="hidden" id="main_request" name="main_request" value="Основная заявка">
                    <div class="ht-grid-col ht-grid-4">
                        <input id="address" name="address" type="text" required="" placeholder="Ваш адрес" autocomplete="off" class="suggestions-input">
                    </div>
                    <div class="ht-grid-col ht-grid-4">
                        <input id="telephone" name="telephone" type="tel" required="" placeholder="Номер телефона" autocomplete="off" class="suggestions-input">
                    </div>
                    <div class="ht-grid-col ht-grid-4">
                        <input id="name" name="name" type="text" required="" placeholder="Ваше имя" autocomplete="off" class="suggestions-input">
                    </div>
                    <div class="ht-grid-col ht-grid-12">
                        <input type="submit" class="search-button" value="Оставить заявку">
                    </div>
                </form>
            </div>
        </div>
    </section>
</header>