</main>

<footer id="app-footer">
    <div class="footer-singup-content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title text-white">
                        <span class="text-primary">ЗАПИШИТЕСЬ</span>
                        НА СЕМИНАР СЕГОДНЯ
                    </h2>

                    <?php echo do_shortcode('[contact-form-7 id="59" title="Запись на семинар"]'); ?>

                </div>
            </div>
        </div>
    </div>
    <div class="footer-item-content">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-1 d-flex justify-content-center justify-content-lg-start mb-4 mb-lg-0">
                    <a href="<?php echo site_url(); ?>" class="logo d-inline-block">
                        <img src="<?php echo get_theme_file_uri('images/icon/logo/logo.png'); ?>" alt="logo">
                    </a>
                </div>
                <div class="col-lg-9">
                    <nav class="footer-menu justify-content-center align-items-center">
                        <ul class="footer-menu-list list-unstyled d-flex flex-column flex-lg-row justify-content-between align-items-center m-0">
                            <li class="footer-menu-list-item">
                                <a href="#seminar" class="footer-menu-list-item__link scroll-link">
                                    О семинаре
                                </a>
                            </li>
                            <li class="footer-menu-list-item">
                                <a href="#for-who" class="footer-menu-list-item__link scroll-link">
                                    Для кого семинар
                                </a>
                            </li>
                            <li class="footer-menu-list-item">
                                <a href="#about" class="footer-menu-list-item__link scroll-link">
                                    Автор и ведущий
                                </a>
                            </li>
                            <li class="footer-menu-list-item">
                                <a href="#programm" class="footer-menu-list-item__link scroll-link">
                                    Программа
                                </a>
                            </li>
                            <li class="footer-menu-list-item">
                                <a href="#format" class="footer-menu-list-item__link scroll-link">
                                    Форматы участия
                                </a>
                            </li>
                            <li class="footer-menu-list-item">
                                <a href="#reviews" class="footer-menu-list-item__link scroll-link">
                                    Отзывы
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="burger-footer-menu d-lg-none d-flex flex-column justify-content-center align-items-center">
                    <div class="line line--top"></div>
                    <div class="line line--middle"></div>
                    <div class="line line--bottom"></div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>