<section id="header-banner">
    <div class="container h-100 d-flex justifu-content-center align-items-center">
        <div class="row align-items-center h-100">
            <div class="col-lg-5 h-100">
                <div class="header-banner-speaker-img" style="background-image:
                        url(<?php echo get_theme_file_uri('images/content/header-banner/speaker-item.png'); ?>);"></div>
            </div>
            <div class="col-lg-6 ml-auto mr-0">
                <div class="header-banner-item">
                    <div class="header-banner-item-info text-primary d-flex mb-3">
                        <div class="header-banner-item-info-item header-banner-item-info-item--data mr-2">
                            <?php echo get_field('seminar_date', 15); ?>
                        </div>
                        <div class="header-banner-item-info-item">/</div>
                        <div class="header-banner-item-info-item header-banner-item-info-item--time ml-2">
                            <?php echo get_field('seminar_time', 15); ?>
                        </div>
                    </div>
                    <div class="header-banner-item-place text-secondary mb-3">
                        <?php echo get_field('seminar_place', 15); ?>
                    </div>
                    <h1 class="header-banner-item__title text-white mb-3">
                        <?php echo get_field('seminar_title', 15); ?>
                    </h1>
                    <p class="header-banner-item__descr position-relative text-white mb-3">
                        <?php echo get_field('seminar_desc', 15); ?>
                    </p>
                    <a href="#singup" class="btn btn-primary scroll-link">
                        Забронировать место
                    </a>
                </div>
            </div>
            <div class="col-sm-1 ml-auto mr-0">
                <ul class="social-list list-unstyled d-flex justify-content-end">
                    <li class="social-list-item social-list-item--facebook mr-3">
                        <a href="<?php echo get_field('facebook', 8); ?>">
                            <svg width="20" height="20">
                                <use xlink:href="#facebook-icon"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="social-list-item social-list-item--instagram mr-3">
                        <a href="<?php echo get_field('instagram', 8); ?>">
                            <svg width="20" height="20">
                                <use xlink:href="#instagram-icon"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="social-list-item social-list-item--youtube">
                        <a href="<?php echo get_field('youtube', 8); ?>">
                            <svg width="20" height="20">
                                <use xlink:href="#youtube-icon"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="scrolldown d-none d-lg-flex">
        <span class="scrolldown__text text-uppercase">скролл вниз</span>
        <div class="scrolldown__line"></div>
    </div>
    <div class="decor-block"></div>
</section>