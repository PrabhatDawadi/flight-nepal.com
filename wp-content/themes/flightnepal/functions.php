<?php 

	// ================== Table of Content =====================
	//
	// 		1. Enqueue Scripts
	//		2. Theme Setup
	// 		3. Custom Title Addition
	// 		4. Allow SVG Upload
	//		5. Get All Tours
	//		6. Get All Hotels
	//		7. Get All Activities
	//		8. Get All Blogs
	//
	// ============================================================

	// =======================================
	//			0. Add SVG capabilities
	// =======================================

		function wpcontent_svg_mime_type($mimes=array())
		{
			$mimes['svg']  = 'image/svg+xml';
			$mimes['svgz'] = 'image/svg+xml';
			return $mimes;
		}
		add_filter( 'upload_mimes', 'wpcontent_svg_mime_type' );

	// =======================================
	//			1. Enqueue Scripts
	// =======================================

		function flight_nepal_script_enqueue()
		{
			$settings = parse_ini_file("settings.ini", TRUE);
			wp_enqueue_script('jquery-ui-datepicker');
    		wp_register_style('jquery-ui', 'https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css' );
    		wp_enqueue_style('jquery-ui');
			wp_enqueue_script('customjs', get_template_directory_uri().'/js/custom.js', array(), $settings['design']['JS_VERSION'], 'all');
			wp_enqueue_script('airportsjs', get_template_directory_uri().'/js/airports.min.js', array(), $settings['design']['JS_VERSION'], 'all');
			wp_enqueue_script('countriesjs', get_template_directory_uri().'/js/countries.js', array(), $settings['design']['JS_VERSION'], 'all');
			wp_localize_script('customjs', 'HPAjax', array(
				'ajaxurl' => admin_url('admin-ajax.php'),
				'check_nonce' => wp_create_nonce('hp-special-string')
			));
			wp_enqueue_style('basestyles', get_template_directory_uri().'/css/style.css', array(), $settings['design']['CSS_VERSION'], 'all');
			wp_enqueue_style('media-queries', get_template_directory_uri().'/css/responsive.css', array(), $settings['design']['CSS_VERSION'], 'all');
		}
		add_action('wp_enqueue_scripts','flight_nepal_script_enqueue');

	// =======================================
	//			2. Theme Setup
	// =======================================	

		function flight_nepal_theme_setup()
		{
			add_theme_support('menus');
			add_theme_support('post-thumbnails');
			register_nav_menu('primary','Header Navigations');
		}
		add_action('init', 'flight_nepal_theme_setup');

	// =======================================
	//			3. Custom Title Addition
	// =======================================

		function add_page_title($title)
		{
		    if (!is_single())
		        return $title;
		    global $wp_query;
		    if (isset($wp_query->post->post_title)){
		        return $wp_query->post->post_title;
		    }
		    return $title;
		}
		add_filter('wp_title', 'add_page_title');

	// =======================================
	//			4. Allow SVG Upload
	// =======================================

		function cc_mime_types($mimes)
		{
			$mimes['svg'] = 'image/svg+xml';
			$mimes['svgz'] = 'image/svg+xml';
			return $mimes;
		}
		add_filter('upload_mimes', 'cc_mime_types');

	// =======================================
	//			5. Get All Tours
	// =======================================

		function get_all_tours($limit='-1')
		{
			if (is_plugin_active('tour-destination/index.php')) {
				$allPosts = new WP_Query(
					array(
						'post_type'			=> 'tour-destination', 
						'post_status'		=> 'publish', 
						'posts_per_page'	=> $limit,
						'order_by'			=> 'menu_order', 
						'order'				=> 'asc'
					)
				);
				if ($allPosts->have_posts()):
					while($allPosts->have_posts()):$allPosts->the_post();
						echo '<div class="f-left one">';
							echo '<a href="'; echo get_site_url(); echo '/tour-destination/'; echo str_replace(' ', '-', strtolower(get_the_title())); echo '/">';
								echo '<div class="img" style="background-image: url('; the_post_thumbnail_url(); echo '"></div>';
								echo '<div class="ol transition"></div>';
								echo '<div class="inner">';
									echo '<h5>'; the_title(); echo '</h5>';
									echo '<p><img src="'; bloginfo('template_directory'); echo'/images/pages/home/top-destinations/tour.svg" alt="">&nbsp; '; echo count_tours_by_country(get_the_title()); echo ' Tours</p>';
								echo '</div>';
							echo '</a>';
						echo '</div>';
					endwhile;
					wp_reset_postdata();
				else :
				endif;
			}
		}

		function count_tours_by_country($country)
		{
			if (is_plugin_active('tours/index.php')) {
				$allPosts = new WP_Query(
					array(
						'post_type'			=> 'tours', 
						'post_status'		=> 'publish', 
						'posts_per_page'	=> -1,
						'meta_query' 		=> array(
					        array(
					            'key' => 'country',
					            'value' => $country,
					            'compare' => '='
					        )
						)
					)
				);
				return $allPosts->post_count;
			}
		}

	// =======================================
	//			6. Get All Hotels
	// =======================================

		function get_all_hotels($limit='-1')
		{
			if (is_plugin_active('hotel-destination/index.php')) {
				$allPosts = new WP_Query(
					array(
						'post_type'			=> 'hotel-destination', 
						'post_status'		=> 'publish', 
						'posts_per_page'	=> $limit,
						'order_by'			=> 'menu_order', 
						'order'				=> 'asc'
					)
				);
				if ($allPosts->have_posts()):
					while($allPosts->have_posts()):$allPosts->the_post();
						echo '<div class="f-left one">';
							echo '<a href="'; echo get_site_url(); echo '/hotel-destination/'; echo str_replace(' ', '-', strtolower(get_the_title())); echo '/">';
								echo '<div class="img" style="background-image: url('; the_post_thumbnail_url(); echo '"></div>';
								echo '<div class="ol transition"></div>';
								echo '<div class="inner">';
									echo '<h5>'; the_title(); echo '</h5>';
									echo '<p><img src="'; bloginfo('template_directory'); echo'/images/pages/home/top-destinations/hotel.svg" alt="">&nbsp;'; echo count_hotels_by_country(get_the_title()); echo ' Hotels</p>';
								echo '</div>';
							echo '</a>';
						echo '</div>';
					endwhile;
					wp_reset_postdata();
				else :
				endif;
			}
		}

		function count_hotels_by_country($country)
		{
			if (is_plugin_active('hotels/index.php')) {
				$allPosts = new WP_Query(
					array(
						'post_type'			=> 'hotels', 
						'post_status'		=> 'publish', 
						'posts_per_page'	=> -1,
						'order_by'			=> 'menu_order', 
						'order'				=> 'asc',
						'meta_query' 		=> array(
					        array(
					            'key' => 'country',
					            'value' => $country,
					            'compare' => '='
					        )
						)
					)
				);
				return $allPosts->post_count;
			}
		}

	// =======================================
	//			7. Get All Activities
	// =======================================

		function get_all_activities($limit='-1')
		{
			if (is_plugin_active('activity-destination/index.php')) {
				$allPosts = new WP_Query(
					array(
						'post_type'			=> 'activity-destination', 
						'post_status'		=> 'publish', 
						'posts_per_page'	=> $limit,
						'order_by'			=> 'menu_order', 
						'order'				=> 'asc'
					)
				);
				if ($allPosts->have_posts()):
					while($allPosts->have_posts()):$allPosts->the_post();
						echo '<div class="f-left one">';
							echo '<a href="'; echo get_site_url(); echo '/activity-destination/'; echo str_replace(' ', '-', strtolower(get_the_title())); echo '/">';
								echo '<div class="img" style="background-image: url('; the_post_thumbnail_url(); echo '"></div>';
								echo '<div class="ol transition"></div>';
								echo '<div class="inner">';
									echo '<h5>'; the_title(); echo '</h5>';
									echo '<p><img src="'; bloginfo('template_directory'); echo'/images/pages/home/top-destinations/activity.svg" alt="">&nbsp;'; echo count_activities_by_country(get_the_title()); echo ' Activities</p>';
								echo '</div>';
							echo '</a>';
						echo '</div>';
					endwhile;
					wp_reset_postdata();
				else :
				endif;
			}
		}

		function count_activities_by_country($country)
		{
			if (is_plugin_active('fn-activities/index.php')) {
				$allPosts = new WP_Query(
					array(
						'post_type'			=> 'activities', 
						'post_status'		=> 'publish', 
						'posts_per_page'	=> -1,
						'order_by'			=> 'menu_order', 
						'order'				=> 'asc',
						'meta_query' 		=> array(
					        array(
					            'key' => 'country',
					            'value' => $country,
					            'compare' => '='
					        )
						)
					)
				);
				return $allPosts->post_count;
			}
		}

	// =======================================
	//			8. Get All Blogs
	// =======================================

		function get_all_blogs($limit='-1')
		{
			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			$allPosts = new WP_Query(
				array(
					'post_type'			=> 'post', 
					'post_status'		=> 'publish', 
					'posts_per_page'	=> 6,
					'paged'				=> $paged,
					'order'				=> 'desc'
				)
			);
			if ($allPosts->have_posts()):
				echo '<div class="all of-hid">';
				while($allPosts->have_posts()):$allPosts->the_post();
					echo '<div class="f-left one">';
						echo '<a href="'; the_permalink(); echo '">';
							echo '<div class="img">';
								echo '<img src="'; the_post_thumbnail_url(); echo '" alt=""/>';
							echo '</div>';
							echo '<div class="desc transition">';
								echo '<h5>'; the_title(); echo '</h5>';
								echo '<p class="transition read-more">Read more</p>';
							echo '</div>';
						echo '</a>';
					echo '</div>';
				endwhile;
				echo '</div>';
				echo '<div class="pagination">';
					$big = 999999999;
					echo paginate_links( array(
						'base' => str_replace($big, '%#%', get_pagenum_link($big)),
						'format' => '?paged=%#%',
						'current' => max(1, get_query_var('paged')),
						'total' => $allPosts->max_num_pages,
						'prev_text' => '&laquo;',
						'next_text' => '&raquo;'
					));
				echo '</div>';
				wp_reset_postdata();
			else :
			endif;
		}

		function get_latest_blogs($limit='-1')
		{
			$allPosts = new WP_Query(
				array(
					'post_type'			=> 'post', 
					'post_status'		=> 'publish', 
					'posts_per_page'	=> $limit,
					'order'				=> 'desc'
				)
			);
			if ($allPosts->have_posts()):
				while($allPosts->have_posts()):$allPosts->the_post();
					echo '<div class="f-left one">';
						echo '<a href="'; the_permalink(); echo '">';
							echo '<div class="img">';
								echo '<img src="'; the_post_thumbnail_url(); echo '" alt=""/>';
							echo '</div>';
							echo '<div class="desc transition">';
								echo '<h5>'; the_title(); echo '</h5>';
								echo '<p class="transition read-more">Read more</p>';
							echo '</div>';
						echo '</a>';
					echo '</div>';
				endwhile;
				wp_reset_postdata();
			else :
			endif;			
		}


		function get_travel_tips($limit='-1')
		{
			$allPosts = new WP_Query(
				array(
					'post_type'			=> 'post', 
					'post_status'		=> 'publish', 
					'posts_per_page'	=> $limit,
					'order_by'			=> 'menu_order', 
					'order'				=> 'asc'
				)
			);
			if ($allPosts->have_posts()):
				while($allPosts->have_posts()):$allPosts->the_post();
					echo '<div class="one">';
						echo '<a href="'; the_permalink(); echo '">';
							echo '<div class="img">';
									echo '<img src="'; the_post_thumbnail_url(); echo '" alt=""/>';
							echo '</div>';
							echo '<div class="desc transition">';
								echo '<h6>'; the_title(); echo '</h6>';
								echo '<p class="transition read-more">Read more</p>';
							echo '</div>';
						echo '</a>';
					echo '</div>';
				endwhile;
				wp_reset_postdata();
			else :
			endif;			
		}

		function get_other_blogs($title, $limit='-1')
		{
			$allPosts = new WP_Query(
				array(
					'post_type'			=> 'post', 
					'post_status'		=> 'publish', 
					'posts_per_page'	=> $limit,
					'orderby' 			=> 'rand',
					'order'				=> 'asc'
				)
			);
			if ($allPosts->have_posts()):
				while($allPosts->have_posts()):$allPosts->the_post();
					if(get_the_title() != $title) {
						echo '<div class="one">';
							echo '<a href="'; the_permalink(); echo '">';
								echo '<div class="img">';
									echo '<img src="'; the_post_thumbnail_url(); echo '" alt=""/>';
								echo '</div>';
								echo '<div class="desc transition">';
									echo '<h6>'; the_title(); echo '</h6>';
									echo '<p class="transition read-more">Read more</p>';
								echo '</div>';
							echo '</a>';
						echo '</div>';
					}
				endwhile;
				wp_reset_postdata();
			else :
			endif;			
		}

	// =======================================
	//			9. Get Tours By Country
	// =======================================

		function get_tours_by_country($country, $limit='-1')
		{
			if (is_plugin_active('tours/index.php')) {
				$allPosts = new WP_Query(
					array(
						'post_type'			=> 'tours', 
						'post_status'		=> 'publish', 
						'posts_per_page'	=> $limit,
						'order_by'			=> 'menu_order', 
						'order'				=> 'asc',
						'meta_query' 		=> array(
					        array(
					            'key' => 'country',
					            'value' => $country,
					            'compare' => '='
					        )
						)
					)
				);
				if ($allPosts->have_posts()):
					while($allPosts->have_posts()):$allPosts->the_post();
						echo '<div class="of-hid f-left one">';
							echo '<a href="'; the_permalink(); echo '">';
								echo '<div class="img" style="background-image: url('; the_post_thumbnail_url(); echo '"></div>';
								echo '<div class="desc transition">';
									echo '<table>';
										echo '<tr><td colspan="2"><h5 class="transition">'; the_title(); echo '</h5></td></tr>';
										echo '<tr><td><h6>Duration :</h6></td><td><p>'; echo get_post_meta( get_the_ID(), 'duration', true ); echo ' Days</p></td></tr>';
										echo '<tr><td><h6>Starts :</h6></td><td><h4>'; echo get_post_meta( get_the_ID(), 'price', true ); echo'</h4><p>per person</p></p></td></tr>';
									echo '</table>';
								echo '</div>';
							echo '</a>';
						echo '</div>';									
					endwhile;
					wp_reset_postdata();
				else :
				endif;
			}
		}

		function get_other_tours($country)
		{
			if (is_plugin_active('tour-destination/index.php')) {
				$allPosts = new WP_Query(
					array(
						'post_type'			=> 'tour-destination', 
						'post_status'		=> 'publish', 
						'posts_per_page'	=> -1,
						'order_by'			=> 'menu_order', 
						'order'				=> 'asc'
					)
				);
				if ($allPosts->have_posts()):
					while($allPosts->have_posts()):$allPosts->the_post();
						if(get_the_title() != $country) 
						{
							echo '<a href="'; echo get_site_url(); echo '/tour-destination/'; echo str_replace(' ', '-', strtolower(get_the_title())); echo '/">';
									echo '<h6>'; the_title(); echo '</h6>';
							echo '</a>';
						}
					endwhile;
					wp_reset_postdata();
				else :
				endif;
			}
		}

	// =======================================
	//			10. Get Hotels By Country
	// =======================================

		function get_hotels_by_country($country, $limit='-1')
		{
			if (is_plugin_active('hotels/index.php')) {
				$allPosts = new WP_Query(
					array(
						'post_type'			=> 'hotels', 
						'post_status'		=> 'publish', 
						'posts_per_page'	=> $limit,
						'order_by'			=> 'menu_order', 
						'order'				=> 'asc',
						'meta_query' 		=> array(
					        array(
					            'key' => 'country',
					            'value' => $country,
					            'compare' => '='
					        )
						)
					)
				);
				if ($allPosts->have_posts()):
					while($allPosts->have_posts()):$allPosts->the_post();
						echo '<div class="of-hid f-left one">';
							echo '<a href="'; the_permalink(); echo '">';
								echo '<div class="img" style="background-image: url('; the_post_thumbnail_url(); echo '"></div>';
								echo '<div class="desc transition">';
									echo '<table>';
										echo '<tr><td colspan="2"><h5 class="transition">'; the_title(); echo '</h5></td></tr>';
										echo '<tr><td><h6>Starts :</h6></td><td><h4>'; echo get_post_meta( get_the_ID(), 'price', true ); echo'</h4><p>per person</p></p></td></tr>';
									echo '</table>';
								echo '</div>';
							echo '</a>';
						echo '</div>';									
					endwhile;
					wp_reset_postdata();
				else :
				endif;
			}
		}

		function get_other_hotels($country)
		{
			if (is_plugin_active('hotel-destination/index.php')) {
				$allPosts = new WP_Query(
					array(
						'post_type'			=> 'hotel-destination', 
						'post_status'		=> 'publish', 
						'posts_per_page'	=> -1,
						'order_by'			=> 'menu_order', 
						'order'				=> 'asc'
					)
				);
				if ($allPosts->have_posts()):
					while($allPosts->have_posts()):$allPosts->the_post();
						if(get_the_title() != $country) 
						{
							echo '<a href="'; echo get_site_url(); echo '/hotel-destination/'; echo str_replace(' ', '-', strtolower(get_the_title())); echo '/">';
									echo '<h6>'; the_title(); echo '</h6>';
							echo '</a>';
						}
					endwhile;
					wp_reset_postdata();
				else :
				endif;
			}
		}

	// =======================================
	//			11. Get Activities By Country
	// =======================================

		function get_activities_by_country($country, $limit='-1')
		{
			if (is_plugin_active('fn-activities/index.php')) {
				$allPosts = new WP_Query(
					array(
						'post_type'			=> 'activities', 
						'post_status'		=> 'publish', 
						'posts_per_page'	=> $limit,
						'order_by'			=> 'menu_order', 
						'order'				=> 'asc',
						'meta_query' 		=> array(
					        array(
					            'key' => 'country',
					            'value' => $country,
					            'compare' => '='
					        )
						)
					)
				);
				if ($allPosts->have_posts()):
					while($allPosts->have_posts()):$allPosts->the_post();
						echo '<div class="of-hid f-left one">';
							echo '<a href="'; the_permalink(); echo '">';
								echo '<div class="img" style="background-image: url('; the_post_thumbnail_url(); echo '"></div>';
								echo '<div class="desc transition">';
									echo '<table>';
										echo '<tr><td colspan="2"><h5 class="transition">'; the_title(); echo '</h5></td></tr>';
										echo '<tr><td><h6>Starts :</h6></td><td><h4>'; echo get_post_meta( get_the_ID(), 'price', true ); echo'</h4><p>per person</p></p></td></tr>';
									echo '</table>';
								echo '</div>';
							echo '</a>';
						echo '</div>';									
					endwhile;
					wp_reset_postdata();
				else :
				endif;
			}
		}

		function get_other_activities($country)
		{
			if (is_plugin_active('activity-destination/index.php')) {
				$allPosts = new WP_Query(
					array(
						'post_type'			=> 'activity-destination', 
						'post_status'		=> 'publish', 
						'posts_per_page'	=> -1,
						'order_by'			=> 'menu_order', 
						'order'				=> 'asc'
					)
				);
				if ($allPosts->have_posts()):
					while($allPosts->have_posts()):$allPosts->the_post();
						if(get_the_title() != $country) 
						{
							echo '<a href="'; echo get_site_url(); echo '/activity-destination/'; echo str_replace(' ', '-', strtolower(get_the_title())); echo '/">';
									echo '<h6>'; the_title(); echo '</h6>';
							echo '</a>';
						}
					endwhile;
					wp_reset_postdata();
				else :
				endif;
			}
		}

	// =======================================
	//			12. Get FAQ By Group
	// =======================================

		function get_faq_by_group($groupName, $limit='-1')
		{
			if (is_plugin_active('faq/index.php')) {
				$allPosts = new WP_Query(
					array(
						'post_type'			=> 'faq', 
						'post_status'		=> 'publish', 
						'posts_per_page'	=> $limit,
						'order_by'			=> 'menu_order', 
						'order'				=> 'asc',
						'meta_query' 		=> array(
					        array(
					            'key' => 'group',
					            'value' => $groupName,
					            'compare' => '='
					        )
						)
					)
				);
				if ($allPosts->have_posts()):
					$index = 1;
					while($allPosts->have_posts()):$allPosts->the_post();
						echo '<li>';
							echo '<h5><span>'; echo $index; echo '</span> '; the_title(); echo '</h5>';
								echo '<div class="answer">';
									the_content();
								echo '</div>';
						echo '</li>';
						$index++;
					endwhile;
					wp_reset_postdata();
				else :
				endif;
			}
		}

	// =======================================
	//			13. Get All Promotions
	// =======================================

		function get_all_promotions($limit='-1')
		{
			if (is_plugin_active('promotions/index.php')) {
				$allPosts = new WP_Query(
					array(
						'post_type'			=> 'promotions', 
						'post_status'		=> 'publish', 
						'posts_per_page'	=> $limit,
						'order_by'			=> 'menu_order', 
						'order'				=> 'desc'
					)
				);
				if ($allPosts->have_posts()):
					while($allPosts->have_posts()):$allPosts->the_post();
						echo '<div class="f-left one">';
							echo '<a href="'; the_permalink(); echo '">';
								echo '<div class="img">';
									echo '<img src="'; the_post_thumbnail_url(); echo '" alt=""/>';
								echo '</div>';
								echo '<div class="desc transition">';
									echo '<h5>'; the_title(); echo '</h5>';
									echo '<p>'; echo get_post_meta( get_the_ID(), 'promo_introduction', true ); echo '</p>';
									echo '<button class="transition">Read more</button>';									
								echo '</div>';
							echo '</a>';
						echo '</div>';
					endwhile;
					wp_reset_postdata();
				else :
				endif;
			}			
		}

		function get_latest_promotions($limit='-1')
		{
			if (is_plugin_active('promotions/index.php')) {
				$allPosts = new WP_Query(
					array(
						'post_type'			=> 'promotions', 
						'post_status'		=> 'publish', 
						'posts_per_page'	=> $limit,
						'order_by'			=> 'menu_order', 
						'order'				=> 'desc'
					)
				);
				if ($allPosts->have_posts()):
					while($allPosts->have_posts()):$allPosts->the_post();
						echo '<div class="one">';
							echo '<a href="'; the_permalink(); echo '">';
								echo '<div class="img">';
									echo '<img src="'; the_post_thumbnail_url(); echo '" alt=""/>';
								echo '</div>';
								echo '<div class="desc transition">';
									echo '<h6>'; the_title(); echo '</h6>';
									echo '<p class="transition read-more">Read more</p>';
								echo '</div>';
							echo '</a>';
						echo '</div>';
					endwhile;
					wp_reset_postdata();
				else :
				endif;
			}
		}

		function get_other_promotions($title, $limit='-1')
		{
			if (is_plugin_active('promotions/index.php')) {
				$allPosts = new WP_Query(
					array(
						'post_type'			=> 'promotions', 
						'post_status'		=> 'publish', 
						'posts_per_page'	=> $limit,
						'orderby' 			=> 'rand',
						'order'				=> 'asc'
					)
				);
				if ($allPosts->have_posts()):
					while($allPosts->have_posts()):$allPosts->the_post();
						if(get_the_title() != $title) {
							echo '<div class="one">';
								echo '<a href="'; the_permalink(); echo '">';
									echo '<div class="img">';
										echo '<img src="'; the_post_thumbnail_url(); echo '" alt=""/>';
									echo '</div>';
									echo '<div class="desc transition">';
										echo '<h6>'; the_title(); echo '</h6>';
										echo '<p class="transition read-more">Read more</p>';
									echo '</div>';
								echo '</a>';
							echo '</div>';
						}
					endwhile;
					wp_reset_postdata();
				else :
				endif;
			}
		}

	// =======================================
	//			N. XXX
	// =======================================







		




