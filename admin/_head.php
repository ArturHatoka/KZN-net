	<title><?php echo $seo['title']; if(isset($_GET['p']) && is_numeric($_GET['p']) && $_GET['p']>1){ echo ' (Страница '.$_GET['p'].')'; } ?></title>
	<meta name="description" content="<?php echo $seo['description']; ?>" />
	<meta name="keywords" content="<?php echo $seo['keywords']; ?>" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="Content-Language" content="ru" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta itemprop="image" content="/<?=$additional[100]?>" />
	<meta property="og:image" content="/<?=$additional[100]?>" />
	<meta name="twitter:image" content="/<?=$additional[100]?>" />
	<meta name="vk:image" content="/<?=$additional[100]?>" />
    <link rel='stylesheet' href='../assets/app/css/boot.css' type='text/css'>
    <link rel='stylesheet' href='../assets/app/css/sup.css' type='text/css'>
    <link rel='stylesheet' href='../assets/app/css/main.css' type='text/css'>
	<script type="text/javascript" src="/admin/js/jquery-1.4.4.min.js"></script>
	<script type="text/javascript" src="/admin/js/ddsmoothmenu.js"></script>
	<script type="text/javascript" src="/admin/js/jquery.fancybox-1.3.4.pack.js"></script>

	<?=$additional[6]?>

	<?=$additional[7]?>
