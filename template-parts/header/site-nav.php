<?php if (has_nav_menu('primary')): ?>
	<nav id="site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e('Primary menu'); ?>">
		<div class="menu-button-container">
			<button id="primary-mobile-menu" class="button" aria-controls="site-navigation-menus" aria-expanded="false">
				<div></div>
				<div></div>
				<div></div>
			</button><!-- #primary-mobile-menu -->
		</div><!-- .menu-button-container -->
		<div id="site-navigation-menus" aria-expanded="false">
			<div class="primary-menu-wrapper">
				<?php
					wp_nav_menu(
						[
							'theme_location' => 'primary',
							'menu_class' => 'menu-wrapper',
							'container_class' => 'primary-menu-container',
							'items_wrap' => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
							'fallback_cb' => false,
						]
					);
					get_template_part('template-parts/social/social-icons');
				?>
			</div>
			<?php if(has_nav_menu('secondary')): ?>
				<div class="secondary-menu-wrapper">
					<?php 
						wp_nav_menu(
							[
								'theme_location' => 'secondary',
								'menu_class' => 'menu-wrapper',
								'container_class' => 'secondary-menu-container',
								'items_wrap' => '<ul id="secondary-menu-list" class="%2$s">%3$s</ul>',
								'fallback_cb' => false,
							]
						);
						get_template_part('template-parts/header/site-nav-search');
					?>
				</div>
			<?php endif; ?>
		</div>
	</nav><!-- #site-navigation -->
<?php endif; ?>