<?php
$feedback = new WP_Query([
    'post_type' => 'feedback',
]);
if ($feedback->have_posts()):
    ?>

    <section id="reviews">
        <div class="container-fluid p-0">
            <div class="col-sm-6 mx-auto">
                <h2 class="section-title text-center">
                    Отзывы
                </h2>
            </div>

            <div class="col-12 p-0">
                <div class="reviews-slider">
                    <?php while ($feedback->have_posts()) : $feedback->the_post(); ?>
                        <div class="reviews-slider-item">
                            <div class="reviews-slider-item-img"
                                 style="background-image:
                                 url(<?php echo get_the_post_thumbnail_url($post->id, 'medium'); ?>);">
                            </div>

                            <div class="reviews-slider-item-content">
                                <p class="reviews-slider-item-content__descr">
                                    <?php echo get_the_content(); ?>
                                </p>

                                <div class="reviews-slider-item-content-info">
                                    <div class="reviews-slider-item-content-info__data">
                                        <?php echo get_field('feedback_date'); ?>
                                    </div>

                                    <div class="reviews-slider-item-content-info__name">
                                        <?php the_title(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>

<?php endif;
wp_reset_postdata();