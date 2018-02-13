<footer class="footer content-info">
			<div class="container">
			   <div class="columns">
					<div class="column media">
					<a class="logo" href="index.php">
					<img src="@asset('images/logo.png')"></a>
		            <div>&nbsp;</div>
		            <div class="img">
		             @php(dynamic_sidebar('image-sidebar-footer'))
		            </div>
					</div>
				     <div class="column is-offset-1 links">
						 @php(dynamic_sidebar('first-footer-widget-area'))
					</div>
					<div class="column links">
						 @php(dynamic_sidebar('second-footer-widget-area'))
					</div>
					<div class="column links">
						 @php(dynamic_sidebar('third-footer-widget-area'))
					</div>
					<div class="column links">
						 @php(dynamic_sidebar('fourth-footer-widget-area'))
					</div>
				</div>
			</div>
			<div class="container is-fluid">
             <hr class="divider">
			</div>
			<div class="container">
				<div class="columns bottom">
					<div class="column copyright has-text-light is-pulled-left">
		            <p><?php printf( __( 'Built by %1$s', 'theme_name' ), '<a href="'. esc_url( 'https:webmobapps.com' ) .'">Webmobapps</a> © 2018 All Rights Reserved' ); ?></p>
					</div>
					<div class="column is-pulled-right">
				    @php(dynamic_sidebar('social-footer-widget-area'))
				   <div class="clear"></div>
               	  </div>
        </div>
		</div>
		</footer>

