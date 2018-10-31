<?php
$about = new WP_Query([
    'page_id' => 15
]);
if ($about->have_posts()): $about->the_post(); ?>

    <section id="seminar">
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="seminar-item">
                        <h2 class="section-title mb-4">
                            <?php the_title(); ?>
                        </h2>
                        <?php if (have_rows('seminar_descriptions', 15)): ?>
                            <ul class="seminar-item-list list-unstyled">
                                <?php while (have_rows('seminar_descriptions', 15)): the_row(); ?>
                                    <li class="seminar-item-list-item">
                                        <?php echo get_sub_field('seminar_description'); ?>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="seminar-img" style="background-image:
                            url(<?php echo get_the_post_thumbnail_url($post->id, 'large'); ?>);"></div>
                </div>
            </div>
        </div>
    </section>

<?php
endif;
wp_reset_postdata();