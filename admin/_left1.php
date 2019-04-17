<div class="l-250">
		<a class="menubtn"></a>
		<div class="catalogue tmenu">
			<div class="akcii-h2" style="margin-top:-5px">Основное меню</div>
			<ul class="level1">
				<?php
				for($i=0; $i<$count; $i++){
					?>
				<li>
					<a <?php if($treeurl[$i]==$urls[0] || $treeurl[$i]=='main' && $url['target_type']=='main'){ ?>class="act-m" <?php } ?>href="<?=($treeid[$i]==2?$cur_city[0]:'')?>/<?php if($treeurl[$i]!='main'){echo $treeurl[$i]; ?>/<?php } ?>"><?=$treename[$i]?></a>
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
		<?php if($additional[29]==0){ ?>
		<?php
		$fcat = false;
		$result2 = mysql_query("SELECT id, url, menu, p_id FROM ".MySQLprefix."_mypages WHERE shows=1 AND place='left' ORDER BY p_id ASC, sort_id ASC");
		if ($result2 && mysql_num_rows($result2)>0){
			$fcat = true;
			?>
		<div class="catalogue thecat">
			<?php if(strlen($additional[37])>0){ ?>
			<div class="akcii-h2" style="margin-top:-5px"><?=$additional[37]?></div>
			<?php } ?>
			<ul class="level1">
				<?php
				while ($row2 = mysql_fetch_assoc($result2)) {
					$treeid2[] = $row2["id"];
					$treename2[] = $row2["menu"];
					$treeurl2[] = $row2["url"];
					$treepid2[] = $row2["p_id"];
					$treelevel2[] = 0;
				}
				$counttree2 = count($treeid2);
				for ($i=0;$i<$counttree2-1;$i++){
					$g = $i;
					for ($j=1;$j<$counttree2;$j++)
						if ($treepid2[$j] == $treeid2[$i]){
							$jid = $treeid2[$j];
							$jpid = $treepid2[$j];
							$jname = $treename2[$j];
							$jurl = $treeurl2[$j];
							$jlevel = $treelevel2[$i]+1;
							$k=$j;
							while ($k>$g+1){
								$treeid2[$k] = $treeid2[$k-1];
								$treepid2[$k] = $treepid2[$k-1];
								$treename2[$k] = $treename2[$k-1];
								$treeurl2[$k] = $treeurl2[$k-1];
								$treelevel2[$k] = $treelevel2[$k-1];
								$k=$k-1;
							}
							$treeid2[$g+1] = $jid;
							$treepid2[$g+1] = $jpid;
							$treename2[$g+1] = $jname;
							$treeurl2[$g+1] = $jurl;
							$treelevel2[$g+1] = $jlevel;
							$g++;
						}
				}
				for($i=0;$i<$counttree2;$i++){
					$tre[$treelevel2[$i]] = $treeurl2[$i];
					$treline = '';
					for($t = 0; $t < $treelevel2[$i]; $t++)
						$treline .= '/'.$tre[$t];
					echo '<li><a href="'.(substr($treeurl2[$i],0,4)=='http'?$treeurl2[$i].'" target="_blank':$cur_city[0].$treline.'/'.$treeurl2[$i].'/').'"'.($treeid2[$i]==$seo['id']?' class="opnd"':'').'>'.$treename2[$i].'</a>';
					if($treelevel2[$i+1] > $treelevel2[$i])
						echo '<ul class="level'.($treelevel2[$i]+2).'">';
					if($treelevel2[$i+1] == $treelevel2[$i])
						echo '</li>';
					if($treelevel2[$i+1] < $treelevel2[$i]){
						echo '</li>';
						for($m=1;$m<=$treelevel2[$i]-$treelevel2[$i+1];$m++)
							echo '</ul></li>';
					}
				}
				?>
			</ul>
		</div>
			<?php
		}
		?>
		<?php if(strlen($additional[56])>0 && $additional[67]==1){ ?>
		<script type="text/javascript" src="vk.com/js/api/openapi.js?121"></script>
		<div id="vk_groups" style="margin-top:20px;border:1px solid #c4c3c3;border-radius:5px"></div>
		<script type="text/javascript">
			
			$(window).load(function(){VK.Widgets.Group("vk_groups", {mode: 0, width: ($('.l-250').width()-2), height: "400", color1: '<?=$additional[44]?>', color2: '<?=$additional[43]?>', color3: '<?=$additional[20]?>', color4: '<?=$additional[20]?>'}, <?=$additional[56]?>);});
			
		</script>
		<?php } ?>
		<?php if($additional[58]==0){ ?>
		<div class="news-left">
			<div class="akcii-h2">Новости</div>
			<?php
			$anons = mysql_query("SELECT ".MySQLprefix."_news.pic, ".MySQLprefix."_news.h1, ".MySQLprefix."_news.date_create, ".MySQLprefix."_news.comment, ".MySQLprefix."_urls.url FROM ".MySQLprefix."_news, ".MySQLprefix."_urls WHERE ".MySQLprefix."_news.shows=1 AND ".MySQLprefix."_news.id=".MySQLprefix."_urls.target_id AND ".MySQLprefix."_urls.target_type='news' AND ".MySQLprefix."_news.date_create<='".date('Y-m-d')." 12:00:00' ORDER BY ".MySQLprefix."_news.date_create DESC LIMIT 0, 3");
			if($anons && mysql_num_rows($anons)>0)
				while($anon = mysql_fetch_assoc($anons)){
					?>
			<div class="new-one">
				<a href="/<?=$anon['url']?>/"><?=$anon['h1']?></a>
				<b><?=date('d.m.Y',strtotime($anon['date_create']))?></b>
				<?php
				$pic = '';
				$pics = explode('|', $anon['pic']);
				if(is_array($pics) && count($pics)>0)
					foreach($pics AS $picc)
						if(strlen($picc)>0 && $pic == '')
							$pic = $picc;
				if($pic != ''){
					?>
				<img src="/<?=$pic?>" />
					<?php
				}
				?>
				<p><?=textTrimm($anon['comment'],500)?></p>
			</div>
					<?php
				}
			?>
			<a class="all-news" href="/news/">Смотреть все новости</a>
		</div>
		<?php } ?>
		<?php if($additional[34]==0){ ?>
		<div class="soc-all">
			<div class="akcii-h2">Мы в соцсетях</div>
			<ul class="soc">
				<?php
				$result = mysql_query("SELECT * FROM ".MySQLprefix."_soc ORDER BY sort_id DESC");
				if($result)
					if(mysql_num_rows($result)>0)
						while($art = mysql_fetch_assoc($result)){
							?>
				<li><a href="<?=$art['link']?>" target="_blank"><img src="/<?=$art['pic']?>" /></a></li>
							<?php
						}
				?>
			</ul>
		</div>
		<?php } ?>
		<?php if(strlen($additional[56])>0 && $additional[67]==0){ ?>
		<script type="text/javascript" src="vk.com/js/api/openapi.js?121"></script>
		<div id="vk_groups" style="margin-top:20px;border:1px solid #c4c3c3;border-radius:5px"></div>
		<script type="text/javascript">
			
			$(window).load(function(){VK.Widgets.Group("vk_groups", {mode: 0, width: ($('.l-250').width()-2), height: "400", color1: '<?=$additional[44]?>', color2: '<?=$additional[43]?>', color3: '<?=$additional[20]?>', color4: '<?=$additional[20]?>'}, <?=$additional[56]?>);});
			
		</script>
		<?php } ?>
		<?php if(strlen($additional[57])>0){ ?>
		<div style="margin-top:20px;width:auto;overflow:hidden"><?=$additional[57]?></div>
		<?php } ?>
		<?php } ?>
	</div>