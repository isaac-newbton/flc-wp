            </main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-content-container">
			<div class="footer-row">
				<?php if($footerLogoUrl = get_option('aca_footer_logo')): ?>
					<div class="footer-logo-container">
						<a href="<?php bloginfo('url'); ?>">
							<img src="<?=esc_attr($footerLogoUrl)?>" alt="<?php bloginfo('name'); ?>">
						</a>
					</div>
				<?php endif; ?>
				<?php get_template_part('template-parts/social/social-icons'); ?>
			</div>
			<?php get_sidebar('footer'); ?>
		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>