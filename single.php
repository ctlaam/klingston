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
									</svg> <a href="/neue-klingeltone" class="color">Neue Klingeltöne</a>
								</h2>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-body" style="overflow: hidden;padding:0">
								<div id="fullPlayer">
									<div class="player">
										<div class="hide-html5">
											<audio hidden id="audio" controls="controls" preload="none">
												<source src="https://cdn.klingeltone.mobi/uploads/f60000/1-nokia-sms-remix.mp3" type="audio/mpeg">
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
									<b>Kategorien :</b> <a href="https://klingeltone.mobi/klingeltone-sms" title="SMS">SMS</a>
								</p>
								<div class="song-lyrics-height">
								</div>
								<div class="panel panel-default">
									<div class="panel-body" style="overflow: hidden;padding:0">
										<a class="tags audio-tags btn-download btn-download-single" style="color: #fff;" rel="nofollow" download href="https://cdn.klingeltone.mobi/uploads/f60000/1-nokia-sms-remix.mp3">Download</a>
										&nbsp;&nbsp;<i class="fa fa-download"></i> 1 Herunterladen - <i class="fa fa-eye"></i> 623 Aussicht - <i class="fa fa-file-audio-o" aria-hidden="true"></i> 433.37 Kb
									</div>
								</div>
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
							<div class="mb-3 col-12 col-md-6">

								<div class="itemsong ">
									<!-- Player -->
									<a class="d-flex align-items-center" href="https://klingeltone.mobi/klingeltone/classic-phone.html" title="Classic Phone">
										<div id="images_17334" class="images mr-2" alt="Classic Phone">
											<img src="https://klingeltone.mobi/wp-content/themes/klingeltone/assets/img/Music.png" alt="Classic Phone" title="Classic Phone">
										</div>
										<div class="metas audio-metas">
											<h3 class="audio-titles">Classic Phone</h3>
											<span class="artists"><i class="fa fa-eye" aria-hidden="true"></i> 256</span>
										</div>
									</a>
								</div>
							</div>
							<div class="mb-3 col-12 col-md-6">
								<div class="itemsong ">
									<!-- Player -->
									<a class="d-flex align-items-center" href="https://klingeltone.mobi/klingeltone/classic-phone.html" title="Classic Phone">
										<div id="images_17334" class="images mr-2" alt="Classic Phone">
											<img src="https://klingeltone.mobi/wp-content/themes/klingeltone/assets/img/Music.png" alt="Classic Phone" title="Classic Phone">
										</div>
										<div class="metas audio-metas">
											<h3 class="audio-titles">Classic Phone</h3>
											<span class="artists"><i class="fa fa-eye" aria-hidden="true"></i> 256</span>
										</div>
									</a>
								</div>
							</div>
							<div class="mb-3 col-12 col-md-6">

								<div class="itemsong ">
									<!-- Player -->
									<a class="d-flex align-items-center" href="https://klingeltone.mobi/klingeltone/classic-phone.html" title="Classic Phone">
										<div id="images_17334" class="images mr-2" alt="Classic Phone">
											<img src="https://klingeltone.mobi/wp-content/themes/klingeltone/assets/img/Music.png" alt="Classic Phone" title="Classic Phone">
										</div>
										<div class="metas audio-metas">
											<h3 class="audio-titles">Classic Phone</h3>
											<span class="artists"><i class="fa fa-eye" aria-hidden="true"></i> 256</span>
										</div>
									</a>
								</div>
							</div>
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
