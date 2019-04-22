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