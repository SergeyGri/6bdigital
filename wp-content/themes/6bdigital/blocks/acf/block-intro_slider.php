<?php if(have_rows('slider') ): ?>
    <section class="intro-section intro-slider">
        <?php while(have_rows('slider')) : the_row(); ?>
            <div class="slide">
                <div class="flex-container">
                    <div class="text-holder">
                        <?php if($subtitle = get_sub_field('subtitle')): 
                            echo '<strong class="subtitle">' . $subtitle . '</strong>';
                        endif;
                        if($title = get_sub_field('title')): 
                            echo '<h1>' . $title . '</h1>';
                        endif;
                        if($text = get_sub_field('text')): 
                            echo $text;
                        endif; ?>
                    </div>
                    <div class="img-holder">
                        <?php if($img = get_sub_field('image')):
                            echo '<img src="' . $img['url'] . '" alt="' . $img['alt'] . '">';
                        endif; ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </section>
<?php endif; ?>