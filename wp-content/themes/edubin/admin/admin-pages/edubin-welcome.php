<?php
function edubin_let_to_num( $size ) {
	$l   = substr( $size, -1 );
	$ret = substr( $size, 0, -1 );
	switch ( strtoupper( $l ) ) {
		case 'P':
		$ret *= 1024;
		case 'T':
		$ret *= 1024;
		case 'G':
		$ret *= 1024;
		case 'M':
		$ret *= 1024;
		case 'K':
		$ret *= 1024;
	}
	return $ret;
}
$ssl_check = 'https' === substr( get_home_url('/'), 0, 5 );
$green_mark = '<mark class="green"><span class="dashicons dashicons-yes"></span></mark>';

$edubintheme = wp_get_theme();

$plugins_counts = (array) get_option( 'active_plugins', array() );

if ( is_multisite() ) {
	$network_activated_plugins = array_keys( get_site_option( 'active_sitewide_plugins', array() ) );
	$plugins_counts            = array_merge( $plugins_counts, $network_activated_plugins );
}
?>

<div class="wrap about-wrap edubin-wrap">
	<h1><?php esc_html_e( 'Welcome to Edubin', 'edubin' ); ?></h1>

	<div class="about-text"><?php echo esc_html__( 'Edubin theme is now installed and ready to use!', 'edubin' ); ?></div>
	<div class="edubin-badge">
		<img src="data:img/png;base64,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" alt="edubin admin logo">
		
		<p><?php echo esc_html($edubintheme->get( 'Version' )); ?></p>
	</div>
	<h2 class="nav-tab-wrapper edubin-system-stats">
		<?php
		printf( '<a href="#" class="nav-tab nav-tab-active">%s</a>', esc_html__( 'Welcome', 'edubin' ) );
		printf( '<a href="%s" class="nav-tab">%s</a>', admin_url( 'customize.php' ), esc_html__( 'Theme Options', 'edubin' ) );
		if (class_exists('OCDI_Plugin')):
			printf( '<a href="%s" class="nav-tab">%s</a>', admin_url( 'themes.php?page=pt-one-click-demo-import' ), esc_html__( 'Demo Import', 'edubin' ) );
		endif;
		?>
	</h2>
	
	
	<div class="edubin-section nav-tab-active" id="welcome">

		<p class="about-description edubin-system-stats">
			<?php printf( esc_html__( 'Before you get started, please be sure to always check out documentation Which Included In the theme folder or from %s We outline all kinds of good information and provide you with all the details you need to use edubin.', 'edubin' ), '<a target="_blank" href="' . esc_url( 'https://thepixelcurve.com/support/docs/edubin/' ) . '">Website</a>' ); ?>
			<br>
			<br>
			<?php printf( esc_html__( 'If you are unable to find your answer in our documentation, please contact us via %s with your purchase code & admin login info.', 'edubin' ), '<a target="_blank" href="' . esc_url( 'https://thepixelcurve.com/support/' ) . '">submit a ticket</a>' ); ?>
		</p>
	</div>
	<div class="install-video edubin-system-stats">
		<div class="edubin-setup-video-clm">
				<h3>
					<?php printf( esc_html__( 'Quick install & demo importing video guide.', 'edubin') ); ?>
				</h3>
				<iframe style="border-radius: 3px;margin-top: 5px;box-shadow: 0 5px 40px 0 rgba(10, 10, 25, .1);" width="390" height="250" src="https://www.youtube.com/embed/FoXWLqJPZz0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div class="edubin-setup-video-clm">	
			<h3>
				<?php printf( esc_html__( 'LearnDash LMS step by step setup video guide.', 'edubin') ); ?>
			</h3>
			<iframe style="border-radius: 3px;margin-top: 5px;box-shadow: 0 5px 40px 0 rgba(10, 10, 25, .1);" width="390" height="250" src="https://www.youtube.com/embed/_qg0igPtPF8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</div>

	<div class="edubin-system-stats">
		<h3><?php esc_html_e( 'System Status', 'edubin' ); ?></h3>

		<table class="system-status-table">
			<tbody>
				<tr>
					<td><?php esc_html_e( 'WP Version', 'edubin' ); ?></td>
					<td><?php bloginfo('version'); ?></td>
				</tr>
				
				<tr>
					<td><?php esc_html_e( 'Language', 'edubin' ); ?></td>
					<td><?php echo get_locale() ?></td>
				</tr>
				
				<tr>
					<td><?php esc_html_e( 'WP Memory Limit', 'edubin' ); ?></td>
					<td><?php
					$memory = edubin_let_to_num( WP_MEMORY_LIMIT );

					if ( $memory < 100663296 ) {
						echo '<mark class="error">' . sprintf(__('%s - We recommend setting memory to at least 96MB. %s.','edubin'), size_format( $memory ), '<a href="' . esc_url('https://thepixelcurve.com/support/increase-wordpress-memory-limit/') . '" target="_blank">'.esc_html__('More info','edubin').'</a>') . '</mark>';
					} else {
						echo '<mark class="green">' . size_format( $memory ) . '</mark>';
					}
					?></td>
				</tr>
			
				<tr>
					<td><?php esc_html_e( 'PHP Max Input Vars', 'edubin' ); ?></td>
					<td><?php
					$max_input = ini_get('max_input_vars');
					if ( $max_input < 3000 ) {
						echo '<mark class="error">' . sprintf( wp_kses(__( '%s - We recommend setting PHP max_input_vars to at least 3000. See: <a href="%s" target="_blank">Increasing the PHP max vars limit</a>', 'edubin' ), array( 'a' => array( 'href' => array(),'target' => array() ) ) ), $max_input, 'https://thepixelcurve.com/support/increasing-max-input-vars/' ) . '</mark>';
					} else {
						echo '<mark class="green">' . $max_input . '</mark>';
					}
					?></td>
				</tr>
				<tr>
					<td>
						<?php esc_html_e( 'PHP Version', 'edubin' ); ?> 
					</td>
					
					<td>
						<?php
						
						$mayo_php = phpversion();

						if ( version_compare( $mayo_php, '7.2', '<' ) ) {
							echo sprintf( '<mark class="error"> %s </mark> - We recommend using PHP version 7.2 or above for greater performance and security.', esc_html( $mayo_php ), '' );
						} else {
							echo '<mark class="green">' . esc_html( $mayo_php ) . '</mark>';
						}
						
						?>
					</td>
				</tr>
				
				<tr>
					<td>
						<?php esc_html_e( 'Secure Connection(HTTPS)', 'edubin' ); ?> 
					</td>
					<td>
						<?php 
						echo esc_attr($ssl_check) ? $green_mark : '<mark class="error">Your site is not using secure connection (HTTPS).</mark>'; ?>
					</td>
				</tr>
				
			</tbody>		
		</table>
	</div>
	
	<div class="edubin-system-stats">
		<h3><?php esc_html_e( 'Theme Information', 'edubin' ); ?></h3>

		<table class="system-status-table">
			<tbody>
				<tr>
					<td><?php esc_html_e( 'Theme Name', 'edubin' ); ?></td>
					<td><?php echo wp_get_theme(); ?></td>
				</tr>
				
				<tr>
					<td><?php esc_html_e( 'Author Name', 'edubin' ); ?></td>
					<td><?php echo esc_html($edubintheme->get( 'Author' )); ?></td>
				</tr>
				
				<tr>
					<td><?php esc_html_e( 'Current Version', 'edubin' ); ?></td>
					<td><?php echo esc_html($edubintheme->get( 'Version' )); ?></td>
				</tr>
				
				<tr>
					<td><?php esc_html_e( 'Text Domain', 'edubin' ); ?></td>
					<td><?php echo esc_html($edubintheme->get( 'TextDomain' )); ?></td>
				</tr>
				
				<tr>
					<td><?php esc_html_e( 'Child Theme', 'edubin' ); ?></td>
					<td><?php echo is_child_theme() ? $green_mark : 'No'; ?></td>
				</tr>
			</tbody>
		</table>
	</div>
	
	<div class="edubin-system-stats">
		
		<h3><?php esc_html_e( 'Active Plugins (', 'edubin' ); ?><?php echo esc_attr(count( $plugins_counts )) . ')' ?></h3>
		<table class="system-status-table">
			<tbody>
				<?php
				foreach ( $plugins_counts as $plugin ) {
					
					$plugin_info    = @get_plugin_data( WP_PLUGIN_DIR . '/' . $plugin );
					$dirname        = dirname( $plugin );
					$version_string = '';
					$network_string = '';
					
					if ( ! empty( $plugin_info['Name'] ) ) {
						
						// Link the plugin name to the plugin url if available.
						$plugin_name = esc_html( $plugin_info['Name'] );
						
						if ( ! empty( $plugin_info['PluginURI'] ) ) {
							$plugin_name = '<a href="' . esc_url( $plugin_info['PluginURI'] ) . '" target="_blank">' . $plugin_name . '</a>';
						}
						
						?>
						<tr>
							<?php
							$allowed_html = [
								'a'      => [
									'href'  => [],
									'title' => [],
								],
								'br'     => [],
								'em'     => [],
								'strong' => [],
							];
							?>
							<td><?php echo wp_kses($plugin_name,$allowed_html); ?></td>
							<td><?php echo sprintf( 'by %s', $plugin_info['Author'] ) . ' &ndash; ' . esc_html( $plugin_info['Version'] ) . $version_string . $network_string; ?></td>
						</tr>
						<?php
					}
				}
				?>
			</tbody>
		</table>
	</div>
</div>
