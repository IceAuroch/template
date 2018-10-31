<?php
$package = new WP_Query([
    'post_type' => 'package',
]);
if ($package->have_posts()):
    ?>

    <section id="format">
        <div class="container">
            <div class="row mb-5">
                <div class="col-sm-4 mx-auto">
                    <h2 class="section-title text-center">
                        Формат участия
                    </h2>
                </div>
            </div>

            <div class="row justify-content-center align-items-start">
                <?php while ($package->have_posts()) : $package->the_post(); ?>
                    <div class="col-sm-5 col-lg-4">
                        <div class="format-card">
                            <div class="format-card-header">
                                <h3 class="format-card-header__title text-center">
                                    <?php the_title(); ?>
                                </h3>
                            </div>

                            <div class="format-card-body">
                                <p class="format-card-body__description">
                                    <?php echo get_the_content(); ?>
                                </p>

                                <div class="format-card-body-price d-flex justify-content-center align-items-center">
                                    <div class="format-card-body-price__name mr-2">
                                        Цена
                                    </div>

                                    <div class="format-card-body-price__value">
                                        <?php echo get_field('coast'); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="format-card-footer">
                                <a href="#" class="btn btn-outline-primary format-card-footer__btn"
                                   data-package="<?= get_the_title() ?>"
                                   data-idModal='format-x'>ВЫБРАТЬ</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="decor-circle decor-circle--big"></div>
        <div class="decor-circle decor-circle--middle"></div>
        <div class="decor-circle decor-circle--little"></div>
        <div id="format-x" class="format-modal">
            <div class="close-modal">
                <div class="line line--left"></div>
                <div class="line line--right"></div>
            </div>

            <div class="format-modal-header">
                <h3 class="format-modal-header__title">
                    Курс ""
                </h3>
            </div>

            <div class="format-modal-body">
                <?php echo do_shortcode('[contact-form-7 id="77" title="Запись на семинар с пакетом"]'); ?>
            </div>
        </div>

        <div class="modal-mask"></div>
    </section>

<?php endif;
wp_reset_postdata();