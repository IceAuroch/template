<section id="for-who">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title text-center mb-5">
                    <span class="text-primary">ДЛЯ КОГО</span>
                    ЭТОТ СЕМИНАР?
                </h2>
            </div>
        </div>

        <?php if (have_rows('for_who', 61)): ?>
            <div class="row justify-content-around align-items-center">
                <?php while (have_rows('for_who', 61)): the_row(); ?>
                    <div class="col-sm-3 col-lg-2 p-0">
                        <div class="for-who-item">
                            <div  class="reviews-slider-item-img" style="background-image:
                                    url(<?php echo get_sub_field('for_who_image'); ?>)">
                            </div>

                            <div class="for-who-item__descr">
                                <?php echo get_sub_field('for_who_desc'); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>