<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php bloginfo('name'); wp_title(); ?></title>
	<?php wp_head(); ?>
</head>

<body>
	<div class="main">
		<div class="head">
			<a href="<?php echo home_url(); ?>"><h1>My Library</h1></a>
		</div>

		<div class="content-main">
			<?php wp_nav_menu(array('theme_location' => 'menu', 'container' => false)); ?>
			<form class="search-main" action="<?php echo home_url('/'); ?>" method="">
				<input class="serch-txt" type="text" name="s" />
				<input class="serch-btn" type="image" src="<?php bloginfo('template_url') ?>/images/serach-btn.jpg" />
			</form>

