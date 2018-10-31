<?php
$about = new WP_Query([
    'page_id' => 39
]);
if ($about->have_posts()): $about->the_post(); ?>
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-lg-6 p-0">
                    <div class="about-item">
                        <h2 class="about-item-name">
                            <?php the_title(); ?>
                        </h2>
                        <div class="about-item-position mt-3 mb-5">
                            Автор и ведущий семинара
                        </div>
                        <?php if (have_rows('descriptions', 39)):
                            while (have_rows('descriptions', 39)): the_row(); ?>
                                <p class="about-item-descrption mb-4">
                                    <?php echo get_sub_field('description'); ?>
                                </p>
                            <?php endwhile; endif; ?>
                        <a href="#wpcf7-f59-o2" class="btn btn-primary scroll-link">Записаться</a>
                    </div>
                </div>
                <div class="col-sm-5 col-lg-6">
                    <div class="about-picture">
                        <div class="about-picture-bg"></div>
                        <div class="about-picture-img" style="background-image:
                                url(<?php echo get_the_post_thumbnail_url($post->id, 'large'); ?>);"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="big-circle-decor"></div>
        <div class="small-circle-decor"></div>
    </section>

<?php
endif;
wp_reset_postdata();