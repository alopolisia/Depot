<?php do_action('depot_mikado_before_page_header'); ?>

<header class="mkd-page-header">
	<div class="mkd-menu-area">
		<?php if($menu_area_in_grid) : ?>
		<div class="mkd-grid">
			<?php endif; ?>
			<div class="mkd-vertical-align-containers">
				<div class="mkd-position-left">
					<div class="mkd-position-left-inner">
						<?php depot_mikado_get_main_menu(); ?>
					</div>
				</div>
				<div class="mkd-position-right">
					<div class="mkd-position-right-inner">
						<?php depot_mikado_get_header_widget_menu_area(); ?>
					</div>
				</div>
			</div>
			<?php if($menu_area_in_grid) : ?>
		</div>
	<?php endif; ?>
        <?php do_action('depot_mikado_end_of_page_header_html'); ?>
	</div>
	<div class="mkd-logo-area">
        <?php if($logo_area_in_grid) : ?>
        <div class="mkd-grid">
        <?php endif; ?>
            <div class="mkd-vertical-align-containers">
                <div class="mkd-position-center">
                    <div class="mkd-position-center-inner">
                        <?php if(!$hide_logo) {
                            depot_mikado_get_logo();
                        } ?>
                    </div>
                </div>
            </div>
        <?php if($logo_area_in_grid) : ?>
        </div>
        <?php endif; ?>
    </div>
</header>

<?php do_action('depot_mikado_after_page_header'); ?>

