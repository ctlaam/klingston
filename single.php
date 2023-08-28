<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package klingston
 */

get_header();
?>

<main id="primary" class="site-main">
	<div id="single-post">
		<div class="container">
			<div class="col text-center search-form flex-center mb-5">
				<?php echo get_search_form(); ?>
			</div>
			<div class="single-song">
				<div class="title d-flex align-items-center">
					<svg class="mr-2" width="20px" height="20px" viewBox="0 0 192 192" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#000000" stroke-width="9.6">
						<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
						<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
						<g id="SVGRepo_iconCarrier">
							<path fill="#000000" d="m102 22 2.523-5.444A6 6 0 0 0 96 22h6Zm49.868 63.65a6 6 0 1 0 8.264 8.7l-8.264-8.7ZM96 22v112h12V22H96Zm3.477 5.444c20.118 9.323 37.8 21.15 47.911 32.54 5.078 5.72 7.786 10.816 8.452 14.992.599 3.753-.349 7.232-3.972 10.674l8.264 8.7c6.377-6.058 8.804-13.454 7.559-21.264-1.178-7.386-5.532-14.54-11.329-21.07-11.639-13.11-30.957-25.783-51.839-35.46l-5.046 10.888ZM96 134c0 16.569-13.431 30-30 30v12c23.196 0 42-18.804 42-42H96Zm-30 30c-16.569 0-30-13.431-30-30H24c0 23.196 18.804 42 42 42v-12Zm-30-30c0-16.569 13.431-30 30-30V92c-23.196 0-42 18.804-42 42h12Zm30-30c16.569 0 30 13.431 30 30h12c0-23.196-18.804-42-42-42v12Z"></path>
						</g>
					</svg>Kostenlose Klingeltöne Herunterladen
				</div>
				<div class="row">
					<div class="main-song col-lg-8 col-12 ">
						<div class="home-section">
							<div class="header">
								<h2 class="title">
									<svg class="mr-2" width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
										<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
										<g id="SVGRepo_iconCarrier">
											<path d="M9 19C9 20.1046 7.65685 21 6 21C4.34315 21 3 20.1046 3 19C3 17.8954 4.34315 17 6 17C7.65685 17 9 17.8954 9 19ZM9 19V5L21 3V17M21 17C21 18.1046 19.6569 19 18 19C16.3431 19 15 18.1046 15 17C15 15.8954 16.3431 15 18 15C19.6569 15 21 15.8954 21 17ZM9 9L21 7" stroke="#ffffff" stroke-width="1.7759999999999998" stroke-linecap="round" stroke-linejoin="round"></path>
										</g>
									</svg> <a href="/neue-klingeltone" class="color">Herunterladen Klingelton <?php the_title(); ?> Kostenlose</a>
								</h2>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-body" style="overflow: hidden;padding:0">
								<div id="fullPlayer">
									<div class="player">
										<div class="hide-html5">
											<audio hidden id="audio" controls="controls" preload="none">
												<?php
												$file_mp3 = get_post_meta(get_the_ID(), 'file_mp3', true);
												?>
												<source src="<?php echo get_field('file_mp3'); ?>" type="audio/mpeg">
											</audio>
										</div>
										<div id="play" class="play control">
										</div>
										<div id="progress">
											<div id="progress_box">
												<div id="load_progress" style="width:0px;">
													<div class="hand-control" id="hand_progress" style="left:-7px;">
													</div>
													<div id="play_progress" style="width:0px;">
													</div>
												</div>
											</div>
										</div>
										<div id="play_time">
											<span id="current_time_display">00:00</span>
										</div>
									</div>
									<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5-player.0.1.min.js"></script>
									<script type="text/javascript">
										bodyLoaded();
										document.getElementById("audio").addEventListener("ended", function() {
											playAudio();
										}, false);
									</script>
								</div>
							</div>
							<div class="panel-footer">
								<div style="padding: 5px 0px" align="center"></div>
							</div>
						</div>
						<div class="song-lyrics">
							<div class="song-lyrics-content">
								<p style="margin-top: 10px;margin-bottom: 0">
									<b>Kategorien :</b> <?php
														$categories = get_the_category();
														foreach ($categories as $category) {
															echo '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';
														}
														?>
								</p>
								<div class="song-lyrics-height">
								</div>
								<div class="panel panel-default">
									<div class="panel-body" style="overflow: hidden;padding:0">
										<div style="cursor:pointer;" class="tags audio-tags btn-download btn-download-single" style="color: #fff;" rel="nofollow" download post-id="<?php echo get_the_ID(); ?>" data-file-url="<?php echo esc_url(get_field('file_mp3')); ?>">Download</div>
										&nbsp;&nbsp;<i class="fa fa-download"></i>
										<?php
										$download = get_post_meta(get_the_ID(), 'download', true);
										echo esc_html($download);
										?> Herunterladen - <i class="fa fa-eye"></i>
										<?php
										$view_count = get_post_meta(get_the_ID(), 'view', true);
										echo esc_html($view_count);
										?> Aussicht - <i class="fa fa-file-audio-o" aria-hidden="true"></i>
										<?php
										$id = get_post_meta(get_the_ID(), 'file_mp3', true);
										$file_size = filesize(get_attached_file($id));
										$formatted_size = size_format($file_size, 2);
										echo $formatted_size;
										?>
									</div>
								</div>
								<script>
									jQuery(document).ready(function($) {
										$(document).ready(function() {
											$('.btn-download').click(function() {
												// Lấy ID của bài viết
												var postID = <?php echo get_the_ID(); ?>;

												// Gửi yêu cầu AJAX để tăng giá trị của custom field "download"
												$.ajax({
													url: '<?php echo admin_url('admin-ajax.php'); ?>',
													type: 'post',
													data: {
														action: 'update_download',
														post_id: postID
													},
													success: function(response) {
														// Cập nhật hiển thị số lượt tải về sau khi tăng
														$('#downloadCount').text(response);
													}
												});
											});
										});
									});
								</script>
								<script>
									document.addEventListener('DOMContentLoaded', function() {
										var downloadButtons = document.querySelectorAll('.btn-download');

										downloadButtons.forEach(function(button) {
											button.addEventListener('click', function(event) {
												event.preventDefault();
												var fileUrl = this.getAttribute('data-file-url');
												var post_id = this.getAttribute('post-id');
												downloadFile(fileUrl);
											});
										});

										function downloadFile(fileUrl) {
											var link = document.createElement('a');
											link.href = fileUrl;
											link.setAttribute('download', '');
											document.body.appendChild(link);
											link.click();
											document.body.removeChild(link);
										}
									});
								</script>

								<div class="song-lyrics-more tags-ringtone"></div>
							</div>
						</div>
						<div class="home-section mt-5">
							<div class="header">
								<h2 class="title">
									<svg class="mr-2" width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
										<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
										<g id="SVGRepo_iconCarrier">
											<path d="M9 19C9 20.1046 7.65685 21 6 21C4.34315 21 3 20.1046 3 19C3 17.8954 4.34315 17 6 17C7.65685 17 9 17.8954 9 19ZM9 19V5L21 3V17M21 17C21 18.1046 19.6569 19 18 19C16.3431 19 15 18.1046 15 17C15 15.8954 16.3431 15 18 15C19.6569 15 21 15.8954 21 17ZM9 9L21 7" stroke="#ffffff" stroke-width="1.7759999999999998" stroke-linecap="round" stroke-linejoin="round"></path>
										</g>
									</svg> <a href="#" class="color"> Sie können auch mögen</a>
								</h2>
							</div>
						</div>
						<div class="row">
							<?php
							$cat_name = single_cat_title('', false); // Lấy tên của category hiện tại

							$current_post_id = get_the_ID(); // Lấy ID của bài viết hiện tại

							// Lấy danh sách ID của các category của bài viết hiện tại
							$categories = wp_get_post_categories($current_post_id, array('fields' => 'ids'));

							$args = array(
								'post_type' => 'post', // Lấy bài viết
								'posts_per_page' => 10, // Lấy 10 bài viết
								'category__in' => $categories, // Chỉ lấy bài viết có category giống bài viết hiện tại
								'post__not_in' => array($current_post_id), // Loại bỏ bài viết hiện tại
								'orderby' => 'rand', // Sắp xếp ngẫu nhiên
							);
							$query = new WP_Query($args);

							if ($query->have_posts()) :
								while ($query->have_posts()) : $query->the_post();
							?>
									<div class="mb-3 col-12 col-md-6">

										<div class="itemsong">
											<a class="d-flex align-items-center" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
												<div id="images_17334" class="images mr-2" alt="<?php the_title(); ?>">
													<img src="https://klingeltone.mobi/wp-content/themes/klingeltone/assets/img/Music.png" alt="Classic Phone" title="Classic Phone">
												</div>
												<div class="metas audio-metas">
													<h3 class="audio-titles"><?php the_title(); ?></h3>
													<span style="font-size: 11px;" class="artists"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo get_post_meta(get_the_ID(), 'view', true); ?></span>
												</div>
											</a>
										</div>
									</div>

							<?php
								endwhile;
								wp_reset_postdata(); // Đặt lại dữ liệu bài viết
							else :
								echo '<h3 class="ml-4 mt-4">Keine Beiträge.</h3>.';
							endif;
							?>
						</div>
					</div>

					<?php
					get_template_part('template-parts/content', 'tab');
					?>

					<?php
					get_template_part('template-parts/content', 'cate');
					?>


				</div>
			</div>
		</div>
	</div>

</main><!-- #main -->

<?php
get_footer();
