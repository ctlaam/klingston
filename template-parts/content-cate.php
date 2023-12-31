    <div class="header w-100">
        <div class="col-12">
            <div class="home-section">
                <div class="header">
                    <h3 class="title">
                        <a href="#" id="video-more">
                            <span class="color"><i class="fa fa-music" aria-hidden="true"></i> alle Genres
                            </span>
                        </a>
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <ul class="list-group category-list col-12">
        <div class="row pl-5 pr-5">
            <?php
            $categories = get_categories();

            foreach ($categories as $category) {
            ?>
                <li class="list-group-item col-md-3 col-sm-4 col-6 icon-list">
                    <h3><a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" title="<?php echo esc_attr($category->name); ?>">
                            <i class="fa-regular fa-bell"></i> <?php echo esc_html($category->name); ?>
                        </a></h3>
                </li>
            <?php
            }
            ?>
        </div>
    </ul>