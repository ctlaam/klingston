<div class="col-lg-4 col-12 ">
    <div class="home-section" style="margin-bottom:20px">
        <div class="header" style="    margin-top: 5px;
    margin-bottom: 5px;">
            <h3 class="title m-0 ">
                <a href="#" id="video-more">
                    <span class="color"><i class="fa fa-music" aria-hidden="true"></i> alle Genres
                    </span>
                </a>
            </h3>
        </div>
    </div>
    <ul class="nav nav-tabs m-0" id="myTab" role="tablist">
        <li style="width:33.33%;text-align:center" class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><?php $current_week = date_i18n('W');
                                                                                                                                            echo 'Woche' . $current_week; ?></a>
        </li>
        <li style="width:33.33%;text-align:center" class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><?php $current_month = date_i18n('m');
                                                                                                                                            echo 'Monat ' . $current_month; ?></a>
        </li>
        <li style="width:33.33%;text-align:center" class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><?php $current_month = date_i18n('Y');
                                                                                                                                            echo 'Jahr ' . $current_month; ?></a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <ul class="nav widget-song-list">
                <?php
                $today = getdate();
                $year = $today['year'];
                $week = $today['week'];

                $args = array(
                    'post_type' => 'post', // Lấy bài viết
                    'posts_per_page' => 10, // Số bài viết hiển thị
                    'meta_key' => 'view', // Sắp xếp theo trường custom field "view"
                    'orderby' => 'meta_value_num', // Sắp xếp dựa trên giá trị số
                    'order' => 'DESC', // Sắp xếp giảm dần (lớn đến nhỏ)
                    'date_query' => array(
                        array(
                            'year' => $year, // Năm hiện tại
                            'week' => $week, // Tuần hiện tại
                        ),
                    ),
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    $rank = 1; // Biến để theo dõi thứ tự

                    while ($query->have_posts()) : $query->the_post();
                ?>
                        <li class="media one w-100">
                            <div class="media-left mr-2">
                                <span class="ratings">
                                    <span class="num order-<?php echo $rank; ?>"><?php echo $rank; ?></span>
                                </span>
                            </div>
                            <div class="media-body">
                                <h4 class="global-name"><a class="link-song-name" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
                                <p class="global-author"><i class="fa fa-download"></i> <?php echo get_post_meta(get_the_ID(), 'download', true); ?> &nbsp;&nbsp; <i class="fa fa-eye"></i> <?php echo get_post_meta(get_the_ID(), 'view', true); ?></p>
                            </div>
                        </li>
                <?php
                        $rank++; // Tăng thứ tự sau mỗi bài viết
                    endwhile;

                    wp_reset_postdata(); // Đặt lại dữ liệu bài viết
                else :
                    echo '<h3 class="ml-4 mt-4">Keine Beiträge.</h3>';
                endif;
                ?>
            </ul>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <ul class="nav widget-song-list">
                <?php
                $today = getdate();
                $year = $today['year'];
                $month = $today['mon'];

                $args = array(
                    'post_type' => 'post', // Lấy bài viết
                    'posts_per_page' => 10, // Số bài viết hiển thị
                    'meta_key' => 'view', // Sắp xếp theo trường custom field "view"
                    'orderby' => 'meta_value_num', // Sắp xếp dựa trên giá trị số
                    'order' => 'DESC', // Sắp xếp giảm dần (lớn đến nhỏ)
                    'date_query' => array(
                        array(
                            'year' => $year, // Năm hiện tại
                            'month' => $month, // Tuần hiện tại
                        ),
                    ),
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    $rank = 1; // Biến để theo dõi thứ tự

                    while ($query->have_posts()) : $query->the_post();
                ?>
                        <li class="media one w-100">
                            <div class="media-left mr-2">
                                <span class="ratings">
                                    <span class="num order-<?php echo $rank; ?>"><?php echo $rank; ?></span>
                                </span>
                            </div>
                            <div class="media-body">
                                <h4 class="global-name"><a class="link-song-name" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
                                <p class="global-author"><i class="fa fa-download"></i> <?php echo get_post_meta(get_the_ID(), 'download', true); ?> &nbsp;&nbsp; <i class="fa fa-eye"></i> <?php echo get_post_meta(get_the_ID(), 'view', true); ?></p>
                            </div>
                        </li>
                <?php
                        $rank++; // Tăng thứ tự sau mỗi bài viết
                    endwhile;

                    wp_reset_postdata(); // Đặt lại dữ liệu bài viết
                else :
                    echo '<h3 class="ml-4 mt-4">Keine Beiträge.</h3>';
                endif;
                ?>
            </ul>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <ul class="nav widget-song-list">
                <?php
                $today = getdate();
                $year = $today['year'];

                $args = array(
                    'post_type' => 'post', // Lấy bài viết
                    'posts_per_page' => 10, // Số bài viết hiển thị
                    'meta_key' => 'view', // Sắp xếp theo trường custom field "view"
                    'orderby' => 'meta_value_num', // Sắp xếp dựa trên giá trị số
                    'order' => 'DESC', // Sắp xếp giảm dần (lớn đến nhỏ)
                    'date_query' => array(
                        array(
                            'year' => $year, // Năm hiện tại
                        ),
                    ),
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    $rank = 1; // Biến để theo dõi thứ tự

                    while ($query->have_posts()) : $query->the_post();
                ?>
                        <li class="media one w-100">
                            <div class="media-left mr-2">
                                <span class="ratings">
                                    <span class="num order-<?php echo $rank; ?>"><?php echo $rank; ?></span>
                                </span>
                            </div>
                            <div class="media-body">
                                <h4 class="global-name"><a class="link-song-name" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
                                <p class="global-author"><i class="fa fa-download"></i> <?php echo get_post_meta(get_the_ID(), 'download', true); ?> &nbsp;&nbsp; <i class="fa fa-eye"></i> <?php echo get_post_meta(get_the_ID(), 'view', true); ?></p>
                            </div>
                        </li>
                <?php
                        $rank++; // Tăng thứ tự sau mỗi bài viết
                    endwhile;

                    wp_reset_postdata(); // Đặt lại dữ liệu bài viết
                else :
                    echo '<h3 class="ml-4 mt-4">Keine Beiträge.</h3> ';
                endif;
                ?>
            </ul>
        </div>
    </div>
</div>