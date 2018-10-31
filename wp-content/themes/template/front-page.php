<?php
get_header();

$sections = ['header-banner' , 'seminar' ,'for-who' , 'singup' , 'about' , 'programm' , 'secondary' , 'format' , 'reviews'];

foreach ($sections as $section)
{
    get_template_part('template-parts/' . $section);
}


get_footer();