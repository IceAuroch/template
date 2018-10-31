<section id="programm">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title mb-5">
                    ПРОГРАММА ТРЕНИНГА
                </h2>
            </div>
            <div class="col-sm-8">
                <div class="programm-item">
                    <div class="programm-tabs-content">

                        <?php if (have_rows('program_step', 29)):
                            while (have_rows('program_step', 29)): the_row(); ?>

                            <div class="programm-tabs-content-item" data-index="0">
                                <div class="programm-tabs-content-item-title">
                                    <div class="programm-tabs-content-item-title__decor"></div>
                                    <div class="programm-tabs-content-item-title__text">
                                        <?php echo get_sub_field('step_name'); ?>
                                    </div>
                                </div>
                                <div class="programm-tabs-content-item-description">
                                    <?php echo get_sub_field('step_desc'); ?>
                                </div>
                                <div class="programm-tabs-content-item-body">
                                    <?php echo get_sub_field('step_content'); ?>
                                </div>
                            </div>

                        <?php endwhile; endif; ?>

                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="programm-tabs-prev">

                    <?php if (have_rows('program_step', 29)):
                       while (have_rows('program_step', 29)): the_row(); ?>

                    <div class="programm-tabs-prev-item">
                        <div class="programm-tabs-prev-item-title">
                           <?php echo get_sub_field('step_image_desc'); ?>
                        </div>

                        <div class="programm-tabs-prev-item-img" style="background-image:
                             url(<?php echo get_sub_field('step_image')['url']; ?>);"></div>
                    </div>

                    <?php endwhile; endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>