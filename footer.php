<div class="footer">
	<div class="cpy">
		<a href="/"><span>M</span>y <span>L</span>ibrary</a>
	</div>

	<?php if(!dynamic_sidebar('footer')): ?>
		<div class="menu-foot">
			<h2>Категории</h2>
			<ul>
				<?php wp_list_categories(array('title_li' => '')); ?>
			</ul>
		</div>
	<?php endif; ?>

	<div class="menu-foot">
		<h2>Страницы</h2>
		<?php wp_nav_menu(array(
			'theme_location' => 'menu',
			'container' => false,
			'menu_class' => '',
			)); ?>
		</div>

	</div>
</div>
<?php wp_footer(); ?>
</body>
</html>