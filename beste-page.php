<?php
/*
Template Name: beste page
*/
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div id="page-custom">
            <div class="container">
                <div class="col text-center search-form flex-center mb-5">
                    <?php echo get_search_form(); ?>
                </div>
                <div class="single-page">
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
                                        </svg> <a href="/beste" class="color">Beste Klingeltöne</a>
                                    </h2>
                                </div>
                            </div>
                            <div class="row">
                                <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
                                <?php
                                $args = array(
                                    'post_type' => 'post', // Lấy bài viết
                                    'posts_per_page' => 2, // Số bài viết hiển thị (2 bài viết)
                                    'author_name' => 'admin1', // Tên tác giả là "admin1"
                                    'orderby' => 'date', // Sắp xếp theo thời gian ra mắt
                                    'order' => 'DESC', // Sắp xếp giảm dần (mới nhất lên đầu)
                                    'paged' => $paged, // Trang hiện tại

                                );

                                $query = new WP_Query($args);
                                if ($query->have_posts()) :
                                    while ($query->have_posts()) : $query->the_post();
                                ?>
                                        <div class="itemsong col-12 col-md-6">
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
                                <?php
                                    endwhile;
                                    wp_reset_postdata(); // Đặt lại dữ liệu bài viết
                                else :
                                    echo '<h3 class="ml-4 mt-4">Keine Beiträge.</h3>.';
                                endif;

                                ?>
                                <div class="col-12">
                                    <?php     // Hiển thị phân trang
                                    $args = array(
                                        'post_type' => 'post', // Lấy bài viết
                                        'posts_per_page' => 2, // Số bài viết hiển thị (2 bài viết)
                                        'author_name' => 'admin1', // Tên tác giả là "admin1"
                                        'orderby' => 'date', // Sắp xếp theo thời gian ra mắt
                                        'order' => 'DESC', // Sắp xếp giảm dần (mới nhất lên đầu)
                                        'paged' => $paged, // Trang hiện tại

                                    );

                                    $query = new WP_Query($args);
                                    $total_pages = ceil($query->found_posts / $args['posts_per_page']);
                                    global $wp_query;

                                    $big = 999999999; // Need an unlikely integer

                                    $paginate_links = paginate_links(array(
                                        'base'    => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                                        'format'  => '?paged=%#%',
                                        'current' => max(1, get_query_var('paged')),
                                        'total'   => $total_pages,
                                        'prev_text' => ('&laquo; Previous'),
                                        'next_text' => ('Next &raquo;'),
                                    ));

                                    if ($paginate_links) {
                                        echo '<div class="pagination">' . $paginate_links . '</div>';
                                    } ?>
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
    </main>
</div>

<?php get_footer(); ?>