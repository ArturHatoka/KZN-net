<header id="site-header" class="clearfix main-page">
    <?php if($additional[30]==0){
        $result = mysql_query("SELECT url, menu, id, p_id FROM ".MySQLprefix."_mypages WHERE place='top' AND shows=1 AND id!=77 ORDER BY p_id ASC, sort_id ASC");
        if($result)
            while($row = mysql_fetch_assoc($result)){
                $treeid[] = $row["id"];
                $treename[] = $row["menu"];
                $treeurl[] = $row["url"];
                $treepid[] = $row["p_id"];
                $treelevel[] = 0;
            }
        $count = count($treeid);
        for($i=0; $i<$count-1; $i++){
            $g = $i;
            for($j=1; $j<$count; $j++)
                if($treepid[$j] == $treeid[$i]){
                    $jid = $treeid[$j];
                    $jpid = $treepid[$j];
                    $jname = $treename[$j];
                    $jurl = $treeurl[$j];
                    $jlevel = $treelevel[$i]+1;
                    $k = $j;
                    while ($k>$g+1){
                        $treeid[$k] = $treeid[$k-1];
                        $treepid[$k] = $treepid[$k-1];
                        $treename[$k] = $treename[$k-1];
                        $treeurl[$k] = $treeurl[$k-1];
                        $treelevel[$k] = $treelevel[$k-1];
                        $k = $k - 1;
                    }
                    $treeid[$g+1] = $jid;
                    $treepid[$g+1] = $jpid;
                    $treename[$g+1] = $jname;
                    $treeurl[$g+1] = $jurl;
                    $treelevel[$g+1] = $jlevel;
                    $g++;
                }
        }
        ?>
    <nav id="nav-primary" role="navigation" itemtype="http://schema.org/SiteNavigationElement" itemscope="itemscope">
                <div id="nav-primary-menu" class="menu-primary-nav-container">
                    <ul id="menu-primary-nav" class="">
                <?php
                for($i=0; $i<$count; $i++){
                    ?>
                    <li>
                    <a <?php if($treeurl[$i]==$urls[0] || $treeurl[$i]=='main' && $url['target_type']=='main'){ ?>class="act-m" <?php } ?>href="<?=(substr($treeurl[$i],0,4)=='http'?$treeurl[$i].'" target="_blank':($treeid[$i]==2?$cur_city[0]:'').'/'.($treeurl[$i]!='main'?$treeurl[$i].'/':''))?>"><?=$treename[$i]?></a>
                    <?php
                if(isset($treelevel[$i+1]) && $treelevel[$i+1] > $treelevel[$i]){
                    ?>
                    <ul>
                    <?php
                }
                    if(isset($treelevel[$i+1]) && $treelevel[$i+1] == $treelevel[$i]){
                        ?>
                        </li>
                        <?php
                    }
                    if(isset($treelevel[$i+1]) && $treelevel[$i+1] < $treelevel[$i]){
                        ?>
                        </li>
                        <?php
                        for($m = 1; $m <= $treelevel[$i] - (isset($treelevel[$i+1])?$treelevel[$i+1]:0); $m++){
                            ?>
                            </ul>
                            </li>
                            <?php
                        }
                    }
                }
                ?>
                    </ul>
                </div>
    </nav>
    <?php } ?>
<!--    <nav id="nav-primary" role="navigation" itemtype="http://schema.org/SiteNavigationElement" itemscope="itemscope">-->
<!--        <div id="nav-primary-menu" class="menu-primary-nav-container">-->
<!--            <ul id="menu-primary-nav" class="">-->
<!--                <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#internet">Интернет</a></li>-->
<!--                <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#internetatv">Интернет + ТВ</a></li>-->
<!--                <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#leader">Преимущества</a></li>-->
<!--                <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#easy">Подключение</a></li>-->
<!--                <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#pochemu-my">Почему мы?</a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </nav>-->

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
                <form class="form-provider" method="post" action="mail/send-mail.php">
                    <input type="hidden" id="main_request" name="main_request" value="Основная заявка">
                    <div class="ht-grid-col ht-grid-4">
                        <input id="adres" name="adres" type="text" required="" placeholder="Ваш адрес" autocomplete="off" class="suggestions-input">
                    </div>
                    <div class="ht-grid-col ht-grid-4">
                        <input id="telephone" name="telephone" type="text" required="" placeholder="Номер телефона" autocomplete="off" class="suggestions-input">
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